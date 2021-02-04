<?php

namespace PDFNet\PDFTron;

class Style
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_style') return Style_mp_style_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_style') return Style_mp_style_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Style_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function GetFont()
    {
        $r = Style_GetFont($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetFontName()
    {
        return Style_GetFontName($this->_cPtr);
    }

    function GetFontSize()
    {
        return Style_GetFontSize($this->_cPtr);
    }

    function GetWeight()
    {
        return Style_GetWeight($this->_cPtr);
    }

    function IsItalic()
    {
        return Style_IsItalic($this->_cPtr);
    }

    function IsSerif()
    {
        return Style_IsSerif($this->_cPtr);
    }

    function GetColor()
    {
        $r = Style_GetColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorInt($r);
        }
        return $r;
    }

    function IsEqual($s)
    {
        return Style_IsEqual($this->_cPtr, $s);
    }

    function __construct($s_or_impl = null)
    {
        if (is_resource($s_or_impl) && get_resource_type($s_or_impl) === '_p_pdftron__PDF__Style') {
            $this->_cPtr = $s_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Style();
                break;
            default:
                $this->_cPtr = new_Style($s_or_impl);
        }
    }
}
