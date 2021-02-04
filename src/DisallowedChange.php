<?php

namespace App\Documents\PdfTron;

class DisallowedChange
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return DisallowedChange_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return DisallowedChange_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('DisallowedChange_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_form_filled = 0;

    const e_digital_signature_signed = 1;

    const e_page_template_instantiated = 2;

    const e_annotation_created_or_updated_or_deleted = 3;

    const e_other = 4;

    const e_unknown = 5;

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__DisallowedChange') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_DisallowedChange();
                break;
            default:
                $this->_cPtr = new_DisallowedChange($other_or_impl);
        }
    }

    function Destroy()
    {
        DisallowedChange_Destroy($this->_cPtr);
    }

    function GetObjNum()
    {
        return DisallowedChange_GetObjNum($this->_cPtr);
    }

    function GetType()
    {
        return DisallowedChange_GetType($this->_cPtr);
    }

    function GetTypeAsString()
    {
        return DisallowedChange_GetTypeAsString($this->_cPtr);
    }
}
