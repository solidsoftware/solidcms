<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**
 * @class  Core_login
 * @desc   class to handle login
 * @author Putera kahfi
 */


class  Core_login extends MX_Controller{


	function __construct(){
		$this->solid_loader->library('security/solid_auth');
		parent::__construct();
	}

	/**
	 * method to load login page
	 * @return  void
	 * @access  pubic
	 */
	public function index(){
		$this->template->set_layout('login');
		$this->template->build('index');
	}


	/**
	 * method to process login 
	 * @return  void
	 * @access  pubic
	 */
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->solid_auth->login($username, $password);
		redirect('d=dashboard&c=dashboard');
	}

}