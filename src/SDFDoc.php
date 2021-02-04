<?php

namespace PDFNet\PDFTron;

class SDFDoc
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_doc') return SDFDoc_mp_doc_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_doc') return SDFDoc_mp_doc_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('SDFDoc_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Close()
    {
        SDFDoc_Close($this->_cPtr);
    }

    function IsEncrypted()
    {
        return SDFDoc_IsEncrypted($this->_cPtr);
    }

    function InitSecurityHandler()
    {
        return SDFDoc_InitSecurityHandler($this->_cPtr);
    }

    function InitStdSecurityHandler($password_or_password_buf, $password_sz = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = SDFDoc_InitStdSecurityHandler($this->_cPtr, $password_or_password_buf);
                break;
            default:
                $r = SDFDoc_InitStdSecurityHandler($this->_cPtr, $password_or_password_buf, $password_sz);
        }
        return $r;
    }

    function IsModified()
    {
        return SDFDoc_IsModified($this->_cPtr);
    }

    function HasRepairedXRef()
    {
        return SDFDoc_HasRepairedXRef($this->_cPtr);
    }

    function IsFullSaveRequired()
    {
        return SDFDoc_IsFullSaveRequired($this->_cPtr);
    }

    function GetTrailer()
    {
        $r = SDFDoc_GetTrailer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetObj($obj_num)
    {
        $r = SDFDoc_GetObj($this->_cPtr, $obj_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function ImportObj($obj, $deep_copy)
    {
        $r = SDFDoc_ImportObj($this->_cPtr, $obj, $deep_copy);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function ImportObjs($obj_list, $exclude_list = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = SDFDoc_ImportObjs($this->_cPtr, $obj_list);
                break;
            default:
                $r = SDFDoc_ImportObjs($this->_cPtr, $obj_list, $exclude_list);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorObj($r);
        }
        return $r;
    }

    function XRefSize()
    {
        return SDFDoc_XRefSize($this->_cPtr);
    }

    function ClearMarks()
    {
        SDFDoc_ClearMarks($this->_cPtr);
    }

    const e_incremental = SDFDoc_e_incremental;

    const e_remove_unused = SDFDoc_e_remove_unused;

    const e_hex_strings = SDFDoc_e_hex_strings;

    const e_omit_xref = SDFDoc_e_omit_xref;

    const e_linearized = SDFDoc_e_linearized;

    const e_compatibility = SDFDoc_e_compatibility;

    function Save($path_or_flags_or_stream, $flags_or_header, $header = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = SDFDoc_Save($this->_cPtr, $path_or_flags_or_stream, $flags_or_header);
                break;
            default:
                $r = SDFDoc_Save($this->_cPtr, $path_or_flags_or_stream, $flags_or_header, $header);
        }
        return $r;
    }

    function GetHeader()
    {
        return SDFDoc_GetHeader($this->_cPtr);
    }

    function GetSecurityHandler()
    {
        $r = SDFDoc_GetSecurityHandler($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SecurityHandler($r);
        }
        return $r;
    }

    function SetSecurityHandler($handler)
    {
        SDFDoc_SetSecurityHandler($this->_cPtr, $handler);
    }

    function RemoveSecurity()
    {
        SDFDoc_RemoveSecurity($this->_cPtr);
    }

    function Swap($obj_num1, $obj_num2)
    {
        SDFDoc_Swap($this->_cPtr, $obj_num1, $obj_num2);
    }

    function CreateIndirectName($name)
    {
        $r = SDFDoc_CreateIndirectName($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectArray()
    {
        $r = SDFDoc_CreateIndirectArray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectBool($value)
    {
        $r = SDFDoc_CreateIndirectBool($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectDict()
    {
        $r = SDFDoc_CreateIndirectDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectNull()
    {
        $r = SDFDoc_CreateIndirectNull($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectNumber($value)
    {
        $r = SDFDoc_CreateIndirectNumber($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectString($value_or_str, $size = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = SDFDoc_CreateIndirectString($this->_cPtr, $value_or_str);
                break;
            default:
                $r = SDFDoc_CreateIndirectString($this->_cPtr, $value_or_str, $size);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectStream($data, $filter_chain_or_data_size = null, $filter_chain = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = SDFDoc_CreateIndirectStream($this->_cPtr, $data);
                break;
            case 2:
                $r = SDFDoc_CreateIndirectStream($this->_cPtr, $data, $filter_chain_or_data_size);
                break;
            default:
                $r = SDFDoc_CreateIndirectStream($this->_cPtr, $data, $filter_chain_or_data_size, $filter_chain);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsLinearized()
    {
        return SDFDoc_IsLinearized($this->_cPtr);
    }

    function GetLinearizationDict()
    {
        $r = SDFDoc_GetLinearizationDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetHintStream()
    {
        $r = SDFDoc_GetHintStream($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Lock()
    {
        SDFDoc_Lock($this->_cPtr);
    }

    function Unlock()
    {
        SDFDoc_Unlock($this->_cPtr);
    }

    function TryLock($milliseconds = 0)
    {
        return SDFDoc_TryLock($this->_cPtr, $milliseconds);
    }

    function LockRead()
    {
        SDFDoc_LockRead($this->_cPtr);
    }

    function UnlockRead()
    {
        SDFDoc_UnlockRead($this->_cPtr);
    }

    function TryLockRead($milliseconds = 0)
    {
        return SDFDoc_TryLockRead($this->_cPtr, $milliseconds);
    }

    function GetFileName()
    {
        return SDFDoc_GetFileName($this->_cPtr);
    }

    function EnableDiskCaching($use_cache_flag)
    {
        SDFDoc_EnableDiskCaching($this->_cPtr, $use_cache_flag);
    }

    static function CreateInternal($impl)
    {
        $r = SDFDoc_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SDFDoc($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return SDFDoc_GetHandleInternal($this->_cPtr);
    }

    function __construct($filepath_or_stream_or_buf_or_doc = null, $buf_size = null)
    {
        if (is_resource($filepath_or_stream_or_buf_or_doc) && get_resource_type($filepath_or_stream_or_buf_or_doc) === '_p_pdftron__SDF__SDFDoc') {
            $this->_cPtr = $filepath_or_stream_or_buf_or_doc;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_SDFDoc();
                break;
            case 1:
                $this->_cPtr = new_SDFDoc($filepath_or_stream_or_buf_or_doc);
                break;
            default:
                $this->_cPtr = new_SDFDoc($filepath_or_stream_or_buf_or_doc, $buf_size);
        }
    }
}
