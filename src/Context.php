<?php

namespace PDFNet\PDFTron;

class Context
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return Context_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return Context_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Context_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function IsValid()
    {
        return Context_IsValid($this->_cPtr);
    }

    function GetState($group)
    {
        return Context_GetState($this->_cPtr, $group);
    }

    function SetState($group, $state)
    {
        Context_SetState($this->_cPtr, $group, $state);
    }

    function ResetStates($all_on)
    {
        Context_ResetStates($this->_cPtr, $all_on);
    }

    function SetNonOCDrawing($draw_non_OC)
    {
        Context_SetNonOCDrawing($this->_cPtr, $draw_non_OC);
    }

    function GetNonOCDrawing()
    {
        return Context_GetNonOCDrawing($this->_cPtr);
    }

    const e_VisibleOC = 0;

    const e_AllOC = Context_e_AllOC;

    const e_NoOC = Context_e_NoOC;

    function SetOCDrawMode($oc_draw_mode)
    {
        Context_SetOCDrawMode($this->_cPtr, $oc_draw_mode);
    }

    function GetOCMode()
    {
        return Context_GetOCMode($this->_cPtr);
    }

    function Destroy()
    {
        Context_Destroy($this->_cPtr);
    }

    static function CreateInternal($impl)
    {
        $r = Context_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Context($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Context_GetHandleInternal($this->_cPtr);
    }

    function __construct($context_or_config_or_ctx)
    {
        if (is_resource($context_or_config_or_ctx) && get_resource_type($context_or_config_or_ctx) === '_p_pdftron__PDF__OCG__Context') {
            $this->_cPtr = $context_or_config_or_ctx;
            return;
        }
        $this->_cPtr = new_Context($context_or_config_or_ctx);
    }
}
