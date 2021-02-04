<?php

namespace PDFNet\PDFTron;

class DigestAlgorithm
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_SHA1 = 0;

    const e_SHA256 = 1;

    const e_SHA384 = 2;

    const e_SHA512 = 3;

    const e_RIPEMD160 = 4;

    const e_unknown_digest_algorithm = 5;

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__DigestAlgorithm') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_DigestAlgorithm();
    }
}
