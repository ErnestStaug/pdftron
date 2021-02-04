<?php

namespace PDFNet\PDFTron;

class TextSettings
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

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TextSettings();
    }

    function SubsetFonts($subset)
    {
        TextSettings_SubsetFonts($this->_cPtr, $subset);
    }

    function EmbedFonts($embed)
    {
        TextSettings_EmbedFonts($this->_cPtr, $embed);
    }
}
