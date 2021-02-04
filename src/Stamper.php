<?php

namespace PDFNet\PDFTron;

class Stamper
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return Stamper_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return Stamper_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Stamper_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_relative_scale = 1;

    const e_absolute_size = 2;

    const e_font_size = 3;

    const e_horizontal_left = -1;

    const e_horizontal_center = 0;

    const e_horizontal_right = 1;

    const e_vertical_bottom = -1;

    const e_vertical_center = 0;

    const e_vertical_top = 1;

    const e_align_left = -1;

    const e_align_center = 0;

    const e_align_right = 1;

    function StampImage($dest_doc, $src_img, $dest_pages)
    {
        Stamper_StampImage($this->_cPtr, $dest_doc, $src_img, $dest_pages);
    }

    function StampPage($dest_doc, $src_page, $dest_pages)
    {
        Stamper_StampPage($this->_cPtr, $dest_doc, $src_page, $dest_pages);
    }

    function StampText($dest_doc, $src_txt, $dest_pages)
    {
        Stamper_StampText($this->_cPtr, $dest_doc, $src_txt, $dest_pages);
    }

    function SetFont($font)
    {
        Stamper_SetFont($this->_cPtr, $font);
    }

    function SetFontColor($color)
    {
        Stamper_SetFontColor($this->_cPtr, $color);
    }

    function SetOpacity($opacity)
    {
        Stamper_SetOpacity($this->_cPtr, $opacity);
    }

    function SetRotation($rotation)
    {
        Stamper_SetRotation($this->_cPtr, $rotation);
    }

    function SetAsBackground($background)
    {
        Stamper_SetAsBackground($this->_cPtr, $background);
    }

    function SetAsAnnotation($annotation)
    {
        Stamper_SetAsAnnotation($this->_cPtr, $annotation);
    }

    function ShowsOnScreen($on_screen)
    {
        Stamper_ShowsOnScreen($this->_cPtr, $on_screen);
    }

    function ShowsOnPrint($on_print)
    {
        Stamper_ShowsOnPrint($this->_cPtr, $on_print);
    }

    function SetPosition($horizontal_distance, $vertical_distance, $use_percentage = false)
    {
        Stamper_SetPosition($this->_cPtr, $horizontal_distance, $vertical_distance, $use_percentage);
    }

    function SetAlignment($horizontal_alignment, $vertical_alignment)
    {
        Stamper_SetAlignment($this->_cPtr, $horizontal_alignment, $vertical_alignment);
    }

    function SetTextAlignment($text_alignment)
    {
        Stamper_SetTextAlignment($this->_cPtr, $text_alignment);
    }

    function SetSize($size_type, $a, $b)
    {
        Stamper_SetSize($this->_cPtr, $size_type, $a, $b);
    }

    static function DeleteStamps($doc, $page_set)
    {
        Stamper_DeleteStamps($doc, $page_set);
    }

    static function HasStamps($doc, $page_set)
    {
        return Stamper_HasStamps($doc, $page_set);
    }

    function Destroy()
    {
        Stamper_Destroy($this->_cPtr);
    }

    function __construct($size_type_or_impl, $a = null, $b = null)
    {
        if (is_resource($size_type_or_impl) && get_resource_type($size_type_or_impl) === '_p_pdftron__PDF__Stamper') {
            $this->_cPtr = $size_type_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 1:
                $this->_cPtr = new_Stamper($size_type_or_impl);
                break;
            case 2:
                $this->_cPtr = new_Stamper($size_type_or_impl, $a);
                break;
            default:
                $this->_cPtr = new_Stamper($size_type_or_impl, $a, $b);
        }
    }
}
