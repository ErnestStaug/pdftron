<?php

namespace PDFNet\PDFTron;

class Square extends Markup
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        Markup::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return Markup::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return Markup::__isset($var);
    }

    static function Create($doc, $pos)
    {
        $r = Square_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Square($r);
        }
        return $r;
    }

    function __construct($d_or_ann_or_square = null)
    {
        if (is_resource($d_or_ann_or_square) && get_resource_type($d_or_ann_or_square) === '_p_pdftron__PDF__Annots__Square') {
            $this->_cPtr = $d_or_ann_or_square;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Square();
                break;
            default:
                $this->_cPtr = new_Square($d_or_ann_or_square);
        }
    }
}
