<?php

namespace PDFNet\PDFTron;

class OCRModule
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

    static function IsModuleAvailable()
    {
        return OCRModule_IsModuleAvailable();
    }

    static function ImageToPDF($dst, $src, $options)
    {
        OCRModule_ImageToPDF($dst, $src, $options);
    }

    static function ProcessPDF($dst, $options)
    {
        OCRModule_ProcessPDF($dst, $options);
    }

    static function GetOCRJsonFromImage($dst, $src, $options)
    {
        return OCRModule_GetOCRJsonFromImage($dst, $src, $options);
    }

    static function GetOCRJsonFromPDF($src, $options)
    {
        return OCRModule_GetOCRJsonFromPDF($src, $options);
    }

    static function ApplyOCRJsonToPDF($dst, $json)
    {
        OCRModule_ApplyOCRJsonToPDF($dst, $json);
    }

    static function GetOCRXmlFromImage($dst, $src, $options)
    {
        return OCRModule_GetOCRXmlFromImage($dst, $src, $options);
    }

    static function GetOCRXmlFromPDF($src, $options)
    {
        return OCRModule_GetOCRXmlFromPDF($src, $options);
    }

    static function ApplyOCRXmlToPDF($dst, $xml)
    {
        OCRModule_ApplyOCRXmlToPDF($dst, $xml);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OCRModule') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_OCRModule();
    }
}
