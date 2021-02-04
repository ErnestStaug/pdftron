<?php

namespace App\Documents\PdfTron;

class Date extends TRN_date
{
    public $_cPtr = null;

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        TRN_date::__set($var, $value);
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return TRN_date::__get($var);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return TRN_date::__isset($var);
    }

    function __construct($d_or_year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null)
    {
        if (is_resource($d_or_year) && get_resource_type($d_or_year) === '_p_pdftron__PDF__Date') {
            $this->_cPtr = $d_or_year;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Date();
                break;
            case 1:
                $this->_cPtr = new_Date($d_or_year);
                break;
            case 2:
                $this->_cPtr = new_Date($d_or_year, $month);
                break;
            case 3:
                $this->_cPtr = new_Date($d_or_year, $month, $day);
                break;
            case 4:
                $this->_cPtr = new_Date($d_or_year, $month, $day, $hour);
                break;
            case 5:
                $this->_cPtr = new_Date($d_or_year, $month, $day, $hour, $minute);
                break;
            default:
                $this->_cPtr = new_Date($d_or_year, $month, $day, $hour, $minute, $second);
        }
    }

    function IsValid()
    {
        return Date_IsValid($this->_cPtr);
    }

    function SetCurrentTime()
    {
        Date_SetCurrentTime($this->_cPtr);
    }

    function Attach($d)
    {
        Date_Attach($this->_cPtr, $d);
    }

    function Update($d = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = Date_Update($this->_cPtr);
                break;
            default:
                $r = Date_Update($this->_cPtr, $d);
        }
        return $r;
    }

    function GetYear()
    {
        return Date_GetYear($this->_cPtr);
    }

    function GetMonth()
    {
        return Date_GetMonth($this->_cPtr);
    }

    function GetDay()
    {
        return Date_GetDay($this->_cPtr);
    }

    function GetHour()
    {
        return Date_GetHour($this->_cPtr);
    }

    function GetMinute()
    {
        return Date_GetMinute($this->_cPtr);
    }

    function GetSecond()
    {
        return Date_GetSecond($this->_cPtr);
    }

    function GetUT()
    {
        return Date_GetUT($this->_cPtr);
    }

    function GetUTHour()
    {
        return Date_GetUTHour($this->_cPtr);
    }

    function GetUTMin()
    {
        return Date_GetUTMin($this->_cPtr);
    }
}
