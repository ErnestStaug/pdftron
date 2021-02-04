<?php

namespace App\Documents\PdfTron;

class Group
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return Group_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return Group_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Group_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function Create($doc, $name)
    {
        $r = Group_Create($doc, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Group($r);
        }
        return $r;
    }

    function IsValid()
    {
        return Group_IsValid($this->_cPtr);
    }

    function GetName()
    {
        return Group_GetName($this->_cPtr);
    }

    function SetName($name)
    {
        Group_SetName($this->_cPtr, $name);
    }

    function GetCurrentState($context)
    {
        return Group_GetCurrentState($this->_cPtr, $context);
    }

    function SetCurrentState($context, $state)
    {
        Group_SetCurrentState($this->_cPtr, $context, $state);
    }

    function GetInitialState($config)
    {
        return Group_GetInitialState($this->_cPtr, $config);
    }

    function SetInitialState($config, $state)
    {
        Group_SetInitialState($this->_cPtr, $config, $state);
    }

    function GetIntent()
    {
        $r = Group_GetIntent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetIntent($intent)
    {
        Group_SetIntent($this->_cPtr, $intent);
    }

    function IsLocked($config)
    {
        return Group_IsLocked($this->_cPtr, $config);
    }

    function SetLocked($config, $locked)
    {
        Group_SetLocked($this->_cPtr, $config, $locked);
    }

    function HasUsage()
    {
        return Group_HasUsage($this->_cPtr);
    }

    function GetUsage($key)
    {
        $r = Group_GetUsage($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = Group_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($ocg_or_g)
    {
        if (is_resource($ocg_or_g) && get_resource_type($ocg_or_g) === '_p_pdftron__PDF__OCG__Group') {
            $this->_cPtr = $ocg_or_g;
            return;
        }
        $this->_cPtr = new_Group($ocg_or_g);
    }
}
