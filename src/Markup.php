<?php

namespace PDFNet\PDFTron;

class Markup extends Annot
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

    function GetTitle()
    {
        return Markup_GetTitle($this->_cPtr);
    }

    function SetTitle($title)
    {
        Markup_SetTitle($this->_cPtr, $title);
    }

    function GetPopup()
    {
        $r = Markup_GetPopup($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Popup($r);
        }
        return $r;
    }

    function SetPopup($ppup)
    {
        Markup_SetPopup($this->_cPtr, $ppup);
    }

    function GetOpacity()
    {
        return Markup_GetOpacity($this->_cPtr);
    }

    function SetOpacity($op)
    {
        Markup_SetOpacity($this->_cPtr, $op);
    }

    function GetSubject()
    {
        return Markup_GetSubject($this->_cPtr);
    }

    function SetSubject($contents)
    {
        Markup_SetSubject($this->_cPtr, $contents);
    }

    function GetCreationDates()
    {
        $r = Markup_GetCreationDates($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Date($r);
        }
        return $r;
    }

    function SetCreationDates($dt)
    {
        Markup_SetCreationDates($this->_cPtr, $dt);
    }

    const e_None = 0;

    const e_Cloudy = Markup_e_Cloudy;

    function GetBorderEffect()
    {
        return Markup_GetBorderEffect($this->_cPtr);
    }

    function SetBorderEffect($effect = null)
    {
        switch (func_num_args()) {
            case 0:
                Markup_SetBorderEffect($this->_cPtr);
                break;
            default:
                Markup_SetBorderEffect($this->_cPtr, $effect);
        }
    }

    function GetBorderEffectIntensity()
    {
        return Markup_GetBorderEffectIntensity($this->_cPtr);
    }

    function SetBorderEffectIntensity($intensity = 0.0)
    {
        Markup_SetBorderEffectIntensity($this->_cPtr, $intensity);
    }

    function GetInteriorColor()
    {
        $r = Markup_GetInteriorColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetInteriorColorCompNum()
    {
        return Markup_GetInteriorColorCompNum($this->_cPtr);
    }

    function SetInteriorColor($c_, $CompNum)
    {
        Markup_SetInteriorColor($this->_cPtr, $c_, $CompNum);
    }

    function GetContentRect()
    {
        $r = Markup_GetContentRect($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function SetContentRect($cr)
    {
        Markup_SetContentRect($this->_cPtr, $cr);
    }

    function GetPadding()
    {
        $r = Markup_GetPadding($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function SetPadding($rd_or_x)
    {
        Markup_SetPadding($this->_cPtr, $rd_or_x);
    }

    function RotateAppearance($angle)
    {
        Markup_RotateAppearance($this->_cPtr, $angle);
    }

    function __construct($d_or_ann_or_markup = null)
    {
        if (is_resource($d_or_ann_or_markup) && get_resource_type($d_or_ann_or_markup) === '_p_pdftron__PDF__Annots__Markup') {
            $this->_cPtr = $d_or_ann_or_markup;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Markup();
                break;
            default:
                $this->_cPtr = new_Markup($d_or_ann_or_markup);
        }
    }
}
