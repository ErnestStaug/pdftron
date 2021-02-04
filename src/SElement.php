<?php

namespace App\Documents\PdfTron;

class SElement
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_elem') return SElement_mp_elem_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_elem') return SElement_mp_elem_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('SElement_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function Create($doc, $struct_type)
    {
        $r = SElement_Create($doc, $struct_type);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function Insert($kid, $insert_before)
    {
        SElement_Insert($this->_cPtr, $kid, $insert_before);
    }

    function CreateContentItem($doc, $page, $insert_before = -1)
    {
        return SElement_CreateContentItem($this->_cPtr, $doc, $page, $insert_before);
    }

    function IsValid()
    {
        return SElement_IsValid($this->_cPtr);
    }

    function GetType()
    {
        return SElement_GetType($this->_cPtr);
    }

    function GetNumKids()
    {
        return SElement_GetNumKids($this->_cPtr);
    }

    function IsContentItem($index)
    {
        return SElement_IsContentItem($this->_cPtr, $index);
    }

    function GetAsContentItem($index)
    {
        $r = SElement_GetAsContentItem($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ContentItem($r);
        }
        return $r;
    }

    function GetAsStructElem($index)
    {
        $r = SElement_GetAsStructElem($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetParent()
    {
        $r = SElement_GetParent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetStructTreeRoot()
    {
        $r = SElement_GetStructTreeRoot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new STree($r);
        }
        return $r;
    }

    function HasTitle()
    {
        return SElement_HasTitle($this->_cPtr);
    }

    function GetTitle()
    {
        return SElement_GetTitle($this->_cPtr);
    }

    function GetID()
    {
        $r = SElement_GetID($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function HasActualText()
    {
        return SElement_HasActualText($this->_cPtr);
    }

    function GetActualText()
    {
        return SElement_GetActualText($this->_cPtr);
    }

    function HasAlt()
    {
        return SElement_HasAlt($this->_cPtr);
    }

    function GetAlt()
    {
        return SElement_GetAlt($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = SElement_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($dict_or_impl = null)
    {
        if (is_resource($dict_or_impl) && get_resource_type($dict_or_impl) === '_p_pdftron__PDF__Struct__SElement') {
            $this->_cPtr = $dict_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_SElement();
                break;
            default:
                $this->_cPtr = new_SElement($dict_or_impl);
        }
    }
}
