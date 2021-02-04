<?php

namespace PDFNet\PDFTron;

class Filter
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_owner') return Filter_m_owner_set($this->_cPtr, $value);
        if ($var === 'm_impl') return Filter_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_owner') return Filter_m_owner_get($this->_cPtr);
        if ($var === 'm_impl') return Filter_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Filter_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function AttachFilter($attach_filter)
    {
        Filter_AttachFilter($this->_cPtr, $attach_filter);
    }

    function ReleaseAttachedFilter()
    {
        $r = Filter_ReleaseAttachedFilter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetAttachedFilter()
    {
        $r = Filter_GetAttachedFilter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetSourceFilter()
    {
        $r = Filter_GetSourceFilter($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetName()
    {
        return Filter_GetName($this->_cPtr);
    }

    function GetDecodeName()
    {
        return Filter_GetDecodeName($this->_cPtr);
    }

    function Size()
    {
        return Filter_Size($this->_cPtr);
    }

    function Consume($num_bytes)
    {
        Filter_Consume($this->_cPtr, $num_bytes);
    }

    function Count()
    {
        return Filter_Count($this->_cPtr);
    }

    function SetCount($new_count)
    {
        return Filter_SetCount($this->_cPtr, $new_count);
    }

    function SetStreamLength($bytes)
    {
        Filter_SetStreamLength($this->_cPtr, $bytes);
    }

    function Flush()
    {
        Filter_Flush($this->_cPtr);
    }

    function FlushAll()
    {
        Filter_FlushAll($this->_cPtr);
    }

    function IsInputFilter()
    {
        return Filter_IsInputFilter($this->_cPtr);
    }

    function CanSeek()
    {
        return Filter_CanSeek($this->_cPtr);
    }

    const e_begin = Filter_e_begin;

    const e_end = Filter_e_end;

    const e_cur = Filter_e_cur;

    function Seek($offset, $origin)
    {
        Filter_Seek($this->_cPtr, $offset, $origin);
    }

    function Tell()
    {
        return Filter_Tell($this->_cPtr);
    }

    function CreateInputIterator()
    {
        $r = Filter_CreateInputIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetFilePath()
    {
        return Filter_GetFilePath($this->_cPtr);
    }

    function Destroy()
    {
        Filter_Destroy($this->_cPtr);
    }

    function WriteToFile($path, $append)
    {
        Filter_WriteToFile($this->_cPtr, $path, $append);
    }

    function __construct($copy_or_impl = null, $is_owner = null)
    {
        if (is_resource($copy_or_impl) && get_resource_type($copy_or_impl) === '_p_pdftron__Filters__Filter') {
            $this->_cPtr = $copy_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Filter();
                break;
            case 1:
                $this->_cPtr = new_Filter($copy_or_impl);
                break;
            default:
                $this->_cPtr = new_Filter($copy_or_impl, $is_owner);
        }
    }
}
