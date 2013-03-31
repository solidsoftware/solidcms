<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Breadcrumb extends MX_Controller{


	function __construct(){
		parent::__construct();
	}

	function top_breadcrumb($breadcrumb){
		extract($breadcrumb);


		$this->smarty->template_dir=APPPATH.'components/breadcrumb/views';
		$this->smarty->caching = false;
		$this->smarty->assign('active',$active);
		$data = (isset($data)) ? $data : '';
		$this->smarty->assign('link',$data);
		$this->smarty->view('top_breadcrumb');
	}

}
