<?php

namespace App\Documents\PdfTron;

class CADConvertOptions
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
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__CADConvertOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CADConvertOptions();
    }

    function GetAllowThinLines()
    {
        return CADConvertOptions_GetAllowThinLines($this->_cPtr);
    }

    function SetAllowThinLines($value)
    {
        $r = CADConvertOptions_SetAllowThinLines($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetAutoRotate()
    {
        return CADConvertOptions_GetAutoRotate($this->_cPtr);
    }

    function SetAutoRotate($value)
    {
        $r = CADConvertOptions_SetAutoRotate($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetBackgroundColor()
    {
        $r = CADConvertOptions_GetBackgroundColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function SetBackgroundColor($value)
    {
        $r = CADConvertOptions_SetBackgroundColor($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function SetColorMode($value)
    {
        $r = CADConvertOptions_SetColorMode($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetPageHeight()
    {
        return CADConvertOptions_GetPageHeight($this->_cPtr);
    }

    function SetPageHeight($value)
    {
        $r = CADConvertOptions_SetPageHeight($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetPageWidth()
    {
        return CADConvertOptions_GetPageWidth($this->_cPtr);
    }

    function SetPageWidth($value)
    {
        $r = CADConvertOptions_SetPageWidth($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetRasterDPI()
    {
        return CADConvertOptions_GetRasterDPI($this->_cPtr);
    }

    function SetRasterDPI($value)
    {
        $r = CADConvertOptions_SetRasterDPI($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function AddSheets($value)
    {
        $r = CADConvertOptions_AddSheets($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CADConvertOptions($r);
        }
        return $r;
    }

    function GetInternalObj()
    {
        $r = CADConvertOptions_GetInternalObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
