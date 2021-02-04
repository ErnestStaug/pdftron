<?php

namespace App\Documents\PdfTron;

class PDFACompliance
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_pdfac') return PDFACompliance_mp_pdfac_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_pdfac') return PDFACompliance_mp_pdfac_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFACompliance_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_NoConformance = 0;

    const e_Level1A = PDFACompliance_e_Level1A;

    const e_Level1B = PDFACompliance_e_Level1B;

    const e_Level2A = PDFACompliance_e_Level2A;

    const e_Level2B = PDFACompliance_e_Level2B;

    const e_Level2U = PDFACompliance_e_Level2U;

    const e_Level3A = PDFACompliance_e_Level3A;

    const e_Level3B = PDFACompliance_e_Level3B;

    const e_Level3U = PDFACompliance_e_Level3U;

    const e_PDFA0_1_0 = 10;

    const e_PDFA0_1_1 = 11;

    const e_PDFA0_1_2 = 12;

    const e_PDFA0_1_3 = 13;

    const e_PDFA0_1_4 = 14;

    const e_PDFA0_1_5 = 15;

    const e_PDFA1_2_1 = 121;

    const e_PDFA1_2_2 = 122;

    const e_PDFA1_3_1 = 131;

    const e_PDFA1_3_2 = 132;

    const e_PDFA1_3_3 = 133;

    const e_PDFA1_3_4 = 134;

    const e_PDFA1_4_1 = 141;

    const e_PDFA1_4_2 = 142;

    const e_PDFA1_6_1 = 161;

    const e_PDFA1_7_1 = 171;

    const e_PDFA1_7_2 = 172;

    const e_PDFA1_7_3 = 173;

    const e_PDFA1_7_4 = 174;

    const e_PDFA1_8_1 = 181;

    const e_PDFA1_8_2 = 182;

    const e_PDFA1_8_3 = 183;

    const e_PDFA1_8_4 = 184;

    const e_PDFA1_8_5 = 185;

    const e_PDFA1_8_6 = 186;

    const e_PDFA1_8_7 = 187;

    const e_PDFA1_10_1 = 1101;

    const e_PDFA1_11_1 = 1111;

    const e_PDFA1_11_2 = 1112;

    const e_PDFA1_12_1 = 1121;

    const e_PDFA1_12_2 = 1122;

    const e_PDFA1_12_3 = 1123;

    const e_PDFA1_12_4 = 1124;

    const e_PDFA1_12_5 = 1125;

    const e_PDFA1_12_6 = 1126;

    const e_PDFA1_13_1 = 1131;

    const e_PDFA2_2_1 = 221;

    const e_PDFA2_3_2 = 232;

    const e_PDFA2_3_3 = 233;

    const e_PDFA2_3_3_1 = 2331;

    const e_PDFA2_3_3_2 = 2332;

    const e_PDFA2_3_4_1 = 2341;

    const e_PDFA2_4_1 = 241;

    const e_PDFA2_4_2 = 242;

    const e_PDFA2_4_3 = 243;

    const e_PDFA2_4_4 = 244;

    const e_PDFA2_5_1 = 251;

    const e_PDFA2_5_2 = 252;

    const e_PDFA2_6_1 = 261;

    const e_PDFA2_7_1 = 271;

    const e_PDFA2_8_1 = 281;

    const e_PDFA2_9_1 = 291;

    const e_PDFA2_10_1 = 2101;

    const e_PDFA3_2_1 = 321;

    const e_PDFA3_3_1 = 331;

    const e_PDFA3_3_2 = 332;

    const e_PDFA3_3_3_1 = 3331;

    const e_PDFA3_3_3_2 = 3332;

    const e_PDFA3_4_1 = 341;

    const e_PDFA3_5_1 = 351;

    const e_PDFA3_5_2 = 352;

    const e_PDFA3_5_3 = 353;

    const e_PDFA3_5_4 = 354;

    const e_PDFA3_5_5 = 355;

    const e_PDFA3_5_6 = 356;

    const e_PDFA3_6_1 = 361;

    const e_PDFA3_7_1 = 371;

    const e_PDFA3_7_2 = 372;

    const e_PDFA3_7_3 = 373;

    const e_PDFA4_1 = 41;

    const e_PDFA4_2 = 42;

    const e_PDFA4_3 = 43;

    const e_PDFA4_4 = 44;

    const e_PDFA4_5 = 45;

    const e_PDFA4_6 = 46;

    const e_PDFA5_2_1 = 521;

    const e_PDFA5_2_2 = 522;

    const e_PDFA5_2_3 = 523;

    const e_PDFA5_2_4 = 524;

    const e_PDFA5_2_5 = 525;

    const e_PDFA5_2_6 = 526;

    const e_PDFA5_2_7 = 527;

    const e_PDFA5_2_8 = 528;

    const e_PDFA5_2_9 = 529;

    const e_PDFA5_2_10 = 5210;

    const e_PDFA5_2_11 = 5211;

    const e_PDFA5_3_1 = 531;

    const e_PDFA5_3_2_1 = 5321;

    const e_PDFA5_3_2_2 = 5322;

    const e_PDFA5_3_2_3 = 5323;

    const e_PDFA5_3_2_4 = 5324;

    const e_PDFA5_3_2_5 = 5325;

    const e_PDFA5_3_3_1 = 5331;

    const e_PDFA5_3_3_2 = 5332;

    const e_PDFA5_3_3_3 = 5333;

    const e_PDFA5_3_3_4 = 5334;

    const e_PDFA5_3_4_0 = 5340;

    const e_PDFA5_3_4_1 = 5341;

    const e_PDFA5_3_4_2 = 5342;

    const e_PDFA5_3_4_3 = 5343;

    const e_PDFA6_1_1 = 611;

    const e_PDFA6_1_2 = 612;

    const e_PDFA6_2_1 = 621;

    const e_PDFA6_2_2 = 622;

    const e_PDFA6_2_3 = 623;

    const e_PDFA7_2_1 = 721;

    const e_PDFA7_2_2 = 722;

    const e_PDFA7_2_3 = 723;

    const e_PDFA7_2_4 = 724;

    const e_PDFA7_2_5 = 725;

    const e_PDFA7_3_1 = 731;

    const e_PDFA7_3_2 = 732;

    const e_PDFA7_3_3 = 733;

    const e_PDFA7_3_4 = 734;

    const e_PDFA7_3_5 = 735;

    const e_PDFA7_3_6 = 736;

    const e_PDFA7_3_7 = 737;

    const e_PDFA7_3_8 = 738;

    const e_PDFA7_3_9 = 739;

    const e_PDFA7_5_1 = 751;

    const e_PDFA7_8_1 = 781;

    const e_PDFA7_8_2 = 782;

    const e_PDFA7_8_3 = 783;

    const e_PDFA7_8_4 = 784;

    const e_PDFA7_8_5 = 785;

    const e_PDFA7_8_6 = 786;

    const e_PDFA7_8_7 = 787;

    const e_PDFA7_8_8 = 788;

    const e_PDFA7_8_9 = 789;

    const e_PDFA7_8_10 = 7810;

    const e_PDFA7_8_11 = 7811;

    const e_PDFA7_8_12 = 7812;

    const e_PDFA7_8_13 = 7813;

    const e_PDFA7_8_14 = 7814;

    const e_PDFA7_8_15 = 7815;

    const e_PDFA7_8_16 = 7816;

    const e_PDFA7_8_17 = 7817;

    const e_PDFA7_8_18 = 7818;

    const e_PDFA7_8_19 = 7819;

    const e_PDFA7_8_20 = 7820;

    const e_PDFA7_8_21 = 7821;

    const e_PDFA7_8_22 = 7822;

    const e_PDFA7_8_23 = 7823;

    const e_PDFA7_8_24 = 7824;

    const e_PDFA7_8_25 = 7825;

    const e_PDFA7_8_26 = 7826;

    const e_PDFA7_8_27 = 7827;

    const e_PDFA7_8_28 = 7828;

    const e_PDFA7_8_29 = 7829;

    const e_PDFA7_8_30 = 7830;

    const e_PDFA7_8_31 = 7831;

    const e_PDFA7_11_1 = 7111;

    const e_PDFA7_11_2 = 7112;

    const e_PDFA7_11_3 = 7113;

    const e_PDFA7_11_4 = 7114;

    const e_PDFA7_11_5 = 7115;

    const e_PDFA9_1 = 91;

    const e_PDFA9_2 = 92;

    const e_PDFA9_3 = 93;

    const e_PDFA9_4 = 94;

    const e_PDFA3_8_1 = 381;

    const e_PDFA8_2_2 = 822;

    const e_PDFA8_3_3_1 = 8331;

    const e_PDFA8_3_3_2 = 8332;

    const e_PDFA8_3_4_1 = 8341;

    const e_PDFA1_2_3 = 123;

    const e_PDFA1_10_2 = 1102;

    const e_PDFA1_10_3 = 1103;

    const e_PDFA1_12_10 = 11210;

    const e_PDFA1_13_5 = 1135;

    const e_PDFA2_3_10 = 2310;

    const e_PDFA2_4_2_10 = 24220;

    const e_PDFA2_4_2_11 = 24221;

    const e_PDFA2_4_2_12 = 24222;

    const e_PDFA2_4_2_13 = 24223;

    const e_PDFA2_5_10 = 2510;

    const e_PDFA2_5_11 = 2511;

    const e_PDFA2_5_12 = 2512;

    const e_PDFA2_8_3_1 = 2831;

    const e_PDFA2_8_3_2 = 2832;

    const e_PDFA2_8_3_3 = 2833;

    const e_PDFA2_8_3_4 = 2834;

    const e_PDFA2_8_3_5 = 2835;

    const e_PDFA2_10_20 = 21020;

    const e_PDFA2_10_21 = 21021;

    const e_PDFA11_0_0 = 11000;

    const e_PDFA6_10_0 = 6100;

    const e_PDFA6_10_1 = 6101;

    const e_PDFA6_2_11_5 = 62115;

    const e_PDFA6_2_11_6 = 62116;

    const e_PDFA6_2_11_7 = 62117;

    const e_PDFA6_2_11_8 = 62118;

    const e_PDFA6_9_1 = 69001;

    const e_PDFA6_9_3 = 69003;

    const e_PDFA8_1 = 81;

    const e_PDFA_3E1 = 1;

    const e_PDFA_3E1_1 = 101;

    const e_PDFA_3E2 = 2;

    const e_PDFA_3E3 = 3;

    const e_PDFA_LAST = PDFACompliance_e_PDFA_LAST;

    function SaveAs($file_path_or_linearized = false, $linearized = false)
    {
        $r = PDFACompliance_SaveAs($this->_cPtr, $file_path_or_linearized, $linearized);
        if (!is_resource($r)) return $r;
        switch (get_resource_type($r)) {
            case '_p_std__vectorT_unsigned_char_t':
                return new VectorUChar($r);
            default:
                return $r;
        }
    }

    function GetErrorCount()
    {
        return PDFACompliance_GetErrorCount($this->_cPtr);
    }

    function GetError($idx)
    {
        return PDFACompliance_GetError($this->_cPtr, $idx);
    }

    function GetRefObjCount($id)
    {
        return PDFACompliance_GetRefObjCount($this->_cPtr, $id);
    }

    function GetRefObj($id, $err_idx)
    {
        return PDFACompliance_GetRefObj($this->_cPtr, $id, $err_idx);
    }

    static function GetPDFAErrorMessage($id)
    {
        return PDFACompliance_GetPDFAErrorMessage($id);
    }

    static function GetDeclaredConformance($in_doc)
    {
        return PDFACompliance_GetDeclaredConformance($in_doc);
    }

    function Destroy()
    {
        PDFACompliance_Destroy($this->_cPtr);
    }

    function __construct($convert_or_impl, $file_path_or_buf = null, $password_or_buf_size = null, $conf_or_password = null, $exceptions_or_conf = null, $num_exceptions_or_exceptions = null, $max_ref_objs_or_num_exceptions = null, $first_stop_or_max_ref_objs = null, $first_stop = null)
    {
        if (is_resource($convert_or_impl) && get_resource_type($convert_or_impl) === '_p_pdftron__PDF__PDFA__PDFACompliance') {
            $this->_cPtr = $convert_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 1:
                $this->_cPtr = new_PDFACompliance($convert_or_impl);
                break;
            case 2:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf);
                break;
            case 3:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size);
                break;
            case 4:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password);
                break;
            case 5:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password, $exceptions_or_conf);
                break;
            case 6:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password, $exceptions_or_conf, $num_exceptions_or_exceptions);
                break;
            case 7:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password, $exceptions_or_conf, $num_exceptions_or_exceptions, $max_ref_objs_or_num_exceptions);
                break;
            case 8:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password, $exceptions_or_conf, $num_exceptions_or_exceptions, $max_ref_objs_or_num_exceptions, $first_stop_or_max_ref_objs);
                break;
            default:
                $this->_cPtr = new_PDFACompliance($convert_or_impl, $file_path_or_buf, $password_or_buf_size, $conf_or_password, $exceptions_or_conf, $num_exceptions_or_exceptions, $max_ref_objs_or_num_exceptions, $first_stop_or_max_ref_objs, $first_stop);
        }
    }
}
