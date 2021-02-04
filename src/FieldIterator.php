<?php

namespace App\Documents\PdfTron;

class FieldIterator
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return FieldIterator_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return FieldIterator_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('FieldIterator_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        FieldIterator_Destroy($this->_cPtr);
    }

    function Next()
    {
        FieldIterator_Next($this->_cPtr);
    }

    function Current()
    {
        $r = FieldIterator_Current($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Field($r);
        }
        return $r;
    }

    function HasNext()
    {
        return FieldIterator_HasNext($this->_cPtr);
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_pdftron__PDF__Field_t') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FieldIterator();
                break;
            default:
                $this->_cPtr = new_FieldIterator($c_or_impl);
        }
    }
}
