<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messenger extends MX_Controller{


	function __construct(){
		parent::__construct();
	}

	public function index(){
	 	//$this->template->set_layout('main');
	 	$message = $this->session->flashdata('messenger');
	 	if($message!=''){ 
	 		$data['class'] = $message['class'];
	 		$data['message']=$message['message'];
	 		$data['display']='block';
	 	}else{
	 		$data['class'] = '';
	 		$data['message']='';
	 		$data['display']='none';
	 	}
		$this->load->view('index',$data);

	}

}
