<?php

namespace App\Documents\PdfTron;

class Widget extends Annot
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Annot::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Annot::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Annot::__isset($var);
    }

    static function Create($doc, $pos, $field)
    {
        $r = Widget_Create($doc, $pos, $field);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Widget($r);
        }
        return $r;
    }

    function GetField()
    {
        $r = Widget_GetField($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Field($r);
        }
        return $r;
    }

    const e_none = 0;

    const e_invert = Widget_e_invert;

    const e_outline = Widget_e_outline;

    const e_push = Widget_e_push;

    const e_toggle = Widget_e_toggle;

    function GetHighlightingMode()
    {
        return Widget_GetHighlightingMode($this->_cPtr);
    }

    function SetHighlightingMode($mode = null)
    {
        switch (func_num_args()) {
            case 0:
                Widget_SetHighlightingMode($this->_cPtr);
                break;
            default:
                Widget_SetHighlightingMode($this->_cPtr, $mode);
        }
    }

    function GetAction()
    {
        $r = Widget_GetAction($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function SetAction($action)
    {
        Widget_SetAction($this->_cPtr, $action);
    }

    function GetBorderColorCompNum()
    {
        return Widget_GetBorderColorCompNum($this->_cPtr);
    }

    function GetBorderColor()
    {
        $r = Widget_GetBorderColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function SetBorderColor($col, $compnum)
    {
        Widget_SetBorderColor($this->_cPtr, $col, $compnum);
    }

    function GetBackgroundColorCompNum()
    {
        return Widget_GetBackgroundColorCompNum($this->_cPtr);
    }

    function GetBackgroundColor()
    {
        $r = Widget_GetBackgroundColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function SetBackgroundColor($c_, $compnum)
    {
        Widget_SetBackgroundColor($this->_cPtr, $c_, $compnum);
    }

    function GetStaticCaptionText()
    {
        return Widget_GetStaticCaptionText($this->_cPtr);
    }

    function SetStaticCaptionText($contents)
    {
        Widget_SetStaticCaptionText($this->_cPtr, $contents);
    }

    function GetRolloverCaptionText()
    {
        return Widget_GetRolloverCaptionText($this->_cPtr);
    }

    function SetRolloverCaptionText($contents)
    {
        Widget_SetRolloverCaptionText($this->_cPtr, $contents);
    }

    function GetMouseDownCaptionText()
    {
        return Widget_GetMouseDownCaptionText($this->_cPtr);
    }

    function SetMouseDownCaptionText($contents)
    {
        Widget_SetMouseDownCaptionText($this->_cPtr, $contents);
    }

    function GetStaticIcon()
    {
        $r = Widget_GetStaticIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetStaticIcon($icon)
    {
        Widget_SetStaticIcon($this->_cPtr, $icon);
    }

    function GetRolloverIcon()
    {
        $r = Widget_GetRolloverIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetRolloverIcon($icon)
    {
        Widget_SetRolloverIcon($this->_cPtr, $icon);
    }

    function GetMouseDownIcon()
    {
        $r = Widget_GetMouseDownIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetMouseDownIcon($icon)
    {
        Widget_SetMouseDownIcon($this->_cPtr, $icon);
    }

    const e_NoIcon = 0;

    const e_NoCaption = Widget_e_NoCaption;

    const e_CBelowI = Widget_e_CBelowI;

    const e_CAboveI = Widget_e_CAboveI;

    const e_CRightILeft = Widget_e_CRightILeft;

    const e_CLeftIRight = Widget_e_CLeftIRight;

    const e_COverlayI = Widget_e_COverlayI;

    function GetIconCaptionRelation()
    {
        return Widget_GetIconCaptionRelation($this->_cPtr);
    }

    function SetIconCaptionRelation($icr)
    {
        Widget_SetIconCaptionRelation($this->_cPtr, $icr);
    }

    const e_Always = 0;

    const e_WhenBigger = Widget_e_WhenBigger;

    const e_WhenSmaller = Widget_e_WhenSmaller;

    const e_Never = Widget_e_Never;

    function GetScaleCondition()
    {
        return Widget_GetScaleCondition($this->_cPtr);
    }

    function SetScaleCondition($sd)
    {
        Widget_SetScaleCondition($this->_cPtr, $sd);
    }

    const e_Anamorphic = 0;

    const e_Proportional = Widget_e_Proportional;

    function GetScaleType()
    {
        return Widget_GetScaleType($this->_cPtr);
    }

    function SetScaleType($st)
    {
        Widget_SetScaleType($this->_cPtr, $st);
    }

    function GetHIconLeftOver()
    {
        return Widget_GetHIconLeftOver($this->_cPtr);
    }

    function SetHIconLeftOver($hl)
    {
        Widget_SetHIconLeftOver($this->_cPtr, $hl);
    }

    function GetVIconLeftOver()
    {
        return Widget_GetVIconLeftOver($this->_cPtr);
    }

    function SetVIconLeftOver($vl)
    {
        Widget_SetVIconLeftOver($this->_cPtr, $vl);
    }

    function GetFitFull()
    {
        return Widget_GetFitFull($this->_cPtr);
    }

    function SetFitFull($ff)
    {
        Widget_SetFitFull($this->_cPtr, $ff);
    }

    function GetTextColor()
    {
        $r = Widget_GetTextColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetTextColorCompNum()
    {
        return Widget_GetTextColorCompNum($this->_cPtr);
    }

    function SetTextColor($color, $col_comp)
    {
        Widget_SetTextColor($this->_cPtr, $color, $col_comp);
    }

    function GetFontSize()
    {
        return Widget_GetFontSize($this->_cPtr);
    }

    function SetFontSize($font_size)
    {
        Widget_SetFontSize($this->_cPtr, $font_size);
    }

    function GetFont()
    {
        $r = Widget_GetFont($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    function SetFont($font)
    {
        Widget_SetFont($this->_cPtr, $font);
    }

    function __construct($d_or_ann_or_widget = null)
    {
        if (is_resource($d_or_ann_or_widget) && get_resource_type($d_or_ann_or_widget) === '_p_pdftron__PDF__Annots__Widget') {
            $this->_cPtr = $d_or_ann_or_widget;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Widget();
                break;
            default:
                $this->_cPtr = new_Widget($d_or_ann_or_widget);
        }
    }
}
