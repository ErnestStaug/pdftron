<?php

namespace PDFNet\PDFTron;

class Page
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_page') return Page_mp_page_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_page') return Page_mp_page_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Page_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function IsValid()
    {
        return Page_IsValid($this->_cPtr);
    }

    function GetIndex()
    {
        return Page_GetIndex($this->_cPtr);
    }

    const e_media = 0;

    const e_crop = Page_e_crop;

    const e_bleed = Page_e_bleed;

    const e_trim = Page_e_trim;

    const e_art = Page_e_art;

    function GetBox($type)
    {
        $r = Page_GetBox($this->_cPtr, $type);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function SetBox($type, $box)
    {
        Page_SetBox($this->_cPtr, $type, $box);
    }

    function GetCropBox()
    {
        $r = Page_GetCropBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function SetCropBox($box)
    {
        Page_SetCropBox($this->_cPtr, $box);
    }

    function GetMediaBox()
    {
        $r = Page_GetMediaBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function SetMediaBox($box)
    {
        Page_SetMediaBox($this->_cPtr, $box);
    }

    function GetVisibleContentBox()
    {
        $r = Page_GetVisibleContentBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    const e_0 = 0;

    const e_90 = Page_e_90;

    const e_180 = Page_e_180;

    const e_270 = Page_e_270;

    static function AddRotations($r0, $r1)
    {
        return Page_AddRotations($r0, $r1);
    }

    static function SubtractRotations($r0, $r1)
    {
        return Page_SubtractRotations($r0, $r1);
    }

    static function RotationToDegree($r_)
    {
        return Page_RotationToDegree($r_);
    }

    static function DegreeToRotation($r_)
    {
        return Page_DegreeToRotation($r_);
    }

    function GetRotation()
    {
        return Page_GetRotation($this->_cPtr);
    }

    function SetRotation($angle)
    {
        Page_SetRotation($this->_cPtr, $angle);
    }

    function GetPageWidth($box_type = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Page_GetPageWidth($this->_cPtr);
                break;
            default:
                $r = Page_GetPageWidth($this->_cPtr, $box_type);
        }
        return $r;
    }

    function GetPageHeight($box_type = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Page_GetPageHeight($this->_cPtr);
                break;
            default:
                $r = Page_GetPageHeight($this->_cPtr, $box_type);
        }
        return $r;
    }

    function GetDefaultMatrix($flip_y = false, $box_type = null, $angle = null)
    {
        switch (func_num_args()) {
            case 0:
            case 1:
                $r = Page_GetDefaultMatrix($this->_cPtr, $flip_y);
                break;
            case 2:
                $r = Page_GetDefaultMatrix($this->_cPtr, $flip_y, $box_type);
                break;
            default:
                $r = Page_GetDefaultMatrix($this->_cPtr, $flip_y, $box_type, $angle);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetAnnots()
    {
        $r = Page_GetAnnots($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetNumAnnots()
    {
        return Page_GetNumAnnots($this->_cPtr);
    }

    function GetAnnot($index)
    {
        $r = Page_GetAnnot($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Annot($r);
        }
        return $r;
    }

    const e_action_trigger_page_open = 11;

    const e_action_trigger_page_close = 12;

    function GetTriggerAction($trigger)
    {
        $r = Page_GetTriggerAction($this->_cPtr, $trigger);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function AnnotInsert($pos, $annot)
    {
        Page_AnnotInsert($this->_cPtr, $pos, $annot);
    }

    function AnnotPushBack($annot)
    {
        Page_AnnotPushBack($this->_cPtr, $annot);
    }

    function AnnotPushFront($annot)
    {
        Page_AnnotPushFront($this->_cPtr, $annot);
    }

    function AnnotRemove($annot_or_index)
    {
        Page_AnnotRemove($this->_cPtr, $annot_or_index);
    }

    function Scale($scale)
    {
        Page_Scale($this->_cPtr, $scale);
    }

    function FlattenField($field_to_flatten)
    {
        Page_FlattenField($this->_cPtr, $field_to_flatten);
    }

    function HasTransition()
    {
        return Page_HasTransition($this->_cPtr);
    }

    function GetUserUnitSize()
    {
        return Page_GetUserUnitSize($this->_cPtr);
    }

    function SetUserUnitSize($unit_size)
    {
        Page_SetUserUnitSize($this->_cPtr, $unit_size);
    }

    function GetResourceDict()
    {
        $r = Page_GetResourceDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetContents()
    {
        $r = Page_GetContents($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = Page_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function FindInheritedAttribute($attrib)
    {
        $r = Page_FindInheritedAttribute($this->_cPtr, $attrib);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetThumb()
    {
        $r = Page_GetThumb($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($page_dict_or_p_or_impl = null)
    {
        if (is_resource($page_dict_or_p_or_impl) && get_resource_type($page_dict_or_p_or_impl) === '_p_pdftron__PDF__Page') {
            $this->_cPtr = $page_dict_or_p_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Page();
                break;
            default:
                $this->_cPtr = new_Page($page_dict_or_p_or_impl);
        }
    }
}
