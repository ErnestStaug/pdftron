<?php

namespace PDFNet\PDFTron;

class PDFDocViewPrefs
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_prefs') return PDFDocViewPrefs_mp_prefs_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_prefs') return PDFDocViewPrefs_mp_prefs_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFDocViewPrefs_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function SetInitialPage($dest)
    {
        PDFDocViewPrefs_SetInitialPage($this->_cPtr, $dest);
    }

    const e_UseNone = 0;

    const e_UseThumbs = PDFDocViewPrefs_e_UseThumbs;

    const e_UseBookmarks = PDFDocViewPrefs_e_UseBookmarks;

    const e_FullScreen = PDFDocViewPrefs_e_FullScreen;

    const e_UseOC = PDFDocViewPrefs_e_UseOC;

    const e_UseAttachments = PDFDocViewPrefs_e_UseAttachments;

    function SetPageMode($mode)
    {
        PDFDocViewPrefs_SetPageMode($this->_cPtr, $mode);
    }

    function GetPageMode()
    {
        return PDFDocViewPrefs_GetPageMode($this->_cPtr);
    }

    const e_Default = 0;

    const e_SinglePage = PDFDocViewPrefs_e_SinglePage;

    const e_OneColumn = PDFDocViewPrefs_e_OneColumn;

    const e_TwoColumnLeft = PDFDocViewPrefs_e_TwoColumnLeft;

    const e_TwoColumnRight = PDFDocViewPrefs_e_TwoColumnRight;

    const e_TwoPageLeft = PDFDocViewPrefs_e_TwoPageLeft;

    const e_TwoPageRight = PDFDocViewPrefs_e_TwoPageRight;

    function SetLayoutMode($layout)
    {
        PDFDocViewPrefs_SetLayoutMode($this->_cPtr, $layout);
    }

    function GetLayoutMode()
    {
        return PDFDocViewPrefs_GetLayoutMode($this->_cPtr);
    }

    const e_HideToolbar = 0;

    const e_HideMenubar = PDFDocViewPrefs_e_HideMenubar;

    const e_HideWindowUI = PDFDocViewPrefs_e_HideWindowUI;

    const e_FitWindow = PDFDocViewPrefs_e_FitWindow;

    const e_CenterWindow = PDFDocViewPrefs_e_CenterWindow;

    const e_DisplayDocTitle = PDFDocViewPrefs_e_DisplayDocTitle;

    function SetPref($pref, $value)
    {
        PDFDocViewPrefs_SetPref($this->_cPtr, $pref, $value);
    }

    function GetPref($pref)
    {
        return PDFDocViewPrefs_GetPref($this->_cPtr, $pref);
    }

    function SetNonFullScreenPageMode($mode)
    {
        PDFDocViewPrefs_SetNonFullScreenPageMode($this->_cPtr, $mode);
    }

    function GetNonFullScreenPageMode()
    {
        return PDFDocViewPrefs_GetNonFullScreenPageMode($this->_cPtr);
    }

    function SetDirection($left_to_right)
    {
        PDFDocViewPrefs_SetDirection($this->_cPtr, $left_to_right);
    }

    function GetDirection()
    {
        return PDFDocViewPrefs_GetDirection($this->_cPtr);
    }

    function SetViewArea($box)
    {
        PDFDocViewPrefs_SetViewArea($this->_cPtr, $box);
    }

    function GetViewArea()
    {
        return PDFDocViewPrefs_GetViewArea($this->_cPtr);
    }

    function SetViewClip($box)
    {
        PDFDocViewPrefs_SetViewClip($this->_cPtr, $box);
    }

    function GetViewClip()
    {
        return PDFDocViewPrefs_GetViewClip($this->_cPtr);
    }

    function SetPrintArea($box)
    {
        PDFDocViewPrefs_SetPrintArea($this->_cPtr, $box);
    }

    function GetPrintArea()
    {
        return PDFDocViewPrefs_GetPrintArea($this->_cPtr);
    }

    function SetPrintClip($box)
    {
        PDFDocViewPrefs_SetPrintClip($this->_cPtr, $box);
    }

    function GetPrintClip()
    {
        return PDFDocViewPrefs_GetPrintClip($this->_cPtr);
    }

    function GetSDFObj()
    {
        $r = PDFDocViewPrefs_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($tr_or_impl = null)
    {
        if (is_resource($tr_or_impl) && get_resource_type($tr_or_impl) === '_p_pdftron__PDF__PDFDocViewPrefs') {
            $this->_cPtr = $tr_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PDFDocViewPrefs();
                break;
            default:
                $this->_cPtr = new_PDFDocViewPrefs($tr_or_impl);
        }
    }
}
