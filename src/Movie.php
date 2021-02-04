<?php

namespace PDFNet\PDFTron;

class Movie extends Annot
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Annot::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Annot::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Annot::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = Movie_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Movie($r);
        }
        return $r;
    }

    function GetTitle()
    {
        return Movie_GetTitle($this->_cPtr);
    }

    function SetTitle($title)
    {
        Movie_SetTitle($this->_cPtr, $title);
    }

    function IsToBePlayed()
    {
        return Movie_IsToBePlayed($this->_cPtr);
    }

    function SetToBePlayed($isplay = true)
    {
        Movie_SetToBePlayed($this->_cPtr, $isplay);
    }

    function __construct($d_or_ann_or_movie = null)
    {
        if (is_resource($d_or_ann_or_movie) && get_resource_type($d_or_ann_or_movie) === '_p_pdftron__PDF__Annots__Movie') {
            $this->_cPtr = $d_or_ann_or_movie;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Movie();
                break;
            default:
                $this->_cPtr = new_Movie($d_or_ann_or_movie);
        }
    }
}
