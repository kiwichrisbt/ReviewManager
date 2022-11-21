<?php
namespace ReviewManager;

class comment_ops
{
    public static function load($comment_id)
    {
        $db = cmsms()->GetDb();

        $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_COMMENTS.' WHERE id = ?';
        $row = $db->GetRow($query,array((int)$comment_id));

        if( is_array($row) ) {
            $obj = new cgfb_comment;
            $obj->from_array($row);

            $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
            $tmp = $db->GetArray($query,array((int)$comment_id));

            if( is_array($tmp) ) $obj->load_fields_from_array($tmp);

            return $obj;
        }
    }

    public static function get_fielddefs()
    {
        if( \cge_tmpdata::exists('cgfb_fielddefs') ) return \cge_tmpdata::get('cgfb_fielddefs');

        $db = cmsms()->GetDb();
        $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDDEFS.' ORDER BY iorder';
        $tmp = $db->GetArray($query);
        if( is_array($tmp) ) {
            for( $i = 0; $i < count($tmp); $i++ ) {
                $tmp[$i]['attribs'] = unserialize($tmp[$i]['attribs']);
                if( isset($tmp[$i]['attribs']['options']) ) {
                    $tmp[$i]['attribs']['options'] = self::text_to_options($tmp[$i]['attribs']['options']);
                }
            }
            $tmp = \cge_array::to_hash($tmp,'id');
            \cge_tmpdata::set('cgfb_fielddefs',$tmp);
            return $tmp;
        }
    }

    public static function get_fielddef($id)
    {
        $data = self::get_fielddefs();
        if( isset($data[$id]) && is_array($data[$id]) ) return $data[$id];
    }

    public static function get_fielddef_type($id)
    {
        $data = self::get_fielddef($id);
        if( is_array($data) ) return $data['type'];
    }

    public static function delete_by_id($comment_id)
    {
        $db = cmsms()->GetDb();
        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
        $dbr = $db->Execute($query,array((int)$comment_id));

        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_COMMENTS.' WHERE id = ?';
        $dbr = $db->Execute($query,array((int)$comment_id));

        return TRUE;
    }

    public static function insert(cgfb_comment& $obj)
    {
        if( !is_null($obj->id) ) throw new Exception('Attempt to insert a comment that has an id');

        $db = cmsms()->GetDb();
        $now = $db->DbTimeStamp(time());
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_COMMENTS."
              (key1,key2,key3,rating,title,data,status,author_name,author_email,author_ip,author_notify,admin_notes,notified,origurl,created,modified)
              VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,$now,$now)";
        $dbr = $db->Execute($query,array($obj->key1,$obj->key2,$obj->key3,$obj->rating,$obj->title,$obj->data,$obj->status,
                                         $obj->author_name,$obj->author_email,$obj->author_ip,$obj->author_notify,$obj->admin_notes,
                                         $obj->notified,$obj->origurl));
        if( $db->ErrorMsg() != '' ) {
            throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
            return FALSE;
        }
        $obj->id = $db->Insert_ID();
        $obj->created = $now;
        $obj->modified = $now;

