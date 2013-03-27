<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * class to to generate button component
 * @author : putera kahfi
 * @depend : lang/button_lang.php
 */

class Button extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	public function link_button($data){
		extract($data);
		
		$this->smarty->template_dir=APPPATH.'components/button/views';
		$this->smarty->caching = false;
		$this->smarty->assign('label',$label);
		$this->smarty->assign('link',$link);
		$this->smarty->assign('icon',$icon);
		$this->smarty->assign('size','btn-mini');
		$this->smarty->assign('ext_attr',(isset($extended)) ? $extended :"") ;
		$this->smarty->view('link_button');
	}

	public function submit_button($data){

	}

	public function button($data){

	}




}