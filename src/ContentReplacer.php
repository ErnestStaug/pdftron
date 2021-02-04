<?php

namespace PDFNet\PDFTron;

class ContentReplacer
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return ContentReplacer_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return ContentReplacer_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ContentReplacer_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__ContentReplacer') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_ContentReplacer();
    }

    function AddImage($target_region, $replacement_image)
    {
        ContentReplacer_AddImage($this->_cPtr, $target_region, $replacement_image);
    }

    function AddText($target_region, $replacement_text)
    {
        ContentReplacer_AddText($this->_cPtr, $target_region, $replacement_text);
    }

    function AddString($template_text, $replacement_text)
    {
        ContentReplacer_AddString($this->_cPtr, $template_text, $replacement_text);
    }

    function SetMatchStrings($start_str, $end_str)
    {
        ContentReplacer_SetMatchStrings($this->_cPtr, $start_str, $end_str);
    }

    function Process($page)
    {
        ContentReplacer_Process($this->_cPtr, $page);
    }

    function Destroy()
    {
        ContentReplacer_Destroy($this->_cPtr);
    }
}
