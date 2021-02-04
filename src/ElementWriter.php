<?php

namespace PDFNet\PDFTron;

class ElementWriter
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_writer') return ElementWriter_mp_writer_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_writer') return ElementWriter_mp_writer_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('ElementWriter_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_underlay = 0;

    const e_overlay = ElementWriter_e_overlay;

    const e_replacement = ElementWriter_e_replacement;

    function Begin($page_or_doc_or_stream_obj_to_update, $placement_or_compress = null, $page_coord_sys_or_resources = null, $compress = null, $resources = null)
    {
        switch (func_num_args()) {
            case 1:
                ElementWriter_Begin($this->_cPtr, $page_or_doc_or_stream_obj_to_update);
                break;
            case 2:
                ElementWriter_Begin($this->_cPtr, $page_or_doc_or_stream_obj_to_update, $placement_or_compress);
                break;
            case 3:
                ElementWriter_Begin($this->_cPtr, $page_or_doc_or_stream_obj_to_update, $placement_or_compress, $page_coord_sys_or_resources);
                break;
            case 4:
                ElementWriter_Begin($this->_cPtr, $page_or_doc_or_stream_obj_to_update, $placement_or_compress, $page_coord_sys_or_resources, $compress);
                break;
            default:
                ElementWriter_Begin($this->_cPtr, $page_or_doc_or_stream_obj_to_update, $placement_or_compress, $page_coord_sys_or_resources, $compress, $resources);
        }
    }

    function End()
    {
        $r = ElementWriter_End($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function WriteElement($element)
    {
        ElementWriter_WriteElement($this->_cPtr, $element);
    }

    function WritePlacedElement($element)
    {
        ElementWriter_WritePlacedElement($this->_cPtr, $element);
    }

    function Flush()
    {
        ElementWriter_Flush($this->_cPtr);
    }

    function WriteBuffer($data)
    {
        ElementWriter_WriteBuffer($this->_cPtr, $data);
    }

    function WriteString($str)
    {
        ElementWriter_WriteString($this->_cPtr, $str);
    }

    function WriteGStateChanges($element)
    {
        ElementWriter_WriteGStateChanges($this->_cPtr, $element);
    }

    function SetDefaultGState($reader)
    {
        ElementWriter_SetDefaultGState($this->_cPtr, $reader);
    }

    function Destroy()
    {
        ElementWriter_Destroy($this->_cPtr);
    }

    function __construct($impl = null)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__ElementWriter') {
            $this->_cPtr = $impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_ElementWriter();
                break;
            default:
                $this->_cPtr = new_ElementWriter($impl);
        }
    }
}
