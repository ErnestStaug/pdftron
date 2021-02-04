<?php

namespace PDFNet\PDFTron;

class TextExtractor
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
        if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextExtractor') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_TextExtractor();
    }

    const e_no_ligature_exp = 1;

    const e_no_dup_remove = 2;

    const e_punct_break = 4;

    const e_remove_hidden_text = 8;

    const e_no_invisible_text = 16;

    const e_no_watermarks = 128;

    function Begin($page, $clip_ptr = null, $flags = 0)
    {
        TextExtractor_Begin($this->_cPtr, $page, $clip_ptr, $flags);
    }

    function SetOCGContext($ctx)
    {
        TextExtractor_SetOCGContext($this->_cPtr, $ctx);
    }

    function GetWordCount()
    {
        return TextExtractor_GetWordCount($this->_cPtr);
    }

    function SetRightToLeftLanguage($rtl)
    {
        TextExtractor_SetRightToLeftLanguage($this->_cPtr, $rtl);
    }

    function GetRightToLeftLanguage()
    {
        return TextExtractor_GetRightToLeftLanguage($this->_cPtr);
    }

    function GetAsText($dehyphen = true)
    {
        return TextExtractor_GetAsText($this->_cPtr, $dehyphen);
    }

    function GetTextUnderAnnot($annot)
    {
        return TextExtractor_GetTextUnderAnnot($this->_cPtr, $annot);
    }

    const e_words_as_elements = 1;

    const e_output_bbox = 2;

    const e_output_style_info = 4;

    function GetAsXML($xml_output_flags = 0)
    {
        return TextExtractor_GetAsXML($this->_cPtr, $xml_output_flags);
    }

    function GetNumLines()
    {
        return TextExtractor_GetNumLines($this->_cPtr);
    }

    function GetFirstLine()
    {
        $r = TextExtractor_GetFirstLine($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Line($r);
        }
        return $r;
    }

    function Destroy()
    {
        TextExtractor_Destroy($this->_cPtr);
    }
}
