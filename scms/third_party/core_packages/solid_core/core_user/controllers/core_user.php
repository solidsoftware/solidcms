<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * class to manage user
 * @author putera kahfi
 */

class Core_user extends Auth_controller{


	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['table'] = Modules::run('table/table_data');
		$this->template->build('index', $data);
	}
}