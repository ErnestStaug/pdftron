<?php

namespace App\Documents\PdfTron;

class PDFView
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PDFView') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_PDFView();
    }

    function SetDoc($doc)
    {
        PDFView_SetDoc($this->_cPtr, $doc);
    }

    function OpenUniversalDoc($conversion)
    {
        PDFView_OpenUniversalDoc($this->_cPtr, $conversion);
    }

    function CloseDoc()
    {
        PDFView_CloseDoc($this->_cPtr);
    }

    function GetDoc()
    {
        $r = PDFView_GetDoc($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PDFDoc($r);
        }
        return $r;
    }

    function DocLock($cancel_threads)
    {
        PDFView_DocLock($this->_cPtr, $cancel_threads);
    }

    function DocUnlock()
    {
        PDFView_DocUnlock($this->_cPtr);
    }

    function DocTryLock($milliseconds = 0)
    {
        return PDFView_DocTryLock($this->_cPtr, $milliseconds);
    }

    function DocLockRead()
    {
        PDFView_DocLockRead($this->_cPtr);
    }

    function DocUnlockRead()
    {
        PDFView_DocUnlockRead($this->_cPtr);
    }

    function DocTryLockRead($milliseconds = 0)
    {
        return PDFView_DocTryLockRead($this->_cPtr, $milliseconds);
    }

    const e_single_page = 1;

    const e_single_continuous = PDFView_e_single_continuous;

    const e_facing = PDFView_e_facing;

    const e_facing_continuous = PDFView_e_facing_continuous;

    const e_facing_cover = PDFView_e_facing_cover;

    const e_facing_continuous_cover = PDFView_e_facing_continuous_cover;

    function SetPagePresentationMode($mode)
    {
        PDFView_SetPagePresentationMode($this->_cPtr, $mode);
    }

    function GetPagePresentationMode()
    {
        return PDFView_GetPagePresentationMode($this->_cPtr);
    }

    function SetColorPostProcessMode($mode)
    {
        PDFView_SetColorPostProcessMode($this->_cPtr, $mode);
    }

    function SetColorPostProcessMapFile($image_file_contents)
    {
        PDFView_SetColorPostProcessMapFile($this->_cPtr, $image_file_contents);
    }

    function SetColorPostProcessColors($white_color, $black_color)
    {
        PDFView_SetColorPostProcessColors($this->_cPtr, $white_color, $black_color);
    }

    function GetColorPostProcessMode()
    {
        return PDFView_GetColorPostProcessMode($this->_cPtr);
    }

    function GetCurrentPage()
    {
        return PDFView_GetCurrentPage($this->_cPtr);
    }

    function GetPageCount()
    {
        return PDFView_GetPageCount($this->_cPtr);
    }

    function GotoFirstPage()
    {
        return PDFView_GotoFirstPage($this->_cPtr);
    }

    function GotoLastPage()
    {
        return PDFView_GotoLastPage($this->_cPtr);
    }

    function GotoNextPage()
    {
        return PDFView_GotoNextPage($this->_cPtr);
    }

    function GotoPreviousPage()
    {
        return PDFView_GotoPreviousPage($this->_cPtr);
    }

    function SetCurrentPage($page_num)
    {
        return PDFView_SetCurrentPage($this->_cPtr, $page_num);
    }

    function ShowRect($page_num, $rect)
    {
        return PDFView_ShowRect($this->_cPtr, $page_num, $rect);
    }

    function GetVisiblePages()
    {
        $r = PDFView_GetVisiblePages($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorInt($r);
        }
        return $r;
    }

    function GetZoom()
    {
        return PDFView_GetZoom($this->_cPtr);
    }

    function SetZoom($zoom_or_x, $y = null, $zoom = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFView_SetZoom($this->_cPtr, $zoom_or_x);
                break;
            case 2:
                $r = PDFView_SetZoom($this->_cPtr, $zoom_or_x, $y);
                break;
            default:
                $r = PDFView_SetZoom($this->_cPtr, $zoom_or_x, $y, $zoom);
        }
        return $r;
    }

    function SmartZoom($x, $y)
    {
        return PDFView_SmartZoom($this->_cPtr, $x, $y);
    }

    function RotateClockwise()
    {
        PDFView_RotateClockwise($this->_cPtr);
    }

    function RotateCounterClockwise()
    {
        PDFView_RotateCounterClockwise($this->_cPtr);
    }

    function GetRotation()
    {
        return PDFView_GetRotation($this->_cPtr);
    }

    function GetPageNumberFromScreenPt($x, $y)
    {
        return PDFView_GetPageNumberFromScreenPt($this->_cPtr, $x, $y);
    }

    function ConvScreenPtToCanvasPt($pt)
    {
        $r = PDFView_ConvScreenPtToCanvasPt($this->_cPtr, $pt);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function ConvCanvasPtToScreenPt($pt)
    {
        $r = PDFView_ConvCanvasPtToScreenPt($this->_cPtr, $pt);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function ConvCanvasPtToPagePt($pt, $page_num = -1)
    {
        $r = PDFView_ConvCanvasPtToPagePt($this->_cPtr, $pt, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function ConvPagePtToCanvasPt($pt, $page_num = -1)
    {
        $r = PDFView_ConvPagePtToCanvasPt($this->_cPtr, $pt, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function ConvScreenPtToPagePt($pt, $page_num = -1)
    {
        $r = PDFView_ConvScreenPtToPagePt($this->_cPtr, $pt, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function ConvPagePtToScreenPt($pt, $page_num = -1)
    {
        $r = PDFView_ConvPagePtToScreenPt($this->_cPtr, $pt, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SnapToNearestInDoc($screen_pt)
    {
        $r = PDFView_SnapToNearestInDoc($this->_cPtr, $screen_pt);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function SetSnappingMode($mode_flags)
    {
        PDFView_SetSnappingMode($this->_cPtr, $mode_flags);
    }

    function GetDeviceTransform($page_num = -1)
    {
        $r = PDFView_GetDeviceTransform($this->_cPtr, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function SetErrorReportProc($instance)
    {
        PDFView_SetErrorReportProc($this->_cPtr, $instance);
    }

    function SetCurrentPageProc($instance)
    {
        PDFView_SetCurrentPageProc($this->_cPtr, $instance);
    }

    function SetJavaScriptEventCallBack($instance)
    {
        PDFView_SetJavaScriptEventCallBack($this->_cPtr, $instance);
    }

    function SetCurrentZoomProc($instance)
    {
        PDFView_SetCurrentZoomProc($this->_cPtr, $instance);
    }

    function ExecuteAction($action_or_action_param)
    {
        PDFView_ExecuteAction($this->_cPtr, $action_or_action_param);
    }

    function GetCanvasWidth()
    {
        return PDFView_GetCanvasWidth($this->_cPtr);
    }

    function GetCanvasHeight()
    {
        return PDFView_GetCanvasHeight($this->_cPtr);
    }

    function GetHScrollPos()
    {
        return PDFView_GetHScrollPos($this->_cPtr);
    }

    function GetVScrollPos()
    {
        return PDFView_GetVScrollPos($this->_cPtr);
    }

    function OnScroll($pix_dx, $pix_dy)
    {
        PDFView_OnScroll($this->_cPtr, $pix_dx, $pix_dy);
    }

    function SetHScrollPos($pos)
    {
        PDFView_SetHScrollPos($this->_cPtr, $pos);
    }

    function SetVScrollPos($pos)
    {
        PDFView_SetVScrollPos($this->_cPtr, $pos);
    }

    function OnSize($width, $height)
    {
        PDFView_OnSize($this->_cPtr, $width, $height);
    }

    function IsFinishedRendering($visible_region_only)
    {
        return PDFView_IsFinishedRendering($this->_cPtr, $visible_region_only);
    }

    function CancelRendering()
    {
        PDFView_CancelRendering($this->_cPtr);
    }

    function Update($all_or_update_or_annot_or_field = null, $page_num = null)
    {
        switch (func_num_args()) {
            case 0:
                PDFView_Update($this->_cPtr);
                break;
            case 1:
                PDFView_Update($this->_cPtr, $all_or_update_or_annot_or_field);
                break;
            default:
                PDFView_Update($this->_cPtr, $all_or_update_or_annot_or_field, $page_num);
        }
    }

    function UpdatePageLayout()
    {
        PDFView_UpdatePageLayout($this->_cPtr);
    }

    function GetBuffer()
    {
        $r = PDFView_GetBuffer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function UpdateBuffer()
    {
        PDFView_UpdateBuffer($this->_cPtr);
    }

    function GetBufferWidth()
    {
        return PDFView_GetBufferWidth($this->_cPtr);
    }

    function GetBufferHeight()
    {
        return PDFView_GetBufferHeight($this->_cPtr);
    }

    function GetBufferStride()
    {
        return PDFView_GetBufferStride($this->_cPtr);
    }

    function HideAnnotation($annot)
    {
        PDFView_HideAnnotation($this->_cPtr, $annot);
    }

    function ShowAnnotation($annot)
    {
        PDFView_ShowAnnotation($this->_cPtr, $annot);
    }

    function SetDrawAnnotations($render_annots)
    {
        PDFView_SetDrawAnnotations($this->_cPtr, $render_annots);
    }

    function SetUrlExtraction($enabled)
    {
        PDFView_SetUrlExtraction($this->_cPtr, $enabled);
    }

    function GetLinkAt($x, $y)
    {
        return PDFView_GetLinkAt($this->_cPtr, $x, $y);
    }

    function SetHighlightFields($highlight_fields)
    {
        PDFView_SetHighlightFields($this->_cPtr, $highlight_fields);
    }

    function SetRequiredFieldBorderColor($new_border_color)
    {
        PDFView_SetRequiredFieldBorderColor($this->_cPtr, $new_border_color);
    }

    function SetAntiAliasing($enable_aa)
    {
        PDFView_SetAntiAliasing($this->_cPtr, $enable_aa);
    }

    function SetPathHinting($enable_hinting)
    {
        PDFView_SetPathHinting($this->_cPtr, $enable_hinting);
    }

    function SetThinLineAdjustment($pixel_grid_fit, $stroke_adjust)
    {
        PDFView_SetThinLineAdjustment($this->_cPtr, $pixel_grid_fit, $stroke_adjust);
    }

    function SetImageSmoothing($smoothing_enabled = true)
    {
        PDFView_SetImageSmoothing($this->_cPtr, $smoothing_enabled);
    }

    function SetCaching($enabled)
    {
        PDFView_SetCaching($this->_cPtr, $enabled);
    }

    function SetRasterizerType($type)
    {
        PDFView_SetRasterizerType($this->_cPtr, $type);
    }

    function SetGamma($exp)
    {
        PDFView_SetGamma($this->_cPtr, $exp);
    }

    function SetOverprint($op)
    {
        PDFView_SetOverprint($this->_cPtr, $op);
    }

    function SetOCGContext($ctx)
    {
        PDFView_SetOCGContext($this->_cPtr, $ctx);
    }

    function GetOCGContext()
    {
        $r = PDFView_GetOCGContext($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Context($r);
        }
        return $r;
    }

    function UpdateOCGContext()
    {
        PDFView_UpdateOCGContext($this->_cPtr);
    }

    function SetRenderBeginProc($instance)
    {
        PDFView_SetRenderBeginProc($this->_cPtr, $instance);
    }

    function SetRenderFinishProc($instance)
    {
        PDFView_SetRenderFinishProc($this->_cPtr, $instance);
    }

    const e_structural = 0;

    const e_rectangular = PDFView_e_rectangular;

    const e_structural_algorithm_2 = PDFView_e_structural_algorithm_2;

    function SetTextSelectionMode($tm)
    {
        PDFView_SetTextSelectionMode($this->_cPtr, $tm);
    }

    function SelectWithSnapping($x1, $y1, $x2_or_page1, $y2_or_x2, $snap_to_start_or_y2, $snap_to_end_or_page2, $snap_to_start = null, $snap_to_end = null)
    {
        switch (func_num_args()) {
            case 6:
                $r = PDFView_SelectWithSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2, $snap_to_start_or_y2, $snap_to_end_or_page2);
                break;
            case 7:
                $r = PDFView_SelectWithSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2, $snap_to_start_or_y2, $snap_to_end_or_page2, $snap_to_start);
                break;
            default:
                $r = PDFView_SelectWithSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2, $snap_to_start_or_y2, $snap_to_end_or_page2, $snap_to_start, $snap_to_end);
        }
        return $r;
    }

    function SelectWithSmartSnapping($x1, $y1, $x2_or_page1, $y2_or_x2, $y2 = null, $page2 = null)
    {
        switch (func_num_args()) {
            case 4:
                $r = PDFView_SelectWithSmartSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2);
                break;
            case 5:
                $r = PDFView_SelectWithSmartSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2, $y2);
                break;
            default:
                $r = PDFView_SelectWithSmartSnapping($this->_cPtr, $x1, $y1, $x2_or_page1, $y2_or_x2, $y2, $page2);
        }
        return $r;
    }

    function Select($x1_or_highlights_or_select, $y1 = null, $x2_or_page1 = null, $y2_or_x2 = null, $y2 = null, $page2 = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select);
                break;
            case 2:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select, $y1);
                break;
            case 3:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select, $y1, $x2_or_page1);
                break;
            case 4:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select, $y1, $x2_or_page1, $y2_or_x2);
                break;
            case 5:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select, $y1, $x2_or_page1, $y2_or_x2, $y2);
                break;
            default:
                $r = PDFView_Select($this->_cPtr, $x1_or_highlights_or_select, $y1, $x2_or_page1, $y2_or_x2, $y2, $page2);
        }
        return $r;
    }

    function CancelFindText()
    {
        PDFView_CancelFindText($this->_cPtr);
    }

    function SelectAll()
    {
        PDFView_SelectAll($this->_cPtr);
    }

    function HasSelection()
    {
        return PDFView_HasSelection($this->_cPtr);
    }

    function ClearSelection()
    {
        PDFView_ClearSelection($this->_cPtr);
    }

    function GetSelection($pagenum = -1)
    {
        $r = PDFView_GetSelection($this->_cPtr, $pagenum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Selection($r);
        }
        return $r;
    }

    function GetSelectionBeginPage()
    {
        return PDFView_GetSelectionBeginPage($this->_cPtr);
    }

    function GetSelectionEndPage()
    {
        return PDFView_GetSelectionEndPage($this->_cPtr);
    }

    function HasSelectionOnPage($ipage)
    {
        return PDFView_HasSelectionOnPage($this->_cPtr, $ipage);
    }

    function PrepareWords($page_num)
    {
        PDFView_PrepareWords($this->_cPtr, $page_num);
    }

    function WereWordsPrepared($page_num)
    {
        return PDFView_WereWordsPrepared($this->_cPtr, $page_num);
    }

    function IsThereTextInRect($x1, $y1, $x2, $y2)
    {
        return PDFView_IsThereTextInRect($this->_cPtr, $x1, $y1, $x2, $y2);
    }

    function PrepareAnnotsForMouse($page_num, $distance_threshold, $minimum_line_weight)
    {
        PDFView_PrepareAnnotsForMouse($this->_cPtr, $page_num, $distance_threshold, $minimum_line_weight);
    }

    function WereAnnotsForMousePrepared($page_num)
    {
        return PDFView_WereAnnotsForMousePrepared($this->_cPtr, $page_num);
    }

    function GetAnnotTypeUnder($x, $y)
    {
        return PDFView_GetAnnotTypeUnder($this->_cPtr, $x, $y);
    }

    function SetPageBorderVisibility($border_visible)
    {
        PDFView_SetPageBorderVisibility($this->_cPtr, $border_visible);
    }

    function SetPageTransparencyGrid($trans_grid_visible)
    {
        PDFView_SetPageTransparencyGrid($this->_cPtr, $trans_grid_visible);
    }

    function SetDefaultPageColor($r_, $g, $b)
    {
        PDFView_SetDefaultPageColor($this->_cPtr, $r_, $g, $b);
    }

    function SetBackgroundColor($r_, $g, $b, $a = 255)
    {
        PDFView_SetBackgroundColor($this->_cPtr, $r_, $g, $b, $a);
    }

    function SetHorizontalAlign($align)
    {
        PDFView_SetHorizontalAlign($this->_cPtr, $align);
    }

    function SetVerticalAlign($align)
    {
        PDFView_SetVerticalAlign($this->_cPtr, $align);
    }

    function SetPageSpacing($horiz_col_space, $vert_col_space, $horiz_pad, $vert_pad)
    {
        PDFView_SetPageSpacing($this->_cPtr, $horiz_col_space, $vert_col_space, $horiz_pad, $vert_pad);
    }

    static function SetViewerCache($document, $max_cache_size, $on_disk)
    {
        PDFView_SetViewerCache($document, $max_cache_size, $on_disk);
    }

    function Destroy()
    {
        PDFView_Destroy($this->_cPtr);
    }

    function SetDevicePixelDensity($dpi, $scale_factor)
    {
        PDFView_SetDevicePixelDensity($this->_cPtr, $dpi, $scale_factor);
    }

    function GetScreenRectForAnnot($annot, $page_num = -1)
    {
        $r = PDFView_GetScreenRectForAnnot($this->_cPtr, $annot, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetAnnotationAt($x, $y, $distanceThreshold, $minimumLineWeight)
    {
        $r = PDFView_GetAnnotationAt($this->_cPtr, $x, $y, $distanceThreshold, $minimumLineWeight);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Annot($r);
        }
        return $r;
    }

    const e_fit_page = 0;

    const e_fit_width = PDFView_e_fit_width;

    const e_fit_height = PDFView_e_fit_height;

    const e_zoom = PDFView_e_zoom;

    const PVM_SIZE = PDFView_PVM_SIZE;

    function SetPageViewMode($mode)
    {
        PDFView_SetPageViewMode($this->_cPtr, $mode);
    }

    function GetPageViewMode()
    {
        return PDFView_GetPageViewMode($this->_cPtr);
    }

    function RefreshAndUpdate($view_change)
    {
        PDFView_RefreshAndUpdate($this->_cPtr, $view_change);
    }

    function SetPageRefViewMode($mode)
    {
        PDFView_SetPageRefViewMode($this->_cPtr, $mode);
    }

    function GetPageRefViewMode()
    {
        return PDFView_GetPageRefViewMode($this->_cPtr);
    }

    function SetupThumbnails($use_embedded, $generate_at_runtime, $use_disk_cache, $thumb_max_side_length, $max_abs_cache_size, $max_perc_cache_size)
    {
        PDFView_SetupThumbnails($this->_cPtr, $use_embedded, $generate_at_runtime, $use_disk_cache, $thumb_max_side_length, $max_abs_cache_size, $max_perc_cache_size);
    }

    function ClearThumbCache()
    {
        PDFView_ClearThumbCache($this->_cPtr);
    }

    function GetThumbAsync($page_num, $instance)
    {
        PDFView_GetThumbAsync($this->_cPtr, $page_num, $instance);
    }

    function GetThumbInCacheSize($page_num)
    {
        return PDFView_GetThumbInCacheSize($this->_cPtr, $page_num);
    }

    function GetThumbInCache($page_num, $buf, $out_width, $out_height)
    {
        return PDFView_GetThumbInCache($this->_cPtr, $page_num, $buf, $out_width, $out_height);
    }

    function CancelAllThumbRequests()
    {
        PDFView_CancelAllThumbRequests($this->_cPtr);
    }

    function SetRequestRenderInWorkerThreadProc($instance)
    {
        PDFView_SetRequestRenderInWorkerThreadProc($this->_cPtr, $instance);
    }

    function SetFindTextHandler($instance)
    {
        PDFView_SetFindTextHandler($this->_cPtr, $instance);
    }

    function FindTextAsync($search_str, $match_case, $match_whole_word, $search_up, $reg_exp)
    {
        PDFView_FindTextAsync($this->_cPtr, $search_str, $match_case, $match_whole_word, $search_up, $reg_exp);
    }

    function GetAnnotationsOnPage($page_num)
    {
        $r = PDFView_GetAnnotationsOnPage($this->_cPtr, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorAnnot($r);
        }
        return $r;
    }

    function GetAnnotationListAt($x1, $y1, $x2, $y2)
    {
        $r = PDFView_GetAnnotationListAt($this->_cPtr, $x1, $y1, $x2, $y2);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorAnnot($r);
        }
        return $r;
    }

    function EnableUndoRedo()
    {
        PDFView_EnableUndoRedo($this->_cPtr);
    }

    function Undo()
    {
        return PDFView_Undo($this->_cPtr);
    }

    function Redo()
    {
        return PDFView_Redo($this->_cPtr);
    }

    function TakeSnapshot($meta_info)
    {
        PDFView_TakeSnapshot($this->_cPtr, $meta_info);
    }

    function GetNextUndoInfo()
    {
        return PDFView_GetNextUndoInfo($this->_cPtr);
    }

    function GetNextRedoInfo()
    {
        return PDFView_GetNextRedoInfo($this->_cPtr);
    }

    function RevertAllChanges()
    {
        PDFView_RevertAllChanges($this->_cPtr);
    }

    function GetExternalAnnotManager($author)
    {
        return PDFView_GetExternalAnnotManager($this->_cPtr, $author);
    }
}
