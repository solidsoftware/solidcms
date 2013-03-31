<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * class to remap url string
 * @author : putera kahfi
 * @class  : Solid_dispatcher
 * @depend : config.php
 */

class Solid_dispatcher{

	private $_ci;

	private $_directoryTrigger;

	private $_controllerTrigger;

	private $_actionTrigger;

	function __construct(){
		$this->_ci = &get_instance();
		$this->_directoryTrigger = $this->_ci->config->item('directory_trigger');
		$this->_controllerTrigger =$this->_ci->config->item('controller_trigger');
		$this->_actionTrigger = $this->_ci->config->item('function_trigger');
	}

	function get_url($directory='',$controller='', $action='', $ext_url=''){
		$str_url = $this->_directoryTrigger.'='.($directory=='') ? $controller : $directory;
		$str_url .='&'.$this->_controllerTrigger.'='.$controller;
		$str_url .= '&'.$this->_actionTrigger.'='.$action;
		$str_url .=$ext_url;
		return site_url($str_url);
	}
}