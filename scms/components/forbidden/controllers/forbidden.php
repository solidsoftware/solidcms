<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controller forbidden
 */



class Forbidden extends MX_Controller{


	function __constructor(){
		parent::__constructor();
	}


	public function not_found(){
		$this->load->view('404');
	}
}