<?php

namespace App\Documents\PdfTron;

class ResultSnapshot
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return ResultSnapshot_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return ResultSnapshot_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ResultSnapshot_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        ResultSnapshot_Destroy($this->_cPtr);
    }

    function CurrentState()
    {
        $r = ResultSnapshot_CurrentState($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocSnapshot($r);
        }
        return $r;
    }

    function PreviousState()
    {
        $r = ResultSnapshot_PreviousState($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocSnapshot($r);
        }
        return $r;
    }

    function IsOk()
    {
        return ResultSnapshot_IsOk($this->_cPtr);
    }

    function IsNullTransition()
    {
        return ResultSnapshot_IsNullTransition($this->_cPtr);
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__ResultSnapshot') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ResultSnapshot();
                break;
            default:
                $this->_cPtr = new_ResultSnapshot($other_or_impl);
        }
    }
}
