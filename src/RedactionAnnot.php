<?php

namespace App\Documents\PdfTron;

class RedactionAnnot extends Markup
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Markup::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Markup::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Markup::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = RedactionAnnot_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RedactionAnnot($r);
        }
        return $r;
    }

    function GetQuadPointCount()
    {
        return RedactionAnnot_GetQuadPointCount($this->_cPtr);
    }

    function GetQuadPoint($idx)
    {
        $r = RedactionAnnot_GetQuadPoint($this->_cPtr, $idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new QuadPoint($r);
        }
        return $r;
    }

    function SetQuadPoint($idx, $qp)
    {
        RedactionAnnot_SetQuadPoint($this->_cPtr, $idx, $qp);
    }

    function GetAppFormXO()
    {
        $r = RedactionAnnot_GetAppFormXO($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetAppFormXO($formxo)
    {
        RedactionAnnot_SetAppFormXO($this->_cPtr, $formxo);
    }

    function GetOverlayText()
    {
        return RedactionAnnot_GetOverlayText($this->_cPtr);
    }

    function SetOverlayText($title)
    {
        RedactionAnnot_SetOverlayText($this->_cPtr, $title);
    }

    function GetUseRepeat()
    {
        return RedactionAnnot_GetUseRepeat($this->_cPtr);
    }

    function SetUseRepeat($userepeat = false)
    {
        RedactionAnnot_SetUseRepeat($this->_cPtr, $userepeat);
    }

    function GetOverlayTextAppearance()
    {
        return RedactionAnnot_GetOverlayTextAppearance($this->_cPtr);
    }

    function SetOverlayTextAppearance($app)
    {
        RedactionAnnot_SetOverlayTextAppearance($this->_cPtr, $app);
    }

    const e_LeftJustified = 0;

    const e_Centered = RedactionAnnot_e_Centered;

    const e_RightJustified = RedactionAnnot_e_RightJustified;

    const e_None = RedactionAnnot_e_None;

    function GetQuadForm()
    {
        return RedactionAnnot_GetQuadForm($this->_cPtr);
    }

    function SetQuadForm($form = null)
    {
        switch (func_num_args()) {
            case 0:
                RedactionAnnot_SetQuadForm($this->_cPtr);
                break;
            default:
                RedactionAnnot_SetQuadForm($this->_cPtr, $form);
        }
    }

    function __construct($d_or_ann_or_redaction = null)
    {
        if (is_resource($d_or_ann_or_redaction) && get_resource_type($d_or_ann_or_redaction) === '_p_pdftron__PDF__Annots__RedactionAnnot') {
            $this->_cPtr = $d_or_ann_or_redaction;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_RedactionAnnot();
                break;
            default:
                $this->_cPtr = new_RedactionAnnot($d_or_ann_or_redaction);
        }
    }
}
