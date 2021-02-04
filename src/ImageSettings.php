<?php

namespace App\Documents\PdfTron;

class ImageSettings
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

    const e_retain = 0;

    const e_flate = ImageSettings_e_flate;

    const e_jpeg = ImageSettings_e_jpeg;

    const e_jpeg2000 = ImageSettings_e_jpeg2000;

    const e_none = ImageSettings_e_none;

    const e_off = 0;

    const e_default = ImageSettings_e_default;

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ImageSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_ImageSettings();
    }

    function SetImageDPI($maximum, $resampling)
    {
        ImageSettings_SetImageDPI($this->_cPtr, $maximum, $resampling);
    }

    function SetCompressionMode($mode)
    {
        ImageSettings_SetCompressionMode($this->_cPtr, $mode);
    }

    function SetDownsampleMode($mode)
    {
        ImageSettings_SetDownsampleMode($this->_cPtr, $mode);
    }

    function SetQuality($quality)
    {
        ImageSettings_SetQuality($this->_cPtr, $quality);
    }

    function ForceRecompression($force)
    {
        ImageSettings_ForceRecompression($this->_cPtr, $force);
    }

    function ForceChanges($force)
    {
        ImageSettings_ForceChanges($this->_cPtr, $force);
    }
}
