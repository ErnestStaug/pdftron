<?php

namespace PDFNet\PDFTron;

class ListBoxWidget extends Widget
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
        if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annots__ListBoxWidget') {
            $this->_cPtr = $d_or_annot;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ListBoxWidget();
                break;
            default:
                $this->_cPtr = new_ListBoxWidget($d_or_annot);
        }
    }

    static function Create($doc, $pos, $field_name_or_field = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = ListBoxWidget_Create($doc, $pos);
                break;
            default:
                $r = ListBoxWidget_Create($doc, $pos, $field_name_or_field);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ListBoxWidget($r);
        }
        return $r;
    }

    function AddOption($value)
    {
        ListBoxWidget_AddOption($this->_cPtr, $value);
    }

    function AddOptions($opts)
    {
        ListBoxWidget_AddOptions($this->_cPtr, $opts);
    }

    function SetSelectedOptions($selected_opts)
    {
        ListBoxWidget_SetSelectedOptions($this->_cPtr, $selected_opts);
    }

    function GetSelectedOptions()
    {
        return ListBoxWidget_GetSelectedOptions($this->_cPtr);
    }

    function GetOptions()
    {
        return ListBoxWidget_GetOptions($this->_cPtr);
    }

    function ReplaceOptions($new_opts)
    {
        ListBoxWidget_ReplaceOptions($this->_cPtr, $new_opts);
    }

    function RemoveOption($value)
    {
        ListBoxWidget_RemoveOption($this->_cPtr, $value);
    }
}
