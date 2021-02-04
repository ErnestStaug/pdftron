<?php

namespace PDFNet\PDFTron;

class PolyLine extends LineAnnot
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        LineAnnot::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return LineAnnot::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return LineAnnot::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = PolyLine_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PolyLine($r);
        }
        return $r;
    }

    function GetVertexCount()
    {
        return PolyLine_GetVertexCount($this->_cPtr);
    }

    function GetVertex($idx)
    {
        $r = PolyLine_GetVertex($this->_cPtr, $idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetVertex($idx, $pt)
    {
        PolyLine_SetVertex($this->_cPtr, $idx, $pt);
    }

    const e_PolygonCloud = 0;

    const e_PolyLineDimension = PolyLine_e_PolyLineDimension;

    const e_PolygonDimension = PolyLine_e_PolygonDimension;

    const e_Unknown = PolyLine_e_Unknown;

    function GetIntentName()
    {
        return PolyLine_GetIntentName($this->_cPtr);
    }

    function SetIntentName($mode)
    {
        PolyLine_SetIntentName($this->_cPtr, $mode);
    }

    function __construct($d_or_ann_or_polyline = null)
    {
        if (is_resource($d_or_ann_or_polyline) && get_resource_type($d_or_ann_or_polyline) === '_p_pdftron__PDF__Annots__PolyLine') {
            $this->_cPtr = $d_or_ann_or_polyline;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PolyLine();
                break;
            default:
                $this->_cPtr = new_PolyLine($d_or_ann_or_polyline);
        }
    }
}
