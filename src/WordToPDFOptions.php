<?php

namespace PDFNet\PDFTron;

class WordToPDFOptions extends ConversionOptions
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
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__WordToPDFOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_WordToPDFOptions();
    }

    function GetLayoutResourcesPluginPath()
    {
        return WordToPDFOptions_GetLayoutResourcesPluginPath($this->_cPtr);
    }

    function SetLayoutResourcesPluginPath($value)
    {
        $r = WordToPDFOptions_SetLayoutResourcesPluginPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new WordToPDFOptions($r);
        }
        return $r;
    }

    function GetResourceDocPath()
    {
        return WordToPDFOptions_GetResourceDocPath($this->_cPtr);
    }

    function SetResourceDocPath($value)
    {
        $r = WordToPDFOptions_SetResourceDocPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new WordToPDFOptions($r);
        }
        return $r;
    }

    function GetSmartSubstitutionPluginPath()
    {
        return WordToPDFOptions_GetSmartSubstitutionPluginPath($this->_cPtr);
    }

    function SetSmartSubstitutionPluginPath($value)
    {
        $r = WordToPDFOptions_SetSmartSubstitutionPluginPath($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new WordToPDFOptions($r);
        }
        return $r;
    }
}
