<?php

namespace App\Documents\PdfTron;

class TrustVerificationResult
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return TrustVerificationResult_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return TrustVerificationResult_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TrustVerificationResult_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        TrustVerificationResult_Destroy($this->_cPtr);
    }

    function WasSuccessful()
    {
        return TrustVerificationResult_WasSuccessful($this->_cPtr);
    }

    function GetResultString()
    {
        return TrustVerificationResult_GetResultString($this->_cPtr);
    }

    function GetTimeOfTrustVerification()
    {
        return TrustVerificationResult_GetTimeOfTrustVerification($this->_cPtr);
    }

    function GetTimeOfTrustVerificationEnum()
    {
        return TrustVerificationResult_GetTimeOfTrustVerificationEnum($this->_cPtr);
    }

    function HasEmbeddedTimestampVerificationResult()
    {
        return TrustVerificationResult_HasEmbeddedTimestampVerificationResult($this->_cPtr);
    }

    function GetEmbeddedTimestampVerificationResult()
    {
        $r = TrustVerificationResult_GetEmbeddedTimestampVerificationResult($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new EmbeddedTimestampVerificationResult($r);
        }
        return $r;
    }

    function GetCertPath()
    {
        $r = TrustVerificationResult_GetCertPath($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorX509Certificate($r);
        }
        return $r;
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__TrustVerificationResult') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_TrustVerificationResult();
                break;
            default:
                $this->_cPtr = new_TrustVerificationResult($other_or_impl);
        }
    }
}
