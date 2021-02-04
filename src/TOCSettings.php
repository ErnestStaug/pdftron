<?php

namespace App\Documents\PdfTron;

class TOCSettings
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return TOCSettings_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return TOCSettings_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TOCSettings_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TOCSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TOCSettings();
    }

    function SetDottedLines($enable)
    {
        TOCSettings_SetDottedLines($this->_cPtr, $enable);
    }

    function SetLinks($enable)
    {
        TOCSettings_SetLinks($this->_cPtr, $enable);
    }

    function SetCaptionText($caption)
    {
        TOCSettings_SetCaptionText($this->_cPtr, $caption);
    }

    function SetLevelIndentation($indentation)
    {
        TOCSettings_SetLevelIndentation($this->_cPtr, $indentation);
    }

    function SetTextSizeShrink($shrink)
    {
        TOCSettings_SetTextSizeShrink($this->_cPtr, $shrink);
    }

    function SetXsl($style_sheet)
    {
        TOCSettings_SetXsl($this->_cPtr, $style_sheet);
    }

    function Destroy()
    {
        TOCSettings_Destroy($this->_cPtr);
    }
}
