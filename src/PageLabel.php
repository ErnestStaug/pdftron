<?php

namespace App\Documents\PdfTron;

class PageLabel
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

    const e_decimal = 0;

    const e_roman_uppercase = PageLabel_e_roman_uppercase;

    const e_roman_lowercase = PageLabel_e_roman_lowercase;

    const e_alphabetic_uppercase = PageLabel_e_alphabetic_uppercase;

    const e_alphabetic_lowercase = PageLabel_e_alphabetic_lowercase;

    const e_none = PageLabel_e_none;

    static function Create($doc, $style, $prefix = null, $start_at = 1)
    {
        switch (func_num_args()) {
            case 2:
                $r = PageLabel_Create($doc, $style);
                break;
            default:
                $r = PageLabel_Create($doc, $style, $prefix, $start_at);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PageLabel($r);
        }
        return $r;
    }

    function IsEqual($d)
    {
        return PageLabel_IsEqual($this->_cPtr, $d);
    }

    function IsValid()
    {
        return PageLabel_IsValid($this->_cPtr);
    }

    function GetLabelTitle($page_num)
    {
        return PageLabel_GetLabelTitle($this->_cPtr, $page_num);
    }

    function SetStyle($style)
    {
        PageLabel_SetStyle($this->_cPtr, $style);
    }

    function GetStyle()
    {
        return PageLabel_GetStyle($this->_cPtr);
    }

    function GetPrefix()
    {
        return PageLabel_GetPrefix($this->_cPtr);
    }

    function SetPrefix($prefix)
    {
        PageLabel_SetPrefix($this->_cPtr, $prefix);
    }

    function GetStart()
    {
        return PageLabel_GetStart($this->_cPtr);
    }

    function SetStart($start_at)
    {
        PageLabel_SetStart($this->_cPtr, $start_at);
    }

    function GetFirstPageNum()
    {
        return PageLabel_GetFirstPageNum($this->_cPtr);
    }

    function GetLastPageNum()
    {
        return PageLabel_GetLastPageNum($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = PageLabel_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($l_or_d = null, $first_page = null, $last_page = null)
    {
        if (is_resource($l_or_d) && get_resource_type($l_or_d) === '_p_pdftron__PDF__PageLabel') {
            $this->_cPtr = $l_or_d;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PageLabel();
                break;
            case 1:
                $this->_cPtr = new_PageLabel($l_or_d);
                break;
            case 2:
                $this->_cPtr = new_PageLabel($l_or_d, $first_page);
                break;
            default:
                $this->_cPtr = new_PageLabel($l_or_d, $first_page, $last_page);
        }
    }
}
