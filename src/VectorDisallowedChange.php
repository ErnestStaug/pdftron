<?php

namespace PDFNet\PDFTron;

class VectorDisallowedChange
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
        if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_pdftron__PDF__DisallowedChange_t') {
            $this->_cPtr = $n;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VectorDisallowedChange();
                break;
            default:
                $this->_cPtr = new_VectorDisallowedChange($n);
        }
    }

    function size()
    {
        return VectorDisallowedChange_size($this->_cPtr);
    }

    function capacity()
    {
        return VectorDisallowedChange_capacity($this->_cPtr);
    }

    function reserve($n)
    {
        VectorDisallowedChange_reserve($this->_cPtr, $n);
    }

    function clear()
    {
        VectorDisallowedChange_clear($this->_cPtr);
    }

    function push($x)
    {
        VectorDisallowedChange_push($this->_cPtr, $x);
    }

    function is_empty()
    {
        return VectorDisallowedChange_is_empty($this->_cPtr);
    }

    function pop()
    {
        $r = VectorDisallowedChange_pop($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DisallowedChange($r);
        }
        return $r;
    }

    function get($i)
    {
        $r = VectorDisallowedChange_get($this->_cPtr, $i);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DisallowedChange($r);
        }
        return $r;
    }

    function set($i, $val)
    {
        VectorDisallowedChange_set($this->_cPtr, $i, $val);
    }
}
