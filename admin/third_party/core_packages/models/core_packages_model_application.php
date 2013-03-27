<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @class  : Core_packages_model_application
 * @desc   : model core to retrive application data
 * @parent : CI_Model
 * @author : putera kahfi
 */
 

require_once(__DIR__.'/core_packages_model_abstract.php');

class Core_packages_model_application extends Core_packages_model_abstract{

		$table ='core_application';

		function __construct(){
			parent::__construct();
		}


		/**
		 * @method : get_appname
		 * @param  : appId
		 * @return : (string) application name
		 * @author : putera kahfi
		 * @access : public 
		 */
		public function get_appname($appId){

		}

}