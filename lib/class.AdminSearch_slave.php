<?php
namespace ReviewManager;

final class AdminSearch_slave extends \AdminSearch_slave
{
    public function get_name()
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        return $mod->Lang('lbl_adminsearch');
    }

    public function get_description()
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        return $mod->Lang('desc_adminsearch');
    }

    public function check_permission()
    {
        $userid = get_userid();
        return check_permission($userid,CGFEEDBACK_PERM_FEEDBACK);
    }

    public function get_matches()
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        if( !is_object($mod) ) return;
        $db = cmsms()->GetDb();
        // need to get the fielddefs of type textbox or textarea
        $query = 'SELECT id FROM '.CGFEEDBACK_TABLE_FIELDDEFS.' WHERE type IN (?,?,0)';
        $fdlist = $db->GetCol($query,[ 0, 1, 2 ]);

        $fields = ['N.*' ];
        $joins = [];
        $where = [ 'title LIKE ?', 'data LIKE ?', 'author_email LIKE ?', 'admin_notes LIKE ?' ];
        $str = '%'.$this->get_text().'%';
        $parms = array($str,$str,$str,$str);

        // add in fields
        for( $i = 0; $i < count($fdlist); $i++ ) {
            $tmp = 'FV'.$i;
            $fdid = $fdlist[$i];
            $fields[] = "$tmp.value";
            $joins[] = 'LEFT JOIN '.CGFEEDBACK_TABLE_FIELDVALS." $tmp ON N.news_id = $tmp.news_id AND $tmp.fielddef_id = $fdid";
            $where[] = "$tmp.value LIKE ?";
            $parms[] = $str;
        }

        // build the query.
        $query = 'SELECT '.implode(',',$fields).' FROM '.CGFEEDBACK_TABLE_COMMENTS.' N';
        if( count($joins) ) $query .= ' ' . implode(' ',$joines);
        if( count($where) ) $query .= ' WHERE '.implode(' OR ',$where);
        $query .= ' ORDER BY N.modified DESC';

        $dbr = $db->GetArray($query,array($parms));
        if( is_array($dbr) && count($dbr) ) {
            // got some results.
            $output = array();
            foreach( $dbr as $row ) {
                $text = null;
                foreach( $row as $key => $value ) {
                    // search for the keyword
                    $pos = strpos($value,$this->get_text());
                    if( $pos !== FALSE ) {
                        // build the text
                        $start = max(0,$pos - 50);
                        $end = min(strlen($value),$pos+50);
                        $text = substr($value,$start,$end-$start);
                        $text = cms_htmlentities($text);
                        $text = str_replace($this->get_text(),'<span class="search_oneresult">'.$this->get_text().'</span>',$text);
                        $text = str_replace("\r",'',$text);
                        $text = str_replace("\n",'',$text);
                        break;
                    }
                }
                $url = $mod->create_url('m1_','admin_editcomment','',['cid'=>$row['id']]);
                $tmp = [ 'title'=>$row['title'],
                         'description'=>\AdminSearch_tools::summarize($row['data']),
                         'edit_url'=>$url,'text'=>$text ];
                $output[] = $tmp;
            }
            return $output;
        }
    }
} // end of class
