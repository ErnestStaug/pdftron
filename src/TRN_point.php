<?php

namespace PDFNet\PDFTron;

class TRN_point
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'x') return TRN_point_x_set($this->_cPtr, $value);
        if ($var === 'y') return TRN_point_y_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'x') return TRN_point_x_get($this->_cPtr);
        if ($var === 'y') return TRN_point_y_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TRN_point_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_TRN_point') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TRN_point();
    }
}
