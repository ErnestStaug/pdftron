<?php

namespace PDFNet\PDFTron;

class SVGOutputOptions
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__SVGOutputOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_SVGOutputOptions();
    }

    function SetEmbedImages($embed_images)
    {
        SVGOutputOptions_SetEmbedImages($this->_cPtr, $embed_images);
    }

    function SetNoFonts($no_fonts)
    {
        SVGOutputOptions_SetNoFonts($this->_cPtr, $no_fonts);
    }

    function SetSvgFonts($svg_fonts)
    {
        SVGOutputOptions_SetSvgFonts($this->_cPtr, $svg_fonts);
    }

    function SetEmbedFonts($embed_fonts)
    {
        SVGOutputOptions_SetEmbedFonts($this->_cPtr, $embed_fonts);
    }

    function SetNoUnicode($no_unicode)
    {
        SVGOutputOptions_SetNoUnicode($this->_cPtr, $no_unicode);
    }

    function SetIndividualCharPlacement($individual_char_placement)
    {
        SVGOutputOptions_SetIndividualCharPlacement($this->_cPtr, $individual_char_placement);
    }

    function SetRemoveCharPlacement($remove_char_placement)
    {
        SVGOutputOptions_SetRemoveCharPlacement($this->_cPtr, $remove_char_placement);
    }

    function SetFlattenContent($flatten)
    {
        SVGOutputOptions_SetFlattenContent($this->_cPtr, $flatten);
    }

    function SetFlattenThreshold($threshold)
    {
        SVGOutputOptions_SetFlattenThreshold($this->_cPtr, $threshold);
    }

    function SetFlattenDPI($dpi)
    {
        SVGOutputOptions_SetFlattenDPI($this->_cPtr, $dpi);
    }

    function SetFlattenMaximumImagePixels($max_pixels)
    {
        SVGOutputOptions_SetFlattenMaximumImagePixels($this->_cPtr, $max_pixels);
    }

    function SetCompress($svgz)
    {
        SVGOutputOptions_SetCompress($this->_cPtr, $svgz);
    }

    function SetOutputThumbnails($include_thumbs)
    {
        SVGOutputOptions_SetOutputThumbnails($this->_cPtr, $include_thumbs);
    }

    function SetThumbnailSize($size)
    {
        SVGOutputOptions_SetThumbnailSize($this->_cPtr, $size);
    }

    function SetCreateXmlWrapper($xml)
    {
        SVGOutputOptions_SetCreateXmlWrapper($this->_cPtr, $xml);
    }

    function SetDtd($dtd)
    {
        SVGOutputOptions_SetDtd($this->_cPtr, $dtd);
    }

    function SetAnnots($annots)
    {
        SVGOutputOptions_SetAnnots($this->_cPtr, $annots);
    }

    function SetOverprint($mode)
    {
        SVGOutputOptions_SetOverprint($this->_cPtr, $mode);
    }
}
