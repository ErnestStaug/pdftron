<?php

namespace PDFNet\PDFTron;

class ClassMap
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

    function IsValid()
    {
        return ClassMap_IsValid($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = ClassMap_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($dict_or_p_or_impl = null)
    {
        if (is_resource($dict_or_p_or_impl) && get_resource_type($dict_or_p_or_impl) === '_p_pdftron__PDF__Struct__ClassMap') {
            $this->_cPtr = $dict_or_p_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ClassMap();
                break;
            default:
                $this->_cPtr = new_ClassMap($dict_or_p_or_impl);
        }
    }
}
