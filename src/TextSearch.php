<?php
namespace App\Documents\PdfTron;

class TextSearch {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_PDFNetPHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_PDFNetPHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_pdftron__PDF__TextSearch') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_TextSearch();
	}

	const e_reg_expression = TextSearch_e_reg_expression;

	const e_case_sensitive = TextSearch_e_case_sensitive;

	const e_whole_word = TextSearch_e_whole_word;

	const e_search_up = TextSearch_e_search_up;

	const e_page_stop = TextSearch_e_page_stop;

	const e_highlight = TextSearch_e_highlight;

	const e_ambient_string = TextSearch_e_ambient_string;

	const e_raw_text_search = TextSearch_e_raw_text_search;

	function Begin($doc,$pattern,$mode,$start_page=-1,$end_page=-1) {
		return TextSearch_Begin($this->_cPtr,$doc,$pattern,$mode,$start_page,$end_page);
	}

	function Run() {
		$r=TextSearch_Run($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SearchResult($r);
		}
		return $r;
	}

	function SetPattern($pattern) {
		return TextSearch_SetPattern($this->_cPtr,$pattern);
	}

	function GetMode() {
		return TextSearch_GetMode($this->_cPtr);
	}

	function SetMode($mode) {
		TextSearch_SetMode($this->_cPtr,$mode);
	}

	function SetRightToLeftLanguage($flag) {
		TextSearch_SetRightToLeftLanguage($this->_cPtr,$flag);
	}

	function GetCurrentPage() {
		return TextSearch_GetCurrentPage($this->_cPtr);
	}

	function SetOCGContext($context) {
		TextSearch_SetOCGContext($this->_cPtr,$context);
	}

	function Destroy() {
		TextSearch_Destroy($this->_cPtr);
	}
}


?>
