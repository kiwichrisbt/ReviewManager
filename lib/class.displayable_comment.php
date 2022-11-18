<?php
namespace ReviewManager;
use \CGFeedback\comment_ops AS cgfb_comment_ops;

class displayable_comment extends comment
{
    private $_mod;
    private $_data = ['detailpage'=>null, 'detailtemplate'=>null, 'inline'=>false ];

    public function __construct(\CGFeedback $mod, $detailpage = null, $detailtemplate = null, $inline = null)
    {
        $this->_mod = $mod;
        $this->__set('detailpage',$detailpage);
        $this->__set('detailtemplate',$detailtemplate);
        $this->__set('inline',$inline);
    }

    public function __get( $key )
    {
        switch( $key ) {
        case 'detailpage':
        case 'detailtemplate':
        case 'inline':
            return $this->_data[$key];

        case 'detail_url':
            $parms = [ 'cid'=>$this->id ];
            if( $this->detailtemplate ) $parms['detailtemplate'] = $this->detailtemplate;
            if( !$this->detailpage ) return;
            $url = $this->_mod->create_url( 'cgfb_','detail',$this->detailpage,$parms,$this->inline);
            return $url;

        case 'fields':
            return $this->get_field_hash();

        default:
            return parent::__get($key);
        }
    }

    public function __set( $key, $val )
    {
        switch( $key ) {
        case 'detailpage':
            $val = (int) $val;
            if( $val > 0 ) $this->_data[$key] = $val;
            break;

        case 'detailtemplate':
            $this->_data[$key] = trim($val);
            break;

        case 'inline':
            $this->_data[$key] = cms_to_bool( $val );
            break;

        default:
            return __parent::__set( $key, $val );
        }
    }
}