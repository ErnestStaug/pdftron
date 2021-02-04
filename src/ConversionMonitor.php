<?php

namespace App\Documents\PdfTron;

class ConversionMonitor
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return ConversionMonitor_mp_impl_set($this->_cPtr, $value);
        if ($var === 'm_owner') return ConversionMonitor_m_owner_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return ConversionMonitor_mp_impl_get($this->_cPtr);
        if ($var === 'm_owner') return ConversionMonitor_m_owner_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ConversionMonitor_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Next()
    {
        return ConversionMonitor_Next($this->_cPtr);
    }

    function Ready()
    {
        return ConversionMonitor_Ready($this->_cPtr);
    }

    function Progress()
    {
        return ConversionMonitor_Progress($this->_cPtr);
    }

    function Filter()
    {
        $r = ConversionMonitor_Filter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function Destroy()
    {
        ConversionMonitor_Destroy($this->_cPtr);
    }

    function __construct($copy_or_impl = null, $is_owner = null)
    {
        if (is_resource($copy_or_impl) && get_resource_type($copy_or_impl) === '_p_pdftron__PDF__ConversionMonitor') {
            $this->_cPtr = $copy_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ConversionMonitor();
                break;
            case 1:
                $this->_cPtr = new_ConversionMonitor($copy_or_impl);
                break;
            default:
                $this->_cPtr = new_ConversionMonitor($copy_or_impl, $is_owner);
        }
    }
}
