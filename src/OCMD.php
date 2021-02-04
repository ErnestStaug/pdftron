<?php

namespace App\Documents\PdfTron;

class OCMD
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return OCMD_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return OCMD_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('OCMD_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_AllOn = 0;

    const e_AnyOn = OCMD_e_AnyOn;

    const e_AnyOff = OCMD_e_AnyOff;

    const e_AllOff = OCMD_e_AllOff;

    static function Create($doc, $ocgs, $vis_policy)
    {
        $r = OCMD_Create($doc, $ocgs, $vis_policy);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new OCMD($r);
        }
        return $r;
    }

    function IsValid()
    {
        return OCMD_IsValid($this->_cPtr);
    }

    function GetOCGs()
    {
        $r = OCMD_GetOCGs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetVisibilityPolicy()
    {
        return OCMD_GetVisibilityPolicy($this->_cPtr);
    }

    function SetVisibilityPolicy($vis_policy)
    {
        OCMD_SetVisibilityPolicy($this->_cPtr, $vis_policy);
    }

    function GetVisibilityExpression()
    {
        $r = OCMD_GetVisibilityExpression($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsCurrentlyVisible($context)
    {
        return OCMD_IsCurrentlyVisible($this->_cPtr, $context);
    }

    function GetSDFObj()
    {
        $r = OCMD_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($ocmd_or_g_or_o)
    {
        if (is_resource($ocmd_or_g_or_o) && get_resource_type($ocmd_or_g_or_o) === '_p_pdftron__PDF__OCG__OCMD') {
            $this->_cPtr = $ocmd_or_g_or_o;
            return;
        }
        $this->_cPtr = new_OCMD($ocmd_or_g_or_o);
    }
}
