<?php

namespace PDFNet\PDFTron;

class WebPageSettings
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return WebPageSettings_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return WebPageSettings_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('WebPageSettings_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__WebPageSettings') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_WebPageSettings();
    }

    function SetPrintBackground($background)
    {
        WebPageSettings_SetPrintBackground($this->_cPtr, $background);
    }

    function SetLoadImages($load)
    {
        WebPageSettings_SetLoadImages($this->_cPtr, $load);
    }

    function SetAllowJavaScript($enable)
    {
        WebPageSettings_SetAllowJavaScript($this->_cPtr, $enable);
    }

    function SetSmartShrinking($enable)
    {
        WebPageSettings_SetSmartShrinking($this->_cPtr, $enable);
    }

    function SetMinimumFontSize($size)
    {
        WebPageSettings_SetMinimumFontSize($this->_cPtr, $size);
    }

    function SetDefaultEncoding($encoding)
    {
        WebPageSettings_SetDefaultEncoding($this->_cPtr, $encoding);
    }

    function SetUserStyleSheet($url)
    {
        WebPageSettings_SetUserStyleSheet($this->_cPtr, $url);
    }

    function SetAllowPlugins($enable)
    {
        WebPageSettings_SetAllowPlugins($this->_cPtr, $enable);
    }

    function SetPrintMediaType($print)
    {
        WebPageSettings_SetPrintMediaType($this->_cPtr, $print);
    }

    function SetIncludeInOutline($include)
    {
        WebPageSettings_SetIncludeInOutline($this->_cPtr, $include);
    }

    function SetUsername($username)
    {
        WebPageSettings_SetUsername($this->_cPtr, $username);
    }

    function SetPassword($password)
    {
        WebPageSettings_SetPassword($this->_cPtr, $password);
    }

    function SetJavaScriptDelay($msec)
    {
        WebPageSettings_SetJavaScriptDelay($this->_cPtr, $msec);
    }

    function SetZoom($zoom)
    {
        WebPageSettings_SetZoom($this->_cPtr, $zoom);
    }

    function SetBlockLocalFileAccess($block)
    {
        WebPageSettings_SetBlockLocalFileAccess($this->_cPtr, $block);
    }

    function SetStopSlowScripts($stop)
    {
        WebPageSettings_SetStopSlowScripts($this->_cPtr, $stop);
    }

    function SetDebugJavaScriptOutput($forward)
    {
        WebPageSettings_SetDebugJavaScriptOutput($this->_cPtr, $forward);
    }

    const e_abort = 0;

    const e_skip = WebPageSettings_e_skip;

    const e_ignore = WebPageSettings_e_ignore;

    function SetLoadErrorHandling($type)
    {
        WebPageSettings_SetLoadErrorHandling($this->_cPtr, $type);
    }

    function SetExternalLinks($convert)
    {
        WebPageSettings_SetExternalLinks($this->_cPtr, $convert);
    }

    function SetInternalLinks($convert)
    {
        WebPageSettings_SetInternalLinks($this->_cPtr, $convert);
    }

    function SetProduceForms($forms)
    {
        WebPageSettings_SetProduceForms($this->_cPtr, $forms);
    }

    function SetProxy($proxy)
    {
        WebPageSettings_SetProxy($this->_cPtr, $proxy);
    }

    function Destroy()
    {
        WebPageSettings_Destroy($this->_cPtr);
    }
}
