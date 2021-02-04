<?php

namespace App\Documents\PdfTron;

class Link extends Annot
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Annot::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Annot::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Annot::__isset($var);
    }

    static function Create($doc, $pos, $action = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Link_Create($doc, $pos);
                break;
            default:
                $r = Link_Create($doc, $pos, $action);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Link($r);
        }
        return $r;
    }

    function RemoveAction()
    {
        Link_RemoveAction($this->_cPtr);
    }

    function GetAction()
    {
        $r = Link_GetAction($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function SetAction($action)
    {
        Link_SetAction($this->_cPtr, $action);
    }

    const e_none = 0;

    const e_invert = Link_e_invert;

    const e_outline = Link_e_outline;

    const e_push = Link_e_push;

    function GetHighlightingMode()
    {
        return Link_GetHighlightingMode($this->_cPtr);
    }

    function SetHighlightingMode($mode)
    {
        Link_SetHighlightingMode($this->_cPtr, $mode);
    }

    function GetQuadPointCount()
    {
        return Link_GetQuadPointCount($this->_cPtr);
    }

    function GetQuadPoint($idx)
    {
        $r = Link_GetQuadPoint($this->_cPtr, $idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new QuadPoint($r);
        }
        return $r;
    }

    function SetQuadPoint($idx, $qp)
    {
        Link_SetQuadPoint($this->_cPtr, $idx, $qp);
    }

    static function GetNormalizedUrl($url)
    {
        return Link_GetNormalizedUrl($url);
    }

    function __construct($d_or_ann_or_link = null)
    {
        if (is_resource($d_or_ann_or_link) && get_resource_type($d_or_ann_or_link) === '_p_pdftron__PDF__Annots__Link') {
            $this->_cPtr = $d_or_ann_or_link;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Link();
                break;
            default:
                $this->_cPtr = new_Link($d_or_ann_or_link);
        }
    }
}
