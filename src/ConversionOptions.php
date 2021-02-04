<?php

namespace App\Documents\PdfTron;

class ConversionOptions
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

    function __construct($value = null)
    {
        if (is_resource($value) && get_resource_type($value) === '_p_pdftron__PDF__ConversionOptions') {
            $this->_cPtr = $value;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ConversionOptions();
                break;
            default:
                $this->_cPtr = new_ConversionOptions($value);
        }
    }

    function GetInternalObj()
    {
        $r = ConversionOptions_GetInternalObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }
}
