<?php

namespace PDFNet\PDFTron;

class RubberStamp extends Markup
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

    const e_Approved = 0;

    const e_Experimental = RubberStamp_e_Experimental;

    const e_NotApproved = RubberStamp_e_NotApproved;

    const e_AsIs = RubberStamp_e_AsIs;

    const e_Expired = RubberStamp_e_Expired;

    const e_NotForPublicRelease = RubberStamp_e_NotForPublicRelease;

    const e_Confidential = RubberStamp_e_Confidential;

    const e_Final = RubberStamp_e_Final;

    const e_Sold = RubberStamp_e_Sold;

    const e_Departmental = RubberStamp_e_Departmental;

    const e_ForComment = RubberStamp_e_ForComment;

    const e_TopSecret = RubberStamp_e_TopSecret;

    const e_ForPublicRelease = RubberStamp_e_ForPublicRelease;

    const e_Draft = RubberStamp_e_Draft;

    const e_Unknown = RubberStamp_e_Unknown;

    static function Create($doc, $pos, $icon_or_form_xobject = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = RubberStamp_Create($doc, $pos);
                break;
            default:
                $r = RubberStamp_Create($doc, $pos, $icon_or_form_xobject);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RubberStamp($r);
        }
        return $r;
    }

    function GetIcon()
    {
        return RubberStamp_GetIcon($this->_cPtr);
    }

    function GetIconName()
    {
        return RubberStamp_GetIconName($this->_cPtr);
    }

    function SetIcon($type_or_icon = null)
    {
        switch (func_num_args()) {
            case 0:
                RubberStamp_SetIcon($this->_cPtr);
                break;
            default:
                RubberStamp_SetIcon($this->_cPtr, $type_or_icon);
        }
    }

    function __construct($d_or_ann_or_rubberstamp = null)
    {
        if (is_resource($d_or_ann_or_rubberstamp) && get_resource_type($d_or_ann_or_rubberstamp) === '_p_pdftron__PDF__Annots__RubberStamp') {
            $this->_cPtr = $d_or_ann_or_rubberstamp;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_RubberStamp();
                break;
            default:
                $this->_cPtr = new_RubberStamp($d_or_ann_or_rubberstamp);
        }
    }
}
