<?php

namespace App\Documents\PdfTron;

class ObjectIdentifier
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return ObjectIdentifier_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return ObjectIdentifier_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ObjectIdentifier_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_commonName = 0;

    const e_surname = 1;

    const e_countryName = 2;

    const e_localityName = 3;

    const e_stateOrProvinceName = 4;

    const e_streetAddress = 5;

    const e_organizationName = 6;

    const e_organizationalUnitName = 7;

    function Destroy()
    {
        ObjectIdentifier_Destroy($this->_cPtr);
    }

    function GetRawValue()
    {
        return ObjectIdentifier_GetRawValue($this->_cPtr);
    }

    function __construct($other_or_in_oid_enum_or_in_arr_or_impl = null, $in_size = null)
    {
        if (is_resource($other_or_in_oid_enum_or_in_arr_or_impl) && get_resource_type($other_or_in_oid_enum_or_in_arr_or_impl) === '_p_pdftron__PDF__ObjectIdentifier') {
            $this->_cPtr = $other_or_in_oid_enum_or_in_arr_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ObjectIdentifier();
                break;
            case 1:
                $this->_cPtr = new_ObjectIdentifier($other_or_in_oid_enum_or_in_arr_or_impl);
                break;
            default:
                $this->_cPtr = new_ObjectIdentifier($other_or_in_oid_enum_or_in_arr_or_impl, $in_size);
        }
    }
}