        // insert fields.
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_FIELDVALS."
              (comment_id,field_id,value) VALUES (?,?,?)";
        $flds = $obj->get_fields();
        if( is_array($flds) ) {
            foreach( $flds as $fid ) {
                $dbr = $db->Execute($query,array($obj->id,$fid,$obj->get_field_by_id($fid)));
                if( !$dbr ) {
                    // undo the stuff we just did
                    self::delete_by_id($obj->id);
                    $obj->id = null;
                    $obj->creeated = null;
                    $obj->modifed = null;

                    // throw an exception.
                    throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
                    return FALSE;
                }
            }
        }
        return TRUE;
    }

    public static function update(cgfb_comment& $obj)
    {
        if( is_null($obj->id) ) throw new Exception('Attempt to update a comment that has no id');

        $db = cmsms()->GetDb();
        $now = $db->DbTimeStamp(time());
        $query = 'UPDATE '.REVIEWMANAGER_TABLE_COMMENTS." set key1 = ?, key2 = ?, key3 = ?, rating = ?, title = ?, data = ?,
               status = ?, author_name = ?, author_email = ?, author_ip = ?, author_notify = ?, admin_notes = ?,
               notified = ?, origurl = ?, modified = $now WHERE id = ?";
        $dbr = $db->Execute($query,
                            array($obj->key1,$obj->key2,$obj->key3,$obj->rating,$obj->title,$obj->data,
                                  $obj->status,$obj->author_name,$obj->author_email,$obj->author_ip,$obj->author_notify,
                                  $obj->admin_notes,$obj->notified,$obj->origurl,$obj->id));
        if( !$dbr ) {
            throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
            return FALSE;
        }
        $obj->modifed = $now;

        // DELETE ANY FIELDS FOR THIS RECORD
        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
        $dbr = $db->Execute($query,array($obj->id));

        // INSERT NEW FIELDS FOR THIS RECORD
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_FIELDVALS."
              (comment_id,field_id,value) VALUES (?,?,?)";
        $flds = $obj->get_fields();
        if( is_array($flds) ) {
            foreach( $flds as $fid ) {
                $dbr = $db->Execute($query,array($obj->id,$fid,$obj->get_field_by_id($fid)));
                if( !$dbr ) {
                    // undo the stuff we just did
                    self::delete_by_id($this->id);

                    // throw an exception.
                    throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
                    return FALSE;
                }
            }
        }

        return TRUE;
    }

    public static function get_fielddef_id_by_name($name)
    {
        $data = self::get_fielddefs();
        if( !$data ) return;
        foreach( $data as $id => $rec ) {
            if( $rec['name'] == $name ) return $id;
        }
    }

    private static function _testip($range,$ip)
    {
        $result = 1;

        # IP Pattern Matcher
        # J.Adams <jna@retina.net>
        #
        # Matches:
        #
        # xxx.xxx.xxx.xxx        (exact)
        # xxx.xxx.xxx.[yyy-zzz]  (range)
        # xxx.xxx.xxx.xxx/nn    (nn = # bits, cisco style -- i.e. /24 = class C)
        #
        # Does not match:
        # xxx.xxx.xxx.xx[yyy-zzz]  (range, partial octets not supported)

        if (ereg("([0-9]+)\.([0-9]+)\.([0-9]+)\.([0-9]+)/([0-9]+)",$range,$regs)) {

            # perform a mask match
            $ipl = ip2long($ip);
            $rangel = ip2long($regs[1] . "." . $regs[2] . "." . $regs[3] . "." . $regs[4]);

            $maskl = 0;

            for ($i = 0; $i< 31; $i++) {
                if ($i < $regs[5]-1) $maskl = $maskl + pow(2,(30-$i));
            }

            if (($maskl & $rangel) == ($maskl & $ipl)) return 1;
            return 0;
        } else {

            # range based
            $maskocts = split("\.",$range);
            $ipocts = split("\.",$ip);

            # perform a range match
            for ($i=0; $i<4; $i++) {
                if (ereg("\[([0-9]+)\-([0-9]+)\]",$maskocts[$i],$regs)) {
                    if ( ($ipocts[$i] > $regs[2]) || ($ipocts[$i] < $regs[1])) $result = 0;
                }
                else {
                    if ($maskocts[$i] <> $ipocts[$i]) $result = 0;
                }
            }
        }
        return $result;
    }

    public static function text_needs_moderation($text)
    {
        $mod = \cms_utils::get_module('ReviewManager');
        $t1 = $mod->GetPreference('moderate_comments');
        if( $t1 == 'none' ) return FALSE;
        if( $t1 != 'automatic' ) return TRUE;

        $tmp = $mod->GetPreference('moderation_patterns');
        if( !$tmp ) return FALSE; // no patterns, = auto pass.
        $rules = explode("\n",$tmp);
        if( !is_array($rules) || count($rules) == 0 ) return FALSE; // no patterns = auto pass.

        for( $i = 0; $i < count($rules); $i++ ) {
            $rules[$i] = trim($rules[$i]);
            if( $rules[$i] == '' ) continue;

            if( $rules[$i] == '__EMAIL__' ) {
                // check if text contains an email
                $pattern = '/([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])' .
                    '(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)/i';
                if( preg_match($pattern,$text) ) return TRUE;
            }
            else if( $rules[$i] == '__IP_ADDRESS__' ) {
                // check if text contains an ip address
                $pattern = '/((1?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(1?\d{1,2}|2[0-4]\d|25[0-5]){1}/';
                if( preg_match($pattern,$text) ) return TRUE;
            }
            else if( $rules[$i] == '__URL__' ) {
                // check if text contains a URL
                $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
                //$pattern  = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';
                if( preg_match($pattern,$text) ) return TRUE;
            }
            else if( startswith('PATTERN:',$rules[$i]) ) {
                // check if text matches a pattern
                $pattern = substr($rules[$i],strlen('PATTERN:'));
                $pattern = trim($pattern);
                if( $pattern ) {
                    $pattern = '|'.$pattern.'|';
                    if( preg_match($pattern,$text) ) return TRUE;
                }
            }
            else {
                // check for individual words/phrases
                $pattern = '|'.$rules[$i].'|i';
                if( preg_match($pattern,$text) ) return TRUE;
            }
        }

        $tmp = $mod->GetPreference('moderation_iplist');
        $tmp = trim($tmp);
        if( !$tmp ) return FALSE;
        $iprules = explode("\n",$tmp);
        if( !is_array($iprules) || count($iprules) == 0 ) return FALSE;

        $ipaddr = cge_utils::get_real_ip();
        if( !$ipaddr ) return FALSE;  // no ip address?
        for( $i = 0; $i < count($iprules); $i++ ) {
            $rule = trim($iprules[$i]);
            if( empty($rule) ) continue;

            if( self::_testip($rule,$ipaddr) ) return TRUE;
        }

        // everything passes
        return FALSE;
    }

    public static function text_to_options($text)
    {
        $text = trim($text);
        if( !$text ) return;

        $out = [];
        $tmp = explode (",", $text);
        foreach( $tmp as $value ) {
            $out[$value] = $value;
        }
        return $out;
    }
} // end of class

?>