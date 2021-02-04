<?php

namespace App\Documents\PdfTron;

class OptimizerSettings
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'OptimizerSettings_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_color_image_settings') return new ImageSettings(OptimizerSettings_m_color_image_settings_get($this->_cPtr));
        if ($var === 'm_grayscale_image_settings') return new ImageSettings(OptimizerSettings_m_grayscale_image_settings_get($this->_cPtr));
        if ($var === 'm_mono_image_settings') return new MonoImageSettings(OptimizerSettings_m_mono_image_settings_get($this->_cPtr));
        if ($var === 'm_text_settings') return new TextSettings(OptimizerSettings_m_text_settings_get($this->_cPtr));
        if ($var === 'm_remove_custom') return OptimizerSettings_m_remove_custom_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('OptimizerSettings_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__OptimizerSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_OptimizerSettings();
    }

    function SetColorImageSettings($settings)
    {
        OptimizerSettings_SetColorImageSettings($this->_cPtr, $settings);
    }

    function SetGrayscaleImageSettings($settings)
    {
        OptimizerSettings_SetGrayscaleImageSettings($this->_cPtr, $settings);
    }

    function SetMonoImageSettings($settings)
    {
        OptimizerSettings_SetMonoImageSettings($this->_cPtr, $settings);
    }

    function SetTextSettings($settings)
    {
        OptimizerSettings_SetTextSettings($this->_cPtr, $settings);
    }

    function RemoveCustomEntries($should_remove)
    {
        OptimizerSettings_RemoveCustomEntries($this->_cPtr, $should_remove);
    }
}
