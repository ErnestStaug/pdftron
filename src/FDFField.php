<?php

namespace PDFNet\PDFTron;

class FDFField
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

    function __construct($field_dict_or_p = null, $fdf_dict = null)
    {
        if (is_resource($field_dict_or_p) && get_resource_type($field_dict_or_p) === '_p_pdftron__FDF__FDFField') {
            $this->_cPtr = $field_dict_or_p;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FDFField();
                break;
            case 1:
                $this->_cPtr = new_FDFField($field_dict_or_p);
                break;
            default:
                $this->_cPtr = new_FDFField($field_dict_or_p, $fdf_dict);
        }
    }

    function GetValue()
    {
        $r = FDFField_GetValue($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetValue($value)
    {
        FDFField_SetValue($this->_cPtr, $value);
    }

    function GetName()
    {
        return FDFField_GetName($this->_cPtr);
    }

    function GetPartialName()
    {
        return FDFField_GetPartialName($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = FDFField_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function FindAttribute($attrib)
    {
        $r = FDFField_FindAttribute($this->_cPtr, $attrib);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
