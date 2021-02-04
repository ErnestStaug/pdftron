<?php

namespace App\Documents\PdfTron;

class Element
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_elem') return Element_mp_elem_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_elem') return Element_mp_elem_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Element_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_null = 0;

    const e_path = Element_e_path;

    const e_text_begin = Element_e_text_begin;

    const e_text = Element_e_text;

    const e_text_new_line = Element_e_text_new_line;

    const e_text_end = Element_e_text_end;

    const e_image = Element_e_image;

    const e_inline_image = Element_e_inline_image;

    const e_shading = Element_e_shading;

    const e_form = Element_e_form;

    const e_group_begin = Element_e_group_begin;

    const e_group_end = Element_e_group_end;

    const e_marked_content_begin = Element_e_marked_content_begin;

    const e_marked_content_end = Element_e_marked_content_end;

    const e_marked_content_point = Element_e_marked_content_point;

    function GetType()
    {
        return Element_GetType($this->_cPtr);
    }

    function GetGState()
    {
        $r = Element_GetGState($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new GState($r);
        }
        return $r;
    }

    function GetCTM()
    {
        $r = Element_GetCTM($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetBBox()
    {
        $r = Element_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetParentStructElement()
    {
        $r = Element_GetParentStructElement($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SElement($r);
        }
        return $r;
    }

    function GetStructMCID()
    {
        return Element_GetStructMCID($this->_cPtr);
    }

    function IsOCVisible()
    {
        return Element_IsOCVisible($this->_cPtr);
    }

    function IsClippingPath()
    {
        return Element_IsClippingPath($this->_cPtr);
    }

    function IsStroked()
    {
        return Element_IsStroked($this->_cPtr);
    }

    function IsFilled()
    {
        return Element_IsFilled($this->_cPtr);
    }

    function IsWindingFill()
    {
        return Element_IsWindingFill($this->_cPtr);
    }

    function IsClipWindingFill()
    {
        return Element_IsClipWindingFill($this->_cPtr);
    }

    function GetPathData()
    {
        $r = Element_GetPathData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PathData($r);
        }
        return $r;
    }

    function SetPathData($data)
    {
        Element_SetPathData($this->_cPtr, $data);
    }

    function SetPathClip($clip)
    {
        Element_SetPathClip($this->_cPtr, $clip);
    }

    function SetPathStroke($stroke)
    {
        Element_SetPathStroke($this->_cPtr, $stroke);
    }

    function SetPathFill($fill)
    {
        Element_SetPathFill($this->_cPtr, $fill);
    }

    function SetWindingFill($winding_rule)
    {
        Element_SetWindingFill($this->_cPtr, $winding_rule);
    }

    function SetClipWindingFill($winding_rule)
    {
        Element_SetClipWindingFill($this->_cPtr, $winding_rule);
    }

    function GetXObject()
    {
        $r = Element_GetXObject($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetImageData()
    {
        $r = Element_GetImageData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetImageDataSize()
    {
        return Element_GetImageDataSize($this->_cPtr);
    }

    function GetImageColorSpace()
    {
        $r = Element_GetImageColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetImageWidth()
    {
        return Element_GetImageWidth($this->_cPtr);
    }

    function GetImageHeight()
    {
        return Element_GetImageHeight($this->_cPtr);
    }

    function GetDecodeArray()
    {
        $r = Element_GetDecodeArray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetBitsPerComponent()
    {
        return Element_GetBitsPerComponent($this->_cPtr);
    }

    function GetComponentNum()
    {
        return Element_GetComponentNum($this->_cPtr);
    }

    function IsImageMask()
    {
        return Element_IsImageMask($this->_cPtr);
    }

    function IsImageInterpolate()
    {
        return Element_IsImageInterpolate($this->_cPtr);
    }

    function GetMask()
    {
        $r = Element_GetMask($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetImageRenderingIntent()
    {
        return Element_GetImageRenderingIntent($this->_cPtr);
    }

    function GetTextString()
    {
        return Element_GetTextString($this->_cPtr);
    }

    function GetTextData()
    {
        $r = Element_GetTextData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetTextDataSize()
    {
        return Element_GetTextDataSize($this->_cPtr);
    }

    function GetTextMatrix()
    {
        $r = Element_GetTextMatrix($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetCharIterator()
    {
        $r = Element_GetCharIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CharIterator($r);
        }
        return $r;
    }

    function GetTextLength()
    {
        return Element_GetTextLength($this->_cPtr);
    }

    function GetPosAdjustment()
    {
        return Element_GetPosAdjustment($this->_cPtr);
    }

    function GetNewTextLineOffset()
    {
        $r = Element_GetNewTextLineOffset($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetNewTextLineOffset($dx, $dy)
    {
        Element_SetNewTextLineOffset($this->_cPtr, $dx, $dy);
    }

    function HasTextMatrix()
    {
        return Element_HasTextMatrix($this->_cPtr);
    }

    function SetTextData($buf_text_data, $text_data_size)
    {
        Element_SetTextData($this->_cPtr, $buf_text_data, $text_data_size);
    }

    function SetTextMatrix($mtx_or_a, $b = null, $c_ = null, $d = null, $h = null, $v = null)
    {
        switch (func_num_args()) {
            case 1:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a);
                break;
            case 2:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a, $b);
                break;
            case 3:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a, $b, $c_);
                break;
            case 4:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a, $b, $c_, $d);
                break;
            case 5:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h);
                break;
            default:
                Element_SetTextMatrix($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h, $v);
        }
    }

    function SetPosAdjustment($adjust)
    {
        Element_SetPosAdjustment($this->_cPtr, $adjust);
    }

    function UpdateTextMetrics()
    {
        Element_UpdateTextMetrics($this->_cPtr);
    }

    function GetShading()
    {
        $r = Element_GetShading($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Shading($r);
        }
        return $r;
    }

    function GetMCPropertyDict()
    {
        $r = Element_GetMCPropertyDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetMCTag()
    {
        $r = Element_GetMCTag($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__PDF__Element') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Element();
                break;
            default:
                $this->_cPtr = new_Element($c_or_impl);
        }
    }
}
