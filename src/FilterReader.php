<?php

namespace PDFNet\PDFTron;

class FilterReader
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return FilterReader_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return FilterReader_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('FilterReader_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($filter = null)
    {
        if (is_resource($filter) && get_resource_type($filter) === '_p_pdftron__Filters__FilterReader') {
            $this->_cPtr = $filter;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FilterReader();
                break;
            default:
                $this->_cPtr = new_FilterReader($filter);
        }
    }

    function Get()
    {
        return FilterReader_Get($this->_cPtr);
    }

    function Peek()
    {
        return FilterReader_Peek($this->_cPtr);
    }

    function Read($buf_size)
    {
        $r = FilterReader_Read($this->_cPtr, $buf_size);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function AttachFilter($filter)
    {
        FilterReader_AttachFilter($this->_cPtr, $filter);
    }

    function GetAttachedFilter()
    {
        $r = FilterReader_GetAttachedFilter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function Seek($offset, $origin)
    {
        FilterReader_Seek($this->_cPtr, $offset, $origin);
    }

    function Tell()
    {
        return FilterReader_Tell($this->_cPtr);
    }

    function Count()
    {
        return FilterReader_Count($this->_cPtr);
    }

    function Flush()
    {
        FilterReader_Flush($this->_cPtr);
    }

    function FlushAll()
    {
        FilterReader_FlushAll($this->_cPtr);
    }
}
