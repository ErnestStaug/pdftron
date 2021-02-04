<?php

namespace PDFNet\PDFTron;

class CheckBoxWidget extends Widget
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
        if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__CheckBoxWidget') {
            $this->_cPtr = $d_or_annot;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_CheckBoxWidget();
                break;
            default:
                $this->_cPtr = new_CheckBoxWidget($d_or_annot);
        }
    }

    static function Create($doc, $pos, $field_name_or_field = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = CheckBoxWidget_Create($doc, $pos);
                break;
            default:
                $r = CheckBoxWidget_Create($doc, $pos, $field_name_or_field);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CheckBoxWidget($r);
        }
        return $r;
    }

    function IsChecked()
    {
        return CheckBoxWidget_IsChecked($this->_cPtr);
    }

    function SetChecked($checked)
    {
        CheckBoxWidget_SetChecked($this->_cPtr, $checked);
    }
}
