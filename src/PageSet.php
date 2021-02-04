<?php

namespace App\Documents\PdfTron;

class PageSet
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return PageSet_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return PageSet_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PageSet_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_all = 0;

    const e_even = PageSet_e_even;

    const e_odd = PageSet_e_odd;

    function AddPage($one_page)
    {
        PageSet_AddPage($this->_cPtr, $one_page);
    }

    function AddRange($range_start, $range_end, $filter = null)
    {
        switch (func_num_args()) {
            case 2:
                PageSet_AddRange($this->_cPtr, $range_start, $range_end);
                break;
            default:
                PageSet_AddRange($this->_cPtr, $range_start, $range_end, $filter);
        }
    }

    function Destroy()
    {
        PageSet_Destroy($this->_cPtr);
    }

    function __construct($one_page_or_range_start_or_impl = null, $range_end = null, $filter = null)
    {
        if (is_resource($one_page_or_range_start_or_impl) && get_resource_type($one_page_or_range_start_or_impl) === '_p_pdftron__PDF__PageSet') {
            $this->_cPtr = $one_page_or_range_start_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PageSet();
                break;
            case 1:
                $this->_cPtr = new_PageSet($one_page_or_range_start_or_impl);
                break;
            case 2:
                $this->_cPtr = new_PageSet($one_page_or_range_start_or_impl, $range_end);
                break;
            default:
                $this->_cPtr = new_PageSet($one_page_or_range_start_or_impl, $range_end, $filter);
        }
    }
}
