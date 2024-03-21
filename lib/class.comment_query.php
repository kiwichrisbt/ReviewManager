<?php
namespace ReviewManager;

class comment_query extends \CMSMSExt\query\query
{
    private $_data = [ 'key1'=>null, 'key2'=>null, 'key3'=>null, 'showall'=>false, 'since'=>null, 'sortby'=>'created', 'sortorder'=>'DESC', 'limit'=>10000, 'offset'=>0,
                       'status'=>'published',  'detailpage'=>null, 'detailtemplate'=>null, 'inline'=>false ];

    public function __construct($params = array())
    {
        foreach( $params as $key => $val ) {
            if( !array_key_exists($key,$this->_data) ) continue;
            // $this[$key] = $val;
            $this->_data[$key] = $val;
        }
    }

    public function OffsetGet($key)
    {
        if( isset($this->_data[$key]) ) return $this->_data[$key];
    }

    public function OffsetSet($key,$val)
    {
        switch( $key ) {
        case 'key1':
        case 'key2':
        case 'key3':
        case 'detailtemplate':
            if( !is_null($val) ) $val = trim($val);
            $this->_data[$key] = $val;
            break;

        case 'status':
            $val = strtolower($val);
            switch( $status ) {
            case 'draft':
            case 'published':
            case 'any':
                $this->_data[$key] = $val;
                break;
            default:
                throw new \CmsInvalidDataException("$val is an invalid value for $key in ".__CLASS__);
                break;
            }
            break;

        case 'detailpage':
            $val = (int) $val;
            if( $val < 1 ) throw new \CmsInvalidDataException("$val is an invalid value for $key in ".__CLASS__);
            $this->_data[$key] = $val;
            break;

        case 'inline':
        case 'showall':
            $this->_data[$key] = cms_to_bool($val);
            break;

        case 'since':
            if( preg_match('/^\d.*/',$val) ) {
                $val = (int) $val;
            } else {
                $tmp = strtotime($val);
                if( $tmp ) {
                    $val = (int) $tmp;
                } else {
                    throw new \CmsInvalidDataException("$val is an invalid value for $key in ".__CLASS__);
                }
            }
            $this->_data[$key] = $val;
            break;

        case 'sortby':
            $oval = $val;
            $val = strtolower($val);
            switch( $val ) {
            case 'rating':
            case 'title':
            case 'status':
            case 'author_name':
            case 'author_email':
            case 'author_ip':
            case 'created':
            case 'modified':
            case 'random':
                $this->_data[$key] = $val;
                break;
            default:
                $this->_data[$key] = 'created';
                if( startswith($oval,'f:') ) {
                    // sort by custom field.
                    $fname = substr($oval,2);
                    $fid = comment_ops::get_fielddef_id_by_name( $fname );
                    if( $fid ) $this->_data[$key] = 'f:'.$fid;
                }
            }
            break;

        case 'sortorder':
            $val = strtoupper($val);
            switch( $val ) {
            case 'ASC':
            case 'DESC':
                $this->_data[$key] = $val;
                break;
            default:
                $this->_data[$key] = 'DESC';
                break;
            }
            break;

        case 'limit':
            $this->_data[$key] = (int) max(1,min(10000,(int) $val));
            break;

        case 'offset':
            $this->_data[$key] = (int) max(0,min(1000000,(int) $val));
            break;
        }
    }

    public function OffsetExists($key)
    {
        return isset($this->_data[$key]);
    }

    public function &execute()
    {
        $obj = new comment_resultset($this);
        return $obj;
    }
} // end of class
