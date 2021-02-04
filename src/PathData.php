<?php

namespace PDFNet\PDFTron;

class PathData
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'PathData_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'oprs') return new VectorUChar(PathData_oprs_get($this->_cPtr));
        if ($var === 'pts') return new VectorDouble(PathData_pts_get($this->_cPtr));
        if ($var === 'glyph_index') return PathData_glyph_index_get($this->_cPtr);
        if ($var === 'is_def') return PathData_is_def_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PathData_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_moveto = 1;

    const e_lineto = PathData_e_lineto;

    const e_cubicto = PathData_e_cubicto;

    const e_conicto = PathData_e_conicto;

    const e_rect = PathData_e_rect;

    const e_closepath = PathData_e_closepath;

    function SetOperators($operators)
    {
        PathData_SetOperators($this->_cPtr, $operators);
    }

    function SetPoints($points)
    {
        PathData_SetPoints($this->_cPtr, $points);
    }

    function GetOperators()
    {
        $r = PathData_GetOperators($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetPoints()
    {
        $r = PathData_GetPoints($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function IsDefined()
    {
        return PathData_IsDefined($this->_cPtr);
    }

    function GetGlyphIndex()
    {
        return PathData_GetGlyphIndex($this->_cPtr);
    }

    function __construct($i = null, $gi = null, $o = null, $d = null)
    {
        if (is_resource($i) && get_resource_type($i) === '_p_pdftron__PDF__PathData') {
            $this->_cPtr = $i;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PathData();
                break;
            case 1:
                $this->_cPtr = new_PathData($i);
                break;
            case 2:
                $this->_cPtr = new_PathData($i, $gi);
                break;
            case 3:
                $this->_cPtr = new_PathData($i, $gi, $o);
                break;
            default:
                $this->_cPtr = new_PathData($i, $gi, $o, $d);
        }
    }
}
