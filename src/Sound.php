<?php

namespace App\Documents\PdfTron;

class Sound extends Markup
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

    const e_Speaker = 0;

    const e_Mic = Sound_e_Mic;

    const e_Unknown = Sound_e_Unknown;

    static function CreateWithData($doc, $pos, $source_data, $bits_per_sample, $sample_freq, $num_channels, $icon = null)
    {
        switch (func_num_args()) {
            case 6:
                $r = Sound_CreateWithData($doc, $pos, $source_data, $bits_per_sample, $sample_freq, $num_channels);
                break;
            default:
                $r = Sound_CreateWithData($doc, $pos, $source_data, $bits_per_sample, $sample_freq, $num_channels, $icon);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Sound($r);
        }
        return $r;
    }

    static function Create($doc, $pos, $icon = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Sound_Create($doc, $pos);
                break;
            default:
                $r = Sound_Create($doc, $pos, $icon);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Sound($r);
        }
        return $r;
    }

    function GetSoundStream()
    {
        $r = Sound_GetSoundStream($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetSoundStream($icon)
    {
        Sound_SetSoundStream($this->_cPtr, $icon);
    }

    function GetIcon()
    {
        return Sound_GetIcon($this->_cPtr);
    }

    function GetIconName()
    {
        return Sound_GetIconName($this->_cPtr);
    }

    function SetIcon($type = null)
    {
        switch (func_num_args()) {
            case 0:
                Sound_SetIcon($this->_cPtr);
                break;
            default:
                Sound_SetIcon($this->_cPtr, $type);
        }
    }

    function __construct($d_or_ann_or_sound = null)
    {
        if (is_resource($d_or_ann_or_sound) && get_resource_type($d_or_ann_or_sound) === '_p_pdftron__PDF__Annots__Sound') {
            $this->_cPtr = $d_or_ann_or_sound;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Sound();
                break;
            default:
                $this->_cPtr = new_Sound($d_or_ann_or_sound);
        }
    }
}
