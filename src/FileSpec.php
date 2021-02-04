<?php

namespace PDFNet\PDFTron;

class FileSpec
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_impl') return FileSpec_mp_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_impl') return FileSpec_mp_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('FileSpec_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function Create($doc, $path, $embed = true)
    {
        $r = FileSpec_Create($doc, $path, $embed);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FileSpec($r);
        }
        return $r;
    }

    static function CreateURL($doc, $url)
    {
        $r = FileSpec_CreateURL($doc, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FileSpec($r);
        }
        return $r;
    }

    function IsEqual($d)
    {
        return FileSpec_IsEqual($this->_cPtr, $d);
    }

    function IsValid()
    {
        return FileSpec_IsValid($this->_cPtr);
    }

    function Export($save_as = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = FileSpec_Export($this->_cPtr);
                break;
            default:
                $r = FileSpec_Export($this->_cPtr, $save_as);
        }
        return $r;
    }

    function GetFileData()
    {
        $r = FileSpec_GetFileData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetFilePath()
    {
        return FileSpec_GetFilePath($this->_cPtr);
    }

    function SetDesc($desc)
    {
        FileSpec_SetDesc($this->_cPtr, $desc);
    }

    function GetSDFObj()
    {
        $r = FileSpec_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($f_or_d_or_fs = null)
    {
        if (is_resource($f_or_d_or_fs) && get_resource_type($f_or_d_or_fs) === '_p_pdftron__PDF__FileSpec') {
            $this->_cPtr = $f_or_d_or_fs;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FileSpec();
                break;
            default:
                $this->_cPtr = new_FileSpec($f_or_d_or_fs);
        }
    }
}
