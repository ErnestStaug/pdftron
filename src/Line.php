<?php

namespace App\Documents\PdfTron;

class Line
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_line') return Line_mp_line_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_line') return Line_mp_line_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Line_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function GetNumWords()
    {
        return Line_GetNumWords($this->_cPtr);
    }

    function IsSimpleLine()
    {
        return Line_IsSimpleLine($this->_cPtr);
    }

    function GetBBox()
    {
        $r = Line_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetQuad()
    {
        $r = Line_GetQuad($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetFirstWord()
    {
        $r = Line_GetFirstWord($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Word($r);
        }
        return $r;
    }

    function GetWord($word_idx)
    {
        $r = Line_GetWord($this->_cPtr, $word_idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Word($r);
        }
        return $r;
    }

    function GetNextLine()
    {
        $r = Line_GetNextLine($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Line($r);
        }
        return $r;
    }

    function GetCurrentNum()
    {
        return Line_GetCurrentNum($this->_cPtr);
    }

    function GetStyle()
    {
        $r = Line_GetStyle($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Style($r);
        }
        return $r;
    }

    function GetParagraphID()
    {
        return Line_GetParagraphID($this->_cPtr);
    }

    function GetFlowID()
    {
        return Line_GetFlowID($this->_cPtr);
    }

    function EndsWithHyphen()
    {
        return Line_EndsWithHyphen($this->_cPtr);
    }

    function IsValid()
    {
        return Line_IsValid($this->_cPtr);
    }

    function IsEqual($arg1)
    {
        return Line_IsEqual($this->_cPtr, $arg1);
    }

    function __construct($impl = null)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Line') {
            $this->_cPtr = $impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Line();
                break;
            default:
                $this->_cPtr = new_Line($impl);
        }
    }
}
