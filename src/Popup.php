<?php

namespace App\Documents\PdfTron;

class Popup extends Annot
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Annot::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Annot::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Annot::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = Popup_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Popup($r);
        }
        return $r;
    }

    function GetParent()
    {
        $r = Popup_GetParent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Annot($r);
        }
        return $r;
    }

    function SetParent($parent)
    {
        Popup_SetParent($this->_cPtr, $parent);
    }

    function IsOpen()
    {
        return Popup_IsOpen($this->_cPtr);
    }

    function SetOpen($is_open)
    {
        Popup_SetOpen($this->_cPtr, $is_open);
    }

    function __construct($d_or_ann_or_popup = null)
    {
        if (is_resource($d_or_ann_or_popup) && get_resource_type($d_or_ann_or_popup) === '_p_pdftron__PDF__Annots__Popup') {
            $this->_cPtr = $d_or_ann_or_popup;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Popup();
                break;
            default:
                $this->_cPtr = new_Popup($d_or_ann_or_popup);
        }
    }
}
