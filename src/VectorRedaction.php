<?php

namespace PDFNet\PDFTron;

class VectorRedaction
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
        if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__Redaction_t') {
            $this->_cPtr = $n;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VectorRedaction();
                break;
            default:
                $this->_cPtr = new_VectorRedaction($n);
        }
    }

    function size()
    {
        return VectorRedaction_size($this->_cPtr);
    }

    function capacity()
    {
        return VectorRedaction_capacity($this->_cPtr);
    }

    function reserve($n)
    {
        VectorRedaction_reserve($this->_cPtr, $n);
    }

    function clear()
    {
        VectorRedaction_clear($this->_cPtr);
    }

    function push($x)
    {
        VectorRedaction_push($this->_cPtr, $x);
    }

    function is_empty()
    {
        return VectorRedaction_is_empty($this->_cPtr);
    }

    function pop()
    {
        $r = VectorRedaction_pop($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Redaction($r);
        }
        return $r;
    }

    function get($i)
    {
        $r = VectorRedaction_get($this->_cPtr, $i);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Redaction($r);
        }
        return $r;
    }

    function set($i, $val)
    {
        VectorRedaction_set($this->_cPtr, $i, $val);
    }
}
