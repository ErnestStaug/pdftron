<?php

namespace PDFNet\PDFTron;

class Obj
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_obj') return Obj_mp_obj_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_obj') return Obj_mp_obj_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('Obj_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    const e_null = 0;

    const e_bool = Obj_e_bool;

    const e_number = Obj_e_number;

    const e_name = Obj_e_name;

    const e_string = Obj_e_string;

    const e_dict = Obj_e_dict;

    const e_array = Obj_e_array;

    const e_stream = Obj_e_stream;

    function GetType()
    {
        return Obj_GetType($this->_cPtr);
    }

    function IsBool()
    {
        return Obj_IsBool($this->_cPtr);
    }

    function IsNumber()
    {
        return Obj_IsNumber($this->_cPtr);
    }

    function IsNull()
    {
        return Obj_IsNull($this->_cPtr);
    }

    function IsString()
    {
        return Obj_IsString($this->_cPtr);
    }

    function IsName()
    {
        return Obj_IsName($this->_cPtr);
    }

    function IsIndirect()
    {
        return Obj_IsIndirect($this->_cPtr);
    }

    function IsContainer()
    {
        return Obj_IsContainer($this->_cPtr);
    }

    function IsDict()
    {
        return Obj_IsDict($this->_cPtr);
    }

    function IsArray()
    {
        return Obj_IsArray($this->_cPtr);
    }

    function IsStream()
    {
        return Obj_IsStream($this->_cPtr);
    }

    function GetDoc()
    {
        $r = Obj_GetDoc($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SDFDoc($r);
        }
        return $r;
    }

    function Write($stream)
    {
        Obj_Write($this->_cPtr, $stream);
    }

    function Size()
    {
        return Obj_Size($this->_cPtr);
    }

    function GetObjNum()
    {
        return Obj_GetObjNum($this->_cPtr);
    }

    function GetGenNum()
    {
        return Obj_GetGenNum($this->_cPtr);
    }

    function GetOffset()
    {
        return Obj_GetOffset($this->_cPtr);
    }

    function IsFree()
    {
        return Obj_IsFree($this->_cPtr);
    }

    function SetMark($mark)
    {
        Obj_SetMark($this->_cPtr, $mark);
    }

    function IsMarked()
    {
        return Obj_IsMarked($this->_cPtr);
    }

    function IsLoaded()
    {
        return Obj_IsLoaded($this->_cPtr);
    }

    function IsValid()
    {
        return Obj_IsValid($this->_cPtr);
    }

    function GetBool()
    {
        return Obj_GetBool($this->_cPtr);
    }

    function SetBool($b)
    {
        Obj_SetBool($this->_cPtr, $b);
    }

    function GetNumber()
    {
        return Obj_GetNumber($this->_cPtr);
    }

    function SetNumber($n)
    {
        Obj_SetNumber($this->_cPtr, $n);
    }

    function GetBuffer()
    {
        $r = Obj_GetBuffer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetRawBuffer()
    {
        $r = Obj_GetRawBuffer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorUChar($r);
        }
        return $r;
    }

    function GetAsPDFText()
    {
        return Obj_GetAsPDFText($this->_cPtr);
    }

    function SetString($value_or_str, $size = null)
    {
        switch (func_num_args()) {
            case 1:
                Obj_SetString($this->_cPtr, $value_or_str);
                break;
            default:
                Obj_SetString($this->_cPtr, $value_or_str, $size);
        }
    }

    function GetName()
    {
        return Obj_GetName($this->_cPtr);
    }

    function SetName($name)
    {
        Obj_SetName($this->_cPtr, $name);
    }

    function GetDictIterator()
    {
        $r = Obj_GetDictIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DictIterator($r);
        }
        return $r;
    }

    function Find($key)
    {
        $r = Obj_Find($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DictIterator($r);
        }
        return $r;
    }

    function FindObj($key)
    {
        $r = Obj_FindObj($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Get($key)
    {
        $r = Obj_Get($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DictIterator($r);
        }
        return $r;
    }

    function PutName($key, $name)
    {
        $r = Obj_PutName($this->_cPtr, $key, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutArray($key)
    {
        $r = Obj_PutArray($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutBool($key, $value)
    {
        $r = Obj_PutBool($this->_cPtr, $key, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutDict($key)
    {
        $r = Obj_PutDict($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutNumber($key, $value)
    {
        $r = Obj_PutNumber($this->_cPtr, $key, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutString($key, $value, $size = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Obj_PutString($this->_cPtr, $key, $value);
                break;
            default:
                $r = Obj_PutString($this->_cPtr, $key, $value, $size);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutText($key, $value)
    {
        $r = Obj_PutText($this->_cPtr, $key, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutNull($key)
    {
        Obj_PutNull($this->_cPtr, $key);
    }

    function Put($key, $obj)
    {
        $r = Obj_Put($this->_cPtr, $key, $obj);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutRect($key, $x1, $y1, $x2, $y2)
    {
        $r = Obj_PutRect($this->_cPtr, $key, $x1, $y1, $x2, $y2);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PutMatrix($key, $value)
    {
        $r = Obj_PutMatrix($this->_cPtr, $key, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Erase($key_or_pos)
    {
        Obj_Erase($this->_cPtr, $key_or_pos);
    }

    function Rename($old_key, $new_key)
    {
        return Obj_Rename($this->_cPtr, $old_key, $new_key);
    }

    function GetAt($index)
    {
        $r = Obj_GetAt($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertName($pos, $name)
    {
        $r = Obj_InsertName($this->_cPtr, $pos, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertArray($pos)
    {
        $r = Obj_InsertArray($this->_cPtr, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertBool($pos, $value)
    {
        $r = Obj_InsertBool($this->_cPtr, $pos, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertDict($pos)
    {
        $r = Obj_InsertDict($this->_cPtr, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertNumber($pos, $value)
    {
        $r = Obj_InsertNumber($this->_cPtr, $pos, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertString($pos, $value, $size = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = Obj_InsertString($this->_cPtr, $pos, $value);
                break;
            default:
                $r = Obj_InsertString($this->_cPtr, $pos, $value, $size);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertText($pos, $value)
    {
        $r = Obj_InsertText($this->_cPtr, $pos, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertNull($pos)
    {
        $r = Obj_InsertNull($this->_cPtr, $pos);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function Insert($pos, $obj)
    {
        $r = Obj_Insert($this->_cPtr, $pos, $obj);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertRect($pos, $x1, $y1, $x2, $y2)
    {
        $r = Obj_InsertRect($this->_cPtr, $pos, $x1, $y1, $x2, $y2);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function InsertMatrix($pos, $value)
    {
        $r = Obj_InsertMatrix($this->_cPtr, $pos, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackName($name)
    {
        $r = Obj_PushBackName($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackArray()
    {
        $r = Obj_PushBackArray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackBool($value)
    {
        $r = Obj_PushBackBool($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackDict()
    {
        $r = Obj_PushBackDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackNumber($value)
    {
        $r = Obj_PushBackNumber($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackString($value, $size = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = Obj_PushBackString($this->_cPtr, $value);
                break;
            default:
                $r = Obj_PushBackString($this->_cPtr, $value, $size);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackText($value)
    {
        $r = Obj_PushBackText($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackNull()
    {
        $r = Obj_PushBackNull($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBack($obj)
    {
        $r = Obj_PushBack($this->_cPtr, $obj);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackRect($x1, $y1, $x2, $y2)
    {
        $r = Obj_PushBackRect($this->_cPtr, $x1, $y1, $x2, $y2);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function PushBackMatrix($value)
    {
        $r = Obj_PushBackMatrix($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function EraseAt($pos)
    {
        Obj_EraseAt($this->_cPtr, $pos);
    }

    function GetRawStreamLength()
    {
        return Obj_GetRawStreamLength($this->_cPtr);
    }

    function GetRawStream($decrypt)
    {
        $r = Obj_GetRawStream($this->_cPtr, $decrypt);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function GetDecodedStream()
    {
        $r = Obj_GetDecodedStream($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Filter($r);
        }
        return $r;
    }

    function SetStreamData($data, $data_size, $filter_chain = null)
    {
        switch (func_num_args()) {
            case 2:
                Obj_SetStreamData($this->_cPtr, $data, $data_size);
                break;
            default:
                Obj_SetStreamData($this->_cPtr, $data, $data_size, $filter_chain);
        }
    }

    function IsEqual($to)
    {
        return Obj_IsEqual($this->_cPtr, $to);
    }

    static function CreateInternal($impl)
    {
        $r = Obj_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return Obj_GetHandleInternal($this->_cPtr);
    }

    function __construct($c_or_impl = null)
    {
        if (is_resource($c_or_impl) && get_resource_type($c_or_impl) === '_p_pdftron__SDF__Obj') {
            $this->_cPtr = $c_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_Obj();
                break;
            default:
                $this->_cPtr = new_Obj($c_or_impl);
        }
    }
}
