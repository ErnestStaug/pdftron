<?php

namespace App\Documents\PdfTron;

class FreeText extends Markup
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
        $r = FreeText_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FreeText($r);
        }
        return $r;
    }

    function GetDefaultAppearance()
    {
        return FreeText_GetDefaultAppearance($this->_cPtr);
    }

    function SetDefaultAppearance($app_str)
    {
        FreeText_SetDefaultAppearance($this->_cPtr, $app_str);
    }

    function GetQuaddingFormat()
    {
        return FreeText_GetQuaddingFormat($this->_cPtr);
    }

    function SetQuaddingFormat($format)
    {
        FreeText_SetQuaddingFormat($this->_cPtr, $format);
    }

    function GetCalloutLinePoint1()
    {
        $r = FreeText_GetCalloutLinePoint1($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function GetCalloutLinePoint2()
    {
        $r = FreeText_GetCalloutLinePoint2($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function GetCalloutLinePoint3()
    {
        $r = FreeText_GetCalloutLinePoint3($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetCalloutLinePoints($p1, $p2, $p3 = null)
    {
        switch (func_num_args()) {
            case 2:
                FreeText_SetCalloutLinePoints($this->_cPtr, $p1, $p2);
                break;
            default:
                FreeText_SetCalloutLinePoints($this->_cPtr, $p1, $p2, $p3);
        }
    }

    const e_FreeText = 0;

    const e_FreeTextCallout = FreeText_e_FreeTextCallout;

    const e_FreeTextTypeWriter = FreeText_e_FreeTextTypeWriter;

    const e_Unknown = FreeText_e_Unknown;

    function GetIntentName()
    {
        return FreeText_GetIntentName($this->_cPtr);
    }

    function SetIntentName($mode = null)
    {
        switch (func_num_args()) {
            case 0:
                FreeText_SetIntentName($this->_cPtr);
                break;
            default:
                FreeText_SetIntentName($this->_cPtr, $mode);
        }
    }

    function GetEndingStyle()
    {
        return FreeText_GetEndingStyle($this->_cPtr);
    }

    function SetEndingStyle($style_or_est)
    {
        FreeText_SetEndingStyle($this->_cPtr, $style_or_est);
    }

    function SetTextColor($color, $col_comp)
    {
        FreeText_SetTextColor($this->_cPtr, $color, $col_comp);
    }

    function GetTextColor()
    {
        $r = FreeText_GetTextColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetTextColorCompNum()
    {
        return FreeText_GetTextColorCompNum($this->_cPtr);
    }

    function SetLineColor($color, $col_comp)
    {
        FreeText_SetLineColor($this->_cPtr, $color, $col_comp);
    }

    function GetLineColor()
    {
        $r = FreeText_GetLineColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetLineColorCompNum()
    {
        return FreeText_GetLineColorCompNum($this->_cPtr);
    }

    function SetFontSize($font_size)
    {
        FreeText_SetFontSize($this->_cPtr, $font_size);
    }

    function GetFontSize()
    {
        return FreeText_GetFontSize($this->_cPtr);
    }

    function __construct($d_or_ann_or_freetext = null)
    {
        if (is_resource($d_or_ann_or_freetext) && get_resource_type($d_or_ann_or_freetext) === '_p_pdftron__PDF__Annots__FreeText') {
            $this->_cPtr = $d_or_ann_or_freetext;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FreeText();
                break;
            default:
                $this->_cPtr = new_FreeText($d_or_ann_or_freetext);
        }
    }
}
