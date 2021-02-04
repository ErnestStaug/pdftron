<?php

namespace App\Documents\PdfTron;

class Image
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_image') return Image_mp_image_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_image') return Image_mp_image_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Image_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function CreateImageMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_encoder_hints = null, $encoder_hints = null)
    {
        switch (func_num_args()) {
            case 4:
                $r = Image_CreateImageMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height);
                break;
            case 5:
                $r = Image_CreateImageMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_encoder_hints);
                break;
            default:
                $r = Image_CreateImageMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_encoder_hints, $encoder_hints);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Image($r);
        }
        return $r;
    }

    static function CreateSoftMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_bpc, $bpc_or_encoder_hints = null, $encoder_hints = null)
    {
        switch (func_num_args()) {
            case 5:
                $r = Image_CreateSoftMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_bpc);
                break;
            case 6:
                $r = Image_CreateSoftMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_bpc, $bpc_or_encoder_hints);
                break;
            default:
                $r = Image_CreateSoftMask($doc, $buf_or_image_data, $buf_size_or_width, $width_or_height, $height_or_bpc, $bpc_or_encoder_hints, $encoder_hints);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Image($r);
        }
        return $r;
    }

    const e_none = 0;

    const e_jpeg = Image_e_jpeg;

    const e_jp2 = Image_e_jp2;

    const e_flate = Image_e_flate;

    const e_g3 = Image_e_g3;

    const e_g4 = Image_e_g4;

    const e_ascii_hex = Image_e_ascii_hex;

    static function Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width = null, $width_or_height_or_encoder_hints = null, $height_or_bpc = null, $bpc_or_color_space = null, $color_space_or_encoder_hints_or_input_format = null, $encoder_hints_or_input_format = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Image_Create($doc, $filename_or_buf_or_image_data);
                break;
            case 3:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width);
                break;
            case 4:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width, $width_or_height_or_encoder_hints);
                break;
            case 5:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width, $width_or_height_or_encoder_hints, $height_or_bpc);
                break;
            case 6:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width, $width_or_height_or_encoder_hints, $height_or_bpc, $bpc_or_color_space);
                break;
            case 7:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width, $width_or_height_or_encoder_hints, $height_or_bpc, $bpc_or_color_space, $color_space_or_encoder_hints_or_input_format);
                break;
            default:
                $r = Image_Create($doc, $filename_or_buf_or_image_data, $encoder_hints_or_buf_size_or_width, $width_or_height_or_encoder_hints, $height_or_bpc, $bpc_or_color_space, $color_space_or_encoder_hints_or_input_format, $encoder_hints_or_input_format);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Image($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = Image_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsValid()
    {
        return Image_IsValid($this->_cPtr);
    }

    function GetImageData()
    {
        $r = Image_GetImageData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetImageDataSize()
    {
        return Image_GetImageDataSize($this->_cPtr);
    }

    function GetImageColorSpace()
    {
        $r = Image_GetImageColorSpace($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorSpace($r);
        }
        return $r;
    }

    function GetImageWidth()
    {
        return Image_GetImageWidth($this->_cPtr);
    }

    function GetImageHeight()
    {
        return Image_GetImageHeight($this->_cPtr);
    }

    function GetDecodeArray()
    {
        $r = Image_GetDecodeArray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetBitsPerComponent()
    {
        return Image_GetBitsPerComponent($this->_cPtr);
    }

    function GetComponentNum()
    {
        return Image_GetComponentNum($this->_cPtr);
    }

    function IsImageMask()
    {
        return Image_IsImageMask($this->_cPtr);
    }

    function IsImageInterpolate()
    {
        return Image_IsImageInterpolate($this->_cPtr);
    }

    function GetMask()
    {
        $r = Image_GetMask($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetMask($image_mask_or_mask)
    {
        Image_SetMask($this->_cPtr, $image_mask_or_mask);
    }

    function GetSoftMask()
    {
        $r = Image_GetSoftMask($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetSoftMask($soft_mask)
    {
        Image_SetSoftMask($this->_cPtr, $soft_mask);
    }

    function GetImageRenderingIntent()
    {
        return Image_GetImageRenderingIntent($this->_cPtr);
    }

    function Export($filename_or_writer)
    {
        return Image_Export($this->_cPtr, $filename_or_writer);
    }

    function ExportAsTiff($filename_or_writer)
    {
        Image_ExportAsTiff($this->_cPtr, $filename_or_writer);
    }

    function ExportAsPng($filename_or_writer)
    {
        Image_ExportAsPng($this->_cPtr, $filename_or_writer);
    }

    function __construct($image_xobject_or_impl = null)
    {
        if (is_resource($image_xobject_or_impl) && get_resource_type($image_xobject_or_impl) === '_p_pdftron__PDF__Image') {
            $this->_cPtr = $image_xobject_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Image();
                break;
            default:
                $this->_cPtr = new_Image($image_xobject_or_impl);
        }
    }
}
