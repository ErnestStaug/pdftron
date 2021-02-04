<?php

namespace App\Documents\PdfTron;

class TRN_rect
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'TRN_rect_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        $func = 'TRN_rect_' . $var . '_get';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TRN_rect_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_TRN_rect') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TRN_rect();
    }
}
