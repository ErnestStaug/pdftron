<?php

namespace App\Documents\PdfTron;

class Word
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_word') return Word_mp_word_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_word') return Word_mp_word_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Word_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function GetNumGlyphs()
    {
        return Word_GetNumGlyphs($this->_cPtr);
    }

    function GetBBox()
    {
        $r = Word_GetBBox($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Rect($r);
        }
        return $r;
    }

    function GetQuad()
    {
        $r = Word_GetQuad($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetGlyphQuad($glyph_idx)
    {
        $r = Word_GetGlyphQuad($this->_cPtr, $glyph_idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorDouble($r);
        }
        return $r;
    }

    function GetCharStyle($char_idx)
    {
        $r = Word_GetCharStyle($this->_cPtr, $char_idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Style($r);
        }
        return $r;
    }

    function GetStyle()
    {
        $r = Word_GetStyle($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Style($r);
        }
        return $r;
    }

    function GetStringLen()
    {
        return Word_GetStringLen($this->_cPtr);
    }

    function GetString()
    {
        return Word_GetString($this->_cPtr);
    }

    function GetNextWord()
    {
        $r = Word_GetNextWord($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Word($r);
        }
        return $r;
    }

    function GetCurrentNum()
    {
        return Word_GetCurrentNum($this->_cPtr);
    }

    function IsValid()
    {
        return Word_IsValid($this->_cPtr);
    }

    function IsEqual($arg1)
    {
        return Word_IsEqual($this->_cPtr, $arg1);
    }

    function __construct($impl = null)
    {
        if (is_resource($impl) && get_resource_type($impl) === '_p_pdftron__PDF__Word') {
            $this->_cPtr = $impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Word();
                break;
            default:
                $this->_cPtr = new_Word($impl);
        }
    }
}
