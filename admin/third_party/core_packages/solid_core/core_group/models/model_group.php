<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @class  : Model_group
 * @desc   : clas to manage model
 * @author : Putera kahfi
 */
class Model_group extends CI_Model{

		private $_table = 'core_group';

		function __construct(){
			parent::__construct();
		}

		/**
		 * @desc : method to insert group 
		 * @access : public
		 * @return : boolean
		 */
		public function insert(){
			$data = array('group_name'=>$this->input->post('group'),
						'group_desc'=>$this->input->post('group_desc'));
			$result = $this->db->insert($this->_table, $data);
			return $result;
		}


}