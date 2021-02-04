<?php

namespace PDFNet\PDFTron;

class PDFFunction
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_func') return PDFFunction_mp_func_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_func') return PDFFunction_mp_func_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFFunction_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_sampled = 0;

    const e_exponential = 2;

    const e_stitching = 3;

    const e_postscript = 4;

    function GetType()
    {
        return PDFFunction_GetType($this->_cPtr);
    }

    function GetInputCardinality()
    {
        return PDFFunction_GetInputCardinality($this->_cPtr);
    }

    function GetOutputCardinality()
    {
        return PDFFunction_GetOutputCardinality($this->_cPtr);
    }

    function EvalFunction($in_arr)
    {
        $r = PDFFunction_EvalFunction($this->_cPtr, $in_arr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = PDFFunction_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Destroy()
    {
        PDFFunction_Destroy($this->_cPtr);
    }

    function __construct($funct_dict_or_f_or_impl = null)
    {
        if (is_resource($funct_dict_or_f_or_impl) && get_resource_type($funct_dict_or_f_or_impl) === '_p_pdftron__PDF__PDFFunction') {
            $this->_cPtr = $funct_dict_or_f_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PDFFunction();
                break;
            default:
                $this->_cPtr = new_PDFFunction($funct_dict_or_f_or_impl);
        }
    }
}
