<?php

namespace App\Documents\PdfTron;

class NumberTree
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

    function __construct($number_tree_or_d)
    {
        if (is_resource($number_tree_or_d) && get_resource_type($number_tree_or_d) === '_p_pdftron__SDF__NumberTree') {
            $this->_cPtr = $number_tree_or_d;
            return;
        }
        $this->_cPtr = new_NumberTree($number_tree_or_d);
    }

    function IsValid()
    {
        return NumberTree_IsValid($this->_cPtr);
    }

    function GetIterator($key = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = NumberTree_GetIterator($this->_cPtr);
                break;
            default:
                $r = NumberTree_GetIterator($this->_cPtr, $key);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DictIterator($r);
        }
        return $r;
    }

    function GetValue($key)
    {
        $r = NumberTree_GetValue($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Put($key, $value)
    {
        NumberTree_Put($this->_cPtr, $key, $value);
    }

    function Erase($key_or_pos)
    {
        NumberTree_Erase($this->_cPtr, $key_or_pos);
    }

    function GetSDFObj()
    {
        $r = NumberTree_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
