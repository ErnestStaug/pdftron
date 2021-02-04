<?php

namespace PDFNet\PDFTron;

abstract class SignatureHandler
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

    function GetName()
    {
        return SignatureHandler_GetName($this->_cPtr);
    }

    function AppendData($data)
    {
        SignatureHandler_AppendData($this->_cPtr, $data);
    }

    function Reset()
    {
        return SignatureHandler_Reset($this->_cPtr);
    }

    function CreateSignature()
    {
        $r = SignatureHandler_CreateSignature($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function c_Clone()
    {
        $r = SignatureHandler_c_Clone($this->_cPtr);
        $this->_cPtr = $r;
        return $this;
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__SDF__SignatureHandler') {
            $this->_cPtr = $res;
            return;
        }
        if (get_class($this) === 'SignatureHandler') {
            $_this = null;
        } else {
            $_this = $this;
        }
        $this->_cPtr = new_SignatureHandler($_this);
    }
}
