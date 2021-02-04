<?php

namespace PDFNet\PDFTron;

class PDFDoc
{
    public $_cPtr = null;
    protected $_pData = array();

    function __set($var, $value)
    {
        if ($var === 'mp_doc') return PDFDoc_mp_doc_set($this->_cPtr, $value);
        if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __get($var)
    {
        if ($var === 'mp_doc') return PDFDoc_mp_doc_get($this->_cPtr);
        if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var)
    {
        if (function_exists('PDFDoc_' . $var . '_get')) return true;
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function Close()
    {
        PDFDoc_Close($this->_cPtr);
    }

    function IsEncrypted()
    {
        return PDFDoc_IsEncrypted($this->_cPtr);
    }

    function InitSecurityHandler()
    {
        return PDFDoc_InitSecurityHandler($this->_cPtr);
    }

    function InitStdSecurityHandler($password_or_password_buf, $password_sz = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFDoc_InitStdSecurityHandler($this->_cPtr, $password_or_password_buf);
                break;
            default:
                $r = PDFDoc_InitStdSecurityHandler($this->_cPtr, $password_or_password_buf, $password_sz);
        }
        return $r;
    }

    function GetSecurityHandler()
    {
        $r = PDFDoc_GetSecurityHandler($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SecurityHandler($r);
        }
        return $r;
    }

    function SetSecurityHandler($handler)
    {
        PDFDoc_SetSecurityHandler($this->_cPtr, $handler);
    }

    function RemoveSecurity()
    {
        PDFDoc_RemoveSecurity($this->_cPtr);
    }

    function HasSignatures()
    {
        return PDFDoc_HasSignatures($this->_cPtr);
    }

    function AddSignatureHandler($signature_handler)
    {
        return PDFDoc_AddSignatureHandler($this->_cPtr, $signature_handler);
    }

    function AddStdSignatureHandler($pkcs12_keyfile_or_pkcs12_keybuffer, $pkcs12_keypass)
    {
        return PDFDoc_AddStdSignatureHandler($this->_cPtr, $pkcs12_keyfile_or_pkcs12_keybuffer, $pkcs12_keypass);
    }

    function RemoveSignatureHandler($signature_handler_id)
    {
        PDFDoc_RemoveSignatureHandler($this->_cPtr, $signature_handler_id);
    }

    function GetSignatureHandler($signature_handler_id)
    {
        $r = PDFDoc_GetSignatureHandler($this->_cPtr, $signature_handler_id);
        $this->_cPtr = $r;
        return $this;
    }

    function GetUndoManager()
    {
        $r = PDFDoc_GetUndoManager($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new UndoManager($r);
        }
        return $r;
    }

    function CreateDigitalSignatureField($in_sig_field_name = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = PDFDoc_CreateDigitalSignatureField($this->_cPtr);
                break;
            default:
                $r = PDFDoc_CreateDigitalSignatureField($this->_cPtr, $in_sig_field_name);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DigitalSignatureField($r);
        }
        return $r;
    }

    function GetDigitalSignatureFieldIterator()
    {
        $r = PDFDoc_GetDigitalSignatureFieldIterator($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new DigitalSignatureFieldIterator($r);
        }
        return $r;
    }

    function GetDigitalSignaturePermissions()
    {
        return PDFDoc_GetDigitalSignaturePermissions($this->_cPtr);
    }

    function GetDocInfo()
    {
        $r = PDFDoc_GetDocInfo($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PDFDocInfo($r);
        }
        return $r;
    }

