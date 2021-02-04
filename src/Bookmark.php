<?php

namespace PDFNet\PDFTron;

class Bookmark
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return Bookmark_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return Bookmark_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Bookmark_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function Create($in_doc, $in_title)
    {
        $r = Bookmark_Create($in_doc, $in_title);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function IsEqual($in_bookmark)
    {
        return Bookmark_IsEqual($this->_cPtr, $in_bookmark);
    }

    function IsValid()
    {
        return Bookmark_IsValid($this->_cPtr);
    }

    function HasChildren()
    {
        return Bookmark_HasChildren($this->_cPtr);
    }

    function GetNext()
    {
        $r = Bookmark_GetNext($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function GetPrev()
    {
        $r = Bookmark_GetPrev($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function GetFirstChild()
    {
        $r = Bookmark_GetFirstChild($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function GetLastChild()
    {
        $r = Bookmark_GetLastChild($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function GetParent()
    {
        $r = Bookmark_GetParent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function Find($in_title)
    {
        $r = Bookmark_Find($this->_cPtr, $in_title);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function AddChild($in_title_or_in_bookmark)
    {
        $r = Bookmark_AddChild($this->_cPtr, $in_title_or_in_bookmark);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function AddNext($in_title_or_in_bookmark)
    {
        return Bookmark_AddNext($this->_cPtr, $in_title_or_in_bookmark);
    }

    function AddPrev($in_title_or_in_bookmark)
    {
        return Bookmark_AddPrev($this->_cPtr, $in_title_or_in_bookmark);
    }

    function Delete()
    {
        Bookmark_Delete($this->_cPtr);
    }

    function Unlink()
    {
        Bookmark_Unlink($this->_cPtr);
    }

    function GetIndent()
    {
        return Bookmark_GetIndent($this->_cPtr);
    }

    function IsOpen()
    {
        return Bookmark_IsOpen($this->_cPtr);
    }

    function SetOpen($in_open)
    {
        Bookmark_SetOpen($this->_cPtr, $in_open);
    }

    function GetOpenCount()
    {
        return Bookmark_GetOpenCount($this->_cPtr);
    }

    function GetTitle()
    {
        return Bookmark_GetTitle($this->_cPtr);
    }

    function GetTitleObj()
    {
        $r = Bookmark_GetTitleObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetTitle($title)
    {
        Bookmark_SetTitle($this->_cPtr, $title);
    }

    function GetAction()
    {
        $r = Bookmark_GetAction($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function SetAction($in_action)
    {
        Bookmark_SetAction($this->_cPtr, $in_action);
    }

    function RemoveAction()
    {
        Bookmark_RemoveAction($this->_cPtr);
    }

    function GetFlags()
    {
        return Bookmark_GetFlags($this->_cPtr);
    }

    function SetFlags($in_flags)
    {
        Bookmark_SetFlags($this->_cPtr, $in_flags);
    }

    function GetColor()
    {
        $r = Bookmark_GetColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function SetColor($in_r = 0.0, $in_g = 0.0, $in_b = 0.0)
    {
        Bookmark_SetColor($this->_cPtr, $in_r, $in_g, $in_b);
    }

    function GetSDFObj()
    {
        $r = Bookmark_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    static function CreateInternal($impl)
    {
        $r = Bookmark_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Bookmark_GetHandleInternal($this->_cPtr);
    }

    function __construct($in_bookmark_dict_or_in_bookmark_or_impl = null)
    {
        if (is_resource($in_bookmark_dict_or_in_bookmark_or_impl) && get_resource_type($in_bookmark_dict_or_in_bookmark_or_impl) === '_p_pdftron__PDF__Bookmark') {
            $this->_cPtr = $in_bookmark_dict_or_in_bookmark_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Bookmark();
                break;
            default:
                $this->_cPtr = new_Bookmark($in_bookmark_dict_or_in_bookmark_or_impl);
        }
    }
}
