<?php

namespace PDFNet\PDFTron;

class HTMLOutputOptions
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

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__HTMLOutputOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_HTMLOutputOptions();
    }

    function SetPreferJPG($prefer_jpg)
    {
        HTMLOutputOptions_SetPreferJPG($this->_cPtr, $prefer_jpg);
    }

    function SetJPGQuality($quality)
    {
        HTMLOutputOptions_SetJPGQuality($this->_cPtr, $quality);
    }

    function SetDPI($dpi)
    {
        HTMLOutputOptions_SetDPI($this->_cPtr, $dpi);
    }

    function SetMaximumImagePixels($max_pixels)
    {
        HTMLOutputOptions_SetMaximumImagePixels($this->_cPtr, $max_pixels);
    }

    function SetReflow($reflow)
    {
        HTMLOutputOptions_SetReflow($this->_cPtr, $reflow);
    }

    function SetScale($scale)
    {
        HTMLOutputOptions_SetScale($this->_cPtr, $scale);
    }

    function SetExternalLinks($enable)
    {
        HTMLOutputOptions_SetExternalLinks($this->_cPtr, $enable);
    }

    function SetInternalLinks($enable)
    {
        HTMLOutputOptions_SetInternalLinks($this->_cPtr, $enable);
    }

    function SetSimplifyText($enable)
    {
        HTMLOutputOptions_SetSimplifyText($this->_cPtr, $enable);
    }

    function SetReportFile($path)
    {
        HTMLOutputOptions_SetReportFile($this->_cPtr, $path);
    }
}
