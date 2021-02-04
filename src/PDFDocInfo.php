<?php

namespace PDFNet\PDFTron;

class PDFDocInfo
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_info') return PDFDocInfo_mp_info_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_info') return PDFDocInfo_mp_info_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFDocInfo_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function GetTitle()
    {
        return PDFDocInfo_GetTitle($this->_cPtr);
    }

    function GetTitleObj()
    {
        $r = PDFDocInfo_GetTitleObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetTitle($title)
    {
        PDFDocInfo_SetTitle($this->_cPtr, $title);
    }

    function GetAuthor()
    {
        return PDFDocInfo_GetAuthor($this->_cPtr);
    }

    function GetAuthorObj()
    {
        $r = PDFDocInfo_GetAuthorObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetAuthor($author)
    {
        PDFDocInfo_SetAuthor($this->_cPtr, $author);
    }

    function GetSubject()
    {
        return PDFDocInfo_GetSubject($this->_cPtr);
    }

    function GetSubjectObj()
    {
        $r = PDFDocInfo_GetSubjectObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetSubject($subject)
    {
        PDFDocInfo_SetSubject($this->_cPtr, $subject);
    }

    function GetKeywords()
    {
        return PDFDocInfo_GetKeywords($this->_cPtr);
    }

    function GetKeywordsObj()
    {
        $r = PDFDocInfo_GetKeywordsObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetKeywords($keywords)
    {
        PDFDocInfo_SetKeywords($this->_cPtr, $keywords);
    }

    function GetCreator()
    {
        return PDFDocInfo_GetCreator($this->_cPtr);
    }

    function GetCreatorObj()
    {
        $r = PDFDocInfo_GetCreatorObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetCreator($creator)
    {
        PDFDocInfo_SetCreator($this->_cPtr, $creator);
    }

    function GetProducer()
    {
        return PDFDocInfo_GetProducer($this->_cPtr);
    }

    function GetProducerObj()
    {
        $r = PDFDocInfo_GetProducerObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function SetProducer($producer)
    {
        PDFDocInfo_SetProducer($this->_cPtr, $producer);
    }

    function GetCreationDate()
    {
        $r = PDFDocInfo_GetCreationDate($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Date($r);
        }
        return $r;
    }

    function SetCreationDate($creation_date)
    {
        PDFDocInfo_SetCreationDate($this->_cPtr, $creation_date);
    }

    function GetModDate()
    {
        $r = PDFDocInfo_GetModDate($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Date($r);
        }
        return $r;
    }

    function SetModDate($mod_date)
    {
        PDFDocInfo_SetModDate($this->_cPtr, $mod_date);
    }

    function GetSDFObj()
    {
        $r = PDFDocInfo_GetSDFObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function __construct($tr_or_impl = null)
    {
        if (is_resource($tr_or_impl) && get_resource_type($tr_or_impl) === '_p_pdftron__PDF__PDFDocInfo') {
            $this->_cPtr = $tr_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PDFDocInfo();
                break;
            default:
                $this->_cPtr = new_PDFDocInfo($tr_or_impl);
        }
    }
}
