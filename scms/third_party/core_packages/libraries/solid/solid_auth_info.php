<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package solid
 * @class   Solid_auth_info
 * @desc    class to handle auth info
 * @author  Putera kahfi
 * @depends CI_Session
 */

class Solid_auth_info{

	private $_ci;

	private $_logInfo;

	static $instance;


	function __construct(){
		$this->_ci = &get_instance();
		$this->_ci->load->library('session');
		$this->_logInfo = $this->_ci->session->userdata('log_info');
	}

	public static function instance(){
		if(self::$instance==NULL) self::instance = new Solid_auth_info();
		return self::$instance;
	}


	/**
	 * method to get group info
	 * @access public 
	 * @access public
	 * @return log info
	 */
	public function get_group_name(){
		return ($this->_logInfo['group_name']) ? $this->_logInfo['group_name'] : NULL ;
	}

	/**
     * method to get group id by user logged in
     * @return :  (int) group id
     * @access : public
     * @author : putera kahfi 
     * @return : mixed
     */
	public function get_group_id(){
		// get session log info
		return ($this->_logInfo['group_id']) ? $this->_logInfo['group_id'] : NULL ;
	}


}