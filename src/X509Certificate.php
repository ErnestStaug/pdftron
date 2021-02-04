<?php

namespace PDFNet\PDFTron;

class X509Certificate
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return X509Certificate_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return X509Certificate_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('X509Certificate_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        X509Certificate_Destroy($this->_cPtr);
    }

    function GetIssuerField()
    {
        $r = X509Certificate_GetIssuerField($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new X501DistinguishedName($r);
        }
        return $r;
    }

    function GetSubjectField()
    {
        $r = X509Certificate_GetSubjectField($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new X501DistinguishedName($r);
        }
        return $r;
    }

    function GetNotBeforeEpochTime()
    {
        return X509Certificate_GetNotBeforeEpochTime($this->_cPtr);
    }

    function GetNotAfterEpochTime()
    {
        return X509Certificate_GetNotAfterEpochTime($this->_cPtr);
    }

    function GetRawX509VersionNumber()
    {
        return X509Certificate_GetRawX509VersionNumber($this->_cPtr);
    }

    function ToString()
    {
        return X509Certificate_ToString($this->_cPtr);
    }

    function GetFingerprint($in_digest_algorithm = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = X509Certificate_GetFingerprint($this->_cPtr);
                break;
            default:
                $r = X509Certificate_GetFingerprint($this->_cPtr, $in_digest_algorithm);
        }
        return $r;
    }

    function GetSerialNumber()
    {
        $r = X509Certificate_GetSerialNumber($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetExtensions()
    {
        $r = X509Certificate_GetExtensions($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorX509Extension($r);
        }
        return $r;
    }

    function GetData()
    {
        $r = X509Certificate_GetData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__X509Certificate') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_X509Certificate();
                break;
            default:
                $this->_cPtr = new_X509Certificate($other_or_impl);
        }
    }
}
