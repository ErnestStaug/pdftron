<?php

namespace App\Documents\PdfTron;

class FileAttachment extends Markup
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

    const e_Graph = 0;

    const e_PushPin = FileAttachment_e_PushPin;

    const e_Paperclip = FileAttachment_e_Paperclip;

    const e_Tag = FileAttachment_e_Tag;

    const e_Unknown = FileAttachment_e_Unknown;

    static function Create($doc, $pos, $fs_or_path, $icon_name = null)
    {
        switch (func_num_args()) {
            case 3:
                $r = FileAttachment_Create($doc, $pos, $fs_or_path);
                break;
            default:
                $r = FileAttachment_Create($doc, $pos, $fs_or_path, $icon_name);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FileAttachment($r);
        }
        return $r;
    }

    function GetFileSpec()
    {
        $r = FileAttachment_GetFileSpec($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FileSpec($r);
        }
        return $r;
    }

    function SetFileSpec($file)
    {
        FileAttachment_SetFileSpec($this->_cPtr, $file);
    }

    function Export($save_as = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = FileAttachment_Export($this->_cPtr);
                break;
            default:
                $r = FileAttachment_Export($this->_cPtr, $save_as);
        }
        return $r;
    }

    function GetIcon()
    {
        return FileAttachment_GetIcon($this->_cPtr);
    }

    function SetIcon($type = null)
    {
        switch (func_num_args()) {
            case 0:
                FileAttachment_SetIcon($this->_cPtr);
                break;
            default:
                FileAttachment_SetIcon($this->_cPtr, $type);
        }
    }

    function GetIconName()
    {
        return FileAttachment_GetIconName($this->_cPtr);
    }

    function SetIconName($iname)
    {
        FileAttachment_SetIconName($this->_cPtr, $iname);
    }

    function __construct($d_or_ann_or_fileattachment = null)
    {
        if (is_resource($d_or_ann_or_fileattachment) && get_resource_type($d_or_ann_or_fileattachment) === '_p_pdftron__PDF__Annots__FileAttachment') {
            $this->_cPtr = $d_or_ann_or_fileattachment;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_FileAttachment();
                break;
            default:
                $this->_cPtr = new_FileAttachment($d_or_ann_or_fileattachment);
        }
    }
}
