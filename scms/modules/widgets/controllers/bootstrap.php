<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Bootstrap extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->template->build('bootstrap');
	}
}
