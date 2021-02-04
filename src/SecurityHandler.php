<?php

namespace PDFNet\PDFTron;

class SecurityHandler
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        $func = 'SecurityHandler_' . $var . '_set';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        $func = 'SecurityHandler_' . $var . '_get';
        if (function_exists($func)) return call_user_func($func, $this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('SecurityHandler_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_owner = 1;

    const e_doc_open = SecurityHandler_e_doc_open;

    const e_doc_modify = SecurityHandler_e_doc_modify;

    const e_print = SecurityHandler_e_print;

    const e_print_high = SecurityHandler_e_print_high;

    const e_extract_content = SecurityHandler_e_extract_content;

    const e_mod_annot = SecurityHandler_e_mod_annot;

    const e_fill_forms = SecurityHandler_e_fill_forms;

    const e_access_support = SecurityHandler_e_access_support;

    const e_assemble_doc = SecurityHandler_e_assemble_doc;

    function GetPermission($p)
    {
        return SecurityHandler_GetPermission($this->_cPtr, $p);
    }

    function GetKeyLength()
    {
        return SecurityHandler_GetKeyLength($this->_cPtr);
    }

    function GetEncryptionAlgorithmID()
    {
        return SecurityHandler_GetEncryptionAlgorithmID($this->_cPtr);
    }

    function GetHandlerDocName()
    {
        return SecurityHandler_GetHandlerDocName($this->_cPtr);
    }

    function IsModified()
    {
        return SecurityHandler_IsModified($this->_cPtr);
    }

    function IsValid()
    {
        return SecurityHandler_IsValid($this->_cPtr);
    }

    function SetModified($is_modified = true)
    {
        SecurityHandler_SetModified($this->_cPtr, $is_modified);
    }

    const e_RC4_40 = 1;

    const e_RC4_128 = SecurityHandler_e_RC4_128;

    const e_AES = SecurityHandler_e_AES;

    const e_AES_256 = SecurityHandler_e_AES_256;

    function ChangeUserPasswordASCII($password)
    {
        SecurityHandler_ChangeUserPasswordASCII($this->_cPtr, $password);
    }

    function ChangeUserPassword($password_or_password_buf, $pwd_length = null)
    {
        switch (func_num_args()) {
            case 1:
                SecurityHandler_ChangeUserPassword($this->_cPtr, $password_or_password_buf);
                break;
            default:
                SecurityHandler_ChangeUserPassword($this->_cPtr, $password_or_password_buf, $pwd_length);
        }
    }

    function GetUserPassword()
    {
        return SecurityHandler_GetUserPassword($this->_cPtr);
    }

    function GetUserPasswordSize()
    {
        return SecurityHandler_GetUserPasswordSize($this->_cPtr);
    }

    function ChangeMasterPasswordASCII($password)
    {
        SecurityHandler_ChangeMasterPasswordASCII($this->_cPtr, $password);
    }

    function ChangeMasterPassword($password_or_password_buf, $pwd_length = null)
    {
        switch (func_num_args()) {
            case 1:
                SecurityHandler_ChangeMasterPassword($this->_cPtr, $password_or_password_buf);
                break;
            default:
                SecurityHandler_ChangeMasterPassword($this->_cPtr, $password_or_password_buf, $pwd_length);
        }
    }

    function GetMasterPassword()
    {
        return SecurityHandler_GetMasterPassword($this->_cPtr);
    }

    function GetMasterPasswordSize()
    {
        return SecurityHandler_GetMasterPasswordSize($this->_cPtr);
    }

    function SetPermission($perm, $value)
    {
        SecurityHandler_SetPermission($this->_cPtr, $perm, $value);
    }

    function ChangeRevisionNumber($rev_num)
    {
        SecurityHandler_ChangeRevisionNumber($this->_cPtr, $rev_num);
    }

    function SetEncryptMetadata($encrypt_metadata)
    {
        SecurityHandler_SetEncryptMetadata($this->_cPtr, $encrypt_metadata);
    }

    function GetRevisionNumber()
    {
        return SecurityHandler_GetRevisionNumber($this->_cPtr);
    }

    function IsUserPasswordRequired()
    {
        return SecurityHandler_IsUserPasswordRequired($this->_cPtr);
    }

    function IsMasterPasswordRequired()
    {
        return SecurityHandler_IsMasterPasswordRequired($this->_cPtr);
    }

    function IsAES($stream = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = SecurityHandler_IsAES($this->_cPtr);
                break;
            default:
                $r = SecurityHandler_IsAES($this->_cPtr, $stream);
        }
        return $r;
    }

    function IsRC4()
    {
        return SecurityHandler_IsRC4($this->_cPtr);
    }

    function AuthorizeFailed()
    {
        SecurityHandler_AuthorizeFailed($this->_cPtr);
    }

    function Authorize($p)
    {
        return SecurityHandler_Authorize($this->_cPtr, $p);
    }

    function GetAuthorizationData($req_opr)
    {
        return SecurityHandler_GetAuthorizationData($this->_cPtr, $req_opr);
    }

    function EditSecurityData($doc)
    {
        return SecurityHandler_EditSecurityData($this->_cPtr, $doc);
    }

    function FillEncryptDict($doc)
    {
        $r = SecurityHandler_FillEncryptDict($this->_cPtr, $doc);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CloneHandler($base)
    {
        $r = SecurityHandler_CloneHandler($this->_cPtr, $base);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SecurityHandler($r);
        }
        return $r;
    }

    function InitPasswordASCII($password)
    {
        SecurityHandler_InitPasswordASCII($this->_cPtr, $password);
    }

    function InitPassword($password_or_password_buf, $pwd_length = null)
    {
        switch (func_num_args()) {
            case 1:
                SecurityHandler_InitPassword($this->_cPtr, $password_or_password_buf);
                break;
            default:
                SecurityHandler_InitPassword($this->_cPtr, $password_or_password_buf, $pwd_length);
        }
    }

    const has_CloneProc = SecurityHandler_has_CloneProc;

    const has_AuthProc = SecurityHandler_has_AuthProc;

    const has_AuthFailedProc = SecurityHandler_has_AuthFailedProc;

    const has_GetAuthDataProc = SecurityHandler_has_GetAuthDataProc;

    const has_EditSecurDataProc = SecurityHandler_has_EditSecurDataProc;

    const has_FillEncDictProc = SecurityHandler_has_FillEncDictProc;

    function SetDerived($overloaded_funct)
    {
        SecurityHandler_SetDerived($this->_cPtr, $overloaded_funct);
    }

    function GetDerived()
    {
        $r = SecurityHandler_GetDerived($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SecurityHandler($r);
        }
        return $r;
    }

    function __construct($crypt_type_or_name_or_s_or_impl = null, $key_len_or_owner = null, $enc_code_or_derived_procs = null)
    {
        if (is_resource($crypt_type_or_name_or_s_or_impl) && get_resource_type($crypt_type_or_name_or_s_or_impl) === '_p_pdftron__SDF__SecurityHandler') {
            $this->_cPtr = $crypt_type_or_name_or_s_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_SecurityHandler();
                break;
            case 1:
                $this->_cPtr = new_SecurityHandler($crypt_type_or_name_or_s_or_impl);
                break;
            case 2:
                $this->_cPtr = new_SecurityHandler($crypt_type_or_name_or_s_or_impl, $key_len_or_owner);
                break;
            default:
                $this->_cPtr = new_SecurityHandler($crypt_type_or_name_or_s_or_impl, $key_len_or_owner, $enc_code_or_derived_procs);
        }
    }
}
