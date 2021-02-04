<?php

namespace App\Documents\PdfTron;

class VerificationResult
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return VerificationResult_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return VerificationResult_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('VerificationResult_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_no_error = 0;

    const e_corrupt_file = 1;

    const e_unsigned = 2;

    const e_bad_byteranges = 3;

    const e_corrupt_cryptographic_contents = 4;

    const e_digest_invalid = 0;

    const e_digest_verified = 1;

    const e_digest_verification_disabled = 2;

    const e_weak_digest_algorithm_but_digest_verifiable = 3;

    const e_no_digest_status = 4;

    const e_unsupported_encoding = 5;

    const e_unsupported_digest_algorithm = 6;

    const e_trust_verified = 0;

    const e_untrusted = 1;

    const e_trust_verification_disabled = 2;

    const e_no_trust_status = 3;

    const e_unsupported_trust_features = 4;

    const e_invalidated_by_disallowed_changes = 0;

    const e_has_allowed_changes = 1;

    const e_unmodified = 2;

    const e_permissions_verification_disabled = 3;

    const e_no_permissions_status = 4;

    const e_unsupported_permissions_features = 5;

    function Destroy()
    {
        VerificationResult_Destroy($this->_cPtr);
    }

    function GetVerificationStatus()
    {
        return VerificationResult_GetVerificationStatus($this->_cPtr);
    }

    function GetDocumentStatus()
    {
        return VerificationResult_GetDocumentStatus($this->_cPtr);
    }

    function GetDigestStatus()
    {
        return VerificationResult_GetDigestStatus($this->_cPtr);
    }

    function GetTrustStatus()
    {
        return VerificationResult_GetTrustStatus($this->_cPtr);
    }

    function GetPermissionsStatus()
    {
        return VerificationResult_GetPermissionsStatus($this->_cPtr);
    }

    function HasTrustVerificationResult()
    {
        return VerificationResult_HasTrustVerificationResult($this->_cPtr);
    }

    function GetTrustVerificationResult()
    {
        $r = VerificationResult_GetTrustVerificationResult($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new TrustVerificationResult($r);
        }
        return $r;
    }

    function GetDisallowedChanges()
    {
        $r = VerificationResult_GetDisallowedChanges($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDisallowedChange($r);
        }
        return $r;
    }

    function GetDigestAlgorithm()
    {
        return VerificationResult_GetDigestAlgorithm($this->_cPtr);
    }

    function GetDocumentStatusAsString()
    {
        return VerificationResult_GetDocumentStatusAsString($this->_cPtr);
    }

    function GetDigestStatusAsString()
    {
        return VerificationResult_GetDigestStatusAsString($this->_cPtr);
    }

    function GetTrustStatusAsString()
    {
        return VerificationResult_GetTrustStatusAsString($this->_cPtr);
    }

    function GetPermissionsStatusAsString()
    {
        return VerificationResult_GetPermissionsStatusAsString($this->_cPtr);
    }

    function GetUnsupportedFeatures()
    {
        return VerificationResult_GetUnsupportedFeatures($this->_cPtr);
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__VerificationResult') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VerificationResult();
                break;
            default:
                $this->_cPtr = new_VerificationResult($other_or_impl);
        }
    }
}
