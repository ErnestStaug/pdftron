<?php

namespace PDFNet\PDFTron;

class Printer
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

    static function Install($in_printerName = null)
    {
        switch (func_num_args()) {
            case 0:
                Printer_Install();
                break;
            default:
                Printer_Install($in_printerName);
        }
    }

    static function Uninstall()
    {
        Printer_Uninstall();
    }

    static function GetPrinterName()
    {
        return Printer_GetPrinterName();
    }

    static function SetPrinterName($in_printerName = null)
    {
        switch (func_num_args()) {
            case 0:
                Printer_SetPrinterName();
                break;
            default:
                Printer_SetPrinterName($in_printerName);
        }
    }

    static function IsInstalled($in_printerName = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Printer_IsInstalled();
                break;
            default:
                $r = Printer_IsInstalled($in_printerName);
        }
        return $r;
    }

    const e_auto = 0;

    const e_interop_only = Printer_e_interop_only;

    const e_printer_only = Printer_e_printer_only;

    const e_prefer_builtin_converter = Printer_e_prefer_builtin_converter;

    static function SetMode($mode)
    {
        Printer_SetMode($mode);
    }

    static function GetMode()
    {
        return Printer_GetMode();
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Printer') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_Printer();
    }
}
