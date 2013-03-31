<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * class to manage language
 * @author putera kahfi
 */

class Core_language extends MX_Controller{

	function __construct(){
		parent::__construct();
	}


	function set_language(){
		$language = $_GET['lang'];
		$this->config->set_item('language', $language);
		$applang = array('app'=>array('language'=>$language,'id'=>'101','version'=>'1.0'));
		$this->session->set_userdata($applang);
		var_dump($this->session->all_userdata());die;
		redirect(site_url());
	}

}