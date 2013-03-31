<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgooglemaps extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	public  function index(){
		$this->template->build('googlemaps');
	}
}