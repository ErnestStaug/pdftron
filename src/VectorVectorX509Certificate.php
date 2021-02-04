<?php

namespace App\Documents\PdfTron;

class VectorVectorX509Certificate
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
        if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_std__vectorT_pdftron__PDF__X509Certificate_t_t') {
            $this->_cPtr = $n;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_VectorVectorX509Certificate();
                break;
            default:
                $this->_cPtr = new_VectorVectorX509Certificate($n);
        }
    }

    function size()
    {
        return VectorVectorX509Certificate_size($this->_cPtr);
    }

    function capacity()
    {
        return VectorVectorX509Certificate_capacity($this->_cPtr);
    }

    function reserve($n)
    {
        VectorVectorX509Certificate_reserve($this->_cPtr, $n);
    }

    function clear()
    {
        VectorVectorX509Certificate_clear($this->_cPtr);
    }

    function push($x)
    {
        VectorVectorX509Certificate_push($this->_cPtr, $x);
    }

    function is_empty()
    {
        return VectorVectorX509Certificate_is_empty($this->_cPtr);
    }

    function pop()
    {
        $r = VectorVectorX509Certificate_pop($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorX509Certificate($r);
        }
        return $r;
    }

    function get($i)
    {
        $r = VectorVectorX509Certificate_get($this->_cPtr, $i);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorX509Certificate($r);
        }
        return $r;
    }

    function set($i, $val)
    {
        VectorVectorX509Certificate_set($this->_cPtr, $i, $val);
    }
}
