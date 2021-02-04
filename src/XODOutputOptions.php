<?php

namespace PDFNet\PDFTron;

class XODOutputOptions extends XPSOutputCommonOptions
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        XPSOutputCommonOptions::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return XPSOutputCommonOptions::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return XPSOutputCommonOptions::__isset($var);
    }

    const e_internal_xfdf = 0;

    const e_external_xfdf = XODOutputOptions_e_external_xfdf;

    const e_flatten = XODOutputOptions_e_flatten;

    function SetOutputThumbnails($include_thumbs)
    {
        XODOutputOptions_SetOutputThumbnails($this->_cPtr, $include_thumbs);
    }

    function SetThumbnailSize($size_or_regular_size, $large_size = null)
    {
        switch (func_num_args()) {
            case 1:
                XODOutputOptions_SetThumbnailSize($this->_cPtr, $size_or_regular_size);
                break;
            default:
                XODOutputOptions_SetThumbnailSize($this->_cPtr, $size_or_regular_size, $large_size);
        }
    }

    function SetElementLimit($element_limit)
    {
        XODOutputOptions_SetElementLimit($this->_cPtr, $element_limit);
    }

    function SetOpacityMaskWorkaround($opacity_render)
    {
        XODOutputOptions_SetOpacityMaskWorkaround($this->_cPtr, $opacity_render);
    }

    function SetMaximumImagePixels($max_pixels)
    {
        XODOutputOptions_SetMaximumImagePixels($this->_cPtr, $max_pixels);
    }

    function SetFlattenContent($flatten)
    {
        XODOutputOptions_SetFlattenContent($this->_cPtr, $flatten);
    }

    function SetFlattenThreshold($threshold)
    {
        XODOutputOptions_SetFlattenThreshold($this->_cPtr, $threshold);
    }

    function SetPreferJPG($prefer_jpg)
    {
        XODOutputOptions_SetPreferJPG($this->_cPtr, $prefer_jpg);
    }

    function SetJPGQuality($quality)
    {
        XODOutputOptions_SetJPGQuality($this->_cPtr, $quality);
    }

    function SetSilverlightTextWorkaround($workaround)
    {
        XODOutputOptions_SetSilverlightTextWorkaround($this->_cPtr, $workaround);
    }

    function SetAnnotationOutput($annot_output)
    {
        XODOutputOptions_SetAnnotationOutput($this->_cPtr, $annot_output);
    }

    function SetExternalParts($generate)
    {
        XODOutputOptions_SetExternalParts($this->_cPtr, $generate);
    }

    function SetEncryptPassword($pass)
    {
        XODOutputOptions_SetEncryptPassword($this->_cPtr, $pass);
    }

    function UseSilverlightFlashCompatible($compatible)
    {
        XODOutputOptions_UseSilverlightFlashCompatible($this->_cPtr, $compatible);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__XODOutputOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_XODOutputOptions();
    }
}
