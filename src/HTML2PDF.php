<?php

namespace App\Documents\PdfTron;

class HTML2PDF
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_html2pdf') return HTML2PDF_mp_html2pdf_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_html2pdf') return HTML2PDF_mp_html2pdf_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('HTML2PDF_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function InsertFromURL($url, $settings = null)
    {
        switch (func_num_args()) {
            case 1:
                HTML2PDF_InsertFromURL($this->_cPtr, $url);
                break;
            default:
                HTML2PDF_InsertFromURL($this->_cPtr, $url, $settings);
        }
    }

    function InsertFromHtmlString($html, $settings = null)
    {
        switch (func_num_args()) {
            case 1:
                HTML2PDF_InsertFromHtmlString($this->_cPtr, $html);
                break;
            default:
                HTML2PDF_InsertFromHtmlString($this->_cPtr, $html, $settings);
        }
    }

    function InsertTOC($settings = null)
    {
        switch (func_num_args()) {
            case 0:
                HTML2PDF_InsertTOC($this->_cPtr);
                break;
            default:
                HTML2PDF_InsertTOC($this->_cPtr, $settings);
        }
    }

    function Convert($doc)
    {
        return HTML2PDF_Convert($this->_cPtr, $doc);
    }

    function GetHTTPErrorCode()
    {
        return HTML2PDF_GetHTTPErrorCode($this->_cPtr);
    }

    function SetQuiet($quiet)
    {
        HTML2PDF_SetQuiet($this->_cPtr, $quiet);
    }

    function GetLog()
    {
        return HTML2PDF_GetLog($this->_cPtr);
    }

    static function SetModulePath($path)
    {
        HTML2PDF_SetModulePath($path);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__HTML2PDF') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_HTML2PDF();
    }

    function SetPaperSize($size_or_width, $height = null)
    {
        switch (func_num_args()) {
            case 1:
                HTML2PDF_SetPaperSize($this->_cPtr, $size_or_width);
                break;
            default:
                HTML2PDF_SetPaperSize($this->_cPtr, $size_or_width, $height);
        }
    }

    function SetLandscape($enable)
    {
        HTML2PDF_SetLandscape($this->_cPtr, $enable);
    }

    function SetDPI($dpi)
    {
        HTML2PDF_SetDPI($this->_cPtr, $dpi);
    }

    function SetOutline($enable, $depth = 4)
    {
        HTML2PDF_SetOutline($this->_cPtr, $enable, $depth);
    }

    function DumpOutline($xml_file)
    {
        HTML2PDF_DumpOutline($this->_cPtr, $xml_file);
    }

    function SetPDFCompression($enable)
    {
        HTML2PDF_SetPDFCompression($this->_cPtr, $enable);
    }

    function SetMargins($top, $bottom, $left, $right)
    {
        HTML2PDF_SetMargins($this->_cPtr, $top, $bottom, $left, $right);
    }

    function SetImageDPI($dpi)
    {
        HTML2PDF_SetImageDPI($this->_cPtr, $dpi);
    }

    function SetImageQuality($quality)
    {
        HTML2PDF_SetImageQuality($this->_cPtr, $quality);
    }

    function SetCookieJar($path)
    {
        HTML2PDF_SetCookieJar($this->_cPtr, $path);
    }

    function Destroy()
    {
        HTML2PDF_Destroy($this->_cPtr);
    }
}
