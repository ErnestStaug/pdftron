<?php

namespace PDFNet\PDFTron;

class Destination
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_dest') return Destination_mp_dest_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_dest') return Destination_mp_dest_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Destination_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_XYZ = 0;

    const e_Fit = Destination_e_Fit;

    const e_FitH = Destination_e_FitH;

    const e_FitV = Destination_e_FitV;

    const e_FitR = Destination_e_FitR;

    const e_FitB = Destination_e_FitB;

    const e_FitBH = Destination_e_FitBH;

    const e_FitBV = Destination_e_FitBV;

    static function CreateXYZ($page, $left, $top, $zoom)
    {
        $r = Destination_CreateXYZ($page, $left, $top, $zoom);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFit($page)
    {
        $r = Destination_CreateFit($page);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitH($page, $top)
    {
        $r = Destination_CreateFitH($page, $top);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitV($page, $left)
    {
        $r = Destination_CreateFitV($page, $left);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitR($page, $left, $bottom, $right, $top)
    {
        $r = Destination_CreateFitR($page, $left, $bottom, $right, $top);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitB($page)
    {
        $r = Destination_CreateFitB($page);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitBH($page, $top)
    {
        $r = Destination_CreateFitBH($page, $top);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    static function CreateFitBV($page, $left)
    {
        $r = Destination_CreateFitBV($page, $left);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    function IsValid()
    {
        return Destination_IsValid($this->_cPtr);
    }

    function GetFitType()
    {
        return Destination_GetFitType($this->_cPtr);
    }

    function GetPage()
    {
        $r = Destination_GetPage($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Page($r);
        }
        return $r;
    }

    function SetPage($page)
    {
        Destination_SetPage($this->_cPtr, $page);
    }

    function GetSDFObj()
    {
        $r = Destination_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetExplicitDestObj()
    {
        $r = Destination_GetExplicitDestObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($dest_or_d_or_impl = null)
    {
        if (is_resource($dest_or_d_or_impl) && get_resource_type($dest_or_d_or_impl) === '_p_pdftron__PDF__Destination') {
            $this->_cPtr = $dest_or_d_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Destination();
                break;
            default:
                $this->_cPtr = new_Destination($dest_or_d_or_impl);
        }
    }
}
