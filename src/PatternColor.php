<?php

namespace App\Documents\PdfTron;

class PatternColor
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_pc') return PatternColor_mp_pc_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_pc') return PatternColor_mp_pc_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PatternColor_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_uncolored_tiling_pattern = 0;

    const e_colored_tiling_pattern = PatternColor_e_colored_tiling_pattern;

    const e_shading = PatternColor_e_shading;

    const e_null = PatternColor_e_null;

    function GetType()
    {
        return PatternColor_GetType($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = PatternColor_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetMatrix()
    {
        $r = PatternColor_GetMatrix($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetShading()
    {
        $r = PatternColor_GetShading($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Shading($r);
        }
        return $r;
    }

    const e_constant_spacing = 0;

    const e_no_distortion = PatternColor_e_no_distortion;

    const e_constant_spacing_fast_fill = PatternColor_e_constant_spacing_fast_fill;

    function GetTilingType()
    {
        return PatternColor_GetTilingType($this->_cPtr);
    }

    function GetBBox()
    {
        $r = PatternColor_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetXStep()
    {
        return PatternColor_GetXStep($this->_cPtr);
    }

    function GetYStep()
    {
        return PatternColor_GetYStep($this->_cPtr);
    }

    function Destroy()
    {
        PatternColor_Destroy($this->_cPtr);
    }

    function __construct($pattern_or_impl = null)
    {
        if (is_resource($pattern_or_impl) && get_resource_type($pattern_or_impl) === '_p_pdftron__PDF__PatternColor') {
            $this->_cPtr = $pattern_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PatternColor();
                break;
            default:
                $this->_cPtr = new_PatternColor($pattern_or_impl);
        }
    }
}
