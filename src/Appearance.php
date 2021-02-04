<?php

namespace App\Documents\PdfTron;

class Appearance
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'Appearance_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'TextFont') return new Font(Appearance_TextFont_get($this->_cPtr));
        if ($var === 'TextColor') return new ColorPt(Appearance_TextColor_get($this->_cPtr));
        if ($var === 'RedactedContentColor') return new ColorPt(Appearance_RedactedContentColor_get($this->_cPtr));
        if ($var === 'PositiveOverlayColor') return new ColorPt(Appearance_PositiveOverlayColor_get($this->_cPtr));
        if ($var === 'NegativeOverlayColor') return new ColorPt(Appearance_NegativeOverlayColor_get($this->_cPtr));
        $func = 'Appearance_' . $var . '_get';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Appearance_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Appearance') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_Appearance();
    }
}
