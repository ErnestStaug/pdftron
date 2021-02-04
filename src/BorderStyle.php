<?php

namespace App\Documents\PdfTron;

class BorderStyle
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

    const e_solid = 0;

    const e_dashed = BorderStyle_e_dashed;

    const e_beveled = BorderStyle_e_beveled;

    const e_inset = BorderStyle_e_inset;

    const e_underline = BorderStyle_e_underline;

    function Destroy()
    {
        BorderStyle_Destroy($this->_cPtr);
    }

    function GetStyle()
    {
        return BorderStyle_GetStyle($this->_cPtr);
    }

    function SetStyle($style)
    {
        BorderStyle_SetStyle($this->_cPtr, $style);
    }

    function GetHR()
    {
        return BorderStyle_GetHR($this->_cPtr);
    }

    function SetHR($horizontal_radius)
    {
        BorderStyle_SetHR($this->_cPtr, $horizontal_radius);
    }

    function GetVR()
    {
        return BorderStyle_GetVR($this->_cPtr);
    }

    function SetVR($vertical_radius)
    {
        BorderStyle_SetVR($this->_cPtr, $vertical_radius);
    }

    function GetWidth()
    {
        return BorderStyle_GetWidth($this->_cPtr);
    }

    function SetWidth($width)
    {
        BorderStyle_SetWidth($this->_cPtr, $width);
    }

    function GetDash()
    {
        $r = BorderStyle_GetDash($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function SetDash($dash)
    {
        BorderStyle_SetDash($this->_cPtr, $dash);
    }

    function __construct($s_or_impl = null, $b_width = null, $b_hr = null, $b_vr = null, $b_dash = null)
    {
        if (is_resource($s_or_impl) && get_resource_type($s_or_impl) === '_p_pdftron__PDF__BorderStyle') {
            $this->_cPtr = $s_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_BorderStyle();
                break;
            case 1:
                $this->_cPtr = new_BorderStyle($s_or_impl);
                break;
            case 2:
                $this->_cPtr = new_BorderStyle($s_or_impl, $b_width);
                break;
            case 3:
                $this->_cPtr = new_BorderStyle($s_or_impl, $b_width, $b_hr);
                break;
            case 4:
                $this->_cPtr = new_BorderStyle($s_or_impl, $b_width, $b_hr, $b_vr);
                break;
            default:
                $this->_cPtr = new_BorderStyle($s_or_impl, $b_width, $b_hr, $b_vr, $b_dash);
        }
    }
}
