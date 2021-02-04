<?php

namespace PDFNet\PDFTron;

class Redactor
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

    static function Redact($doc, $red_arr, $app = null, $ext_neg_mode = null, $page_coord_sys = null)
    {
        switch (func_num_args()) {
            case 2:
                Redactor_Redact($doc, $red_arr);
                break;
            case 3:
                Redactor_Redact($doc, $red_arr, $app);
                break;
            case 4:
                Redactor_Redact($doc, $red_arr, $app, $ext_neg_mode);
                break;
            default:
                Redactor_Redact($doc, $red_arr, $app, $ext_neg_mode, $page_coord_sys);
        }
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Redactor') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_Redactor();
    }
}
