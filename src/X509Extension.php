<?php

namespace App\Documents\PdfTron;

class X509Extension
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return X509Extension_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return X509Extension_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('X509Extension_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        X509Extension_Destroy($this->_cPtr);
    }

    function IsCritical()
    {
        return X509Extension_IsCritical($this->_cPtr);
    }

    function GetObjectIdentifier()
    {
        $r = X509Extension_GetObjectIdentifier($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ObjectIdentifier($r);
        }
        return $r;
    }

    function ToString()
    {
        return X509Extension_ToString($this->_cPtr);
    }

    function GetData()
    {
        $r = X509Extension_GetData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__X509Extension') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_X509Extension();
                break;
            default:
                $this->_cPtr = new_X509Extension($other_or_impl);
        }
    }
}
