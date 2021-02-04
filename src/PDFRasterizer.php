<?php

namespace PDFNet\PDFTron;

class PDFRasterizer
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_rast') return PDFRasterizer_mp_rast_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_rast') return PDFRasterizer_mp_rast_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFRasterizer_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_BuiltIn = 0;

    const e_GDIPlus = PDFRasterizer_e_GDIPlus;

    const e_op_off = 0;

    const e_op_on = PDFRasterizer_e_op_on;

    const e_op_pdfx_on = PDFRasterizer_e_op_pdfx_on;

    function __construct($type = null)
    {
        if (is_resource($type) && get_resource_type($type) === '_p_pdftron__PDF__PDFRasterizer') {
            $this->_cPtr = $type;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PDFRasterizer();
                break;
            default:
                $this->_cPtr = new_PDFRasterizer($type);
        }
    }

    function Rasterize($page, $width, $height, $stride, $num_comps, $demult, $device_mtx, $clip = null, $scrl_clip_regions = null)
    {
        $r = PDFRasterizer_Rasterize($this->_cPtr, $page, $width, $height, $stride, $num_comps, $demult, $device_mtx, $clip, $scrl_clip_regions);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function RasterizeSeparations($page, $width, $height, $mtx, $clip, $cancel)
    {
        $r = PDFRasterizer_RasterizeSeparations($this->_cPtr, $page, $width, $height, $mtx, $clip, $cancel);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorSeparation($r);
        }
        return $r;
    }

    function SetDrawAnnotations($render_annots)
    {
        PDFRasterizer_SetDrawAnnotations($this->_cPtr, $render_annots);
    }

    function SetHighlightFields($highlight_fields)
    {
        PDFRasterizer_SetHighlightFields($this->_cPtr, $highlight_fields);
    }

    function SetAntiAliasing($enable_aa)
    {
        PDFRasterizer_SetAntiAliasing($this->_cPtr, $enable_aa);
    }

    function SetPathHinting($enable_hinting)
    {
        PDFRasterizer_SetPathHinting($this->_cPtr, $enable_hinting);
    }

    function SetThinLineAdjustment($pixel_grid_fit, $stroke_adjust)
    {
        PDFRasterizer_SetThinLineAdjustment($this->_cPtr, $pixel_grid_fit, $stroke_adjust);
    }

    function SetImageSmoothing($smoothing_enabled = true, $hq_image_resampling = false)
    {
        PDFRasterizer_SetImageSmoothing($this->_cPtr, $smoothing_enabled, $hq_image_resampling);
    }

    function SetCaching($enabled = true)
    {
        PDFRasterizer_SetCaching($this->_cPtr, $enabled);
    }

    function SetGamma($expgamma)
    {
        PDFRasterizer_SetGamma($this->_cPtr, $expgamma);
    }

    function SetOCGContext($ctx)
    {
        PDFRasterizer_SetOCGContext($this->_cPtr, $ctx);
    }

    function SetPrintMode($is_printing)
    {
        PDFRasterizer_SetPrintMode($this->_cPtr, $is_printing);
    }

    function SetOverprint($op)
    {
        PDFRasterizer_SetOverprint($this->_cPtr, $op);
    }

    function SetErrorReportProc($instance)
    {
        PDFRasterizer_SetErrorReportProc($this->_cPtr, $instance);
    }

    function SetRasterizerType($type)
    {
        PDFRasterizer_SetRasterizerType($this->_cPtr, $type);
    }

    function GetRasterizerType()
    {
        return PDFRasterizer_GetRasterizerType($this->_cPtr);
    }

    const e_postprocess_none = 0;

    const e_postprocess_invert = PDFRasterizer_e_postprocess_invert;

    const e_postprocess_gradient_map = PDFRasterizer_e_postprocess_gradient_map;

    const e_postprocess_night_mode = PDFRasterizer_e_postprocess_night_mode;

    function SetColorPostProcessMode($mode)
    {
        PDFRasterizer_SetColorPostProcessMode($this->_cPtr, $mode);
    }

    function GetColorPostProcessMode()
    {
        return PDFRasterizer_GetColorPostProcessMode($this->_cPtr);
    }

    function UpdateBuffer()
    {
        PDFRasterizer_UpdateBuffer($this->_cPtr);
    }

    function Destroy()
    {
        PDFRasterizer_Destroy($this->_cPtr);
    }
}
