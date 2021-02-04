<?php

namespace App\Documents\PdfTron;

class ColorSpace
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_cs') return ColorSpace_mp_cs_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_cs') return ColorSpace_mp_cs_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ColorSpace_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function CreateDeviceGray()
    {
        $r = ColorSpace_CreateDeviceGray();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    static function CreateDeviceRGB()
    {
        $r = ColorSpace_CreateDeviceRGB();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    static function CreateDeviceCMYK()
    {
        $r = ColorSpace_CreateDeviceCMYK();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    static function CreatePattern()
    {
        $r = ColorSpace_CreatePattern();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    static function CreateICC($doc, $filepath_or_stm_or_buf, $buf_sz = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = ColorSpace_CreateICC($doc, $filepath_or_stm_or_buf);
                break;
            default:
                $r = ColorSpace_CreateICC($doc, $filepath_or_stm_or_buf, $buf_sz);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    const e_device_gray = 0;

    const e_device_rgb = ColorSpace_e_device_rgb;

    const e_device_cmyk = ColorSpace_e_device_cmyk;

    const e_cal_gray = ColorSpace_e_cal_gray;

    const e_cal_rgb = ColorSpace_e_cal_rgb;

    const e_lab = ColorSpace_e_lab;

    const e_icc = ColorSpace_e_icc;

    const e_indexed = ColorSpace_e_indexed;

    const e_pattern = ColorSpace_e_pattern;

    const e_separation = ColorSpace_e_separation;

    const e_device_n = ColorSpace_e_device_n;

    const e_null = ColorSpace_e_null;

    function GetType()
    {
        return ColorSpace_GetType($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = ColorSpace_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetComponentNum()
    {
        return ColorSpace_GetComponentNum($this->_cPtr);
    }

    function InitColor($out_colorants)
    {
        ColorSpace_InitColor($this->_cPtr, $out_colorants);
    }

    function InitComponentRanges($out_decode_low, $out_decode_range)
    {
        ColorSpace_InitComponentRanges($this->_cPtr, $out_decode_low, $out_decode_range);
    }

    function Convert2Gray($in_color)
    {
        $r = ColorSpace_Convert2Gray($this->_cPtr, $in_color);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function Convert2RGB($in_color)
    {
        $r = ColorSpace_Convert2RGB($this->_cPtr, $in_color);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function Convert2CMYK($in_color)
    {
        $r = ColorSpace_Convert2CMYK($this->_cPtr, $in_color);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetAlternateColorSpace()
    {
        $r = ColorSpace_GetAlternateColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetBaseColorSpace()
    {
        $r = ColorSpace_GetBaseColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetHighVal()
    {
        return ColorSpace_GetHighVal($this->_cPtr);
    }

    function GetBaseColor($color_idx)
    {
        $r = ColorSpace_GetBaseColor($this->_cPtr, $color_idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function IsNone()
    {
        return ColorSpace_IsNone($this->_cPtr);
    }

    function IsAll()
    {
        return ColorSpace_IsAll($this->_cPtr);
    }

    function GetTintFunction()
    {
        return ColorSpace_GetTintFunction($this->_cPtr);
    }

    function Destroy()
    {
        ColorSpace_Destroy($this->_cPtr);
    }

    function __construct($color_space_or_c_or_impl = null)
    {
        if (is_resource($color_space_or_c_or_impl) && get_resource_type($color_space_or_c_or_impl) === '_p_pdftron__PDF__ColorSpace') {
            $this->_cPtr = $color_space_or_c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ColorSpace();
                break;
            default:
                $this->_cPtr = new_ColorSpace($color_space_or_c_or_impl);
        }
    }
}
