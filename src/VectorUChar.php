<?php

namespace App\Documents\PdfTron;

class VectorUChar
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

    function __construct($n = null)
    {
        if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_unsigned_char_t') {
            $this->_cPtr = $n;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VectorUChar();
                break;
            default:
                $this->_cPtr = new_VectorUChar($n);
        }
    }

    function size()
    {
        return VectorUChar_size($this->_cPtr);
    }

    function capacity()
    {
        return VectorUChar_capacity($this->_cPtr);
    }

    function reserve($n)
    {
        VectorUChar_reserve($this->_cPtr, $n);
    }

    function clear()
    {
        VectorUChar_clear($this->_cPtr);
    }

    function push($x)
    {
        VectorUChar_push($this->_cPtr, $x);
    }

    function is_empty()
    {
        return VectorUChar_is_empty($this->_cPtr);
    }

    function pop()
    {
        return VectorUChar_pop($this->_cPtr);
    }

    function get($i)
    {
        return VectorUChar_get($this->_cPtr, $i);
    }

    function set($i, $val)
    {
        VectorUChar_set($this->_cPtr, $i, $val);
    }
}
