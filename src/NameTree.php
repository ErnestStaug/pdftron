<?php

namespace PDFNet\PDFTron;

class NameTree
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

    static function Create($doc, $name)
    {
        $r = NameTree_Create($doc, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new NameTree($r);
        }
        return $r;
    }

    static function Find($doc, $name)
    {
        $r = NameTree_Find($doc, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new NameTree($r);
        }
        return $r;
    }

    function __construct($name_tree_or_d)
    {
        if (is_resource($name_tree_or_d) && get_resource_type($name_tree_or_d) === '_p_pdftron__SDF__NameTree') {
            $this->_cPtr = $name_tree_or_d;
            return;
        }
        $this->_cPtr = new_NameTree($name_tree_or_d);
    }

    function IsValid()
    {
        return NameTree_IsValid($this->_cPtr);
    }

    function GetIterator($key = null, $key_sz = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = NameTree_GetIterator($this->_cPtr);
                break;
            case 1:
                $r = NameTree_GetIterator($this->_cPtr, $key);
                break;
            default:
                $r = NameTree_GetIterator($this->_cPtr, $key, $key_sz);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DictIterator($r);
        }
        return $r;
    }

    function GetValue($key, $key_sz)
    {
        $r = NameTree_GetValue($this->_cPtr, $key, $key_sz);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Put($key, $key_sz, $value)
    {
        NameTree_Put($this->_cPtr, $key, $key_sz, $value);
    }

    function Erase($key_or_pos, $key_sz = null)
    {
        switch (func_num_args()) {
            case 1:
                NameTree_Erase($this->_cPtr, $key_or_pos);
                break;
            default:
                NameTree_Erase($this->_cPtr, $key_or_pos, $key_sz);
        }
    }

    function GetSDFObj()
    {
        $r = NameTree_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
