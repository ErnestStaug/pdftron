<?php

namespace PDFNet\PDFTron;

class GState
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_state') return GState_mp_state_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_state') return GState_mp_state_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('GState_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_transform = 0;

    const e_rendering_intent = GState_e_rendering_intent;

    const e_stroke_cs = GState_e_stroke_cs;

    const e_stroke_color = GState_e_stroke_color;

    const e_fill_cs = GState_e_fill_cs;

    const e_fill_color = GState_e_fill_color;

    const e_line_width = GState_e_line_width;

    const e_line_cap = GState_e_line_cap;

    const e_line_join = GState_e_line_join;

    const e_flatness = GState_e_flatness;

    const e_miter_limit = GState_e_miter_limit;

    const e_dash_pattern = GState_e_dash_pattern;

    const e_char_spacing = GState_e_char_spacing;

    const e_word_spacing = GState_e_word_spacing;

    const e_horizontal_scale = GState_e_horizontal_scale;

    const e_leading = GState_e_leading;

    const e_font = GState_e_font;

    const e_font_size = GState_e_font_size;

    const e_text_render_mode = GState_e_text_render_mode;

    const e_text_rise = GState_e_text_rise;

    const e_text_knockout = GState_e_text_knockout;

    const e_text_pos_offset = GState_e_text_pos_offset;

    const e_blend_mode = GState_e_blend_mode;

    const e_opacity_fill = GState_e_opacity_fill;

    const e_opacity_stroke = GState_e_opacity_stroke;

    const e_alpha_is_shape = GState_e_alpha_is_shape;

    const e_soft_mask = GState_e_soft_mask;

    const e_smoothnes = GState_e_smoothnes;

    const e_auto_stoke_adjust = GState_e_auto_stoke_adjust;

    const e_stroke_overprint = GState_e_stroke_overprint;

    const e_fill_overprint = GState_e_fill_overprint;

    const e_overprint_mode = GState_e_overprint_mode;

    const e_transfer_funct = GState_e_transfer_funct;

    const e_BG_funct = GState_e_BG_funct;

    const e_UCR_funct = GState_e_UCR_funct;

    const e_halftone = GState_e_halftone;

    const e_null = GState_e_null;

    function GetTransform()
    {
        $r = GState_GetTransform($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetStrokeColorSpace()
    {
        $r = GState_GetStrokeColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetFillColorSpace()
    {
        $r = GState_GetFillColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetStrokeColor()
    {
        $r = GState_GetStrokeColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetStrokePattern()
    {
        $r = GState_GetStrokePattern($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PatternColor($r);
        }
        return $r;
    }

    function GetFillColor()
    {
        $r = GState_GetFillColor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetFillPattern()
    {
        $r = GState_GetFillPattern($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PatternColor($r);
        }
        return $r;
    }

    function GetFlatness()
    {
        return GState_GetFlatness($this->_cPtr);
    }

    const e_butt_cap = 0;

    const e_round_cap = GState_e_round_cap;

    const e_square_cap = GState_e_square_cap;

    function GetLineCap()
    {
        return GState_GetLineCap($this->_cPtr);
    }

    const e_miter_join = 0;

    const e_round_join = GState_e_round_join;

    const e_bevel_join = GState_e_bevel_join;

    function GetLineJoin()
    {
        return GState_GetLineJoin($this->_cPtr);
    }

    function GetLineWidth()
    {
        return GState_GetLineWidth($this->_cPtr);
    }

    function GetMiterLimit()
    {
        return GState_GetMiterLimit($this->_cPtr);
    }

    function GetDashes()
    {
        $r = GState_GetDashes($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetPhase()
    {
        return GState_GetPhase($this->_cPtr);
    }

    function GetCharSpacing()
    {
        return GState_GetCharSpacing($this->_cPtr);
    }

    function GetWordSpacing()
    {
        return GState_GetWordSpacing($this->_cPtr);
    }

    function GetHorizontalScale()
    {
        return GState_GetHorizontalScale($this->_cPtr);
    }

    function GetLeading()
    {
        return GState_GetLeading($this->_cPtr);
    }

    function GetFont()
    {
        $r = GState_GetFont($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    function GetFontSize()
    {
        return GState_GetFontSize($this->_cPtr);
    }

    const e_fill_text = 0;

    const e_stroke_text = GState_e_stroke_text;

    const e_fill_stroke_text = GState_e_fill_stroke_text;

    const e_invisible_text = GState_e_invisible_text;

    const e_fill_clip_text = GState_e_fill_clip_text;

    const e_stroke_clip_text = GState_e_stroke_clip_text;

    const e_fill_stroke_clip_text = GState_e_fill_stroke_clip_text;

    const e_clip_text = GState_e_clip_text;

    function GetTextRenderMode()
    {
        return GState_GetTextRenderMode($this->_cPtr);
    }

    function GetTextRise()
    {
        return GState_GetTextRise($this->_cPtr);
    }

    function IsTextKnockout()
    {
        return GState_IsTextKnockout($this->_cPtr);
    }

    const e_absolute_colorimetric = 0;

    const e_relative_colorimetric = GState_e_relative_colorimetric;

    const e_saturation = GState_e_saturation;

    const e_perceptual = GState_e_perceptual;

    function GetRenderingIntent()
    {
        return GState_GetRenderingIntent($this->_cPtr);
    }

    static function GetRenderingIntentType($name)
    {
        return GState_GetRenderingIntentType($name);
    }

    const e_bl_compatible = 0;

    const e_bl_normal = GState_e_bl_normal;

    const e_bl_multiply = GState_e_bl_multiply;

    const e_bl_screen = GState_e_bl_screen;

    const e_bl_difference = GState_e_bl_difference;

    const e_bl_darken = GState_e_bl_darken;

    const e_bl_lighten = GState_e_bl_lighten;

    const e_bl_color_dodge = GState_e_bl_color_dodge;

    const e_bl_color_burn = GState_e_bl_color_burn;

    const e_bl_exclusion = GState_e_bl_exclusion;

    const e_bl_hard_light = GState_e_bl_hard_light;

    const e_bl_overlay = GState_e_bl_overlay;

    const e_bl_soft_light = GState_e_bl_soft_light;

    const e_bl_luminosity = GState_e_bl_luminosity;

    const e_bl_hue = GState_e_bl_hue;

    const e_bl_saturation = GState_e_bl_saturation;

    const e_bl_color = GState_e_bl_color;

    function GetBlendMode()
    {
        return GState_GetBlendMode($this->_cPtr);
    }

    function GetFillOpacity()
    {
        return GState_GetFillOpacity($this->_cPtr);
    }

    function GetStrokeOpacity()
    {
        return GState_GetStrokeOpacity($this->_cPtr);
    }

    function GetAISFlag()
    {
        return GState_GetAISFlag($this->_cPtr);
    }

    function GetSoftMask()
    {
        $r = GState_GetSoftMask($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetSoftMaskTransform()
    {
        $r = GState_GetSoftMaskTransform($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetStrokeOverprint()
    {
        return GState_GetStrokeOverprint($this->_cPtr);
    }

    function GetFillOverprint()
    {
        return GState_GetFillOverprint($this->_cPtr);
    }

    function GetOverprintMode()
    {
        return GState_GetOverprintMode($this->_cPtr);
    }

    function GetAutoStrokeAdjust()
    {
        return GState_GetAutoStrokeAdjust($this->_cPtr);
    }

    function GetSmoothnessTolerance()
    {
        return GState_GetSmoothnessTolerance($this->_cPtr);
    }

    function GetTransferFunct()
    {
        $r = GState_GetTransferFunct($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetBlackGenFunct()
    {
        $r = GState_GetBlackGenFunct($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetUCRFunct()
    {
        $r = GState_GetUCRFunct($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetHalftone()
    {
        $r = GState_GetHalftone($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetTransform($mtx_or_a, $b = null, $c_ = null, $d = null, $h = null, $v = null)
    {
        switch (func_num_args()) {
            case 1:
                GState_SetTransform($this->_cPtr, $mtx_or_a);
                break;
            case 2:
                GState_SetTransform($this->_cPtr, $mtx_or_a, $b);
                break;
            case 3:
                GState_SetTransform($this->_cPtr, $mtx_or_a, $b, $c_);
                break;
            case 4:
                GState_SetTransform($this->_cPtr, $mtx_or_a, $b, $c_, $d);
                break;
            case 5:
                GState_SetTransform($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h);
                break;
            default:
                GState_SetTransform($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h, $v);
        }
    }

    function Concat($mtx_or_a, $b = null, $c_ = null, $d = null, $h = null, $v = null)
    {
        switch (func_num_args()) {
            case 1:
                GState_Concat($this->_cPtr, $mtx_or_a);
                break;
            case 2:
                GState_Concat($this->_cPtr, $mtx_or_a, $b);
                break;
            case 3:
                GState_Concat($this->_cPtr, $mtx_or_a, $b, $c_);
                break;
            case 4:
                GState_Concat($this->_cPtr, $mtx_or_a, $b, $c_, $d);
                break;
            case 5:
                GState_Concat($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h);
                break;
            default:
                GState_Concat($this->_cPtr, $mtx_or_a, $b, $c_, $d, $h, $v);
        }
    }

    function SetStrokeColorSpace($cs)
    {
        GState_SetStrokeColorSpace($this->_cPtr, $cs);
    }

    function SetFillColorSpace($cs)
    {
        GState_SetFillColorSpace($this->_cPtr, $cs);
    }

    function SetStrokeColor($c_or_pattern, $c_ = null)
    {
        switch (func_num_args()) {
            case 1:
                GState_SetStrokeColor($this->_cPtr, $c_or_pattern);
                break;
            default:
                GState_SetStrokeColor($this->_cPtr, $c_or_pattern, $c_);
        }
    }

    function SetFillColor($c_or_pattern, $c_ = null)
    {
        switch (func_num_args()) {
            case 1:
                GState_SetFillColor($this->_cPtr, $c_or_pattern);
                break;
            default:
                GState_SetFillColor($this->_cPtr, $c_or_pattern, $c_);
        }
    }

    function SetFlatness($flatness)
    {
        GState_SetFlatness($this->_cPtr, $flatness);
    }

    function SetLineCap($cap)
    {
        GState_SetLineCap($this->_cPtr, $cap);
    }

    function SetLineJoin($join)
    {
        GState_SetLineJoin($this->_cPtr, $join);
    }

    function SetLineWidth($width)
    {
        GState_SetLineWidth($this->_cPtr, $width);
    }

    function SetMiterLimit($miter_limit)
    {
        GState_SetMiterLimit($this->_cPtr, $miter_limit);
    }

    function SetDashPattern($dash_array, $phase)
    {
        GState_SetDashPattern($this->_cPtr, $dash_array, $phase);
    }

    function SetCharSpacing($char_spacing)
    {
        GState_SetCharSpacing($this->_cPtr, $char_spacing);
    }

    function SetWordSpacing($word_spacing)
    {
        GState_SetWordSpacing($this->_cPtr, $word_spacing);
    }

    function SetHorizontalScale($hscale)
    {
        GState_SetHorizontalScale($this->_cPtr, $hscale);
    }

    function SetLeading($leading)
    {
        GState_SetLeading($this->_cPtr, $leading);
    }

    function SetFont($font, $font_sz)
    {
        GState_SetFont($this->_cPtr, $font, $font_sz);
    }

    function SetTextRenderMode($rmode)
    {
        GState_SetTextRenderMode($this->_cPtr, $rmode);
    }

    function SetTextRise($rise)
    {
        GState_SetTextRise($this->_cPtr, $rise);
    }

    function SetTextKnockout($knockout)
    {
        GState_SetTextKnockout($this->_cPtr, $knockout);
    }

    function SetRenderingIntent($intent)
    {
        GState_SetRenderingIntent($this->_cPtr, $intent);
    }

    function SetBlendMode($BM)
    {
        GState_SetBlendMode($this->_cPtr, $BM);
    }

    function SetFillOpacity($ca)
    {
        GState_SetFillOpacity($this->_cPtr, $ca);
    }

    function SetStrokeOpacity($ca)
    {
        GState_SetStrokeOpacity($this->_cPtr, $ca);
    }

    function SetAISFlag($AIS)
    {
        GState_SetAISFlag($this->_cPtr, $AIS);
    }

    function SetSoftMask($SM)
    {
        GState_SetSoftMask($this->_cPtr, $SM);
    }

    function SetStrokeOverprint($OP)
    {
        GState_SetStrokeOverprint($this->_cPtr, $OP);
    }

    function SetFillOverprint($op)
    {
        GState_SetFillOverprint($this->_cPtr, $op);
    }

    function SetOverprintMode($OPM)
    {
        GState_SetOverprintMode($this->_cPtr, $OPM);
    }

    function SetAutoStrokeAdjust($SA)
    {
        GState_SetAutoStrokeAdjust($this->_cPtr, $SA);
    }

    function SetSmoothnessTolerance($SM)
    {
        GState_SetSmoothnessTolerance($this->_cPtr, $SM);
    }

    function SetBlackGenFunct($BG)
    {
        GState_SetBlackGenFunct($this->_cPtr, $BG);
    }

    function SetUCRFunct($UCR)
    {
        GState_SetUCRFunct($this->_cPtr, $UCR);
    }

    function SetTransferFunct($TR)
    {
        GState_SetTransferFunct($this->_cPtr, $TR);
    }

    function SetHalftone($HT)
    {
        GState_SetHalftone($this->_cPtr, $HT);
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__PDF__GState') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_GState();
                break;
            default:
                $this->_cPtr = new_GState($c_or_impl);
        }
    }
}
