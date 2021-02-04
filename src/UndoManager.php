<?php

namespace App\Documents\PdfTron;

class UndoManager
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'm_impl') return UndoManager_m_impl_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'm_impl') return UndoManager_m_impl_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('UndoManager_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Destroy()
    {
        UndoManager_Destroy($this->_cPtr);
    }

    function DiscardAllSnapshots()
    {
        $r = UndoManager_DiscardAllSnapshots($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocSnapshot($r);
        }
        return $r;
    }

    function Undo()
    {
        $r = UndoManager_Undo($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ResultSnapshot($r);
        }
        return $r;
    }

    function CanUndo()
    {
        return UndoManager_CanUndo($this->_cPtr);
    }

    function GetNextUndoSnapshot()
    {
        $r = UndoManager_GetNextUndoSnapshot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocSnapshot($r);
        }
        return $r;
    }

    function Redo()
    {
        $r = UndoManager_Redo($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ResultSnapshot($r);
        }
        return $r;
    }

    function CanRedo()
    {
        return UndoManager_CanRedo($this->_cPtr);
    }

    function GetNextRedoSnapshot()
    {
        $r = UndoManager_GetNextRedoSnapshot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DocSnapshot($r);
        }
        return $r;
    }

    function TakeSnapshot()
    {
        $r = UndoManager_TakeSnapshot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new ResultSnapshot($r);
        }
        return $r;
    }

    function __construct($other_or_impl = null)
    {
        if (is_resource($other_or_impl) && get_resource_type($other_or_impl) === '_p_pdftron__SDF__UndoManager') {
            $this->_cPtr = $other_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_UndoManager();
                break;
            default:
                $this->_cPtr = new_UndoManager($other_or_impl);
        }
    }
}
