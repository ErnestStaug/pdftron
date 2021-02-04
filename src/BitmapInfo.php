<?php

namespace PDFNet\PDFTron;

class BitmapInfo
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'BitmapInfo_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        $func = 'BitmapInfo_' . $var . '_get';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('BitmapInfo_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($w_or_b, $h = null, $s = null, $d = null, $b = null)
    {
        if (is_resource($w_or_b) && get_resource_type($w_or_b) === '_p_pdftron__PDF__BitmapInfo') {
            $this->_cPtr = $w_or_b;
            return;
        }
        switch (func_num_args()) {
            case 1:
                $this->_cPtr = new_BitmapInfo($w_or_b);
                break;
            case 2:
                $this->_cPtr = new_BitmapInfo($w_or_b, $h);
                break;
            case 3:
                $this->_cPtr = new_BitmapInfo($w_or_b, $h, $s);
                break;
            case 4:
                $this->_cPtr = new_BitmapInfo($w_or_b, $h, $s, $d);
                break;
            default:
                $this->_cPtr = new_BitmapInfo($w_or_b, $h, $s, $d, $b);
        }
    }

    function GetBuffer()
    {
        $r = BitmapInfo_GetBuffer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }
}
