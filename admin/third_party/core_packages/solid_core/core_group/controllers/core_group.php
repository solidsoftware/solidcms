<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* @class  : Core_group
* @desc   : class to management group
* @author : putera kahfi
**/ 
class Core_group extends MX_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model('model_group');
	}

	/**
	 * @desc  : method to acces view data  
	 * @return: void
	 * @access :public
	 * @author:putera kahfi
	 */
	public function index(){
		$this->template->build('index');
	}

	/**
	 * @desc : method to input or delete 
	 * @access : public
	 * @author : putera kahfi
	 * @return : void
	 */
	public function input(){
		$this->template->build('input');
	}

	public function insert(){
		$this->model_group->insert();
	}

}





/* End of file core_group.php */
/* Location: ./application/core_modules/core_group/core_group.php */