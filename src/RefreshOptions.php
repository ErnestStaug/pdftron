<?php

namespace PDFNet\PDFTron;

class RefreshOptions
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__RefreshOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_RefreshOptions();
    }

    function GetDrawBackgroundOnly()
    {
        return RefreshOptions_GetDrawBackgroundOnly($this->_cPtr);
    }

    function SetDrawBackgroundOnly($value)
    {
        $r = RefreshOptions_SetDrawBackgroundOnly($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RefreshOptions($r);
        }
        return $r;
    }

    function GetRefreshExisting()
    {
        return RefreshOptions_GetRefreshExisting($this->_cPtr);
    }

    function SetRefreshExisting($value)
    {
        $r = RefreshOptions_SetRefreshExisting($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RefreshOptions($r);
        }
        return $r;
    }

    function GetUseNonStandardRotation()
    {
        return RefreshOptions_GetUseNonStandardRotation($this->_cPtr);
    }

    function SetUseNonStandardRotation($value)
    {
        $r = RefreshOptions_SetUseNonStandardRotation($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RefreshOptions($r);
        }
        return $r;
    }

    function GetUseRoundedCorners()
    {
        return RefreshOptions_GetUseRoundedCorners($this->_cPtr);
    }

    function SetUseRoundedCorners($value)
    {
        $r = RefreshOptions_SetUseRoundedCorners($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new RefreshOptions($r);
        }
        return $r;
    }

    function GetInternalObj()
    {
        $r = RefreshOptions_GetInternalObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
