<?php

namespace App\Documents\PdfTron;

class Watermark extends Annot
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
        $r = Watermark_Create($doc, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Watermark($r);
        }
        return $r;
    }

    function __construct($d_or_ann_or_watermark = null)
    {
        if (is_resource($d_or_ann_or_watermark) && get_resource_type($d_or_ann_or_watermark) === '_p_pdftron__PDF__Annots__Watermark') {
            $this->_cPtr = $d_or_ann_or_watermark;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Watermark();
                break;
            default:
                $this->_cPtr = new_Watermark($d_or_ann_or_watermark);
        }
    }
}
