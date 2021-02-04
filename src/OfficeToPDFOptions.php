<?php

namespace PDFNet\PDFTron;

class OfficeToPDFOptions extends ConversionOptions
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        ConversionOptions::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return ConversionOptions::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return ConversionOptions::__isset($var);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OfficeToPDFOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_OfficeToPDFOptions();
    }

    function GetLayoutResourcesPluginPath()
    {
        return OfficeToPDFOptions_GetLayoutResourcesPluginPath($this->_cPtr);
    }

    function SetLayoutResourcesPluginPath($value)
    {
        $r = OfficeToPDFOptions_SetLayoutResourcesPluginPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }

    function GetResourceDocPath()
    {
        return OfficeToPDFOptions_GetResourceDocPath($this->_cPtr);
    }

    function SetResourceDocPath($value)
    {
        $r = OfficeToPDFOptions_SetResourceDocPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }

    function GetSmartSubstitutionPluginPath()
    {
        return OfficeToPDFOptions_GetSmartSubstitutionPluginPath($this->_cPtr);
    }

    function SetSmartSubstitutionPluginPath($value)
    {
        $r = OfficeToPDFOptions_SetSmartSubstitutionPluginPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }

    function GetExcelDefaultCellBorderWidth()
    {
        return OfficeToPDFOptions_GetExcelDefaultCellBorderWidth($this->_cPtr);
    }

    function SetExcelDefaultCellBorderWidth($width)
    {
        $r = OfficeToPDFOptions_SetExcelDefaultCellBorderWidth($this->_cPtr, $width);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }

    function SetAutoFillDict($dict)
    {
        $r = OfficeToPDFOptions_SetAutoFillDict($this->_cPtr, $dict);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }

    function GetApplyPageBreaksToSheet()
    {
        return OfficeToPDFOptions_GetApplyPageBreaksToSheet($this->_cPtr);
    }

    function SetApplyPageBreaksToSheet()
    {
        $r = OfficeToPDFOptions_SetApplyPageBreaksToSheet($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OfficeToPDFOptions($r);
        }
        return $r;
    }
}
