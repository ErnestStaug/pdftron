<?php

namespace App\Documents\PdfTron;

class Underline extends TextMarkup
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        TextMarkup::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return TextMarkup::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return TextMarkup::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = Underline_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Underline($r);
        }
        return $r;
    }

    function __construct($d_or_ann_or_underline)
    {
        if (is_resource($d_or_ann_or_underline) && get_resource_type($d_or_ann_or_underline) === '_p_pdftron__PDF__Annots__Underline') {
            $this->_cPtr = $d_or_ann_or_underline;
            return;
        }
        $this->_cPtr = new_Underline($d_or_ann_or_underline);
    }
}
