<?php

namespace PDFNet\PDFTron;

class DocSnapshot
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return DocSnapshot_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return DocSnapshot_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('DocSnapshot_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        DocSnapshot_Destroy($this->_cPtr);
    }

    function GetHash()
    {
        return DocSnapshot_GetHash($this->_cPtr);
    }

    function IsValid()
    {
        return DocSnapshot_IsValid($this->_cPtr);
    }

    function Equals($snapshot)
    {
        return DocSnapshot_Equals($this->_cPtr, $snapshot);
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__DocSnapshot') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_DocSnapshot();
                break;
            default:
                $this->_cPtr = new_DocSnapshot($other_or_impl);
        }
    }
}
