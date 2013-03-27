<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @class   : Solid_lang
 * @desc    : class to manage language
 * @author  : putera kahfi
 * @depends : language
 */

class Solid_lang{

	private $_ci;

	private $_langFile;

	private $_langData;

	function __construct(){
		$this->_ci = &get_instance();
	}

	function load($filename, $language =''){
		$this->_langFile = $filename;
		$this->_ci->lang->load($this->_langFile);
	}

	function get_lang($key, $langname=''){
		$this->_langData =$this->_ci->lang->line($langname);
		return $this->_langData[$key];
	}
}