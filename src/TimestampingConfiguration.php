<?php

namespace PDFNet\PDFTron;

class TimestampingConfiguration
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return TimestampingConfiguration_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return TimestampingConfiguration_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('TimestampingConfiguration_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        TimestampingConfiguration_Destroy($this->_cPtr);
    }

    function SetTimestampAuthorityServerURL($in_url)
    {
        TimestampingConfiguration_SetTimestampAuthorityServerURL($this->_cPtr, $in_url);
    }

    function SetTimestampAuthorityServerUsername($in_username)
    {
        TimestampingConfiguration_SetTimestampAuthorityServerUsername($this->_cPtr, $in_username);
    }

    function SetTimestampAuthorityServerPassword($in_password)
    {
        TimestampingConfiguration_SetTimestampAuthorityServerPassword($this->_cPtr, $in_password);
    }

    function SetUseNonce($in_use_nonce)
    {
        TimestampingConfiguration_SetUseNonce($this->_cPtr, $in_use_nonce);
    }

    function TestConfiguration($in_opts)
    {
        $r = TimestampingConfiguration_TestConfiguration($this->_cPtr, $in_opts);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new TimestampingTestResult($r);
        }
        return $r;
    }

    function __construct($other_or_in_url_or_impl = null)
    {
        if (is_resource($other_or_in_url_or_impl) && get_resource_type($other_or_in_url_or_impl) === '_p_pdftron__PDF__TimestampingConfiguration') {
            $this->_cPtr = $other_or_in_url_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_TimestampingConfiguration();
                break;
            default:
                $this->_cPtr = new_TimestampingConfiguration($other_or_in_url_or_impl);
        }
    }
}
