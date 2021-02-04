<?php

namespace PDFNet\PDFTron;

class Proxy
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return Proxy_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return Proxy_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Proxy_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Proxy') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_Proxy();
    }

    const e_default = 0;

    const e_none = Proxy_e_none;

    const e_http = Proxy_e_http;

    const e_socks5 = Proxy_e_socks5;

    function SetType($type)
    {
        Proxy_SetType($this->_cPtr, $type);
    }

    function SetHost($host)
    {
        Proxy_SetHost($this->_cPtr, $host);
    }

    function SetPort($port)
    {
        Proxy_SetPort($this->_cPtr, $port);
    }

    function SetUsername($username)
    {
        Proxy_SetUsername($this->_cPtr, $username);
    }

    function SetPassword($password)
    {
        Proxy_SetPassword($this->_cPtr, $password);
    }

    function Destroy()
    {
        Proxy_Destroy($this->_cPtr);
    }
}
