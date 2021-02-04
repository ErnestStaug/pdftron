<?php

namespace PDFNet\PDFTron;

class STree
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

    static function Create($doc)
    {
        $r = STree_Create($doc);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new STree($r);
        }
        return $r;
    }

    function Insert($kid, $insert_before)
    {
        STree_Insert($this->_cPtr, $kid, $insert_before);
    }

    function IsValid()
    {
        return STree_IsValid($this->_cPtr);
    }

    function GetNumKids()
    {
        return STree_GetNumKids($this->_cPtr);
    }

    function GetKid($index)
    {
        $r = STree_GetKid($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetElement($id_buf, $id_buf_sz)
    {
        $r = STree_GetElement($this->_cPtr, $id_buf, $id_buf_sz);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetRoleMap()
    {
        $r = STree_GetRoleMap($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RoleMap($r);
        }
        return $r;
    }

    function GetClassMap()
    {
        $r = STree_GetClassMap($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ClassMap($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = STree_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($struct_dict_or_impl = null)
    {
        if (is_resource($struct_dict_or_impl) && get_resource_type($struct_dict_or_impl) === '_p_pdftron__PDF__Struct__STree') {
            $this->_cPtr = $struct_dict_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_STree();
                break;
            default:
                $this->_cPtr = new_STree($struct_dict_or_impl);
        }
    }
}
