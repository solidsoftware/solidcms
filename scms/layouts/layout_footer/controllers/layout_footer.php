<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');


class Layout_footer extends MX_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	
	public function index(){
		$this->load->view('footer');
	} 
	
}