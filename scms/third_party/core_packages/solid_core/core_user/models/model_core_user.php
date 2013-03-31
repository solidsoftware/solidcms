<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * class to handle model about core_user table
 * extended of CI_Model
 * @package solid_core
 * @class   Model_core_user
 * @author  Putera kahfi
 */

class Model_core_user extends CI_Model{

	private $_table = 'core_user';

	function __construct(){
		parent::__construct();
	}


	/**
	 * method to authentification login
	 * @access public
	 * @return array
	 * @param  $username, $password
	 */
	public function get_login_info($username, $password){
		
		$this->db->select("*");
		$this->db->from($this->_table);
		$this->db->like('user_name', $username);
		$this->db->like('user_password', $password);  
		
		$query =  $this->db->get()->result();
		return $query;
	}
}