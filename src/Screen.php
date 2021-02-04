<?php

namespace App\Documents\PdfTron;

class Screen extends Annot
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

    static function Create($doc, $pos)
    {
        $r = Screen_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Screen($r);
        }
        return $r;
    }

    function GetTitle()
    {
        return Screen_GetTitle($this->_cPtr);
    }

    function SetTitle($title)
    {
        Screen_SetTitle($this->_cPtr, $title);
    }

    function GetAction()
    {
        $r = Screen_GetAction($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function SetAction($action)
    {
        Screen_SetAction($this->_cPtr, $action);
    }

    function GetBorderColorCompNum()
    {
        return Screen_GetBorderColorCompNum($this->_cPtr);
    }

    function GetBorderColor()
    {
        $r = Screen_GetBorderColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function SetBorderColor($col, $numcomp)
    {
        Screen_SetBorderColor($this->_cPtr, $col, $numcomp);
    }

    function GetBackgroundColorCompNum()
    {
        return Screen_GetBackgroundColorCompNum($this->_cPtr);
    }

    function GetBackgroundColor()
    {
        $r = Screen_GetBackgroundColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function SetBackgroundColor($col, $numcomp)
    {
        Screen_SetBackgroundColor($this->_cPtr, $col, $numcomp);
    }

    function GetStaticCaptionText()
    {
        return Screen_GetStaticCaptionText($this->_cPtr);
    }

    function SetStaticCaptionText($contents)
    {
        Screen_SetStaticCaptionText($this->_cPtr, $contents);
    }

    function GetRolloverCaptionText()
    {
        return Screen_GetRolloverCaptionText($this->_cPtr);
    }

    function SetRolloverCaptionText($contents)
    {
        Screen_SetRolloverCaptionText($this->_cPtr, $contents);
    }

    function GetMouseDownCaptionText()
    {
        return Screen_GetMouseDownCaptionText($this->_cPtr);
    }

    function SetMouseDownCaptionText($contents)
    {
        Screen_SetMouseDownCaptionText($this->_cPtr, $contents);
    }

    function GetStaticIcon()
    {
        $r = Screen_GetStaticIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetStaticIcon($icon)
    {
        Screen_SetStaticIcon($this->_cPtr, $icon);
    }

    function GetRolloverIcon()
    {
        $r = Screen_GetRolloverIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetRolloverIcon($icon)
    {
        Screen_SetRolloverIcon($this->_cPtr, $icon);
    }

    function GetMouseDownIcon()
    {
        $r = Screen_GetMouseDownIcon($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetMouseDownIcon($icon)
    {
        Screen_SetMouseDownIcon($this->_cPtr, $icon);
    }

    const e_NoIcon = 0;

    const e_NoCaption = Screen_e_NoCaption;

    const e_CBelowI = Screen_e_CBelowI;

    const e_CAboveI = Screen_e_CAboveI;

    const e_CRightILeft = Screen_e_CRightILeft;

    const e_CLeftIRight = Screen_e_CLeftIRight;

    const e_COverlayI = Screen_e_COverlayI;

    function GetIconCaptionRelation()
    {
        return Screen_GetIconCaptionRelation($this->_cPtr);
    }

    function SetIconCaptionRelation($icr)
    {
        Screen_SetIconCaptionRelation($this->_cPtr, $icr);
    }

    const e_Always = 0;

    const e_WhenBigger = Screen_e_WhenBigger;

    const e_WhenSmaller = Screen_e_WhenSmaller;

    const e_Never = Screen_e_Never;

    function GetScaleCondition()
    {
        return Screen_GetScaleCondition($this->_cPtr);
    }

    function SetScaleCondition($sc)
    {
        Screen_SetScaleCondition($this->_cPtr, $sc);
    }

    const e_Anamorphic = 0;

    const e_Proportional = Screen_e_Proportional;

    function GetScaleType()
    {
        return Screen_GetScaleType($this->_cPtr);
    }

    function SetScaleType($st)
    {
        Screen_SetScaleType($this->_cPtr, $st);
    }

    function GetHIconLeftOver()
    {
        return Screen_GetHIconLeftOver($this->_cPtr);
    }

    function SetHIconLeftOver($hl)
    {
        Screen_SetHIconLeftOver($this->_cPtr, $hl);
    }

    function GetVIconLeftOver()
    {
        return Screen_GetVIconLeftOver($this->_cPtr);
    }

    function SetVIconLeftOver($vl)
    {
        Screen_SetVIconLeftOver($this->_cPtr, $vl);
    }

    function GetFitFull()
    {
        return Screen_GetFitFull($this->_cPtr);
    }

    function SetFitFull($ff)
    {
        Screen_SetFitFull($this->_cPtr, $ff);
    }

    function __construct($d_or_ann_or_screen = null)
    {
        if (is_resource($d_or_ann_or_screen) && get_resource_type($d_or_ann_or_screen) === '_p_pdftron__PDF__Annots__Screen') {
            $this->_cPtr = $d_or_ann_or_screen;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Screen();
                break;
            default:
                $this->_cPtr = new_Screen($d_or_ann_or_screen);
        }
    }
}
