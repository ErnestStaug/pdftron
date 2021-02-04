<?php

namespace App\Documents\PdfTron;

class MonoImageSettings
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

    const e_jbig2 = 0;

    const e_flate = MonoImageSettings_e_flate;

    const e_none = MonoImageSettings_e_none;

    const e_ccitt = MonoImageSettings_e_ccitt;

    const e_off = 0;

    const e_default = MonoImageSettings_e_default;

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__MonoImageSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_MonoImageSettings();
    }

    function SetImageDPI($maximum, $resampling)
    {
        MonoImageSettings_SetImageDPI($this->_cPtr, $maximum, $resampling);
    }

    function SetCompressionMode($mode)
    {
        MonoImageSettings_SetCompressionMode($this->_cPtr, $mode);
    }

    function SetDownsampleMode($mode)
    {
        MonoImageSettings_SetDownsampleMode($this->_cPtr, $mode);
    }

    function ForceRecompression($force)
    {
        MonoImageSettings_ForceRecompression($this->_cPtr, $force);
    }

    function ForceChanges($force)
    {
        MonoImageSettings_ForceChanges($this->_cPtr, $force);
    }

    function SetJBIG2Threshold($jbig2_threshold)
    {
        MonoImageSettings_SetJBIG2Threshold($this->_cPtr, $jbig2_threshold);
    }
}
