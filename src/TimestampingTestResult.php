<?php

namespace PDFNet\PDFTron;

class TimestampingTestResult
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return TimestampingTestResult_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return TimestampingTestResult_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TimestampingTestResult_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        TimestampingTestResult_Destroy($this->_cPtr);
    }

    function GetStatus()
    {
        return TimestampingTestResult_GetStatus($this->_cPtr);
    }

    function GetString()
    {
        return TimestampingTestResult_GetString($this->_cPtr);
    }

    function HasResponseVerificationResult()
    {
        return TimestampingTestResult_HasResponseVerificationResult($this->_cPtr);
    }

    function GetResponseVerificationResult()
    {
        $r = TimestampingTestResult_GetResponseVerificationResult($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new EmbeddedTimestampVerificationResult($r);
        }
        return $r;
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__TimestampingTestResult') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_TimestampingTestResult();
                break;
            default:
                $this->_cPtr = new_TimestampingTestResult($other_or_impl);
        }
    }
}
