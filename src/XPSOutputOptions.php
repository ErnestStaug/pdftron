<?php

namespace App\Documents\PdfTron;

class XPSOutputOptions extends XPSOutputCommonOptions
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        XPSOutputCommonOptions::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return XPSOutputCommonOptions::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return XPSOutputCommonOptions::__isset($var);
    }

    function SetOpenXps($openxps)
    {
        XPSOutputOptions_SetOpenXps($this->_cPtr, $openxps);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XPSOutputOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_XPSOutputOptions();
    }
}
