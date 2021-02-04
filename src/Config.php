<?php

namespace App\Documents\PdfTron;

class Config
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return Config_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return Config_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Config_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function Create($doc, $default_config)
    {
        $r = Config_Create($doc, $default_config);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Config($r);
        }
        return $r;
    }

    function IsValid()
    {
        return Config_IsValid($this->_cPtr);
    }

    function GetOrder()
    {
        $r = Config_GetOrder($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetOrder($ocgs_array)
    {
        Config_SetOrder($this->_cPtr, $ocgs_array);
    }

    function GetName()
    {
        return Config_GetName($this->_cPtr);
    }

    function SetName($name)
    {
        Config_SetName($this->_cPtr, $name);
    }

    function GetCreator()
    {
        return Config_GetCreator($this->_cPtr);
    }

    function SetCreator($name)
    {
        Config_SetCreator($this->_cPtr, $name);
    }

    function GetInitBaseState()
    {
        return Config_GetInitBaseState($this->_cPtr);
    }

    function GetInitOnStates()
    {
        $r = Config_GetInitOnStates($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetInitOffStates()
    {
        $r = Config_GetInitOffStates($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetInitBaseState($state = "ON")
    {
        Config_SetInitBaseState($this->_cPtr, $state);
    }

    function SetInitOnStates($on_array)
    {
        Config_SetInitOnStates($this->_cPtr, $on_array);
    }

    function SetInitOffStates($off_array)
    {
        Config_SetInitOffStates($this->_cPtr, $off_array);
    }

    function GetIntent()
    {
        $r = Config_GetIntent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetIntent($intent)
    {
        Config_SetIntent($this->_cPtr, $intent);
    }

    function GetLockedOCGs()
    {
        $r = Config_GetLockedOCGs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetLockedOCGs($locked_ocg_array)
    {
        Config_SetLockedOCGs($this->_cPtr, $locked_ocg_array);
    }

    function GetSDFObj()
    {
        $r = Config_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($ocg_config_or_g_or_c)
    {
        if (is_resource($ocg_config_or_g_or_c) && get_resource_type($ocg_config_or_g_or_c) === '_p_pdftron__PDF__OCG__Config') {
            $this->_cPtr = $ocg_config_or_g_or_c;
            return;
        }
        $this->_cPtr = new_Config($ocg_config_or_g_or_c);
    }
}
