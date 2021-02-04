<?php

namespace App\Documents\PdfTron;

class Selection
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function GetPageNum()
    {
        return Selection_GetPageNum($this->_cPtr);
    }

    function GetQuads()
    {
        return Selection_GetQuads($this->_cPtr);
    }

    function GetAsUnicode()
    {
        return Selection_GetAsUnicode($this->_cPtr);
    }

    function GetAsHtml()
    {
        return Selection_GetAsHtml($this->_cPtr);
    }

    function __construct($impl = null)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Selection') {
            $this->_cPtr = $impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Selection();
                break;
            default:
                $this->_cPtr = new_Selection($impl);
        }
    }
}
