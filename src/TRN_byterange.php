<?php

namespace PDFNet\PDFTron;

class TRN_byterange
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_offset') return TRN_byterange_m_offset_set($this->_cPtr, $value);
        if ($var === 'm_size') return TRN_byterange_m_size_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_offset') return TRN_byterange_m_offset_get($this->_cPtr);
        if ($var === 'm_size') return TRN_byterange_m_size_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TRN_byterange_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_TRN_byterange') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TRN_byterange();
    }
}
