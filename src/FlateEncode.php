<?php

namespace PDFNet\PDFTron;

class FlateEncode extends Filter
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

    function __construct($input_filter, $compression_level = -1, $buf_sz = null)
    {
        if (is_resource($input_filter) && get_resource_type($input_filter) === '_p_pdftron__Filters__FlateEncode') {
            $this->_cPtr = $input_filter;
            return;
        }
        switch (func_num_args()) {
            case 1:
            case 2:
                $this->_cPtr = new_FlateEncode($input_filter, $compression_level);
                break;
            default:
                $this->_cPtr = new_FlateEncode($input_filter, $compression_level, $buf_sz);
        }
    }
}
