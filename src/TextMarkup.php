<?php

namespace PDFNet\PDFTron;

class TextMarkup extends Markup
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

    function GetQuadPointCount()
    {
        return TextMarkup_GetQuadPointCount($this->_cPtr);
    }

    function GetQuadPoint($idx)
    {
        $r = TextMarkup_GetQuadPoint($this->_cPtr, $idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new QuadPoint($r);
        }
        return $r;
    }

    function SetQuadPoint($idx, $qp)
    {
        TextMarkup_SetQuadPoint($this->_cPtr, $idx, $qp);
    }

    function __construct($d_or_ann_or_textmarkup)
    {
        if (is_resource($d_or_ann_or_textmarkup) && get_resource_type($d_or_ann_or_textmarkup) === '_p_pdftron__PDF__Annots__TextMarkup') {
            $this->_cPtr = $d_or_ann_or_textmarkup;
            return;
        }
        $this->_cPtr = new_TextMarkup($d_or_ann_or_textmarkup);
    }
}
