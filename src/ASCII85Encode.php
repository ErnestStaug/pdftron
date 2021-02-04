<?php

namespace App\Documents\PdfTron;

class ASCII85Encode extends Filter
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

    function __construct($input_filter, $line_width = 72, $buf_sz = null)
    {
        if (is_resource($input_filter) && get_resource_type($input_filter) === '_p_pdftron__Filters__ASCII85Encode') {
            $this->_cPtr = $input_filter;
            return;
        }
        switch (func_num_args()) {
            case 1:
            case 2:
                $this->_cPtr = new_ASCII85Encode($input_filter, $line_width);
                break;
            default:
                $this->_cPtr = new_ASCII85Encode($input_filter, $line_width, $buf_sz);
        }
    }
}
