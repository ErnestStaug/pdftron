<?php

namespace App\Documents\PdfTron;

class RadioButtonWidget extends Widget
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Widget::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Widget::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Widget::__isset($var);
    }

    function __construct($d_or_annot = null)
    {
        if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__RadioButtonWidget') {
            $this->_cPtr = $d_or_annot;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_RadioButtonWidget();
                break;
            default:
                $this->_cPtr = new_RadioButtonWidget($d_or_annot);
        }
    }

    function GetGroup()
    {
        $r = RadioButtonWidget_GetGroup($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RadioButtonGroup($r);
        }
        return $r;
    }

    function EnableButton()
    {
        RadioButtonWidget_EnableButton($this->_cPtr);
    }

    function IsEnabled()
    {
        return RadioButtonWidget_IsEnabled($this->_cPtr);
    }
}
