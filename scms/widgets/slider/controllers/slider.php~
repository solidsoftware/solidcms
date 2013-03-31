<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slider extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){

		$this->smarty->setTemplateDir(APPPATH.'widgets/slider/views');

		$this->smarty->assign("slider_image", $this->template->get_theme_path().'/images/photos/image-1.jpg');
$this->smarty->assign("slider_image2", $this->template->get_theme_path().'/images/photos/image-2.jpg');
$this->smarty->assign("slider_image3", $this->template->get_theme_path().'/images/photos/image-3.jpg');
$this->smarty->assign("slider_image4", $this->template->get_theme_path().'/images/photos/image-4.jpg');
		$this->smarty->view('index');

	}
}
