<?php

namespace PDFNet\PDFTron;

class Field
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_field') return Field_mp_field_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_field') return Field_mp_field_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Field_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function IsValid()
    {
        return Field_IsValid($this->_cPtr);
    }

    const e_button = 0;

    const e_check = Field_e_check;

    const e_radio = Field_e_radio;

    const e_text = Field_e_text;

    const e_choice = Field_e_choice;

    const e_signature = Field_e_signature;

    const e_null = Field_e_null;

    function GetType()
    {
        return Field_GetType($this->_cPtr);
    }

    function GetValue()
    {
        $r = Field_GetValue($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetValueAsString()
    {
        return Field_GetValueAsString($this->_cPtr);
    }

    function GetValueAsBool()
    {
        return Field_GetValueAsBool($this->_cPtr);
    }

    const e_action_trigger_keystroke = 13;

    const e_action_trigger_format = 14;

    const e_action_trigger_validate = 15;

    const e_action_trigger_calculate = 16;

    function SetValue($value)
    {
        return Field_SetValue($this->_cPtr, $value);
    }

    function GetTriggerAction($trigger)
    {
        $r = Field_GetTriggerAction($this->_cPtr, $trigger);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function RefreshAppearance()
    {
        Field_RefreshAppearance($this->_cPtr);
    }

    function EraseAppearance()
    {
        Field_EraseAppearance($this->_cPtr);
    }

    function GetDefaultValue()
    {
        $r = Field_GetDefaultValue($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetDefaultValueAsString()
    {
        return Field_GetDefaultValueAsString($this->_cPtr);
    }

    function GetName()
    {
        return Field_GetName($this->_cPtr);
    }

    function GetPartialName()
    {
        return Field_GetPartialName($this->_cPtr);
    }

    function Rename($field_name)
    {
        Field_Rename($this->_cPtr, $field_name);
    }

    function IsAnnot()
    {
        return Field_IsAnnot($this->_cPtr);
    }

    const e_read_only = 0;

    const e_required = Field_e_required;

    const e_no_export = Field_e_no_export;

    const e_pushbutton_flag = Field_e_pushbutton_flag;

    const e_radio_flag = Field_e_radio_flag;

    const e_toggle_to_off = Field_e_toggle_to_off;

    const e_radios_in_unison = Field_e_radios_in_unison;

    const e_multiline = Field_e_multiline;

    const e_password = Field_e_password;

    const e_file_select = Field_e_file_select;

    const e_no_spellcheck = Field_e_no_spellcheck;

    const e_no_scroll = Field_e_no_scroll;

    const e_comb = Field_e_comb;

    const e_rich_text = Field_e_rich_text;

    const e_combo = Field_e_combo;

    const e_edit = Field_e_edit;

    const e_sort = Field_e_sort;

    const e_multiselect = Field_e_multiselect;

    const e_commit_on_sel_change = Field_e_commit_on_sel_change;

    function GetFlag($flag)
    {
        return Field_GetFlag($this->_cPtr, $flag);
    }

    function SetFlag($flag, $value)
    {
        Field_SetFlag($this->_cPtr, $flag, $value);
    }

    const e_left_justified = 0;

    const e_centered = Field_e_centered;

    const e_right_justified = Field_e_right_justified;

    function GetJustification()
    {
        return Field_GetJustification($this->_cPtr);
    }

    function SetJustification($j)
    {
        Field_SetJustification($this->_cPtr, $j);
    }

    function SetMaxLen($max_len)
    {
        Field_SetMaxLen($this->_cPtr, $max_len);
    }

    function GetOptCount()
    {
        return Field_GetOptCount($this->_cPtr);
    }

    function GetOpt($index)
    {
        return Field_GetOpt($this->_cPtr, $index);
    }

    function GetMaxLen()
    {
        return Field_GetMaxLen($this->_cPtr);
    }

    function GetDefaultAppearance()
    {
        return Field_GetDefaultAppearance($this->_cPtr);
    }

    function Flatten($page)
    {
        Field_Flatten($this->_cPtr, $page);
    }

    function GetUpdateRect()
    {
        $r = Field_GetUpdateRect($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function FindInheritedAttribute($attrib)
    {
        $r = Field_FindInheritedAttribute($this->_cPtr, $attrib);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetSDFObj()
    {
        $r = Field_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Destroy()
    {
        Field_Destroy($this->_cPtr);
    }

    function UseSignatureHandler($signature_handler_id)
    {
        $r = Field_UseSignatureHandler($this->_cPtr, $signature_handler_id);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsLockedByDigitalSignature()
    {
        return Field_IsLockedByDigitalSignature($this->_cPtr);
    }

    function __construct($field_dict_or_p = null)
    {
        if (is_resource($field_dict_or_p) && get_resource_type($field_dict_or_p) === '_p_pdftron__PDF__Field') {
            $this->_cPtr = $field_dict_or_p;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Field();
                break;
            default:
                $this->_cPtr = new_Field($field_dict_or_p);
        }
    }
}
