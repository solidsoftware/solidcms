<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_core_app extends CI_Model{

	private $_table ='core_application';

	function __construct(){
		parent::__construct();
	}

	/**
	 * method to get list data
	 * @return [array] [array data application]
	 * @access public
	 */
	public function get_list_data(){
		$result = $this->db->get($this->_table)->result_array();
		return $result;
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
		($unit_id!=='') ? $where =array('app_code'=>$unit_id) : "";
		$query = $this->db->get_where($this->_table, $where);
		$result = $query->result_array();
		return $result[0];
	}

	/**
	* @desc : method to insert data 
	* @access : public
	* @return : boolean
	*/
	public function insert(){
		$data = array('app_code'=>$this->input->post('app_code'),
					'app_name'=>$this->input->post('app_name'),
					'app_desc'=>$this->input->post('app_desc'));
		$result = $this->db->insert($this->_table, $data);
		return $result;
	}


	/**
	* @desc : method to update data 
	* @access : public
	* @return : boolean
	*/
	public function update(){
		$data = array('app_code'=>$this->input->post('app_code'),
					'app_name'=>$this->input->post('app_name'),
					'app_desc'=>$this->input->post('app_desc'));
		$this->db->where('app_code', $this->input->post('data_id'));
		$result = $this->db->update($this->_table, $data);
		return $result;
	}

	/**
	 * method to delete data
	 * @access public
	 */
	public function delete(){
		$id = $this->input->get('id');
		$result = $this->db->delete($this->_table, array('app_code' => $id)); 
		return $result;
	}


}