<?php

namespace PDFNet\PDFTron;

class Font
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_font') return Font_mp_font_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_font') return Font_mp_font_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Font_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_times_roman = 0;

    const e_times_bold = Font_e_times_bold;

    const e_times_italic = Font_e_times_italic;

    const e_times_bold_italic = Font_e_times_bold_italic;

    const e_helvetica = Font_e_helvetica;

    const e_helvetica_bold = Font_e_helvetica_bold;

    const e_helvetica_oblique = Font_e_helvetica_oblique;

    const e_helvetica_bold_oblique = Font_e_helvetica_bold_oblique;

    const e_courier = Font_e_courier;

    const e_courier_bold = Font_e_courier_bold;

    const e_courier_oblique = Font_e_courier_oblique;

    const e_courier_bold_oblique = Font_e_courier_bold_oblique;

    const e_symbol = Font_e_symbol;

    const e_zapf_dingbats = Font_e_zapf_dingbats;

    const e_null = Font_e_null;

    static function CreateTrueTypeFont($doc, $font_path, $embed = true, $subset = true)
    {
        $r = Font_CreateTrueTypeFont($doc, $font_path, $embed, $subset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    const e_IdentityH = 0;

    const e_Indices = Font_e_Indices;

    static function CreateCIDTrueTypeFont($doc, $font_path, $embed = true, $subset = true, $encoding = null, $ttc_font_index = 0)
    {
        switch (func_num_args()) {
            case 2:
            case 3:
            case 4:
                $r = Font_CreateCIDTrueTypeFont($doc, $font_path, $embed, $subset);
                break;
            default:
                $r = Font_CreateCIDTrueTypeFont($doc, $font_path, $embed, $subset, $encoding, $ttc_font_index);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    static function Create($doc, $type_or_from_or_name, $embed_or_char_set = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Font_Create($doc, $type_or_from_or_name);
                break;
            default:
                $r = Font_Create($doc, $type_or_from_or_name, $embed_or_char_set);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    static function CreateType1Font($doc, $font_path, $embed = true)
    {
        $r = Font_CreateType1Font($doc, $font_path, $embed);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    const e_Type1 = 0;

    const e_TrueType = Font_e_TrueType;

    const e_MMType1 = Font_e_MMType1;

    const e_Type3 = Font_e_Type3;

    const e_Type0 = Font_e_Type0;

    const e_CIDType0 = Font_e_CIDType0;

    const e_CIDType2 = Font_e_CIDType2;

    function GetType()
    {
        return Font_GetType($this->_cPtr);
    }

    function IsSimple()
    {
        return Font_IsSimple($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = Font_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetDescriptor()
    {
        $r = Font_GetDescriptor($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetName()
    {
        return Font_GetName($this->_cPtr);
    }

    function GetFamilyName()
    {
        return Font_GetFamilyName($this->_cPtr);
    }

    function IsFixedWidth()
    {
        return Font_IsFixedWidth($this->_cPtr);
    }

    function IsSerif()
    {
        return Font_IsSerif($this->_cPtr);
    }

    function IsSymbolic()
    {
        return Font_IsSymbolic($this->_cPtr);
    }

    function IsItalic()
    {
        return Font_IsItalic($this->_cPtr);
    }

    function IsAllCap()
    {
        return Font_IsAllCap($this->_cPtr);
    }

    function IsForceBold()
    {
        return Font_IsForceBold($this->_cPtr);
    }

    function IsHorizontalMode()
    {
        return Font_IsHorizontalMode($this->_cPtr);
    }

    function GetWidth($char_code)
    {
        return Font_GetWidth($this->_cPtr, $char_code);
    }

    function GetMaxWidth()
    {
        return Font_GetMaxWidth($this->_cPtr);
    }

    function GetMissingWidth()
    {
        return Font_GetMissingWidth($this->_cPtr);
    }

    function GetCharCodeIterator()
    {
        $r = Font_GetCharCodeIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new UInt32Iterator($r);
        }
        return $r;
    }

    function GetGlyphPath($char_code, $conics2cubics, $transform = null)
    {
        $r = Font_GetGlyphPath($this->_cPtr, $char_code, $conics2cubics, $transform);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PathData($r);
        }
        return $r;
    }

    function GetShapedText($text_to_shape)
    {
        return Font_GetShapedText($this->_cPtr, $text_to_shape);
    }

    function MapToUnicode($char_code)
    {
        return Font_MapToUnicode($this->_cPtr, $char_code);
    }

    function IsEmbedded()
    {
        return Font_IsEmbedded($this->_cPtr);
    }

    function GetEmbeddedFontName()
    {
        return Font_GetEmbeddedFontName($this->_cPtr);
    }

    function GetEmbeddedFont()
    {
        $r = Font_GetEmbeddedFont($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetEmbeddedFontBufSize()
    {
        return Font_GetEmbeddedFontBufSize($this->_cPtr);
    }

    function GetUnitsPerEm()
    {
        return Font_GetUnitsPerEm($this->_cPtr);
    }

    function GetBBox()
    {
        $r = Font_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetAscent()
    {
        return Font_GetAscent($this->_cPtr);
    }

    function GetDescent()
    {
        return Font_GetDescent($this->_cPtr);
    }

    function GetStandardType1FontType()
    {
        return Font_GetStandardType1FontType($this->_cPtr);
    }

    function IsCFF()
    {
        return Font_IsCFF($this->_cPtr);
    }

    function GetType3FontMatrix()
    {
        $r = Font_GetType3FontMatrix($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function GetType3GlyphStream($char_code)
    {
        $r = Font_GetType3GlyphStream($this->_cPtr, $char_code);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetVerticalAdvance($char_code)
    {
        $r = Font_GetVerticalAdvance($this->_cPtr, $char_code);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetDescendant()
    {
        $r = Font_GetDescendant($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Font($r);
        }
        return $r;
    }

    function MapToCID($char_code)
    {
        return Font_MapToCID($this->_cPtr, $char_code);
    }

    function Destroy()
    {
        Font_Destroy($this->_cPtr);
    }

    function __construct($font_dict_or_c_or_impl = null)
    {
        if (is_resource($font_dict_or_c_or_impl) && get_resource_type($font_dict_or_c_or_impl) === '_p_pdftron__PDF__Font') {
            $this->_cPtr = $font_dict_or_c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Font();
                break;
            default:
                $this->_cPtr = new_Font($font_dict_or_c_or_impl);
        }
    }
}
