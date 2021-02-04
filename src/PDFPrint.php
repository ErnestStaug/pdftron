<?php

namespace PDFNet\PDFTron;

class PDFPrint
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

    static function StartPrintJob($in_pdfdoc, $in_printerName, $in_jobName, $in_outputFileName, $in_pagesToPrint = null, $in_printerMode = null, $in_cancel = null, $in_context = null)
    {
        PDFPrint_StartPrintJob($in_pdfdoc, $in_printerName, $in_jobName, $in_outputFileName, $in_pagesToPrint, $in_printerMode, $in_cancel, $in_context);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDFPrint') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_PDFPrint();
    }
}
