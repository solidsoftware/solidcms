<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @class  : Application
 * @desc   : clas to handle application
 * @author : Putera kahfi
 */

class Application {

	/* ci instance */
	private $_ci;

	/* app config, to save config application */
	private $_appConfig;

	function __construct(){

		$this->_ci = &get_instance();
		// load config application
		$this->_ci->config->load('application');
		$this->_ci->load->library('session');
		$this->_ci->config->load('config');
		$this->_appConfig = $this->_ci->config->item('application');
	}



	/**
	 * @method  get_application_config
	 * @access  public
	 * @desc    method to get config application
	 * @param   $key_config, key name of application
	 * @return  mixed
	 * @author  putera kahfi
	 */
	public function get_application_config($key_config){
		return $this->_appConfig[$key_config];
	}

	/**
	 * @method get_application_config
	 * @desc   method to get application language
	 * @access public
	 * @return (string ) 
	 * @author putera kahfi
	 * @param  $key_name
	 * @depends config.php inside config folder
	 */
	public function get_application_language(){
		return $this->_appConfig['language'];
	}

	/**
	 * @method :get_application_id
	 * @access : public
	 * @desc   :method to get application id
	 * @return : (int) application id
	 * @author : putera kahfi
	 */
	public function get_application_id(){
		return $this->_appConfig['application_id'];
	}

    

}