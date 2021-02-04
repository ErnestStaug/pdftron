<?php

namespace PDFNet\PDFTron;

class FDFDoc
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_doc') return FDFDoc_mp_doc_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_doc') return FDFDoc_mp_doc_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('FDFDoc_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Close()
    {
        FDFDoc_Close($this->_cPtr);
    }

    function IsModified()
    {
        return FDFDoc_IsModified($this->_cPtr);
    }

    function Save($path = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = FDFDoc_Save($this->_cPtr);
                break;
            default:
                $r = FDFDoc_Save($this->_cPtr, $path);
        }
        if (!is_resource($r)) return $r;
        switch (get_resource_type($r)) {
            case '_p_std__vectorT_unsigned_char_t':
                return new VectorUChar($r);
            default:
                return $r;
        }
    }

    function GetTrailer()
    {
        $r = FDFDoc_GetTrailer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetRoot()
    {
        $r = FDFDoc_GetRoot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetFDF()
    {
        $r = FDFDoc_GetFDF($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetPDFFileName()
    {
        return FDFDoc_GetPDFFileName($this->_cPtr);
    }

    function SetPDFFileName($filepath)
    {
        FDFDoc_SetPDFFileName($this->_cPtr, $filepath);
    }

    function GetID()
    {
        $r = FDFDoc_GetID($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetID($id)
    {
        FDFDoc_SetID($this->_cPtr, $id);
    }

    function GetFieldIterator($field_name = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = FDFDoc_GetFieldIterator($this->_cPtr);
                break;
            default:
                $r = FDFDoc_GetFieldIterator($this->_cPtr, $field_name);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FDFFieldIterator($r);
        }
        return $r;
    }

    function GetField($field_name)
    {
        $r = FDFDoc_GetField($this->_cPtr, $field_name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FDFField($r);
        }
        return $r;
    }

    function FieldCreate($field_name, $type, $field_value = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = FDFDoc_FieldCreate($this->_cPtr, $field_name, $type);
                break;
            default:
                $r = FDFDoc_FieldCreate($this->_cPtr, $field_name, $type, $field_value);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FDFField($r);
        }
        return $r;
    }

    function GetSDFDoc()
    {
        $r = FDFDoc_GetSDFDoc($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SDFDoc($r);
        }
        return $r;
    }

    static function CreateFromXFDF($file_name)
    {
        $r = FDFDoc_CreateFromXFDF($file_name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FDFDoc($r);
        }
        return $r;
    }

    function SaveAsXFDF($filepath = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = FDFDoc_SaveAsXFDF($this->_cPtr);
                break;
            default:
                $r = FDFDoc_SaveAsXFDF($this->_cPtr, $filepath);
        }
        return $r;
    }

    function MergeAnnots($command_file, $permitted_user = null)
    {
        switch (func_num_args()) {
            case 1:
                FDFDoc_MergeAnnots($this->_cPtr, $command_file);
                break;
            default:
                FDFDoc_MergeAnnots($this->_cPtr, $command_file, $permitted_user);
        }
    }

    function __construct($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other = null, $owner_or_buf_size = null)
    {
        if (is_resource($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other) && get_resource_type($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other) === '_p_pdftron__FDF__FDFDoc') {
            $this->_cPtr = $impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FDFDoc();
                break;
            case 1:
                $this->_cPtr = new_FDFDoc($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other);
                break;
            default:
                $this->_cPtr = new_FDFDoc($impl_or_sdfdoc_or_filepath_or_stream_or_buf_or_other, $owner_or_buf_size);
        }
    }
}
