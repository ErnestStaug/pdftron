<?php

namespace App\Documents\PdfTron;

class DigitalSignatureField
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return DigitalSignatureField_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return DigitalSignatureField_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('DigitalSignatureField_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_adbe_x509_rsa_sha1 = 0;

    const e_adbe_pkcs7_detached = 1;

    const e_adbe_pkcs7_sha1 = 2;

    const e_ETSI_CAdES_detached = 3;

    const e_ETSI_RFC3161 = 4;

    const e_unknown = 5;

    const e_absent = 6;

    const e_no_changes_allowed = 1;

    const e_formfilling_signing_allowed = 2;

    const e_annotating_formfilling_signing_allowed = 3;

    const e_unrestricted = 4;

    const e_lock_all = 0;

    const e_include = 1;

    const e_exclude = 2;

    function HasCryptographicSignature()
    {
        return DigitalSignatureField_HasCryptographicSignature($this->_cPtr);
    }

    function GetSubFilter()
    {
        return DigitalSignatureField_GetSubFilter($this->_cPtr);
    }

    function GetSignatureName()
    {
        return DigitalSignatureField_GetSignatureName($this->_cPtr);
    }

    function GetSigningTime()
    {
        $r = DigitalSignatureField_GetSigningTime($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Date($r);
        }
        return $r;
    }

    function GetLocation()
    {
        return DigitalSignatureField_GetLocation($this->_cPtr);
    }

    function GetReason()
    {
        return DigitalSignatureField_GetReason($this->_cPtr);
    }

    function GetContactInfo()
    {
        return DigitalSignatureField_GetContactInfo($this->_cPtr);
    }

    function GetCert($in_index)
    {
        $r = DigitalSignatureField_GetCert($this->_cPtr, $in_index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetCertCount()
    {
        return DigitalSignatureField_GetCertCount($this->_cPtr);
    }

    function HasVisibleAppearance()
    {
        return DigitalSignatureField_HasVisibleAppearance($this->_cPtr);
    }

    function SetContactInfo($in_contact_info)
    {
        DigitalSignatureField_SetContactInfo($this->_cPtr, $in_contact_info);
    }

    function SetLocation($in_location)
    {
        DigitalSignatureField_SetLocation($this->_cPtr, $in_location);
    }

    function SetReason($in_reason)
    {
        DigitalSignatureField_SetReason($this->_cPtr, $in_reason);
    }

    function SetFieldPermissions($in_action, $in_field_names = null)
    {
        switch (func_num_args()) {
            case 1:
                DigitalSignatureField_SetFieldPermissions($this->_cPtr, $in_action);
                break;
            default:
                DigitalSignatureField_SetFieldPermissions($this->_cPtr, $in_action, $in_field_names);
        }
    }

    function SetDocumentPermissions($in_perms)
    {
        DigitalSignatureField_SetDocumentPermissions($this->_cPtr, $in_perms);
    }

    function SignOnNextSave($in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size, $in_password = null)
    {
        switch (func_num_args()) {
            case 2:
                DigitalSignatureField_SignOnNextSave($this->_cPtr, $in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size);
                break;
            default:
                DigitalSignatureField_SignOnNextSave($this->_cPtr, $in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size, $in_password);
        }
    }

    function SignOnNextSaveWithCustomHandler($in_signature_handler_id)
    {
        DigitalSignatureField_SignOnNextSaveWithCustomHandler($this->_cPtr, $in_signature_handler_id);
    }

    function CertifyOnNextSave($in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size, $in_password = null)
    {
        switch (func_num_args()) {
            case 2:
                DigitalSignatureField_CertifyOnNextSave($this->_cPtr, $in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size);
                break;
            default:
                DigitalSignatureField_CertifyOnNextSave($this->_cPtr, $in_pkcs12_keyfile_path_or_in_pkcs12_buffer, $in_password_or_in_buf_size, $in_password);
        }
    }

    function CertifyOnNextSaveWithCustomHandler($in_signature_handler_id)
    {
        DigitalSignatureField_CertifyOnNextSaveWithCustomHandler($this->_cPtr, $in_signature_handler_id);
    }

    function GetSDFObj()
    {
        $r = DigitalSignatureField_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsLockedByDigitalSignature()
    {
        return DigitalSignatureField_IsLockedByDigitalSignature($this->_cPtr);
    }

    function GetLockedFields()
    {
        return DigitalSignatureField_GetLockedFields($this->_cPtr);
    }

    function GetDocumentPermissions()
    {
        return DigitalSignatureField_GetDocumentPermissions($this->_cPtr);
    }

    function ClearSignature()
    {
        DigitalSignatureField_ClearSignature($this->_cPtr);
    }

    function Verify($in_opts)
    {
        $r = DigitalSignatureField_Verify($this->_cPtr, $in_opts);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VerificationResult($r);
        }
        return $r;
    }

    function IsCertification()
    {
        return DigitalSignatureField_IsCertification($this->_cPtr);
    }

    function GetSignerCertFromCMS()
    {
        $r = DigitalSignatureField_GetSignerCertFromCMS($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new X509Certificate($r);
        }
        return $r;
    }

    function GetByteRanges()
    {
        $r = DigitalSignatureField_GetByteRanges($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorByteRange($r);
        }
        return $r;
    }

    function GetCertPathsFromCMS()
    {
        $r = DigitalSignatureField_GetCertPathsFromCMS($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorVectorX509Certificate($r);
        }
        return $r;
    }

    function EnableLTVOfflineVerification($in_verification_result)
    {
        return DigitalSignatureField_EnableLTVOfflineVerification($this->_cPtr, $in_verification_result);
    }

    function TimestampOnNextSave($in_timestamping_config, $in_timestamp_response_verification_options)
    {
        DigitalSignatureField_TimestampOnNextSave($this->_cPtr, $in_timestamping_config, $in_timestamp_response_verification_options);
    }

    function UseSubFilter($in_subfilter_type, $in_make_mandatory = true)
    {
        DigitalSignatureField_UseSubFilter($this->_cPtr, $in_subfilter_type, $in_make_mandatory);
    }

    function __construct($other_or_in_field_or_impl)
    {
        if (is_resource($other_or_in_field_or_impl) && get_resource_type($other_or_in_field_or_impl) === '_p_pdftron__PDF__DigitalSignatureField') {
            $this->_cPtr = $other_or_in_field_or_impl;
            return;
        }
        $this->_cPtr = new_DigitalSignatureField($other_or_in_field_or_impl);
    }
}
