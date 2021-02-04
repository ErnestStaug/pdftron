<?php

namespace App\Documents\PdfTron;

class Rect extends TRN_rect
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        TRN_rect::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return TRN_rect::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return TRN_rect::__isset($var);
    }

    function __construct($rect_or_x1 = null, $y1 = null, $x2 = null, $y2 = null)
    {
        if (is_resource($rect_or_x1) && get_resource_type($rect_or_x1) === '_p_pdftron__PDF__Rect') {
            $this->_cPtr = $rect_or_x1;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Rect();
                break;
            case 1:
                $this->_cPtr = new_Rect($rect_or_x1);
                break;
            case 2:
                $this->_cPtr = new_Rect($rect_or_x1, $y1);
                break;
            case 3:
                $this->_cPtr = new_Rect($rect_or_x1, $y1, $x2);
                break;
            default:
                $this->_cPtr = new_Rect($rect_or_x1, $y1, $x2, $y2);
        }
    }

    function Attach($obj)
    {
        Rect_Attach($this->_cPtr, $obj);
    }

    function Update($obj = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Rect_Update($this->_cPtr);
                break;
            default:
                $r = Rect_Update($this->_cPtr, $obj);
        }
        return $r;
    }

    function Set($x1, $y1, $x2, $y2)
    {
        Rect_Set($this->_cPtr, $x1, $y1, $x2, $y2);
    }

    function Width()
    {
        return Rect_Width($this->_cPtr);
    }

    function Height()
    {
        return Rect_Height($this->_cPtr);
    }

    function Contains($x, $y)
    {
        return Rect_Contains($this->_cPtr, $x, $y);
    }

    function IntersectRect($rect1, $rect2)
    {
        return Rect_IntersectRect($this->_cPtr, $rect1, $rect2);
    }

    function Normalize()
    {
        Rect_Normalize($this->_cPtr);
    }

    function Inflate($amount_or_x, $y = null)
    {
        switch (func_num_args()) {
            case 1:
                Rect_Inflate($this->_cPtr, $amount_or_x);
                break;
            default:
                Rect_Inflate($this->_cPtr, $amount_or_x, $y);
        }
    }

    function GetX1()
    {
        return Rect_GetX1($this->_cPtr);
    }

    function GetY1()
    {
        return Rect_GetY1($this->_cPtr);
    }

    function GetX2()
    {
        return Rect_GetX2($this->_cPtr);
    }

    function GetY2()
    {
        return Rect_GetY2($this->_cPtr);
    }

    function SetX1($x1)
    {
        Rect_SetX1($this->_cPtr, $x1);
    }

    function SetY1($y1)
    {
        Rect_SetY1($this->_cPtr, $y1);
    }

    function SetX2($x2)
    {
        Rect_SetX2($this->_cPtr, $x2);
    }

    function SetY2($y2)
    {
        Rect_SetY2($this->_cPtr, $y2);
    }
}
