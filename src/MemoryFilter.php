<?php

namespace PDFNet\PDFTron;

class MemoryFilter extends Filter
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Filter::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Filter::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Filter::__isset($var);
    }

    function __construct($buf_sz, $is_input = null)
    {
        if (is_resource($buf_sz) && get_resource_type($buf_sz) === '_p_pdftron__Filters__MemoryFilter') {
            $this->_cPtr = $buf_sz;
            return;
        }
        $this->_cPtr = new_MemoryFilter($buf_sz, $is_input);
    }

    function GetBuffer()
    {
        return MemoryFilter_GetBuffer($this->_cPtr);
    }

    function SetAsInputFilter()
    {
        MemoryFilter_SetAsInputFilter($this->_cPtr);
    }
}
