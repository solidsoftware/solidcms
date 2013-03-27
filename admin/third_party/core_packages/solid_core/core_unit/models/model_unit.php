<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @class  : Model_group
 * @desc   : clas to manage unit
 * @author : Putera kahfi
 */
class Model_unit extends CI_Model{

		private $_table = 'core_unit';

		function __construct(){
			parent::__construct();
		}

		/**
		 * @method : get_list_data
		 * @desc   : method to get list data
		 * @author : putera kahfi
		 * @access : public
		 * @return : mixed, array if data is not empty 
		 */
		public function get_list_data(){

			$result = $this->db->get($this->_table);
			return $result->result_array();
			
		}

		/**
		 * @method : get_detail_data
		 * @desc   : method to get detail data
		 * @access : public
		 * @return : array
		 * @author : putera kahfi
		 * @params : $condition = array()
		 */
		public function get_detail_data($condition){
			extract($condition);
			($unit_id!=='') ? $where =array('unit_id'=>$unit_id) : "";
			$query = $this->db->get_where($this->_table, $where);
			$result = $query->result_array();
			return $result[0];
		}

		/**
		 * @desc : method to insert group 
		 * @access : public
		 * @return : boolean
		 */
		public function insert(){
			$data = array('unit_name'=>$this->input->post('group'),
					'unit_desc'=>$this->input->post('group_desc'),
					'core_application_app_code'=>$this->application->get_application_id());
			$result = $this->db->insert($this->_table, $data);
			return $result;
		}

}