<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package solid
 * @class   Solid_loader
 * @desc    class to handle loader solid packages 
 * @author  Putera kahfi
 */

class Solid_loader{

	private $_package ='solid';//package name

	private $_ci; // ci instance


	function __construct(){
		$this->_ci= &get_instance();
	}

	/**
	 * method to load solid library
	 * @return void
	 * @param  [$lib_name] [library name]
	 * @access public
	 */
	public function library($lib_name){
		if(is_array($lib_name)){
			foreach($lib_name as $val){
				$this->_ci->load->library($this->_package.'/'.$lib_name);
			}
		}else{
				$this->_ci->load->library($this->_package.'/'.$lib_name);
		}
		
	}

}