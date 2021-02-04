<?php

namespace App\Documents\PdfTron;

class PrinterMode
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_printerMode') return PrinterMode_m_printerMode_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_printerMode') return new Obj(PrinterMode_m_printerMode_get($this->_cPtr));
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PrinterMode_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_custom = 0;

    const e_letter = PrinterMode_e_letter;

    const e_letter_small = PrinterMode_e_letter_small;

    const e_tabloid = PrinterMode_e_tabloid;

    const e_ledger = PrinterMode_e_ledger;

    const e_legal = PrinterMode_e_legal;

    const e_statement = PrinterMode_e_statement;

    const e_executive = PrinterMode_e_executive;

    const e_a3 = PrinterMode_e_a3;

    const e_a4 = PrinterMode_e_a4;

    const e_a4_small = PrinterMode_e_a4_small;

    const e_a5 = PrinterMode_e_a5;

    const e_b4_jis = PrinterMode_e_b4_jis;

    const e_b5_jis = PrinterMode_e_b5_jis;

    const e_folio = PrinterMode_e_folio;

    const e_quarto = PrinterMode_e_quarto;

    const e_10x14 = PrinterMode_e_10x14;

    const e_11x17 = PrinterMode_e_11x17;

    const e_note = PrinterMode_e_note;

    const e_envelope_9 = PrinterMode_e_envelope_9;

    const e_envelope_10 = PrinterMode_e_envelope_10;

    const e_envelope_11 = PrinterMode_e_envelope_11;

    const e_envelope_12 = PrinterMode_e_envelope_12;

    const e_envelope_14 = PrinterMode_e_envelope_14;

    const e_c_size_sheet = PrinterMode_e_c_size_sheet;

    const e_d_size_sheet = PrinterMode_e_d_size_sheet;

    const e_e_size_sheet = PrinterMode_e_e_size_sheet;

    const e_envelope_dl = PrinterMode_e_envelope_dl;

    const e_envelope_c5 = PrinterMode_e_envelope_c5;

    const e_envelope_c3 = PrinterMode_e_envelope_c3;

    const e_envelope_c4 = PrinterMode_e_envelope_c4;

    const e_envelope_c6 = PrinterMode_e_envelope_c6;

    const e_envelope_c65 = PrinterMode_e_envelope_c65;

    const e_envelope_b4 = PrinterMode_e_envelope_b4;

    const e_envelope_b5 = PrinterMode_e_envelope_b5;

    const e_envelope_b6 = PrinterMode_e_envelope_b6;

    const e_envelope_italy = PrinterMode_e_envelope_italy;

    const e_envelope_monarch = PrinterMode_e_envelope_monarch;

    const e_6_3_quarters_envelope = PrinterMode_e_6_3_quarters_envelope;

    const e_us_std_fanfold = PrinterMode_e_us_std_fanfold;

    const e_german_std_fanfold = PrinterMode_e_german_std_fanfold;

    const e_german_legal_fanfold = PrinterMode_e_german_legal_fanfold;

    const e_b4_iso = PrinterMode_e_b4_iso;

    const e_japanese_postcard = PrinterMode_e_japanese_postcard;

    const e_9x11 = PrinterMode_e_9x11;

    const e_10x11 = PrinterMode_e_10x11;

    const e_15x11 = PrinterMode_e_15x11;

    const e_envelope_invite = PrinterMode_e_envelope_invite;

    const e_reserved_48 = PrinterMode_e_reserved_48;

    const e_reserved_49 = PrinterMode_e_reserved_49;

    const e_letter_extra = PrinterMode_e_letter_extra;

    const e_legal_extra = PrinterMode_e_legal_extra;

    const e_tabloid_extra = PrinterMode_e_tabloid_extra;

    const e_a4_extra = PrinterMode_e_a4_extra;

    const e_letter_transverse = PrinterMode_e_letter_transverse;

    const e_a4_transverse = PrinterMode_e_a4_transverse;

    const e_letter_extra_transverse = PrinterMode_e_letter_extra_transverse;

    const e_supera_supera_a4 = PrinterMode_e_supera_supera_a4;

    const e_Superb_Superb_a3 = PrinterMode_e_Superb_Superb_a3;

    const e_letter_plus = PrinterMode_e_letter_plus;

    const e_a4_plus = PrinterMode_e_a4_plus;

    const e_a5_transverse = PrinterMode_e_a5_transverse;

    const e_b5_jis_transverse = PrinterMode_e_b5_jis_transverse;

    const e_a3_extra = PrinterMode_e_a3_extra;

    const e_a5_extra = PrinterMode_e_a5_extra;

    const e_b5_iso_extra = PrinterMode_e_b5_iso_extra;

    const e_a2 = PrinterMode_e_a2;

    const e_a3_transverse = PrinterMode_e_a3_transverse;

    const e_a3_extra_transverse = PrinterMode_e_a3_extra_transverse;

    const e_japanese_double_postcard = PrinterMode_e_japanese_double_postcard;

    const e_a6 = PrinterMode_e_a6;

    const e_japanese_envelope_kaku_2 = PrinterMode_e_japanese_envelope_kaku_2;

    const e_japanese_envelope_kaku_3 = PrinterMode_e_japanese_envelope_kaku_3;

    const e_japanese_envelope_chou_3 = PrinterMode_e_japanese_envelope_chou_3;

    const e_japanese_envelope_chou_4 = PrinterMode_e_japanese_envelope_chou_4;

    const e_letter_rotated = PrinterMode_e_letter_rotated;

    const e_a3_rotated = PrinterMode_e_a3_rotated;

    const e_a4_rotated = PrinterMode_e_a4_rotated;

    const e_a5_rotated = PrinterMode_e_a5_rotated;

    const e_b4_jis_rotated = PrinterMode_e_b4_jis_rotated;

    const e_b5_jis_rotated = PrinterMode_e_b5_jis_rotated;

    const e_japanese_postcard_rotated = PrinterMode_e_japanese_postcard_rotated;

    const e_double_japanese_postcard_rotated = PrinterMode_e_double_japanese_postcard_rotated;

    const e_a6_rotated = PrinterMode_e_a6_rotated;

    const e_japanese_envelope_kaku_2_rotated = PrinterMode_e_japanese_envelope_kaku_2_rotated;

    const e_japanese_envelope_kaku_3_rotated = PrinterMode_e_japanese_envelope_kaku_3_rotated;

    const e_japanese_envelope_chou_3_rotated = PrinterMode_e_japanese_envelope_chou_3_rotated;

    const e_japanese_envelope_chou_4_rotated = PrinterMode_e_japanese_envelope_chou_4_rotated;

    const e_b6_jis = PrinterMode_e_b6_jis;

    const e_b6_jis_rotated = PrinterMode_e_b6_jis_rotated;

    const e_12x11 = PrinterMode_e_12x11;

    const e_japanese_envelope_you_4 = PrinterMode_e_japanese_envelope_you_4;

    const e_japanese_envelope_you_4_rotated = PrinterMode_e_japanese_envelope_you_4_rotated;

    const e_prc_16k = PrinterMode_e_prc_16k;

    const e_prc_32k = PrinterMode_e_prc_32k;

    const e_prc_32k_big = PrinterMode_e_prc_32k_big;

    const e_prc_envelop_1 = PrinterMode_e_prc_envelop_1;

    const e_prc_envelop_2 = PrinterMode_e_prc_envelop_2;

    const e_prc_envelop_3 = PrinterMode_e_prc_envelop_3;

    const e_prc_envelop_4 = PrinterMode_e_prc_envelop_4;

    const e_prc_envelop_5 = PrinterMode_e_prc_envelop_5;

    const e_prc_envelop_6 = PrinterMode_e_prc_envelop_6;

    const e_prc_envelop_7 = PrinterMode_e_prc_envelop_7;

    const e_prc_envelop_8 = PrinterMode_e_prc_envelop_8;

    const e_prc_envelop_9 = PrinterMode_e_prc_envelop_9;

    const e_prc_envelop_10 = PrinterMode_e_prc_envelop_10;

    const e_prc_16k_rotated = PrinterMode_e_prc_16k_rotated;

    const e_prc_32k_rotated = PrinterMode_e_prc_32k_rotated;

    const e_prc_32k_big__rotated = PrinterMode_e_prc_32k_big__rotated;

    const e_prc_envelop_1_rotated = PrinterMode_e_prc_envelop_1_rotated;

    const e_prc_envelop_2_rotated = PrinterMode_e_prc_envelop_2_rotated;

    const e_prc_envelop_3_rotated = PrinterMode_e_prc_envelop_3_rotated;

    const e_prc_envelop_4_rotated = PrinterMode_e_prc_envelop_4_rotated;

    const e_prc_envelop_5_rotated = PrinterMode_e_prc_envelop_5_rotated;

    const e_prc_envelop_6_rotated = PrinterMode_e_prc_envelop_6_rotated;

    const e_prc_envelop_7_rotated = PrinterMode_e_prc_envelop_7_rotated;

    const e_prc_envelop_8_rotated = PrinterMode_e_prc_envelop_8_rotated;

    const e_prc_envelop_9_rotated = PrinterMode_e_prc_envelop_9_rotated;

    const e_prc_envelop_10_rotated = PrinterMode_e_prc_envelop_10_rotated;

    const e_Duplex_Auto = 0;

    const e_Duplex_None = 1;

    const e_Duplex_LongSide = 2;

    const e_Duplex_ShortSide = 3;

    const e_OutputQuality_Draft = -1;

    const e_OutputQuality_Low = -2;

    const e_OutputQuality_Medium = -3;

    const e_OutputQuality_High = -4;

    const e_OutputColor_Color = 0;

    const e_OutputColor_Grayscale = 1;

    const e_OutputColor_Monochrome = 2;

    const e_Orientation_Portrait = 0;

    const e_Orientation_Landscape = 1;

    const e_ScaleType_None = 0;

    const e_ScaleType_FitToOutputPage = 1;

    const e_ScaleType_ReduceToOutputPage = 2;

    const e_NUp_1_1 = 0;

    const e_NUp_2_1 = 1;

    const e_NUp_2_2 = 2;

    const e_NUp_3_2 = 3;

    const e_NUp_3_3 = 4;

    const e_NUp_4_4 = 5;

    const e_PageOrder_LeftToRightThenTopToBottom = 0;

    const e_PageOrder_RightToLeftThenTopToBottom = 1;

    const e_PageOrder_TopToBottomThenLeftToRight = 2;

    const e_PageOrder_BottomToTopThenLeftToRight = 3;

    const e_PrintContent_DocumentOnly = 0;

    const e_PrintContent_DocumentAndAnnotations = 1;

    const e_PrintContent_DocumentAnnotationsAndComments = 2;

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__PrinterMode') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_PrinterMode();
    }

    function SetAutoCenter($autoCenter)
    {
        PrinterMode_SetAutoCenter($this->_cPtr, $autoCenter);
    }

    function SetAutoRotate($autoRotate)
    {
        PrinterMode_SetAutoRotate($this->_cPtr, $autoRotate);
    }

    function SetCollation($collation)
    {
        PrinterMode_SetCollation($this->_cPtr, $collation);
    }

    function SetCopyCount($copyCount)
    {
        PrinterMode_SetCopyCount($this->_cPtr, $copyCount);
    }

    function SetDPI($dpi)
    {
        PrinterMode_SetDPI($this->_cPtr, $dpi);
    }

    function SetDuplexing($mode)
    {
        PrinterMode_SetDuplexing($this->_cPtr, $mode);
    }

    function SetNUp($nup_or_x, $pageOrder_or_y = null, $pageOrder = null)
    {
        switch (func_num_args()) {
            case 1:
                PrinterMode_SetNUp($this->_cPtr, $nup_or_x);
                break;
            case 2:
                PrinterMode_SetNUp($this->_cPtr, $nup_or_x, $pageOrder_or_y);
                break;
            default:
                PrinterMode_SetNUp($this->_cPtr, $nup_or_x, $pageOrder_or_y, $pageOrder);
        }
    }

    function SetOrientation($orientation)
    {
        PrinterMode_SetOrientation($this->_cPtr, $orientation);
    }

    function SetOutputAnnot($printContent)
    {
        PrinterMode_SetOutputAnnot($this->_cPtr, $printContent);
    }

    function SetOutputColor($color)
    {
        PrinterMode_SetOutputColor($this->_cPtr, $color);
    }

    function SetOutputQuality($quality)
    {
        PrinterMode_SetOutputQuality($this->_cPtr, $quality);
    }

    function SetOutputPageBorder($printBorder)
    {
        PrinterMode_SetOutputPageBorder($this->_cPtr, $printBorder);
    }

    function SetPaperSize($size_or_paperSize = null)
    {
        switch (func_num_args()) {
            case 0:
                PrinterMode_SetPaperSize($this->_cPtr);
                break;
            default:
                PrinterMode_SetPaperSize($this->_cPtr, $size_or_paperSize);
        }
    }

    function SetScale($scale)
    {
        PrinterMode_SetScale($this->_cPtr, $scale);
    }

    function SetScaleType($scaleType)
    {
        PrinterMode_SetScaleType($this->_cPtr, $scaleType);
    }

    function SetUseRleImageCompression($useRleImageCompression)
    {
        PrinterMode_SetUseRleImageCompression($this->_cPtr, $useRleImageCompression);
    }
}
