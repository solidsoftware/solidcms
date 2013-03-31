<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');


class Layout_header extends MX_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('header');		
	}
}