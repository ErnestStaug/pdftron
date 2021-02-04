<?php

namespace PDFNet\PDFTron;

class Convert
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

    function __construct($h)
    {
        $this->_cPtr = $h;
    }

    const e_very_strict = 0;

    const e_strict = Convert_e_strict;

    const e_default = Convert_e_default;

    const e_keep_most = Convert_e_keep_most;

    const e_keep_all = Convert_e_keep_all;

    const e_off = 0;

    const e_simple = Convert_e_simple;

    const e_fast = Convert_e_fast;

    const e_high_quality = Convert_e_high_quality;

    static function FromXps($in_pdfdoc, $in_filename_or_buf, $buf_sz = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_FromXps($in_pdfdoc, $in_filename_or_buf);
                break;
            default:
                Convert_FromXps($in_pdfdoc, $in_filename_or_buf, $buf_sz);
        }
    }

    static function FromEmf($in_pdfdoc, $in_filename)
    {
        Convert_FromEmf($in_pdfdoc, $in_filename);
    }

    static function FromText($in_pdfdoc, $in_filename, $in_options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_FromText($in_pdfdoc, $in_filename);
                break;
            default:
                Convert_FromText($in_pdfdoc, $in_filename, $in_options);
        }
    }

    static function ToEmf($in_pdfdoc_or_in_page, $in_filename)
    {
        Convert_ToEmf($in_pdfdoc_or_in_page, $in_filename);
    }

    static function ToSvg($in_pdfdoc_or_in_page, $in_filename, $in_options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_ToSvg($in_pdfdoc_or_in_page, $in_filename);
                break;
            default:
                Convert_ToSvg($in_pdfdoc_or_in_page, $in_filename, $in_options);
        }
    }

    static function ToXps($in_pdfdoc_or_in_inputFilename, $in_filename_or_in_outputFilename, $options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_ToXps($in_pdfdoc_or_in_inputFilename, $in_filename_or_in_outputFilename);
                break;
            default:
                Convert_ToXps($in_pdfdoc_or_in_inputFilename, $in_filename_or_in_outputFilename, $options);
        }
    }

    static function PageToHtml($page)
    {
        return Convert_PageToHtml($page);
    }

    static function ToHtml($in_filename_or_in_pdfdoc, $out_path, $options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_ToHtml($in_filename_or_in_pdfdoc, $out_path);
                break;
            default:
                Convert_ToHtml($in_filename_or_in_pdfdoc, $out_path, $options);
        }
    }

    static function ToEpub($in_filename_or_in_pdfdoc, $out_path, $html_options = null, $epub_options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_ToEpub($in_filename_or_in_pdfdoc, $out_path);
                break;
            case 3:
                Convert_ToEpub($in_filename_or_in_pdfdoc, $out_path, $html_options);
                break;
            default:
                Convert_ToEpub($in_filename_or_in_pdfdoc, $out_path, $html_options, $epub_options);
        }
    }

    static function ToTiff($in_filename_or_in_pdfdoc, $out_path, $options = null)
    {
        switch (func_num_args()) {
            case 2:
                Convert_ToTiff($in_filename_or_in_pdfdoc, $out_path);
                break;
            default:
                Convert_ToTiff($in_filename_or_in_pdfdoc, $out_path, $options);
        }
    }

    static function ToXod($in_filename_or_in_pdfdoc, $out_filename_or_options = null, $options = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = Convert_ToXod($in_filename_or_in_pdfdoc);
                break;
            case 2:
                $r = Convert_ToXod($in_filename_or_in_pdfdoc, $out_filename_or_options);
                break;
            default:
                $r = Convert_ToXod($in_filename_or_in_pdfdoc, $out_filename_or_options, $options);
        }
        if (!is_resource($r)) return $r;
        switch (get_resource_type($r)) {
            case '_p_pdftron__Filters__Filter':
                return new Filter($r);
            default:
                return $r;
        }
    }

    static function ToXodWithMonitor($in_pdfdoc, $options = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = Convert_ToXodWithMonitor($in_pdfdoc);
                break;
            default:
                $r = Convert_ToXodWithMonitor($in_pdfdoc, $options);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ConversionMonitor($r);
        }
        return $r;
    }

    static function WordToPDF($in_pdfdoc, $in_filename_or_in_stream, $options)
    {
        Convert_WordToPDF($in_pdfdoc, $in_filename_or_in_stream, $options);
    }

    static function WordToPDFConversion($in_pdfdoc, $in_filename_or_in_stream, $options)
    {
        $r = Convert_WordToPDFConversion($in_pdfdoc, $in_filename_or_in_stream, $options);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocumentConversion($r);
        }
        return $r;
    }

    static function OfficeToPDF($in_pdfdoc, $in_filename_or_in_stream, $options)
    {
        Convert_OfficeToPDF($in_pdfdoc, $in_filename_or_in_stream, $options);
    }

    static function StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream, $in_filename_or_options_or_in_stream, $options = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Convert_StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream, $in_filename_or_options_or_in_stream);
                break;
            default:
                $r = Convert_StreamingPDFConversion($in_pdfdoc_or_in_filename_or_in_stream, $in_filename_or_options_or_in_stream, $options);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocumentConversion($r);
        }
        return $r;
    }

    static function ToPdf($in_pdfdoc, $in_filename)
    {
        Convert_ToPdf($in_pdfdoc, $in_filename);
    }

    static function FromCAD($in_pdfdoc, $in_filename, $opts = null)
    {
        Convert_FromCAD($in_pdfdoc, $in_filename, $opts);
    }

    static function FromTiff($in_pdfdoc, $in_data)
    {
        Convert_FromTiff($in_pdfdoc, $in_data);
    }

    static function RequiresPrinter($in_filename)
    {
        return Convert_RequiresPrinter($in_filename);
    }
}
