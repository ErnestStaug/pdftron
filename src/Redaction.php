<?php

namespace App\Documents\PdfTron;

class Redaction
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_imp') return Redaction_mp_imp_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_imp') return Redaction_mp_imp_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Redaction_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        Redaction_Destroy($this->_cPtr);
    }

    function __construct($page_num_or_other_or_impl = null, $bbox = null, $negative = null, $text = null)
    {
        if (is_resource($page_num_or_other_or_impl) && get_resource_type($page_num_or_other_or_impl) === '_p_pdftron__PDF__Redaction') {
            $this->_cPtr = $page_num_or_other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Redaction();
                break;
            case 1:
                $this->_cPtr = new_Redaction($page_num_or_other_or_impl);
                break;
            case 2:
                $this->_cPtr = new_Redaction($page_num_or_other_or_impl, $bbox);
                break;
            case 3:
                $this->_cPtr = new_Redaction($page_num_or_other_or_impl, $bbox, $negative);
                break;
            default:
                $this->_cPtr = new_Redaction($page_num_or_other_or_impl, $bbox, $negative, $text);
        }
    }
}
