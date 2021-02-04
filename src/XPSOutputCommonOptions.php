<?php

namespace PDFNet\PDFTron;

class XPSOutputCommonOptions
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_obj') return XPSOutputCommonOptions_m_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_obj') return XPSOutputCommonOptions_m_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('XPSOutputCommonOptions_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XPSOutputCommonOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_XPSOutputCommonOptions();
    }

    function SetPrintMode($print_mode)
    {
        XPSOutputCommonOptions_SetPrintMode($this->_cPtr, $print_mode);
    }

    function SetDPI($dpi)
    {
        XPSOutputCommonOptions_SetDPI($this->_cPtr, $dpi);
    }

    function SetRenderPages($render)
    {
        XPSOutputCommonOptions_SetRenderPages($this->_cPtr, $render);
    }

    function SetThickenLines($thicken)
    {
        XPSOutputCommonOptions_SetThickenLines($this->_cPtr, $thicken);
    }

    function GenerateURLLinks($generate)
    {
        XPSOutputCommonOptions_GenerateURLLinks($this->_cPtr, $generate);
    }

    const e_op_off = 0;

    const e_op_on = XPSOutputCommonOptions_e_op_on;

    const e_op_pdfx_on = XPSOutputCommonOptions_e_op_pdfx_on;

    function SetOverprint($mode)
    {
        XPSOutputCommonOptions_SetOverprint($this->_cPtr, $mode);
    }
}
