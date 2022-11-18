<?php
namespace ReviewManager;

class comment_ops
{
    public static function get_fielddefs()
    {
        if( \cge_tmpdata::exists('cgfb_fielddefs') ) return \cge_tmpdata::get('cgfb_fielddefs');

        $db = cmsms()->GetDb();
        $query = 'SELECT * FROM '.CGFEEDBACK_TABLE_FIELDDEFS.' ORDER BY iorder';
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

    public static function text_to_options($text)
    {
        $text = trim($text);
        if( !$text ) return;

        $text = str_replace("\r\n","\n",$text);
        $text = str_replace("\r","\n",$text);
        $text = str_replace("\n\n","\n",$text);
        if( !$text ) return;

        $tmp = \cge_array::explode_with_key($text,'=',"\n");
        if( !is_array($tmp) || count($tmp) == 0 ) return;

        $out = [];
        foreach( $tmp as $label => $value ) {
            $label = trim($label);
            $value = trim($value);
            if( !$label && $value ) {
                $label = $value;
            }
            else if( $label && !$value ) {
                $value = $label;
            }
            $out[strtolower($value)] = $label;
        }
        return $out;
    }
} // end of class

?>