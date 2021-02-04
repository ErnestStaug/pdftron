<?php

namespace PDFNet\PDFTron;

class Separation
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_separation_name') return Separation_m_separation_name_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_separation_name') return Separation_m_separation_name_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Separation_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($arg1 = null)
    {
        if (is_resource($arg1) && get_resource_type($arg1) === '_p_pdftron__PDF__Separation') {
            $this->_cPtr = $arg1;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Separation();
                break;
            default:
                $this->_cPtr = new_Separation($arg1);
        }
    }

    function C()
    {
        return Separation_C($this->_cPtr);
    }

    function M()
    {
        return Separation_M($this->_cPtr);
    }

    function Y()
    {
        return Separation_Y($this->_cPtr);
    }

    function K()
    {
        return Separation_K($this->_cPtr);
    }

    function GetDataSize()
    {
        return Separation_GetDataSize($this->_cPtr);
    }

    function GetSeparationName()
    {
        return Separation_GetSeparationName($this->_cPtr);
    }

    function GetData()
    {
        $r = Separation_GetData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }
}
