<?php

namespace PDFNet\PDFTron;

class ElementReader
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_reader') return ElementReader_mp_reader_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_reader') return ElementReader_mp_reader_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ElementReader_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Begin($page_or_content_stream, $ocg_context_or_resource_dict = null, $ocg_context = null)
    {
        switch (func_num_args()) {
            case 1:
                ElementReader_Begin($this->_cPtr, $page_or_content_stream);
                break;
            case 2:
                ElementReader_Begin($this->_cPtr, $page_or_content_stream, $ocg_context_or_resource_dict);
                break;
            default:
                ElementReader_Begin($this->_cPtr, $page_or_content_stream, $ocg_context_or_resource_dict, $ocg_context);
        }
    }

    function Next()
    {
        $r = ElementReader_Next($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function Current()
    {
        $r = ElementReader_Current($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Element($r);
        }
        return $r;
    }

    function FormBegin()
    {
        ElementReader_FormBegin($this->_cPtr);
    }

    function PatternBegin($fill_pattern, $reset_ctm_tfm = false)
    {
        ElementReader_PatternBegin($this->_cPtr, $fill_pattern, $reset_ctm_tfm);
    }

    function Type3FontBegin($char_data, $resource_dict = null)
    {
        switch (func_num_args()) {
            case 1:
                ElementReader_Type3FontBegin($this->_cPtr, $char_data);
                break;
            default:
                ElementReader_Type3FontBegin($this->_cPtr, $char_data, $resource_dict);
        }
    }

    function End()
    {
        return ElementReader_End($this->_cPtr);
    }

    function GetChangesIterator()
    {
        $r = ElementReader_GetChangesIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new GSChangesIterator($r);
        }
        return $r;
    }

    function IsChanged($attrib)
    {
        return ElementReader_IsChanged($this->_cPtr, $attrib);
    }

    function ClearChangeList()
    {
        ElementReader_ClearChangeList($this->_cPtr);
    }

    function AppendResource($res)
    {
        ElementReader_AppendResource($this->_cPtr, $res);
    }

    function GetFont($name)
    {
        $r = ElementReader_GetFont($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetXObject($name)
    {
        $r = ElementReader_GetXObject($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetShading($name)
    {
        $r = ElementReader_GetShading($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetColorSpace($name)
    {
        $r = ElementReader_GetColorSpace($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetPattern($name)
    {
        $r = ElementReader_GetPattern($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetExtGState($name)
    {
        $r = ElementReader_GetExtGState($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Destroy()
    {
        ElementReader_Destroy($this->_cPtr);
    }

    function __construct($impl = null)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__ElementReader') {
            $this->_cPtr = $impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ElementReader();
                break;
            default:
                $this->_cPtr = new_ElementReader($impl);
        }
    }
}
