<?php

namespace PDFNet\PDFTron;

class TiffOutputOptions
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
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TiffOutputOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TiffOutputOptions();
    }

    function SetBox($type)
    {
        TiffOutputOptions_SetBox($this->_cPtr, $type);
    }

    function SetRotate($rotation)
    {
        TiffOutputOptions_SetRotate($this->_cPtr, $rotation);
    }

    function SetClip($x1, $y1, $x2, $y2)
    {
        TiffOutputOptions_SetClip($this->_cPtr, $x1, $y1, $x2, $y2);
    }

    function SetPages($page_desc)
    {
        TiffOutputOptions_SetPages($this->_cPtr, $page_desc);
    }

    function SetOverprint($mode)
    {
        TiffOutputOptions_SetOverprint($this->_cPtr, $mode);
    }

    function SetCMYK($enable)
    {
        TiffOutputOptions_SetCMYK($this->_cPtr, $enable);
    }

    function SetDither($enable)
    {
        TiffOutputOptions_SetDither($this->_cPtr, $enable);
    }

    function SetGray($enable)
    {
        TiffOutputOptions_SetGray($this->_cPtr, $enable);
    }

    function SetMono($enable)
    {
        TiffOutputOptions_SetMono($this->_cPtr, $enable);
    }

    function SetAnnots($enable)
    {
        TiffOutputOptions_SetAnnots($this->_cPtr, $enable);
    }

    function SetSmooth($enable)
    {
        TiffOutputOptions_SetSmooth($this->_cPtr, $enable);
    }

    function SetPrintmode($enable)
    {
        TiffOutputOptions_SetPrintmode($this->_cPtr, $enable);
    }

    function SetTransparentPage($enable)
    {
        TiffOutputOptions_SetTransparentPage($this->_cPtr, $enable);
    }

    function SetPalettized($enable)
    {
        TiffOutputOptions_SetPalettized($this->_cPtr, $enable);
    }

    function SetDPI($dpi)
    {
        TiffOutputOptions_SetDPI($this->_cPtr, $dpi);
    }

    function SetGamma($gamma)
    {
        TiffOutputOptions_SetGamma($this->_cPtr, $gamma);
    }

    function SetHRes($hres)
    {
        TiffOutputOptions_SetHRes($this->_cPtr, $hres);
    }

    function SetVRes($vres)
    {
        TiffOutputOptions_SetVRes($this->_cPtr, $vres);
    }
}
