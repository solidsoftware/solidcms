<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * class to handle component confirm 
*/

class Confirm extends MX_Controller{

	function __construct(){
		parent::__construct();
	}


	public function delete(){
		$data = $this->session->flashdata('confirm');
		$this->smarty->template_dir=APPPATH.'components/confirm/views';
		$this->smarty->caching = false;
		//$this->smarty->assign('label',$label);
		
		$this->smarty->view('confirm_delete');
	}
}