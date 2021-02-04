<?php

namespace PDFNet\PDFTron;

class Optimizer
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

    function __construct($h)
    {
        $this->_cPtr = $h;
    }

    static function Optimize($doc, $settings = null)
    {
        switch (func_num_args()) {
            case 1:
                Optimizer_Optimize($doc);
                break;
            default:
                Optimizer_Optimize($doc, $settings);
        }
    }
}
