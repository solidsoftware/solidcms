<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Core_menu extends MX_Controller{

	function __construct(){
	    parent::__construct();	
	}

	function index(){
		$this->smarty->setTemplateDir(APPPATH.'core_modules/core_menu/views');
		$this->smarty->view('index');
	}

}
