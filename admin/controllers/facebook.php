<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Facebook extends MX_Controller{


	function __construct(){
		$this->load->library('Eden');
		$api_key = '[128398910521447]';
		$app_secret ='[4a5ee308ad8f69931c3bf1598556039b]';
		$auth =eden('facebook')->auth($api_key , $app_secret, 'http://lomboktv.com');
	}


	function update_status(){

	}

}
