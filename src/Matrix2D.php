<?php

namespace App\Documents\PdfTron;

class Matrix2D extends TRN_matrix2d
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        TRN_matrix2d::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return TRN_matrix2d::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return TRN_matrix2d::__isset($var);
    }

    function __construct($a_or_m = null, $b = null, $c_ = null, $d = null, $h = null, $v = null)
    {
        if (is_resource($a_or_m) && get_resource_type($a_or_m) === '_p_pdftron__Common__Matrix2D') {
            $this->_cPtr = $a_or_m;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Matrix2D();
                break;
            case 1:
                $this->_cPtr = new_Matrix2D($a_or_m);
                break;
            case 2:
                $this->_cPtr = new_Matrix2D($a_or_m, $b);
                break;
            case 3:
                $this->_cPtr = new_Matrix2D($a_or_m, $b, $c_);
                break;
            case 4:
                $this->_cPtr = new_Matrix2D($a_or_m, $b, $c_, $d);
                break;
            case 5:
                $this->_cPtr = new_Matrix2D($a_or_m, $b, $c_, $d, $h);
                break;
            default:
                $this->_cPtr = new_Matrix2D($a_or_m, $b, $c_, $d, $h, $v);
        }
    }

    function Set($a, $b, $c_, $d, $h, $v)
    {
        Matrix2D_Set($this->_cPtr, $a, $b, $c_, $d, $h, $v);
    }

    function Concat($a, $b, $c_, $d, $h, $v)
    {
        Matrix2D_Concat($this->_cPtr, $a, $b, $c_, $d, $h, $v);
    }

    function Multiply($m)
    {
        $r = Matrix2D_Multiply($this->_cPtr, $m);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function IsEquals($m)
    {
        return Matrix2D_IsEquals($this->_cPtr, $m);
    }

    function IsNotEquals($m)
    {
        return Matrix2D_IsNotEquals($this->_cPtr, $m);
    }

    function Mult($pt)
    {
        $r = Matrix2D_Mult($this->_cPtr, $pt);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Point($r);
        }
        return $r;
    }

    function Inverse()
    {
        $r = Matrix2D_Inverse($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    function Translate($h, $v)
    {
        Matrix2D_Translate($this->_cPtr, $h, $v);
    }

    function PreTranslate($h, $v)
    {
        Matrix2D_PreTranslate($this->_cPtr, $h, $v);
    }

    function PostTranslate($h, $v)
    {
        Matrix2D_PostTranslate($this->_cPtr, $h, $v);
    }

    function Scale($h, $v)
    {
        Matrix2D_Scale($this->_cPtr, $h, $v);
    }

    static function ZeroMatrix()
    {
        $r = Matrix2D_ZeroMatrix();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    static function IdentityMatrix()
    {
        $r = Matrix2D_IdentityMatrix();
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }

    static function RotationMatrix($angle)
    {
        $r = Matrix2D_RotationMatrix($angle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Matrix2D($r);
        }
        return $r;
    }
}
