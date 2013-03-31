<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @class  : Model_rules
 * @desc   : class to manage access rules likes module
 * @author : putera kahfi
 */
class Model_module_rules extends CI_Model{


		private $_table = '';


		function __construct(){
			parent::__construct();
		}


		/**
		 * @method : acces_module_status
		 * @desc   : get data module by group user, module and action
		 * @access : public
		 * @return : boolean (true if data founded)
		 * @param  : $groupId, $moduleId,$actionId
		 */
		public function access_module_status($groupId, $moduleId, $actionId){
			$this->db->select('core_module_module_id');
			$this->db->from('core_group_has_core_module');
			$this->db->where('core_group_group_id',$groupId);
			$this->db->where('core_group_module_id',$moduleId);
			$this->db->where('core_group_module_id',$moduleId);
			$numbRow = $this->db->num_rows(); 
			return($numbRow > 0) ? TRUE :FALSE;
		}



}