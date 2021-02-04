<?php

namespace App\Documents\PdfTron;

class DocumentConversion
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return DocumentConversion_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return DocumentConversion_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('DocumentConversion_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const eSuccess = 0;

    const eIncomplete = 1;

    const eFailure = 2;

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__PDF__DocumentConversion') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_DocumentConversion();
                break;
            default:
                $this->_cPtr = new_DocumentConversion($other_or_impl);
        }
    }

    function Destroy()
    {
        DocumentConversion_Destroy($this->_cPtr);
    }

    function TryConvert()
    {
        return DocumentConversion_TryConvert($this->_cPtr);
    }

    function Convert()
    {
        DocumentConversion_Convert($this->_cPtr);
    }

    function ConvertNextPage()
    {
        DocumentConversion_ConvertNextPage($this->_cPtr);
    }

    function GetDoc()
    {
        $r = DocumentConversion_GetDoc($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PDFDoc($r);
        }
        return $r;
    }

    function GetConversionStatus()
    {
        return DocumentConversion_GetConversionStatus($this->_cPtr);
    }

    function CancelConversion()
    {
        DocumentConversion_CancelConversion($this->_cPtr);
    }

    function IsCancelled()
    {
        return DocumentConversion_IsCancelled($this->_cPtr);
    }

    function HasProgressTracking()
    {
        return DocumentConversion_HasProgressTracking($this->_cPtr);
    }

    function GetProgress()
    {
        return DocumentConversion_GetProgress($this->_cPtr);
    }

    function GetProgressLabel()
    {
        return DocumentConversion_GetProgressLabel($this->_cPtr);
    }

    function GetNumConvertedPages()
    {
        return DocumentConversion_GetNumConvertedPages($this->_cPtr);
    }

    function GetErrorString()
    {
        return DocumentConversion_GetErrorString($this->_cPtr);
    }

    function GetNumWarnings()
    {
        return DocumentConversion_GetNumWarnings($this->_cPtr);
    }

    function GetWarningString($index)
    {
        return DocumentConversion_GetWarningString($this->_cPtr, $index);
    }

    static function CreateInternal($impl)
    {
        $r = DocumentConversion_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocumentConversion($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return DocumentConversion_GetHandleInternal($this->_cPtr);
    }
}
