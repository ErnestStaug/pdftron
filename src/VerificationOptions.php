<?php

namespace App\Documents\PdfTron;

class VerificationOptions
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return VerificationOptions_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return VerificationOptions_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('VerificationOptions_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_compatibility_and_archiving = 0;

    const e_maximum = 1;

    const e_signing = 0;

    const e_timestamp = 1;

    const e_current = 2;

    function Destroy()
    {
        VerificationOptions_Destroy($this->_cPtr);
    }

    function __construct($other_or_impl_or_level)
    {
        if (is_resource($other_or_impl_or_level) && get_resource_type($other_or_impl_or_level) === '_p_pdftron__PDF__VerificationOptions') {
            $this->_cPtr = $other_or_impl_or_level;
            return;
        }
        $this->_cPtr = new_VerificationOptions($other_or_impl_or_level);
    }

    function AddTrustedCertificate($in_certificate_buf_or_in_filepath, $in_buf_size = null)
    {
        switch (func_num_args()) {
            case 1:
                VerificationOptions_AddTrustedCertificate($this->_cPtr, $in_certificate_buf_or_in_filepath);
                break;
            default:
                VerificationOptions_AddTrustedCertificate($this->_cPtr, $in_certificate_buf_or_in_filepath, $in_buf_size);
        }
    }

    function AddTrustedCertificates($in_P7C_binary_DER_certificates_file_data, $in_size)
    {
        VerificationOptions_AddTrustedCertificates($this->_cPtr, $in_P7C_binary_DER_certificates_file_data, $in_size);
    }

    function EnableModificationVerification($in_on_or_off)
    {
        VerificationOptions_EnableModificationVerification($this->_cPtr, $in_on_or_off);
    }

    function EnableDigestVerification($in_on_or_off)
    {
        VerificationOptions_EnableDigestVerification($this->_cPtr, $in_on_or_off);
    }

    function EnableTrustVerification($in_on_or_off)
    {
        VerificationOptions_EnableTrustVerification($this->_cPtr, $in_on_or_off);
    }

    function EnableOnlineCRLRevocationChecking($in_on_or_off)
    {
        VerificationOptions_EnableOnlineCRLRevocationChecking($this->_cPtr, $in_on_or_off);
    }

    function EnableOnlineOCSPRevocationChecking($in_on_or_off)
    {
        VerificationOptions_EnableOnlineOCSPRevocationChecking($this->_cPtr, $in_on_or_off);
    }

    function EnableOnlineRevocationChecking($in_on_or_off)
    {
        VerificationOptions_EnableOnlineRevocationChecking($this->_cPtr, $in_on_or_off);
    }
}
