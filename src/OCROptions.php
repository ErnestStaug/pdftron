<?php

namespace App\Documents\PdfTron;

class OCROptions
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

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OCROptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_OCROptions();
    }

    function AddIgnoreZonesForPage($regions, $page_num)
    {
        $r = OCROptions_AddIgnoreZonesForPage($this->_cPtr, $regions, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OCROptions($r);
        }
        return $r;
    }

    function AddLang($lang)
    {
        $r = OCROptions_AddLang($this->_cPtr, $lang);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OCROptions($r);
        }
        return $r;
    }

    function AddTextZonesForPage($regions, $page_num)
    {
        $r = OCROptions_AddTextZonesForPage($this->_cPtr, $regions, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OCROptions($r);
        }
        return $r;
    }

    function AddDPI($dpi)
    {
        $r = OCROptions_AddDPI($this->_cPtr, $dpi);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OCROptions($r);
        }
        return $r;
    }

    function GetInternalObj()
    {
        $r = OCROptions_GetInternalObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
