<?php

namespace PDFNet\PDFTron;

class ViewerOptimizedOptions
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_objset') return ViewerOptimizedOptions_m_objset_set($this->_cPtr, $value);
        if ($var === 'm_obj') return ViewerOptimizedOptions_m_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_objset') return new ObjSet(ViewerOptimizedOptions_m_objset_get($this->_cPtr));
        if ($var === 'm_obj') return ViewerOptimizedOptions_m_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ViewerOptimizedOptions_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ViewerOptimizedOptions') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_ViewerOptimizedOptions();
    }

    function SetThumbnailRenderingThreshold($threshold)
    {
        ViewerOptimizedOptions_SetThumbnailRenderingThreshold($this->_cPtr, $threshold);
    }

    function SetThumbnailSize($size)
    {
        ViewerOptimizedOptions_SetThumbnailSize($this->_cPtr, $size);
    }

    function SetOverprint($mode)
    {
        ViewerOptimizedOptions_SetOverprint($this->_cPtr, $mode);
    }
}
