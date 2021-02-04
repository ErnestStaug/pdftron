<?php

namespace App\Documents\PdfTron;

class CharIterator
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return CharIterator_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return CharIterator_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('CharIterator_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        CharIterator_Destroy($this->_cPtr);
    }

    function Next()
    {
        CharIterator_Next($this->_cPtr);
    }

    function Current()
    {
        $r = CharIterator_Current($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new TRN_chardata($r);
        }
        return $r;
    }

    function HasNext()
    {
        return CharIterator_HasNext($this->_cPtr);
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__Common__IteratorT_TRN_chardata_t') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_CharIterator();
                break;
            default:
                $this->_cPtr = new_CharIterator($c_or_impl);
        }
    }
}
