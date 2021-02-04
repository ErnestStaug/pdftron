<?php

namespace App\Documents\PdfTron;

class ContentItem
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_item') return ContentItem_mp_item_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_item') return ContentItem_mp_item_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ContentItem_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_MCR = 0;

    const e_MCID = ContentItem_e_MCID;

    const e_OBJR = ContentItem_e_OBJR;

    const e_Unknown = ContentItem_e_Unknown;

    function GetType()
    {
        return ContentItem_GetType($this->_cPtr);
    }

    function GetParent()
    {
        $r = ContentItem_GetParent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetPage()
    {
        $r = ContentItem_GetPage($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Page($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = ContentItem_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetMCID()
    {
        return ContentItem_GetMCID($this->_cPtr);
    }

    function GetContainingStm()
    {
        $r = ContentItem_GetContainingStm($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetStmOwner()
    {
        $r = ContentItem_GetStmOwner($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetRefObj()
    {
        $r = ContentItem_GetRefObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($impl)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Struct__ContentItem') {
            $this->_cPtr = $impl;
            return;
        }
        $this->_cPtr = new_ContentItem($impl);
    }
}
