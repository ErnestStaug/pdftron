<?php

namespace App\Documents\PdfTron;

class EmbeddedTimestampVerificationResult
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return EmbeddedTimestampVerificationResult_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return EmbeddedTimestampVerificationResult_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('EmbeddedTimestampVerificationResult_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        EmbeddedTimestampVerificationResult_Destroy($this->_cPtr);
    }

    function GetVerificationStatus()
    {
        return EmbeddedTimestampVerificationResult_GetVerificationStatus($this->_cPtr);
    }

    function GetCMSDigestStatus()
    {
        return EmbeddedTimestampVerificationResult_GetCMSDigestStatus($this->_cPtr);
    }

    function GetMessageImprintDigestStatus()
    {
        return EmbeddedTimestampVerificationResult_GetMessageImprintDigestStatus($this->_cPtr);
    }

    function GetTrustStatus()
    {
        return EmbeddedTimestampVerificationResult_GetTrustStatus($this->_cPtr);
    }

    function GetCMSDigestStatusAsString()
    {
        return EmbeddedTimestampVerificationResult_GetCMSDigestStatusAsString($this->_cPtr);
    }

    function GetMessageImprintDigestStatusAsString()
    {
        return EmbeddedTimestampVerificationResult_GetMessageImprintDigestStatusAsString($this->_cPtr);
    }

    function GetTrustStatusAsString()
    {
        return EmbeddedTimestampVerificationResult_GetTrustStatusAsString($this->_cPtr);
    }

    function HasTrustVerificationResult()
    {
        return EmbeddedTimestampVerificationResult_HasTrustVerificationResult($this->_cPtr);
    }

    function GetTrustVerificationResult()
    {
        $r = EmbeddedTimestampVerificationResult_GetTrustVerificationResult($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new TrustVerificationResult($r);
        }
        return $r;
    }

    function GetCMSSignatureDigestAlgorithm()
    {
        return EmbeddedTimestampVerificationResult_GetCMSSignatureDigestAlgorithm($this->_cPtr);
    }

    function GetMessageImprintDigestAlgorithm()
    {
        return EmbeddedTimestampVerificationResult_GetMessageImprintDigestAlgorithm($this->_cPtr);
    }

    function GetUnsupportedFeatures()
    {
        return EmbeddedTimestampVerificationResult_GetUnsupportedFeatures($this->_cPtr);
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__EmbeddedTimestampVerificationResult') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_EmbeddedTimestampVerificationResult();
                break;
            default:
                $this->_cPtr = new_EmbeddedTimestampVerificationResult($other_or_impl);
        }
    }
}
