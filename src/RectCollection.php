<?php

namespace App\Documents\PdfTron;

class RectCollection
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

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__RectCollection') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_RectCollection();
    }

    function AddRect($to_add)
    {
        RectCollection_AddRect($this->_cPtr, $to_add);
    }

    function GetRectAt($index)
    {
        $r = RectCollection_GetRectAt($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetNumRects()
    {
        return RectCollection_GetNumRects($this->_cPtr);
    }

    function Clear()
    {
        RectCollection_Clear($this->_cPtr);
    }
}
