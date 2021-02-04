<?php

namespace PDFNet\PDFTron;

class Point extends TRN_point
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        TRN_point::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return TRN_point::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return TRN_point::__isset($var);
    }

    function __construct($px = null, $py = null)
    {
        if (is_resource($px) && get_resource_type($px) === '_p_pdftron__PDF__Point') {
            $this->_cPtr = $px;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Point();
                break;
            case 1:
                $this->_cPtr = new_Point($px);
                break;
            default:
                $this->_cPtr = new_Point($px, $py);
        }
    }
}
