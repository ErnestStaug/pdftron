<?php

namespace App\Documents\PdfTron;

class Ink extends Markup
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

    static function Create($doc, $pos)
    {
        $r = Ink_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Ink($r);
        }
        return $r;
    }

    function GetPathCount()
    {
        return Ink_GetPathCount($this->_cPtr);
    }

    function GetPointCount($pathindex)
    {
        return Ink_GetPointCount($this->_cPtr, $pathindex);
    }

    function GetPoint($pathindex, $pointindex)
    {
        $r = Ink_GetPoint($this->_cPtr, $pathindex, $pointindex);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetPoint($pathindex, $pointindex, $pt)
    {
        Ink_SetPoint($this->_cPtr, $pathindex, $pointindex, $pt);
    }

    function Erase($pt1, $pt2, $width)
    {
        return Ink_Erase($this->_cPtr, $pt1, $pt2, $width);
    }

    function GetHighlightIntent()
    {
        return Ink_GetHighlightIntent($this->_cPtr);
    }

    function SetHighlightIntent($highlight)
    {
        Ink_SetHighlightIntent($this->_cPtr, $highlight);
    }

    function __construct($d_or_ann_or_ink = null)
    {
        if (is_resource($d_or_ann_or_ink) && get_resource_type($d_or_ann_or_ink) === '_p_pdftron__PDF__Annots__Ink') {
            $this->_cPtr = $d_or_ann_or_ink;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Ink();
                break;
            default:
                $this->_cPtr = new_Ink($d_or_ann_or_ink);
        }
    }
}
