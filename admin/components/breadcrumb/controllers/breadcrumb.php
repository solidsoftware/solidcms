<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Breadcrumb extends MX_Controller{


	function __construct(){
		parent::__construct();
	}

	function index(){
		$data = array();
		$this->load->view('index', $data);
	}

}
