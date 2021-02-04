<?php

namespace App\Documents\PdfTron;

class UInt32Iterator
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return UInt32Iterator_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return UInt32Iterator_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('UInt32Iterator_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        UInt32Iterator_Destroy($this->_cPtr);
    }

    function Next()
    {
        UInt32Iterator_Next($this->_cPtr);
    }

    function Current()
    {
        return UInt32Iterator_Current($this->_cPtr);
    }

    function HasNext()
    {
        return UInt32Iterator_HasNext($this->_cPtr);
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_unsigned_int_t') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_UInt32Iterator();
                break;
            default:
                $this->_cPtr = new_UInt32Iterator($c_or_impl);
        }
    }
}
