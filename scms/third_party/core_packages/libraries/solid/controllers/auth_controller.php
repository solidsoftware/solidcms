<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_controller extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	function __call($method, $arg){
		echo $method.$arg.' called';die;
	}

}