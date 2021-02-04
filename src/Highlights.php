<?php

namespace PDFNet\PDFTron;

class Highlights
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_highlights') return Highlights_mp_highlights_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_highlights') return Highlights_mp_highlights_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Highlights_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Load($file_name)
    {
        Highlights_Load($this->_cPtr, $file_name);
    }

    function Save($file_name)
    {
        Highlights_Save($this->_cPtr, $file_name);
    }

    function Add($hlts)
    {
        Highlights_Add($this->_cPtr, $hlts);
    }

    function Clear()
    {
        Highlights_Clear($this->_cPtr);
    }

    function Begin($doc)
    {
        Highlights_Begin($this->_cPtr, $doc);
    }

    function HasNext()
    {
        return Highlights_HasNext($this->_cPtr);
    }

    function Next()
    {
        Highlights_Next($this->_cPtr);
    }

    function GetCurrentPageNumber()
    {
        return Highlights_GetCurrentPageNumber($this->_cPtr);
    }

    function GetCurrentQuads()
    {
        $r = Highlights_GetCurrentQuads($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorQuadPoint($r);
        }
        return $r;
    }

    function Destroy()
    {
        Highlights_Destroy($this->_cPtr);
    }

    static function CreateInternal($impl)
    {
        $r = Highlights_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Highlights($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Highlights_GetHandleInternal($this->_cPtr);
    }

    function __construct($hlts_or_impl = null)
    {
        if (is_resource($hlts_or_impl) && get_resource_type($hlts_or_impl) === '_p_pdftron__PDF__Highlights') {
            $this->_cPtr = $hlts_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Highlights();
                break;
            default:
                $this->_cPtr = new_Highlights($hlts_or_impl);
        }
    }
}
