<?php
namespace ReviewManager;

class param_cleaner
{
    const TYPE_STRING = 's';
    const TYPE_BOOL = 'b';
    const TYPE_INT = 'i';
    const TYPE_FLOAT = 'f';
    const TYPE_HTML = 'h';
    const TYPE_ENUM = 'enum';

    private $_map = [];
    private $_enums = [];
    private $_dflts = [];

    public function set( $key, $type, array $enum = null )
    {
        switch( $type ) {
        case self::TYPE_STRING:
        case self::TYPE_INT:
        case self::TYPE_FLOAT:
        case self::TYPE_HTML:
        case self::TYPE_BOOL:
            $this->_map[$key] = $type;
            break;

        case self::TYPE_ENUM:
            $this->_map[$key] = $type;
            $this->_enums[$key] = array_values($enum);
            break;

        default:
            throw new \LogicException('Invalid type '.$type.' in '.__METHOD__);
        }
    }

    public function set_dflt( $key, $val = null )
    {
        $this->_dflts[$key] = $val;
    }

    public function set_string( array $keys )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_STRING);
        }
    }

    public function set_int( array $keys )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_INT);
        }
    }

    public function set_float( array $keys )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_FLOAT);
        }
    }

    public function set_html( array $keys )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_HTML);
        }
    }

    public function set_bool( array $keys )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_BOOL);
        }
    }

    public function set_enum( array $keys, array $enum )
    {
        foreach( $keys as $key ) {
            $this->set($key,self::TYPE_ENUM,$enum);
        }
    }

    public function clean_param( $key, $val )
    {
        if( !isset($this->_map[$key]) ) return;
        $type = $this->_map[$key];
        switch( $type ) {
        case self::TYPE_STRING:
            return filter_var( $val, FILTER_SANITIZE_STRING );

        case self::TYPE_INT:
            return (int) $val;

        case self::TYPE_FLOAT:
            return (float) $val;

        case self::TYPE_HTML:
            return html_entity_decode(\xt_utils::clean_input_html($val));

        case self::TYPE_BOOL:
            return cms_to_bool($val);

        case self::TYPE_ENUM:
            if( !in_array($val,$this->_enums[$key]) ) $val = $this->_enums[$key][0];
            return $val;
        }

    }

    public function go( array $params )
    {
        $out = [];
        foreach( $this->_dflts as $key => $val ) {
            if( !isset($this->_map[$key]) ) continue; // unknwon param
            $out[$key] = $this->clean_param($key,$this->_dflts[$key]);
        }
        foreach( $params as $key => $val ) {
            if( !isset($this->_map[$key]) ) continue; // unknwon param
            $out[$key] = $this->clean_param($key,$val);
        }
        return $out;
    }
}
