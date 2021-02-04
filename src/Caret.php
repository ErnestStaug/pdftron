<?php

namespace App\Documents\PdfTron;

class Caret extends Markup
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Markup::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Markup::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Markup::__isset($var);
    }

    static function Create($doc, $pos, $padding = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Caret_Create($doc, $pos);
                break;
            default:
                $r = Caret_Create($doc, $pos, $padding);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Caret($r);
        }
        return $r;
    }

    function GetSymbol()
    {
        return Caret_GetSymbol($this->_cPtr);
    }

    function SetSymbol($symbol)
    {
        Caret_SetSymbol($this->_cPtr, $symbol);
    }

    function __construct($d_or_ann_or_caret = null)
    {
        if (is_resource($d_or_ann_or_caret) && get_resource_type($d_or_ann_or_caret) === '_p_pdftron__PDF__Annots__Caret') {
            $this->_cPtr = $d_or_ann_or_caret;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Caret();
                break;
            default:
                $this->_cPtr = new_Caret($d_or_ann_or_caret);
        }
    }
}