    function GetViewPrefs()
    {
        $r = PDFDoc_GetViewPrefs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PDFDocViewPrefs($r);
        }
        return $r;
    }

    const e_action_trigger_doc_will_close = 17;

    const e_action_trigger_doc_will_save = 18;

    const e_action_trigger_doc_did_save = 19;

    const e_action_trigger_doc_will_print = 20;

    const e_action_trigger_doc_did_print = 21;

    function GetTriggerAction($trigger)
    {
        $r = PDFDoc_GetTriggerAction($this->_cPtr, $trigger);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function IsModified()
    {
        return PDFDoc_IsModified($this->_cPtr);
    }

    function HasRepairedXRef()
    {
        return PDFDoc_HasRepairedXRef($this->_cPtr);
    }

    function IsLinearized()
    {
        return PDFDoc_IsLinearized($this->_cPtr);
    }

    function HasDownloader()
    {
        return PDFDoc_HasDownloader($this->_cPtr);
    }

    function GetDownloadedByteCount()
    {
        return PDFDoc_GetDownloadedByteCount($this->_cPtr);
    }

    function GetTotalRemoteByteCount()
    {
        return PDFDoc_GetTotalRemoteByteCount($this->_cPtr);
    }

    function Save($path_or_flags_or_stream, $flags = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFDoc_Save($this->_cPtr, $path_or_flags_or_stream);
                break;
            default:
                $r = PDFDoc_Save($this->_cPtr, $path_or_flags_or_stream, $flags);
        }
        return $r;
    }

    function GetPageIterator($page_number = 1)
    {
        $r = PDFDoc_GetPageIterator($this->_cPtr, $page_number);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PageIterator($r);
        }
        return $r;
    }

    function GetPage($page_number)
    {
        $r = PDFDoc_GetPage($this->_cPtr, $page_number);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Page($r);
        }
        return $r;
    }

    function PageRemove($page_itr)
    {
        PDFDoc_PageRemove($this->_cPtr, $page_itr);
    }

    const e_none = 0;

    const e_insert_bookmark = PDFDoc_e_insert_bookmark;

    const e_insert_goto_bookmark = PDFDoc_e_insert_goto_bookmark;

    function PageInsert($where, $page)
    {
        PDFDoc_PageInsert($this->_cPtr, $where, $page);
    }

    function InsertPages($insert_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag, $flag = null)
    {
        switch (func_num_args()) {
            case 4:
                PDFDoc_InsertPages($this->_cPtr, $insert_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag);
                break;
            default:
                PDFDoc_InsertPages($this->_cPtr, $insert_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag, $flag);
        }
    }

    function MovePages($move_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag, $flag = null)
    {
        switch (func_num_args()) {
            case 4:
                PDFDoc_MovePages($this->_cPtr, $move_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag);
                break;
            default:
                PDFDoc_MovePages($this->_cPtr, $move_before_page_number, $src_doc, $start_page_or_source_page_set, $end_page_or_flag, $flag);
        }
    }

    function PagePushFront($page)
    {
        PDFDoc_PagePushFront($this->_cPtr, $page);
    }

    function PagePushBack($page)
    {
        PDFDoc_PagePushBack($this->_cPtr, $page);
    }

    function ImportPages($pages, $import_bookmarks = false)
    {
        $r = PDFDoc_ImportPages($this->_cPtr, $pages, $import_bookmarks);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new VectorPage($r);
        }
        return $r;
    }

    function PageCreate($media_box = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = PDFDoc_PageCreate($this->_cPtr);
                break;
            default:
                $r = PDFDoc_PageCreate($this->_cPtr, $media_box);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Page($r);
        }
        return $r;
    }

    function GetFirstBookmark()
    {
        $r = PDFDoc_GetFirstBookmark($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Bookmark($r);
        }
        return $r;
    }

    function AddRootBookmark($root_bookmark)
    {
        PDFDoc_AddRootBookmark($this->_cPtr, $root_bookmark);
    }

    function GetTrailer()
    {
        $r = PDFDoc_GetTrailer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetRoot()
    {
        $r = PDFDoc_GetRoot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetPages()
    {
        $r = PDFDoc_GetPages($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetPageCount()
    {
        return PDFDoc_GetPageCount($this->_cPtr);
    }

    function GetFieldIterator($field_name = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = PDFDoc_GetFieldIterator($this->_cPtr);
                break;
            default:
                $r = PDFDoc_GetFieldIterator($this->_cPtr, $field_name);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FieldIterator($r);
        }
        return $r;
    }

    function GetField($field_name)
    {
        $r = PDFDoc_GetField($this->_cPtr, $field_name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Field($r);
        }
        return $r;
    }

    function FieldCreate($field_name, $type, $field_value = null, $def_field_value = null)
    {
        switch (func_num_args()) {
            case 2:
                $r = PDFDoc_FieldCreate($this->_cPtr, $field_name, $type);
                break;
            case 3:
                $r = PDFDoc_FieldCreate($this->_cPtr, $field_name, $type, $field_value);
                break;
            default:
                $r = PDFDoc_FieldCreate($this->_cPtr, $field_name, $type, $field_value, $def_field_value);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Field($r);
        }
        return $r;
    }

    function RefreshFieldAppearances()
    {
        PDFDoc_RefreshFieldAppearances($this->_cPtr);
    }

    function RefreshAnnotAppearances($options = null)
    {
        PDFDoc_RefreshAnnotAppearances($this->_cPtr, $options);
    }

    function FlattenAnnotations($forms_only = false)
    {
        PDFDoc_FlattenAnnotations($this->_cPtr, $forms_only);
    }

    function GetAcroForm()
    {
        $r = PDFDoc_GetAcroForm($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    const e_forms_only = 0;

    const e_annots_only = PDFDoc_e_annots_only;

    const e_both = PDFDoc_e_both;

    const e_annots_only_no_links = 5;

    function FDFExtract($flag_or_pages_to_extract_or_annotations_or_annot_added = null, $flag_or_annot_modified = null, $annot_deleted = null)
    {
        switch (func_num_args()) {
            case 0:
                $r = PDFDoc_FDFExtract($this->_cPtr);
                break;
            case 1:
                $r = PDFDoc_FDFExtract($this->_cPtr, $flag_or_pages_to_extract_or_annotations_or_annot_added);
                break;
            case 2:
                $r = PDFDoc_FDFExtract($this->_cPtr, $flag_or_pages_to_extract_or_annotations_or_annot_added, $flag_or_annot_modified);
                break;
            default:
                $r = PDFDoc_FDFExtract($this->_cPtr, $flag_or_pages_to_extract_or_annotations_or_annot_added, $flag_or_annot_modified, $annot_deleted);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new FDFDoc($r);
        }
        return $r;
    }

    function FDFMerge($fdf_doc)
    {
        PDFDoc_FDFMerge($this->_cPtr, $fdf_doc);
    }

    function FDFUpdate($fdf_doc)
    {
        PDFDoc_FDFUpdate($this->_cPtr, $fdf_doc);
    }

    function GetOpenAction()
    {
        $r = PDFDoc_GetOpenAction($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Action($r);
        }
        return $r;
    }

    function SetOpenAction($action)
    {
        PDFDoc_SetOpenAction($this->_cPtr, $action);
    }

    function AddFileAttachment($file_key, $embedded_file)
    {
        PDFDoc_AddFileAttachment($this->_cPtr, $file_key, $embedded_file);
    }

    function GetPageLabel($page_num)
    {
        $r = PDFDoc_GetPageLabel($this->_cPtr, $page_num);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PageLabel($r);
        }
        return $r;
    }

    function SetPageLabel($page_num, $label)
    {
        PDFDoc_SetPageLabel($this->_cPtr, $page_num, $label);
    }

    function RemovePageLabel($page_num)
    {
        PDFDoc_RemovePageLabel($this->_cPtr, $page_num);
    }

    function IsTagged()
    {
        return PDFDoc_IsTagged($this->_cPtr);
    }

    function GetStructTree()
    {
        $r = PDFDoc_GetStructTree($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new STree($r);
        }
        return $r;
    }

    function HasOC()
    {
        return PDFDoc_HasOC($this->_cPtr);
    }

    function GetOCGs()
    {
        $r = PDFDoc_GetOCGs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetOCGConfig()
    {
        $r = PDFDoc_GetOCGConfig($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Config($r);
        }
        return $r;
    }

    function AddHighlights($hilite)
    {
        PDFDoc_AddHighlights($this->_cPtr, $hilite);
    }

    function CreateIndirectName($name)
    {
        $r = PDFDoc_CreateIndirectName($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectArray()
    {
        $r = PDFDoc_CreateIndirectArray($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectBool($value)
    {
        $r = PDFDoc_CreateIndirectBool($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectDict()
    {
        $r = PDFDoc_CreateIndirectDict($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectNull()
    {
        $r = PDFDoc_CreateIndirectNull($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectNumber($value)
    {
        $r = PDFDoc_CreateIndirectNumber($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectString($value_or_str, $size = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFDoc_CreateIndirectString($this->_cPtr, $value_or_str);
                break;
            default:
                $r = PDFDoc_CreateIndirectString($this->_cPtr, $value_or_str, $size);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function CreateIndirectStream($data, $filter_chain_or_data_size = null, $filter_chain = null)
    {
        switch (func_num_args()) {
            case 1:
                $r = PDFDoc_CreateIndirectStream($this->_cPtr, $data);
                break;
            case 2:
                $r = PDFDoc_CreateIndirectStream($this->_cPtr, $data, $filter_chain_or_data_size);
                break;
            default:
                $r = PDFDoc_CreateIndirectStream($this->_cPtr, $data, $filter_chain_or_data_size, $filter_chain);
        }
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new Obj($r);
        }
        return $r;
    }

    function GetSDFDoc()
    {
        $r = PDFDoc_GetSDFDoc($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new SDFDoc($r);
        }
        return $r;
    }

    function Lock()
    {
        PDFDoc_Lock($this->_cPtr);
    }

    function Unlock()
    {
        PDFDoc_Unlock($this->_cPtr);
    }

    function TryLock($milliseconds = 0)
    {
        return PDFDoc_TryLock($this->_cPtr, $milliseconds);
    }

    function LockRead()
    {
        PDFDoc_LockRead($this->_cPtr);
    }

    function UnlockRead()
    {
        PDFDoc_UnlockRead($this->_cPtr);
    }

    function TryLockRead($milliseconds = 0)
    {
        return PDFDoc_TryLockRead($this->_cPtr, $milliseconds);
    }

    function GetFileName()
    {
        return PDFDoc_GetFileName($this->_cPtr);
    }

    function GenerateThumbnails($size)
    {
        PDFDoc_GenerateThumbnails($this->_cPtr, $size);
    }

    function AppendVisualDiff($p1, $p2, $opts)
    {
        PDFDoc_AppendVisualDiff($this->_cPtr, $p1, $p2, $opts);
    }

    function SaveViewerOptimized($path_or_out_buf, $opts_or_out_buf_size, $opts = null)
    {
        switch (func_num_args()) {
            case 2:
                PDFDoc_SaveViewerOptimized($this->_cPtr, $path_or_out_buf, $opts_or_out_buf_size);
                break;
            default:
                PDFDoc_SaveViewerOptimized($this->_cPtr, $path_or_out_buf, $opts_or_out_buf_size, $opts);
        }
    }

    const e_unsigned = 0;

    const e_failure = PDFDoc_e_failure;

    const e_untrusted = PDFDoc_e_untrusted;

    const e_unsupported = PDFDoc_e_unsupported;

    const e_verified = PDFDoc_e_verified;

    function VerifySignedDigitalSignatures($in_opts)
    {
        return PDFDoc_VerifySignedDigitalSignatures($this->_cPtr, $in_opts);
    }

    static function CreateInternal($impl)
    {
        $r = PDFDoc_CreateInternal($impl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new PDFDoc($r);
        }
        return $r;
    }

    function GetHandleInternal()
    {
        return PDFDoc_GetHandleInternal($this->_cPtr);
    }

    function __construct($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl = null, $buf_size = null)
    {
        if (is_resource($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl) && get_resource_type($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl) === '_p_pdftron__PDF__PDFDoc') {
            $this->_cPtr = $sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl;
            return;
        }
        switch (func_num_args()) {
            case 0:
                $this->_cPtr = new_PDFDoc();
                break;
            case 1:
                $this->_cPtr = new_PDFDoc($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl);
                break;
            default:
                $this->_cPtr = new_PDFDoc($sdfdoc_or_other_or_filepath_or_stream_or_buf_or_impl, $buf_size);
        }
    }
}
