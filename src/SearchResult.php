<?php

namespace PDFNet\PDFTron;

class SearchResult
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

    function IsFound()
    {
        return SearchResult_IsFound($this->_cPtr);
    }

    function IsDocEnd()
    {
        return SearchResult_IsDocEnd($this->_cPtr);
    }

    function IsPageEnd()
    {
        return SearchResult_IsPageEnd($this->_cPtr);
    }

    function GetPageNumber()
    {
        return SearchResult_GetPageNumber($this->_cPtr);
    }

    function GetMatch()
    {
        return SearchResult_GetMatch($this->_cPtr);
    }

    function GetAmbientString()
    {
        return SearchResult_GetAmbientString($this->_cPtr);
    }

    function GetHighlights()
    {
        $r = SearchResult_GetHighlights($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Highlights($r);
        }
        return $r;
    }

    function __construct($b = null, $rc = null, $r_ = null, $a = null, $h = null)
    {
        if (is_resource($b) && get_resource_type($b) === '_p_pdftron__PDF__SearchResult') {
            $this->_cPtr = $b;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_SearchResult();
                break;
            case 1:
                $this->_cPtr = new_SearchResult($b);
                break;
            case 2:
                $this->_cPtr = new_SearchResult($b, $rc);
                break;
            case 3:
                $this->_cPtr = new_SearchResult($b, $rc, $r_);
                break;
            case 4:
                $this->_cPtr = new_SearchResult($b, $rc, $r_, $a);
                break;
            default:
                $this->_cPtr = new_SearchResult($b, $rc, $r_, $a, $h);
        }
    }
}
