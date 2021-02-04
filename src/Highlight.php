<?php

namespace PDFNet\PDFTron;

class Highlight
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'Highlight_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        $func = 'Highlight_' . $var . '_get';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Highlight_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($pg_or_hlt = null, $pos = null, $len = null)
    {
        if (is_resource($pg_or_hlt) && get_resource_type($pg_or_hlt) === '_p_pdftron__PDF__Highlight') {
            $this->_cPtr = $pg_or_hlt;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Highlight();
                break;
            case 1:
                $this->_cPtr = new_Highlight($pg_or_hlt);
                break;
            case 2:
                $this->_cPtr = new_Highlight($pg_or_hlt, $pos);
                break;
            default:
                $this->_cPtr = new_Highlight($pg_or_hlt, $pos, $len);
        }
    }
}
