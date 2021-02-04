<?php

namespace App\Documents\PdfTron;

class Action
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_action') return Action_mp_action_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_action') return Action_mp_action_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Action_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    static function CreateGoto($dest_or_key, $key_sz = null, $dest = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = Action_CreateGoto($dest_or_key);
                break;
            case 2:
                $r = Action_CreateGoto($dest_or_key, $key_sz);
                break;
            default:
                $r = Action_CreateGoto($dest_or_key, $key_sz, $dest);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateGotoRemote($file, $page_num, $new_window = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Action_CreateGotoRemote($file, $page_num);
                break;
            default:
                $r = Action_CreateGotoRemote($file, $page_num, $new_window);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateURI($doc, $uri)
    {
        $r = Action_CreateURI($doc, $uri);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateSubmitForm($url)
    {
        $r = Action_CreateSubmitForm($url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateLaunch($doc, $path)
    {
        $r = Action_CreateLaunch($doc, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateHideField($sdfdoc, $list_length, $field)
    {
        $r = Action_CreateHideField($sdfdoc, $list_length, $field);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateImportData($doc, $path)
    {
        $r = Action_CreateImportData($doc, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateResetForm($doc)
    {
        $r = Action_CreateResetForm($doc);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    static function CreateJavaScript($doc, $script)
    {
        $r = Action_CreateJavaScript($doc, $script);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function IsEqual($in_action)
    {
        return Action_IsEqual($this->_cPtr, $in_action);
    }

    function IsValid()
    {
        return Action_IsValid($this->_cPtr);
    }

    const e_GoTo = 0;

    const e_GoToR = Action_e_GoToR;

    const e_GoToE = Action_e_GoToE;

    const e_Launch = Action_e_Launch;

    const e_Thread = Action_e_Thread;

    const e_URI = Action_e_URI;

    const e_Sound = Action_e_Sound;

    const e_Movie = Action_e_Movie;

    const e_Hide = Action_e_Hide;

    const e_Named = Action_e_Named;

    const e_SubmitForm = Action_e_SubmitForm;

    const e_ResetForm = Action_e_ResetForm;

    const e_ImportData = Action_e_ImportData;

    const e_JavaScript = Action_e_JavaScript;

    const e_SetOCGState = Action_e_SetOCGState;

    const e_Rendition = Action_e_Rendition;

    const e_Trans = Action_e_Trans;

    const e_GoTo3DView = Action_e_GoTo3DView;

    const e_RichMediaExecute = Action_e_RichMediaExecute;

    const e_Unknown = Action_e_Unknown;

    function GetType()
    {
        return Action_GetType($this->_cPtr);
    }

    function Execute()
    {
        Action_Execute($this->_cPtr);
    }

    function ExecuteKeyStrokeAction($data)
    {
        return Action_ExecuteKeyStrokeAction($this->_cPtr, $data);
    }

    function NeedsWriteLock()
    {
        return Action_NeedsWriteLock($this->_cPtr);
    }

    function GetNext()
    {
        $r = Action_GetNext($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetDest()
    {
        $r = Action_GetDest($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Destination($r);
        }
        return $r;
    }

    const e_exclude = 0;

    const e_include_no_value_fields = 1;

    const e_export_format = 2;

    const e_get_method = 3;

    const e_submit_coordinates = 4;

    const e_xfdf = 5;

    const e_include_append_saves = 6;

    const e_include_annotations = 7;

    const e_submit_pdf = 8;

    const e_canonical_format = 9;

    const e_excl_non_user_annots = 10;

    const e_excl_F_key = 11;

    const e_embed_form = 13;

    function GetFormActionFlag($flag)
    {
        return Action_GetFormActionFlag($this->_cPtr, $flag);
    }

    function SetFormActionFlag($flag, $value)
    {
        Action_SetFormActionFlag($this->_cPtr, $flag, $value);
    }

    function GetSDFObj()
    {
        $r = Action_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    static function CreateInternal($impl)
    {
        $r = Action_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Action_GetHandleInternal($this->_cPtr);
    }

    function __construct($in_obj_or_in_action_or_impl = null)
    {
        if (is_resource($in_obj_or_in_action_or_impl) && get_resource_type($in_obj_or_in_action_or_impl) === '_p_pdftron__PDF__Action') {
            $this->_cPtr = $in_obj_or_in_action_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Action();
                break;
            default:
                $this->_cPtr = new_Action($in_obj_or_in_action_or_impl);
        }
    }
}
