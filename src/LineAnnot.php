<?php

namespace PDFNet\PDFTron;

class LineAnnot extends Markup
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
        $r = LineAnnot_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new LineAnnot($r);
        }
        return $r;
    }

    function GetStartPoint()
    {
        $r = LineAnnot_GetStartPoint($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetStartPoint($sp)
    {
        LineAnnot_SetStartPoint($this->_cPtr, $sp);
    }

    function GetEndPoint()
    {
        $r = LineAnnot_GetEndPoint($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetEndPoint($ep)
    {
        LineAnnot_SetEndPoint($this->_cPtr, $ep);
    }

    const e_Square = 0;

    const e_Circle = LineAnnot_e_Circle;

    const e_Diamond = LineAnnot_e_Diamond;

    const e_OpenArrow = LineAnnot_e_OpenArrow;

    const e_ClosedArrow = LineAnnot_e_ClosedArrow;

    const e_Butt = LineAnnot_e_Butt;

    const e_ROpenArrow = LineAnnot_e_ROpenArrow;

    const e_RClosedArrow = LineAnnot_e_RClosedArrow;

    const e_Slash = LineAnnot_e_Slash;

    const e_None = LineAnnot_e_None;

    const e_Unknown = LineAnnot_e_Unknown;

    function GetStartStyle()
    {
        return LineAnnot_GetStartStyle($this->_cPtr);
    }

    function SetStartStyle($sst)
    {
        LineAnnot_SetStartStyle($this->_cPtr, $sst);
    }

    function GetEndStyle()
    {
        return LineAnnot_GetEndStyle($this->_cPtr);
    }

    function SetEndStyle($est)
    {
        LineAnnot_SetEndStyle($this->_cPtr, $est);
    }

    function GetLeaderLineLength()
    {
        return LineAnnot_GetLeaderLineLength($this->_cPtr);
    }

    function SetLeaderLineLength($length)
    {
        LineAnnot_SetLeaderLineLength($this->_cPtr, $length);
    }

    function GetLeaderLineExtensionLength()
    {
        return LineAnnot_GetLeaderLineExtensionLength($this->_cPtr);
    }

    function SetLeaderLineExtensionLength($length)
    {
        LineAnnot_SetLeaderLineExtensionLength($this->_cPtr, $length);
    }

    function GetShowCaption()
    {
        return LineAnnot_GetShowCaption($this->_cPtr);
    }

    function SetShowCaption($showCaption)
    {
        LineAnnot_SetShowCaption($this->_cPtr, $showCaption);
    }

    const e_LineArrow = 0;

    const e_LineDimension = LineAnnot_e_LineDimension;

    const e_null = LineAnnot_e_null;

    function GetIntentType()
    {
        return LineAnnot_GetIntentType($this->_cPtr);
    }

    function SetIntentType($it)
    {
        LineAnnot_SetIntentType($this->_cPtr, $it);
    }

    function GetLeaderLineOffset()
    {
        return LineAnnot_GetLeaderLineOffset($this->_cPtr);
    }

    function SetLeaderLineOffset($length)
    {
        LineAnnot_SetLeaderLineOffset($this->_cPtr, $length);
    }

    const e_Inline = 0;

    const e_Top = LineAnnot_e_Top;

    function GetCaptionPosition()
    {
        return LineAnnot_GetCaptionPosition($this->_cPtr);
    }

    function SetCaptionPosition($style)
    {
        LineAnnot_SetCaptionPosition($this->_cPtr, $style);
    }

    function GetTextHOffset()
    {
        return LineAnnot_GetTextHOffset($this->_cPtr);
    }

    function SetTextHOffset($offset)
    {
        LineAnnot_SetTextHOffset($this->_cPtr, $offset);
    }

    function GetTextVOffset()
    {
        return LineAnnot_GetTextVOffset($this->_cPtr);
    }

    function SetTextVOffset($offset)
    {
        LineAnnot_SetTextVOffset($this->_cPtr, $offset);
    }

    function __construct($d_or_ann_or_line = null)
    {
        if (is_resource($d_or_ann_or_line) && get_resource_type($d_or_ann_or_line) === '_p_pdftron__PDF__Annots__LineAnnot') {
            $this->_cPtr = $d_or_ann_or_line;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_LineAnnot();
                break;
            default:
                $this->_cPtr = new_LineAnnot($d_or_ann_or_line);
        }
    }
}
