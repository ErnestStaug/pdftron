<?php

namespace App\Documents\PdfTron;

class Flattener
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return Flattener_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return Flattener_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Flattener_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Flattener') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_Flattener();
    }

    function SetDPI($dpi)
    {
        Flattener_SetDPI($this->_cPtr, $dpi);
    }

    function SetMaximumImagePixels($max_pixels)
    {
        Flattener_SetMaximumImagePixels($this->_cPtr, $max_pixels);
    }

    function SetPreferJPG($jpg)
    {
        Flattener_SetPreferJPG($this->_cPtr, $jpg);
    }

    function SetJPGQuality($quality)
    {
        Flattener_SetJPGQuality($this->_cPtr, $quality);
    }

    const e_threshold_very_strict = 0;

    const e_threshold_strict = Flattener_e_threshold_strict;

    const e_threshold_default = Flattener_e_threshold_default;

    const e_threshold_keep_most = Flattener_e_threshold_keep_most;

    const e_threshold_keep_all = Flattener_e_threshold_keep_all;

    const e_simple = 0;

    const e_fast = Flattener_e_fast;

    function SetThreshold($threshold)
    {
        Flattener_SetThreshold($this->_cPtr, $threshold);
    }

    function SetPathHinting($enable_hinting)
    {
        Flattener_SetPathHinting($this->_cPtr, $enable_hinting);
    }

    function Process($doc_or_page, $mode)
    {
        Flattener_Process($this->_cPtr, $doc_or_page, $mode);
    }

    function Destroy()
    {
        Flattener_Destroy($this->_cPtr);
    }
}
