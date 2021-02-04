<?php

namespace PDFNet\PDFTron;

class PDFDraw
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_draw') return PDFDraw_mp_draw_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_draw') return PDFDraw_mp_draw_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFDraw_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($dpi = 92.0)
    {
        if (is_resource($dpi) && get_resource_type($dpi) === '_p_pdftron__PDF__PDFDraw') {
            $this->_cPtr = $dpi;
            return;
        }
        $this->_cPtr = new_PDFDraw($dpi);
    }

    function SetRasterizerType($type)
    {
        PDFDraw_SetRasterizerType($this->_cPtr, $type);
    }

    function SetDPI($dpi)
    {
        PDFDraw_SetDPI($this->_cPtr, $dpi);
    }

    function SetImageSize($width, $height, $preserve_aspect_ratio = true)
    {
        PDFDraw_SetImageSize($this->_cPtr, $width, $height, $preserve_aspect_ratio);
    }

    function SetPageBox($region)
    {
        PDFDraw_SetPageBox($this->_cPtr, $region);
    }

    function SetClipRect($clip_rect)
    {
        PDFDraw_SetClipRect($this->_cPtr, $clip_rect);
    }

    function SetFlipYAxis($flip_y)
    {
        PDFDraw_SetFlipYAxis($this->_cPtr, $flip_y);
    }

    function SetRotate($r_)
    {
        PDFDraw_SetRotate($this->_cPtr, $r_);
    }

    function SetDrawAnnotations($render_annots)
    {
        PDFDraw_SetDrawAnnotations($this->_cPtr, $render_annots);
    }

    function SetHighlightFields($highlight_fields)
    {
        PDFDraw_SetHighlightFields($this->_cPtr, $highlight_fields);
    }

    function SetAntiAliasing($enable_aa)
    {
        PDFDraw_SetAntiAliasing($this->_cPtr, $enable_aa);
    }

    function SetPathHinting($enable_hinting)
    {
        PDFDraw_SetPathHinting($this->_cPtr, $enable_hinting);
    }

    function SetThinLineAdjustment($pixel_grid_fit, $stroke_adjust)
    {
        PDFDraw_SetThinLineAdjustment($this->_cPtr, $pixel_grid_fit, $stroke_adjust);
    }

    function SetImageSmoothing($smoothing_enabled = true, $hq_image_resampling = false)
    {
        PDFDraw_SetImageSmoothing($this->_cPtr, $smoothing_enabled, $hq_image_resampling);
    }

    function SetCaching($enabled = true)
    {
        PDFDraw_SetCaching($this->_cPtr, $enabled);
    }

    function SetGamma($exp)
    {
        PDFDraw_SetGamma($this->_cPtr, $exp);
    }

    function SetOCGContext($ctx)
    {
        PDFDraw_SetOCGContext($this->_cPtr, $ctx);
    }

    function SetPrintMode($is_printing)
    {
        PDFDraw_SetPrintMode($this->_cPtr, $is_printing);
    }

    function SetDefaultPageColor($r_, $g, $b)
    {
        PDFDraw_SetDefaultPageColor($this->_cPtr, $r_, $g, $b);
    }

    function SetPageTransparent($is_transparent)
    {
        PDFDraw_SetPageTransparent($this->_cPtr, $is_transparent);
    }

    function SetOverprint($op)
    {
        PDFDraw_SetOverprint($this->_cPtr, $op);
    }

    function Export($page, $filename_or_stream, $format = null, $encoder_params = null)
    {
        switch (func_num_args()) {
            case 2:
                PDFDraw_Export($this->_cPtr, $page, $filename_or_stream);
                break;
            case 3:
                PDFDraw_Export($this->_cPtr, $page, $filename_or_stream, $format);
                break;
            default:
                PDFDraw_Export($this->_cPtr, $page, $filename_or_stream, $format, $encoder_params);
        }
    }

    const e_rgba = 0;

    const e_bgra = PDFDraw_e_bgra;

    const e_rgb = PDFDraw_e_rgb;

    const e_bgr = PDFDraw_e_bgr;

    const e_gray = PDFDraw_e_gray;

    const e_gray_alpha = PDFDraw_e_gray_alpha;

    const e_cmyk = PDFDraw_e_cmyk;

    function GetBitmap($page, $pix_fmt = null, $demult = false)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFDraw_GetBitmap($this->_cPtr, $page);
                break;
            default:
                $r = PDFDraw_GetBitmap($this->_cPtr, $page, $pix_fmt, $demult);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new BitmapInfo($r);
        }
        return $r;
    }

    function GetSeparationBitmaps($page)
    {
        $r = PDFDraw_GetSeparationBitmaps($this->_cPtr, $page);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorSeparation($r);
        }
        return $r;
    }

    function SetErrorReportProc($instance)
    {
        PDFDraw_SetErrorReportProc($this->_cPtr, $instance);
    }

    function SetColorPostProcessMode($mode)
    {
        PDFDraw_SetColorPostProcessMode($this->_cPtr, $mode);
    }

    function Destroy()
    {
        PDFDraw_Destroy($this->_cPtr);
    }
}
