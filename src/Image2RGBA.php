<?php

namespace App\Documents\PdfTron;

class Image2RGBA extends Filter
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Filter::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Filter::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Filter::__isset($var);
    }

    function __construct($image_element_or_image_xobject_or_image, $premultiply = false)
    {
        if (is_resource($image_element_or_image_xobject_or_image) && get_resource_type($image_element_or_image_xobject_or_image) === '_p_pdftron__PDF__Image2RGBA') {
            $this->_cPtr = $image_element_or_image_xobject_or_image;
            return;
        }
        $this->_cPtr = new_Image2RGBA($image_element_or_image_xobject_or_image, $premultiply);
    }
}
