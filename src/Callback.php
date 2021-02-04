<?php

namespace App\Documents\PdfTron;

class Callback
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
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__Callback') {
            $this->_cPtr = $res;
            return;
        }
        if (get_class($this) === 'Callback') {
            $_this = null;
        } else {
            $_this = $this;
        }
        $this->_cPtr = new_Callback($_this);
    }

    function RenderBeginEventProc()
    {
        Callback_RenderBeginEventProc($this->_cPtr);
    }

    static function StaticRenderBeginEventProc($data)
    {
        Callback_StaticRenderBeginEventProc($data);
    }

    function RenderFinishEventProc($cancelled)
    {
        Callback_RenderFinishEventProc($this->_cPtr, $cancelled);
    }

    static function StaticRenderFinishEventProc($data, $cancelled)
    {
        Callback_StaticRenderFinishEventProc($data, $cancelled);
    }

    function ErrorReportProc($message)
    {
        Callback_ErrorReportProc($this->_cPtr, $message);
    }

    static function StaticErrorReportProc($message, $data)
    {
        Callback_StaticErrorReportProc($message, $data);
    }

    function CurrentPageProc($current_page, $num_pages)
    {
        Callback_CurrentPageProc($this->_cPtr, $current_page, $num_pages);
    }

    static function StaticCurrentPageProc($current_page, $num_pages, $data)
    {
        Callback_StaticCurrentPageProc($current_page, $num_pages, $data);
    }

    function JavaScriptEventProc($event_type, $json)
    {
        Callback_JavaScriptEventProc($this->_cPtr, $event_type, $json);
    }

    static function StaticJavaScriptEventProc($event_type, $json, $data)
    {
        Callback_StaticJavaScriptEventProc($event_type, $json, $data);
    }

    function CurrentZoomProc($curr_zoom_proc)
    {
        Callback_CurrentZoomProc($this->_cPtr, $curr_zoom_proc);
    }

    static function StaticCurrentZoomProc($curr_zoom_proc, $data)
    {
        Callback_StaticCurrentZoomProc($curr_zoom_proc, $data);
    }

    function ThumbAsyncHandler($page_num, $was_thumb_found, $thumb_buf, $thumb_width, $thumb_height)
    {
        Callback_ThumbAsyncHandler($this->_cPtr, $page_num, $was_thumb_found, $thumb_buf, $thumb_width, $thumb_height);
    }

    static function StaticThumbAsyncHandler($page_num, $was_thumb_found, $thumb_buf, $thumb_width, $thumb_height, $custom_data)
    {
        Callback_StaticThumbAsyncHandler($page_num, $was_thumb_found, $thumb_buf, $thumb_width, $thumb_height, $custom_data);
    }

    function RequestRenderInWorkerThread()
    {
        Callback_RequestRenderInWorkerThread($this->_cPtr);
    }

    static function StaticRequestRenderInWorkerThread($custom_data)
    {
        Callback_StaticRequestRenderInWorkerThread($custom_data);
    }

    function FindTextHandler($success, $selection)
    {
        Callback_FindTextHandler($this->_cPtr, $success, $selection);
    }

    static function StaticFindTextHandler($success, $selection, $custom_data)
    {
        Callback_StaticFindTextHandler($success, $selection, $custom_data);
    }

    function CreateTileProc($buffer, $originX, $originY, $width, $height, $pagNum, $cellNumber, $finalRender, $predictionRender, $tilesRemaining, $firstTile, $canvasWidth, $canvasHeight, $cellSideLength, $cellPerRow, $cellPerCol, $thumbnailId)
    {
        Callback_CreateTileProc($this->_cPtr, $buffer, $originX, $originY, $width, $height, $pagNum, $cellNumber, $finalRender, $predictionRender, $tilesRemaining, $firstTile, $canvasWidth, $canvasHeight, $cellSideLength, $cellPerRow, $cellPerCol, $thumbnailId);
    }

    static function StaticCreateTileProc($customData, $buffer, $originX, $originY, $width, $height, $pageNum, $cellNumber, $finalRender, $predictionRender, $tilesRemaining, $firstTile, $canvasWidth, $canvasHeight, $cellSideLength, $cellPerRow, $cellPerCol, $thumbnailId)
    {
        Callback_StaticCreateTileProc($customData, $buffer, $originX, $originY, $width, $height, $pageNum, $cellNumber, $finalRender, $predictionRender, $tilesRemaining, $firstTile, $canvasWidth, $canvasHeight, $cellSideLength, $cellPerRow, $cellPerCol, $thumbnailId);
    }

    function AnnotBitmapProc($operation_type, $buffer, $width, $height, $stride, $page_num, $annot_index, $annot_key, $x_in_page, $y_in_page, $x_offset, $y_offset, $remaining_tiles, $sequence_number, $x_page_size, $y_page_size)
    {
        Callback_AnnotBitmapProc($this->_cPtr, $operation_type, $buffer, $width, $height, $stride, $page_num, $annot_index, $annot_key, $x_in_page, $y_in_page, $x_offset, $y_offset, $remaining_tiles, $sequence_number, $x_page_size, $y_page_size);
    }

    static function StaticAnnotBitmapProc($me, $operation_type, $buffer, $width, $height, $stride, $page_num, $annot_index, $annot_key, $x_in_page, $y_in_page, $x_offset, $y_offset, $remaining_tiles, $sequence_number, $x_page_size, $y_page_size)
    {
        Callback_StaticAnnotBitmapProc($me, $operation_type, $buffer, $width, $height, $stride, $page_num, $annot_index, $annot_key, $x_in_page, $y_in_page, $x_offset, $y_offset, $remaining_tiles, $sequence_number, $x_page_size, $y_page_size);
    }

    function DeluxeCreateTileProc($buffer, $width, $height, $stride, $page_num, $x_page_loc, $y_page_loc, $zoomed_page_width, $zoomed_page_height, $tile_id, $x_in_page, $y_in_page, $canvas_id, $remaining_tiles, $tile_type, $sequence_number)
    {
        Callback_DeluxeCreateTileProc($this->_cPtr, $buffer, $width, $height, $stride, $page_num, $x_page_loc, $y_page_loc, $zoomed_page_width, $zoomed_page_height, $tile_id, $x_in_page, $y_in_page, $canvas_id, $remaining_tiles, $tile_type, $sequence_number);
    }

    static function StaticDeluxeCreateTileProc($me, $buffer, $width, $height, $stride, $page_num, $x_page_loc, $y_page_loc, $zoomed_page_width, $zoomed_page_height, $tile_id, $x_in_page, $y_in_page, $canvas_id, $remaining_tiles, $tile_type, $sequence_number)
    {
        Callback_StaticDeluxeCreateTileProc($me, $buffer, $width, $height, $stride, $page_num, $x_page_loc, $y_page_loc, $zoomed_page_width, $zoomed_page_height, $tile_id, $x_in_page, $y_in_page, $canvas_id, $remaining_tiles, $tile_type, $sequence_number);
    }

    function RemoveTileProc($canvasNumber, $cellNumber, $thumbnailId, $sequenceNumber)
    {
        Callback_RemoveTileProc($this->_cPtr, $canvasNumber, $cellNumber, $thumbnailId, $sequenceNumber);
    }

    static function StaticRemoveTileProc($customData, $canvasNumber, $cellNumber, $thumbnailId, $sequenceNumber)
    {
        Callback_StaticRemoveTileProc($customData, $canvasNumber, $cellNumber, $thumbnailId, $sequenceNumber);
    }

    function PartDownloadedProc($dlType, $doc, $pageNum, $objNum, $message)
    {
        Callback_PartDownloadedProc($this->_cPtr, $dlType, $doc, $pageNum, $objNum, $message);
    }

    static function StaticPartDownloadedProc($dlType, $doc, $pageNum, $objNum, $message, $customData)
    {
        Callback_StaticPartDownloadedProc($dlType, $doc, $pageNum, $objNum, $message, $customData);
    }
}
