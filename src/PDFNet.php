<?php

namespace App\Documents\PdfTron;
//
//if (!extension_loaded('PDFNetPHP')) {
//    if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
//        if (!dl('php_PDFNetPHP.dll')) return;
//    } else {
//        // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
//        if (PHP_SHLIB_SUFFIX === 'dylib') {
//            if (!dl('PDFNetPHP.so')) return;
//        } else {
//            if (!dl('PDFNetPHP.'.PHP_SHLIB_SUFFIX)) return;
//        }
//    }
//}
//

class PDFNet
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

    static function Initialize($license_key = null)
    {
        switch (func_num_args()) {
            case 0:
                PDFNet_Initialize();
                break;
            default:
                PDFNet_Initialize($license_key);
        }
    }

    static function EnableJavaScript($enable)
    {
        PDFNet_EnableJavaScript($enable);
    }

    static function IsJavaScriptEnabled()
    {
        return PDFNet_IsJavaScriptEnabled();
    }

    static function SetResourcesPath($path)
    {
        return PDFNet_SetResourcesPath($path);
    }

    static function GetResourcesPath()
    {
        return PDFNet_GetResourcesPath();
    }

    static function AddResourceSearchPath($path)
    {
        PDFNet_AddResourceSearchPath($path);
    }

    static function GetVersion()
    {
        return PDFNet_GetVersion();
    }

    const e_lcms = 0;

    const e_icm = PDFNet_e_icm;

    const e_no_cms = PDFNet_e_no_cms;

    static function SetColorManagement($t = null)
    {
        switch (func_num_args()) {
            case 0:
                PDFNet_SetColorManagement();
                break;
            default:
                PDFNet_SetColorManagement($t);
        }
    }

    static function SetDefaultDeviceCMYKProfile($icc_filename_or_stream)
    {
        PDFNet_SetDefaultDeviceCMYKProfile($icc_filename_or_stream);
    }

    static function SetDefaultDeviceRGBProfile($icc_filename_or_stream)
    {
        PDFNet_SetDefaultDeviceRGBProfile($icc_filename_or_stream);
    }

    static function SetDefaultDiskCachingEnabled($use_disk)
    {
        PDFNet_SetDefaultDiskCachingEnabled($use_disk);
    }

    const e_Z_DEFAULT_COMPRESSION = -1;

    const e_Z_NO_COMPRESSION = 0;

    const e_Z_BEST_SPEED = 1;

    const e_Z_BEST_COMPRESSION = 9;

    static function SetDefaultFlateCompressionLevel($level)
    {
        PDFNet_SetDefaultFlateCompressionLevel($level);
    }

    static function SetViewerCache($max_cache_size, $on_disk)
    {
        PDFNet_SetViewerCache($max_cache_size, $on_disk);
    }

    const e_Identity = 0;

    const e_Japan1 = 1;

    const e_Japan2 = 2;

    const e_GB1 = 3;

    const e_CNS1 = 4;

    const e_Korea1 = 5;

    static function AddFontSubst($fontname_or_ordering, $fontpath)
    {
        return PDFNet_AddFontSubst($fontname_or_ordering, $fontpath);
    }

    static function SetTempPath($temp_path)
    {
        PDFNet_SetTempPath($temp_path);
    }

    static function SetPersistentCachePath($persistent_path)
    {
        PDFNet_SetPersistentCachePath($persistent_path);
    }

    static function GetSystemFontList()
    {
        return PDFNet_GetSystemFontList();
    }

    const e_LogLevel_Off = -1;

    const e_LogLevel_Fatal = 5;

    const e_LogLevel_Error = 4;

    const e_LogLevel_Warning = 3;

    const e_LogLevel_Info = 2;

    const e_LogLevel_Trace = 1;

    const e_LogLevel_Debug = 0;

    static function SetLogLevel($level = null)
    {
        switch (func_num_args()) {
            case 0:
                PDFNet_SetLogLevel();
                break;
            default:
                PDFNet_SetLogLevel($level);
        }
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDFNet') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_PDFNet();
    }
}
