<?php

namespace App\Documents\PdfTron;

class GSChangesIterator
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return GSChangesIterator_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return GSChangesIterator_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('GSChangesIterator_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        GSChangesIterator_Destroy($this->_cPtr);
    }

    function Next()
    {
        GSChangesIterator_Next($this->_cPtr);
    }

    function Current()
    {
        return GSChangesIterator_Current($this->_cPtr);
    }

    function HasNext()
    {
        return GSChangesIterator_HasNext($this->_cPtr);
    }

    function __construct($impl_or_c = null)
    {
        if (is_resource($impl_or_c) && get_resource_type($impl_or_c) === '_p_pdftron__Common__IteratorT_int_t') {
            $this->_cPtr = $impl_or_c;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_GSChangesIterator();
                break;
            default:
                $this->_cPtr = new_GSChangesIterator($impl_or_c);
        }
    }
}
