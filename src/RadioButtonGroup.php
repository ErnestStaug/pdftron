<?php

namespace App\Documents\PdfTron;

class RadioButtonGroup
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

    static function Create($doc, $field_name = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = RadioButtonGroup_Create($doc);
                break;
            default:
                $r = RadioButtonGroup_Create($doc, $field_name);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RadioButtonGroup($r);
        }
        return $r;
    }

    function Add($pos, $onstate = "")
    {
        $r = RadioButtonGroup_Add($this->_cPtr, $pos, $onstate);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RadioButtonWidget($r);
        }
        return $r;
    }

    function GetNumButtons()
    {
        return RadioButtonGroup_GetNumButtons($this->_cPtr);
    }

    function GetButton($index)
    {
        $r = RadioButtonGroup_GetButton($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RadioButtonWidget($r);
        }
        return $r;
    }

    function GetField()
    {
        $r = RadioButtonGroup_GetField($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Field($r);
        }
        return $r;
    }

    function AddGroupButtonsToPage($page)
    {
        RadioButtonGroup_AddGroupButtonsToPage($this->_cPtr, $page);
    }

    function __construct($field_or_group_or_impl)
    {
        if (is_resource($field_or_group_or_impl) && get_resource_type($field_or_group_or_impl) === '_p_pdftron__PDF__Annots__RadioButtonGroup') {
            $this->_cPtr = $field_or_group_or_impl;
            return;
        }
        $this->_cPtr = new_RadioButtonGroup($field_or_group_or_impl);
    }
}
