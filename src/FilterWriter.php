<?php

namespace PDFNet\PDFTron;

class FilterWriter
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return FilterWriter_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return FilterWriter_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('FilterWriter_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($filter = null)
    {
        if (is_resource($filter) && get_resource_type($filter) === '_p_pdftron__Filters__FilterWriter') {
            $this->_cPtr = $filter;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FilterWriter();
                break;
            default:
                $this->_cPtr = new_FilterWriter($filter);
        }
    }

    function WriteUChar($ch)
    {
        FilterWriter_WriteUChar($this->_cPtr, $ch);
    }

    function WriteInt16($num)
    {
        FilterWriter_WriteInt16($this->_cPtr, $num);
    }

    function WriteUInt16($num)
    {
        FilterWriter_WriteUInt16($this->_cPtr, $num);
    }

    function WriteInt32($num)
    {
        FilterWriter_WriteInt32($this->_cPtr, $num);
    }

    function WriteUInt32($num)
    {
        FilterWriter_WriteUInt32($this->_cPtr, $num);
    }

    function WriteInt64($num)
    {
        FilterWriter_WriteInt64($this->_cPtr, $num);
    }

    function WriteUInt64($num)
    {
        FilterWriter_WriteUInt64($this->_cPtr, $num);
    }

    function WriteString($str)
    {
        FilterWriter_WriteString($this->_cPtr, $str);
    }

    function WriteFilter($reader)
    {
        FilterWriter_WriteFilter($this->_cPtr, $reader);
    }

    function WriteLine($line, $eol = 0x0D)
    {
        FilterWriter_WriteLine($this->_cPtr, $line, $eol);
    }

    function WriteBuffer($buf)
    {
        return FilterWriter_WriteBuffer($this->_cPtr, $buf);
    }

    function AttachFilter($filter)
    {
        FilterWriter_AttachFilter($this->_cPtr, $filter);
    }

    function GetAttachedFilter()
    {
        $r = FilterWriter_GetAttachedFilter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function Seek($offset, $origin)
    {
        FilterWriter_Seek($this->_cPtr, $offset, $origin);
    }

    function Tell()
    {
        return FilterWriter_Tell($this->_cPtr);
    }

    function Count()
    {
        return FilterWriter_Count($this->_cPtr);
    }

    function Flush()
    {
        FilterWriter_Flush($this->_cPtr);
    }

    function FlushAll()
    {
        FilterWriter_FlushAll($this->_cPtr);
    }
}
