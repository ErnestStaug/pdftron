<?php

namespace PDFNet\PDFTron;

class ElementBuilder
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_builder') return ElementBuilder_mp_builder_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_builder') return ElementBuilder_mp_builder_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ElementBuilder_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ElementBuilder') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_ElementBuilder();
    }

    function Reset($gs = null)
    {
        switch (func_num_args()) {
            case 0:
                ElementBuilder_Reset($this->_cPtr);
                break;
            default:
                ElementBuilder_Reset($this->_cPtr, $gs);
        }
    }

    function CreateImage($img, $mtx_or_x = null, $y = null, $hscale = null, $vscale = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = ElementBuilder_CreateImage($this->_cPtr, $img);
                break;
            case 2:
                $r = ElementBuilder_CreateImage($this->_cPtr, $img, $mtx_or_x);
                break;
            case 3:
                $r = ElementBuilder_CreateImage($this->_cPtr, $img, $mtx_or_x, $y);
                break;
            case 4:
                $r = ElementBuilder_CreateImage($this->_cPtr, $img, $mtx_or_x, $y, $hscale);
                break;
            default:
                $r = ElementBuilder_CreateImage($this->_cPtr, $img, $mtx_or_x, $y, $hscale, $vscale);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateGroupBegin()
    {
        $r = ElementBuilder_CreateGroupBegin($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateGroupEnd()
    {
        $r = ElementBuilder_CreateGroupEnd($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateShading($sh)
    {
        $r = ElementBuilder_CreateShading($this->_cPtr, $sh);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateForm($form_or_page, $doc = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = ElementBuilder_CreateForm($this->_cPtr, $form_or_page);
                break;
            default:
                $r = ElementBuilder_CreateForm($this->_cPtr, $form_or_page, $doc);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateTextBegin($font = null, $font_sz = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = ElementBuilder_CreateTextBegin($this->_cPtr);
                break;
            case 1:
                $r = ElementBuilder_CreateTextBegin($this->_cPtr, $font);
                break;
            default:
                $r = ElementBuilder_CreateTextBegin($this->_cPtr, $font, $font_sz);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateTextEnd()
    {
        $r = ElementBuilder_CreateTextEnd($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateTextRun($text_data, $font = null, $font_sz = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = ElementBuilder_CreateTextRun($this->_cPtr, $text_data);
                break;
            case 2:
                $r = ElementBuilder_CreateTextRun($this->_cPtr, $text_data, $font);
                break;
            default:
                $r = ElementBuilder_CreateTextRun($this->_cPtr, $text_data, $font, $font_sz);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateUnicodeTextRun($text_data, $text_data_sz)
    {
        $r = ElementBuilder_CreateUnicodeTextRun($this->_cPtr, $text_data, $text_data_sz);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateShapedTextRun($text_data)
    {
        $r = ElementBuilder_CreateShapedTextRun($this->_cPtr, $text_data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateTextNewLine($dx = null, $dy = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = ElementBuilder_CreateTextNewLine($this->_cPtr);
                break;
            case 1:
                $r = ElementBuilder_CreateTextNewLine($this->_cPtr, $dx);
                break;
            default:
                $r = ElementBuilder_CreateTextNewLine($this->_cPtr, $dx, $dy);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreatePath($points, $seg_types)
    {
        $r = ElementBuilder_CreatePath($this->_cPtr, $points, $seg_types);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateRect($x, $y, $width, $height)
    {
        $r = ElementBuilder_CreateRect($this->_cPtr, $x, $y, $width, $height);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function CreateEllipse($x, $y, $width, $height)
    {
        $r = ElementBuilder_CreateEllipse($this->_cPtr, $x, $y, $width, $height);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function PathBegin()
    {
        ElementBuilder_PathBegin($this->_cPtr);
    }

    function PathEnd()
    {
        $r = ElementBuilder_PathEnd($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function MoveTo($x, $y)
    {
        ElementBuilder_MoveTo($this->_cPtr, $x, $y);
    }

    function LineTo($x, $y)
    {
        ElementBuilder_LineTo($this->_cPtr, $x, $y);
    }

    function CurveTo($cx1, $cy1, $cx2, $cy2, $x2, $y2)
    {
        ElementBuilder_CurveTo($this->_cPtr, $cx1, $cy1, $cx2, $cy2, $x2, $y2);
    }

    function ArcTo($x_or_xr, $y_or_yr, $width_or_rx, $height_or_isLargeArc, $start_or_sweep, $extent_or_endX, $endY = null)
    {
        switch (func_num_args()) {
            case 6:
                ElementBuilder_ArcTo($this->_cPtr, $x_or_xr, $y_or_yr, $width_or_rx, $height_or_isLargeArc, $start_or_sweep, $extent_or_endX);
                break;
            default:
                ElementBuilder_ArcTo($this->_cPtr, $x_or_xr, $y_or_yr, $width_or_rx, $height_or_isLargeArc, $start_or_sweep, $extent_or_endX, $endY);
        }
    }

    function Ellipse($x, $y, $width, $height)
    {
        ElementBuilder_Ellipse($this->_cPtr, $x, $y, $width, $height);
    }

    function Rect($x, $y, $width, $height)
    {
        ElementBuilder_Rect($this->_cPtr, $x, $y, $width, $height);
    }

    function ClosePath()
    {
        ElementBuilder_ClosePath($this->_cPtr);
    }

    function Destroy()
    {
        ElementBuilder_Destroy($this->_cPtr);
    }
}
