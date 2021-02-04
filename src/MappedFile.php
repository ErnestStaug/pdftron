<?php

namespace PDFNet\PDFTron;

class MappedFile extends Filter
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Filter::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Filter::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Filter::__isset($var);
    }

    function __construct($filename)
    {
        if (is_resource($filename) && get_resource_type($filename) === '_p_pdftron__Filters__MappedFile') {
            $this->_cPtr = $filename;
            return;
        }
        $this->_cPtr = new_MappedFile($filename);
    }

    function IsEqual($f)
    {
        return MappedFile_IsEqual($this->_cPtr, $f);
    }

    static function Equivalent($ph1, $ph2)
    {
        return MappedFile_Equivalent($ph1, $ph2);
    }

    function FileSize()
    {
        return MappedFile_FileSize($this->_cPtr);
    }
}
