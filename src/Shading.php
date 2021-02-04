<?php

namespace App\Documents\PdfTron;

class Shading
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_shade') return Shading_mp_shade_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_shade') return Shading_mp_shade_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Shading_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_function_shading = 0;

    const e_axial_shading = Shading_e_axial_shading;

    const e_radial_shading = Shading_e_radial_shading;

    const e_free_gouraud_shading = Shading_e_free_gouraud_shading;

    const e_lattice_gouraud_shading = Shading_e_lattice_gouraud_shading;

    const e_coons_shading = Shading_e_coons_shading;

    const e_tensor_shading = Shading_e_tensor_shading;

    const e_null = Shading_e_null;

    function GetType()
    {
        return Shading_GetType($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = Shading_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetBaseColorSpace()
    {
        $r = Shading_GetBaseColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function HasBBox()
    {
        return Shading_HasBBox($this->_cPtr);
    }

    function GetBBox()
    {
        $r = Shading_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function HasBackground()
    {
        return Shading_HasBackground($this->_cPtr);
    }

    function GetBackground()
    {
        $r = Shading_GetBackground($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetAntialias()
    {
        return Shading_GetAntialias($this->_cPtr);
    }

    function GetParamStart()
    {
        return Shading_GetParamStart($this->_cPtr);
    }

    function GetParamEnd()
    {
        return Shading_GetParamEnd($this->_cPtr);
    }

    function IsExtendStart()
    {
        return Shading_IsExtendStart($this->_cPtr);
    }

    function IsExtendEnd()
    {
        return Shading_IsExtendEnd($this->_cPtr);
    }

    function GetCoordsAxial()
    {
        $r = Shading_GetCoordsAxial($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetCoordsRadial()
    {
        $r = Shading_GetCoordsRadial($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetDomain()
    {
        $r = Shading_GetDomain($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetMatrix()
    {
        $r = Shading_GetMatrix($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetColor($t_or_t1, $t2 = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = Shading_GetColor($this->_cPtr, $t_or_t1);
                break;
            default:
                $r = Shading_GetColor($this->_cPtr, $t_or_t1, $t2);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function Destroy()
    {
        Shading_Destroy($this->_cPtr);
    }

    function __construct($shading_dict_or_s_or_impl = null)
    {
        if (is_resource($shading_dict_or_s_or_impl) && get_resource_type($shading_dict_or_s_or_impl) === '_p_pdftron__PDF__Shading') {
            $this->_cPtr = $shading_dict_or_s_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Shading();
                break;
            default:
                $this->_cPtr = new_Shading($shading_dict_or_s_or_impl);
        }
    }
}
