<?php

namespace PDFNet\PDFTron;

class ColorPt
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_c') return ColorPt_m_c_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_c') return ColorPt_m_c_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ColorPt_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($x_or_co = null, $y = null, $z = null, $w = null)
    {
        if (is_resource($x_or_co) && get_resource_type($x_or_co) === '_p_pdftron__PDF__ColorPt') {
            $this->_cPtr = $x_or_co;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ColorPt();
                break;
            case 1:
                $this->_cPtr = new_ColorPt($x_or_co);
                break;
            case 2:
                $this->_cPtr = new_ColorPt($x_or_co, $y);
                break;
            case 3:
                $this->_cPtr = new_ColorPt($x_or_co, $y, $z);
                break;
            default:
                $this->_cPtr = new_ColorPt($x_or_co, $y, $z, $w);
        }
    }

    function IsEqual($co)
    {
        return ColorPt_IsEqual($this->_cPtr, $co);
    }

    function Set($x_or_colorant_index = null, $y_or_colorant_value = null, $z = null, $w = null)
    {
        switch (func_num_args()) {
            case 0:
                ColorPt_Set($this->_cPtr);
                break;
            case 1:
                ColorPt_Set($this->_cPtr, $x_or_colorant_index);
                break;
            case 2:
                ColorPt_Set($this->_cPtr, $x_or_colorant_index, $y_or_colorant_value);
                break;
            case 3:
                ColorPt_Set($this->_cPtr, $x_or_colorant_index, $y_or_colorant_value, $z);
                break;
            default:
                ColorPt_Set($this->_cPtr, $x_or_colorant_index, $y_or_colorant_value, $z, $w);
        }
    }

    function Get($colorant_index)
    {
        return ColorPt_Get($this->_cPtr, $colorant_index);
    }

    function SetColorantNum($num)
    {
        ColorPt_SetColorantNum($this->_cPtr, $num);
    }

    function Destroy()
    {
        ColorPt_Destroy($this->_cPtr);
    }
}
