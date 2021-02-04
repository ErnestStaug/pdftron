<?php

namespace PDFNet\PDFTron;

class AttrObj
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($dict_or_a = null)
    {
        if (is_resource($dict_or_a) && get_resource_type($dict_or_a) === '_p_pdftron__PDF__Struct__AttrObj') {
            $this->_cPtr = $dict_or_a;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_AttrObj();
                break;
            default:
                $this->_cPtr = new_AttrObj($dict_or_a);
        }
    }

    function GetOwner()
    {
        return AttrObj_GetOwner($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = AttrObj_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
