<?php

namespace PDFNet\PDFTron;

class VectorByteRange
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
        if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__Common__ByteRange_t') {
            $this->_cPtr = $n;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VectorByteRange();
                break;
            default:
                $this->_cPtr = new_VectorByteRange($n);
        }
    }

    function size()
    {
        return VectorByteRange_size($this->_cPtr);
    }

    function capacity()
    {
        return VectorByteRange_capacity($this->_cPtr);
    }

    function reserve($n)
    {
        VectorByteRange_reserve($this->_cPtr, $n);
    }

    function clear()
    {
        VectorByteRange_clear($this->_cPtr);
    }

    function push($x)
    {
        VectorByteRange_push($this->_cPtr, $x);
    }

    function is_empty()
    {
        return VectorByteRange_is_empty($this->_cPtr);
    }

    function pop()
    {
        return VectorByteRange_pop($this->_cPtr);
    }

    function get($i)
    {
        return VectorByteRange_get($this->_cPtr, $i);
    }

    function set($i, $val)
    {
        VectorByteRange_set($this->_cPtr, $i, $val);
    }
}
