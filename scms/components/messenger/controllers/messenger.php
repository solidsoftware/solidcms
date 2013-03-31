<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messenger extends MX_Controller{


	function __construct(){
		parent::__construct();
	}

	/**
	 * method to view messenger component
	 * @access public
	 */
	public function index(){

	 	$message = $this->session->flashdata('messenger');

 		if($message!=''){ 
	 		$class = $message['class'];
	 		$msg=$message['message'];
	 		$display='block';
	 	}else{
	 		$class = '';
	 		$msg='';
	 		$display='none';
	 	}

	 	$this->smarty->template_dir=APPPATH.'components/messenger/views';
		$this->smarty->caching = false;
		$this->smarty->assign('class',$class);
		$this->smarty->assign('message',$msg);
		$this->smarty->assign('display',$display);
		$this->smarty->view('index');

	}

}
