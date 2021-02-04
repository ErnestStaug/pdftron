<?php

namespace App\Documents\PdfTron;

class Text extends Markup
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Markup::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Markup::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Markup::__isset($var);
    }

    static function Create($doc, $pos, $contents = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Text_Create($doc, $pos);
                break;
            default:
                $r = Text_Create($doc, $pos, $contents);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Text($r);
        }
        return $r;
    }

    function IsOpen()
    {
        return Text_IsOpen($this->_cPtr);
    }

    function SetOpen($isopen)
    {
        Text_SetOpen($this->_cPtr, $isopen);
    }

    const e_Comment = 0;

    const e_Key = Text_e_Key;

    const e_Help = Text_e_Help;

    const e_NewParagraph = Text_e_NewParagraph;

    const e_Paragraph = Text_e_Paragraph;

    const e_Insert = Text_e_Insert;

    const e_Note = Text_e_Note;

    const e_Unknown = Text_e_Unknown;

    function GetIcon()
    {
        return Text_GetIcon($this->_cPtr);
    }

    function GetIconName()
    {
        return Text_GetIconName($this->_cPtr);
    }

    function SetIcon($icon = null)
    {
        switch (func_num_args()) {
            case 0:
                Text_SetIcon($this->_cPtr);
                break;
            default:
                Text_SetIcon($this->_cPtr, $icon);
        }
    }

    function GetState()
    {
        return Text_GetState($this->_cPtr);
    }

    function SetState($state = null)
    {
        switch (func_num_args()) {
            case 0:
                Text_SetState($this->_cPtr);
                break;
            default:
                Text_SetState($this->_cPtr, $state);
        }
    }

    function GetStateModel()
    {
        return Text_GetStateModel($this->_cPtr);
    }

    function SetStateModel($sm)
    {
        Text_SetStateModel($this->_cPtr, $sm);
    }

    function __construct($d_or_ann_or_text = null)
    {
        if (is_resource($d_or_ann_or_text) && get_resource_type($d_or_ann_or_text) === '_p_pdftron__PDF__Annots__Text') {
            $this->_cPtr = $d_or_ann_or_text;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Text();
                break;
            default:
                $this->_cPtr = new_Text($d_or_ann_or_text);
        }
    }
}
