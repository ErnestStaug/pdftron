<?php

namespace PDFNet\PDFTron;

class Annot
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_annot') return Annot_mp_annot_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_annot') return Annot_mp_annot_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Annot_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_Text = 0;

    const e_Link = Annot_e_Link;

    const e_FreeText = Annot_e_FreeText;

    const e_Line = Annot_e_Line;

    const e_Square = Annot_e_Square;

    const e_Circle = Annot_e_Circle;

    const e_Polygon = Annot_e_Polygon;

    const e_Polyline = Annot_e_Polyline;

    const e_Highlight = Annot_e_Highlight;

    const e_Underline = Annot_e_Underline;

    const e_Squiggly = Annot_e_Squiggly;

    const e_StrikeOut = Annot_e_StrikeOut;

    const e_Stamp = Annot_e_Stamp;

    const e_Caret = Annot_e_Caret;

    const e_Ink = Annot_e_Ink;

    const e_Popup = Annot_e_Popup;

    const e_FileAttachment = Annot_e_FileAttachment;

    const e_Sound = Annot_e_Sound;

    const e_Movie = Annot_e_Movie;

    const e_Widget = Annot_e_Widget;

    const e_Screen = Annot_e_Screen;

    const e_PrinterMark = Annot_e_PrinterMark;

    const e_TrapNet = Annot_e_TrapNet;

    const e_Watermark = Annot_e_Watermark;

    const e_3D = Annot_e_3D;

    const e_Redact = Annot_e_Redact;

    const e_Projection = Annot_e_Projection;

    const e_RichMedia = Annot_e_RichMedia;

    const e_Unknown = Annot_e_Unknown;

    static function Create($doc, $type, $pos)
    {
        $r = Annot_Create($doc, $type, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Annot($r);
        }
        return $r;
    }

    function IsEqual($d)
    {
        return Annot_IsEqual($this->_cPtr, $d);
    }

    function IsValid()
    {
        return Annot_IsValid($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = Annot_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetType()
    {
        return Annot_GetType($this->_cPtr);
    }

    function GetRect()
    {
        $r = Annot_GetRect($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetVisibleContentBox()
    {
        $r = Annot_GetVisibleContentBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function IsMarkup()
    {
        return Annot_IsMarkup($this->_cPtr);
    }

    function SetRect($pos)
    {
        Annot_SetRect($this->_cPtr, $pos);
    }

    function GetPage()
    {
        $r = Annot_GetPage($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Page($r);
        }
        return $r;
    }

    function SetPage($page)
    {
        Annot_SetPage($this->_cPtr, $page);
    }

    function GetUniqueID()
    {
        $r = Annot_GetUniqueID($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetUniqueID($id, $id_buf_sz = 0)
    {
        Annot_SetUniqueID($this->_cPtr, $id, $id_buf_sz);
    }

    function GetDate()
    {
        $r = Annot_GetDate($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Date($r);
        }
        return $r;
    }

    function SetDate($date)
    {
        Annot_SetDate($this->_cPtr, $date);
    }

    const e_invisible = 0;

    const e_hidden = Annot_e_hidden;

    const e_print = Annot_e_print;

    const e_no_zoom = Annot_e_no_zoom;

    const e_no_rotate = Annot_e_no_rotate;

    const e_no_view = Annot_e_no_view;

    const e_read_only = Annot_e_read_only;

    const e_locked = Annot_e_locked;

    const e_toggle_no_view = Annot_e_toggle_no_view;

    const e_locked_contents = Annot_e_locked_contents;

    function GetFlag($flag)
    {
        return Annot_GetFlag($this->_cPtr, $flag);
    }

    function SetFlag($flag, $value)
    {
        Annot_SetFlag($this->_cPtr, $flag, $value);
    }

    const e_action_trigger_activate = 0;

    const e_action_trigger_annot_enter = 1;

    const e_action_trigger_annot_exit = 2;

    const e_action_trigger_annot_down = 3;

    const e_action_trigger_annot_up = 4;

    const e_action_trigger_annot_focus = 5;

    const e_action_trigger_annot_blur = 6;

    const e_action_trigger_annot_page_open = 7;

    const e_action_trigger_annot_page_close = 8;

    const e_action_trigger_annot_page_visible = 9;

    const e_action_trigger_annot_page_invisible = 10;

    function GetTriggerAction($trigger)
    {
        $r = Annot_GetTriggerAction($this->_cPtr, $trigger);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetBorderStyle()
    {
        $r = Annot_GetBorderStyle($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new BorderStyle($r);
        }
        return $r;
    }

    function SetBorderStyle($bs, $oldStyleOnly = false)
    {
        Annot_SetBorderStyle($this->_cPtr, $bs, $oldStyleOnly);
    }

    const e_normal = 0;

    const e_rollover = Annot_e_rollover;

    const e_down = Annot_e_down;

    function GetAppearance($annot_state = null, $app_state = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Annot_GetAppearance($this->_cPtr);
                break;
            case 1:
                $r = Annot_GetAppearance($this->_cPtr, $annot_state);
                break;
            default:
                $r = Annot_GetAppearance($this->_cPtr, $annot_state, $app_state);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetAppearance($app_stream, $annot_state = null, $app_state = null)
    {
        switch (func_num_args()) {
            case 1:
                Annot_SetAppearance($this->_cPtr, $app_stream);
                break;
            case 2:
                Annot_SetAppearance($this->_cPtr, $app_stream, $annot_state);
                break;
            default:
                Annot_SetAppearance($this->_cPtr, $app_stream, $annot_state, $app_state);
        }
    }

    function RemoveAppearance($annot_state = null, $app_state = null)
    {
        switch (func_num_args()) {
            case 0:
                Annot_RemoveAppearance($this->_cPtr);
                break;
            case 1:
                Annot_RemoveAppearance($this->_cPtr, $annot_state);
                break;
            default:
                Annot_RemoveAppearance($this->_cPtr, $annot_state, $app_state);
        }
    }

    function Flatten($page)
    {
        Annot_Flatten($this->_cPtr, $page);
    }

    function GetActiveAppearanceState()
    {
        return Annot_GetActiveAppearanceState($this->_cPtr);
    }

    function SetActiveAppearanceState($astate)
    {
        Annot_SetActiveAppearanceState($this->_cPtr, $astate);
    }

    function GetColorAsRGB()
    {
        $r = Annot_GetColorAsRGB($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetColorAsCMYK()
    {
        $r = Annot_GetColorAsCMYK($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetColorAsGray()
    {
        $r = Annot_GetColorAsGray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ColorPt($r);
        }
        return $r;
    }

    function GetColorCompNum()
    {
        return Annot_GetColorCompNum($this->_cPtr);
    }

    function SetColor($col, $numcomp = 3)
    {
        Annot_SetColor($this->_cPtr, $col, $numcomp);
    }

    function GetStructParent()
    {
        return Annot_GetStructParent($this->_cPtr);
    }

    function SetStructParent($parkeyval)
    {
        Annot_SetStructParent($this->_cPtr, $parkeyval);
    }

    function GetOptionalContent()
    {
        $r = Annot_GetOptionalContent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetOptionalContent($content)
    {
        Annot_SetOptionalContent($this->_cPtr, $content);
    }

    function SetContents($contents)
    {
        Annot_SetContents($this->_cPtr, $contents);
    }

    function GetContents()
    {
        return Annot_GetContents($this->_cPtr);
    }

    function GetRotation()
    {
        return Annot_GetRotation($this->_cPtr);
    }

    function SetRotation($angle)
    {
        Annot_SetRotation($this->_cPtr, $angle);
    }

    function RefreshAppearance($options = null)
    {
        switch (func_num_args()) {
            case 0:
                Annot_RefreshAppearance($this->_cPtr);
                break;
            default:
                Annot_RefreshAppearance($this->_cPtr, $options);
        }
    }

    function GetCustomData($key)
    {
        return Annot_GetCustomData($this->_cPtr, $key);
    }

    function SetCustomData($key, $value)
    {
        Annot_SetCustomData($this->_cPtr, $key, $value);
    }

    function DeleteCustomData($key)
    {
        Annot_DeleteCustomData($this->_cPtr, $key);
    }

    function Resize($newrect)
    {
        Annot_Resize($this->_cPtr, $newrect);
    }

    static function CreateInternal($impl)
    {
        $r = Annot_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Annot($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Annot_GetHandleInternal($this->_cPtr);
    }

    function __construct($d_or_annot = null)
    {
        if (is_resource($d_or_annot) && get_resource_type($d_or_annot) === '_p_pdftron__PDF__Annot') {
            $this->_cPtr = $d_or_annot;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Annot();
                break;
            default:
                $this->_cPtr = new_Annot($d_or_annot);
        }
    }
}
