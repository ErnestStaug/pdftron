<?php

namespace PDFNet\PDFTron;

class QuadPoint
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'QuadPoint_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'p1') return new Point(QuadPoint_p1_get($this->_cPtr));
        if ($var === 'p2') return new Point(QuadPoint_p2_get($this->_cPtr));
        if ($var === 'p3') return new Point(QuadPoint_p3_get($this->_cPtr));
        if ($var === 'p4') return new Point(QuadPoint_p4_get($this->_cPtr));
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('QuadPoint_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($p11_or_r = null, $p22 = null, $p33 = null, $p44 = null)
    {
        if (is_resource($p11_or_r) && get_resource_type($p11_or_r) === '_p_pdftron__PDF__QuadPoint') {
            $this->_cPtr = $p11_or_r;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_QuadPoint();
                break;
            case 1:
                $this->_cPtr = new_QuadPoint($p11_or_r);
                break;
            case 2:
                $this->_cPtr = new_QuadPoint($p11_or_r, $p22);
                break;
            case 3:
                $this->_cPtr = new_QuadPoint($p11_or_r, $p22, $p33);
                break;
            default:
                $this->_cPtr = new_QuadPoint($p11_or_r, $p22, $p33, $p44);
        }
    }
}
