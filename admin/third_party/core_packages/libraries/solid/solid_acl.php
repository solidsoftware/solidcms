<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @class   : Solid_acl
 * @desc    : class to manage access rules
 * @author  : putera kahfi
 * @depends : Application
 */

class Solid_acl{

	const ALLOW ='allow';

	const DENIED ='denied';

	private $_role = array(); // role data 

	private $_access; //access data\


	/* 
	final array format
	
	$this_role = array ('admin'=>array(
							array('controller'=>'allow',
							      'actions' =>array('act1'=>'allow',
							      					'act2'=>'allow',
							      					'act3'=>'allow')
							      ),
							array('controller2'=>'allow',
							      'actions' =>array('act1'=>'allow',
							      					'act2'=>'allow',
							      					'act3'=>'allow')
							      )
						);
							
	*/

    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

	/**
	 * @method set_access_rules
	 * @desc method to add user roles
	 */
	public function add_role($role, $role_child =''){
		$this->_role[$role]  = array();
	}

	/**
	 * @method  allow 
	 * @desc method to allow user to access 
	 * @param  $user, $controller, $actions
	 * @return void
	 */
	public function allow($role, $controller='', $actions){


		$this->_role[$role][$controller]= array();
		$this->_role[$role][$controller]['access']= self::ALLOW;

		//$this->_role[$role][$controller][$actions]= array();
		if(is_array($actions)){
			foreach($actions as $key=>$val){
				$this->_role[$role][$controller]['actions'][$val] = self::ALLOW;
			}
		}else{
			$this->_role[$role][$controller]['actions'][$actions] = self::ALLOW;
		}
		//$this->role[$role]['controller'][] = $action;
		
	}

	/**
	 * @method deny
	 * @desc   method to deny user acces 
	 * @param  $role, $controller, $actions
	 */
	public function  deny($role, $controller, $actions){


		$this->_role[$role][$controller]= array();
		$this->_role[$role][$controller]['access']= self::DENIED;

		//$this->_role[$role][$controller][$actions]= array();
		if(is_array($actions)){
			foreach($actions as $key=>$val){
				$this->_role[$role][$controller]['actions'][$val] = self::DENIED;
			}
		}else{
			$this->_role[$role][$controller]['actions'][$actions] = self::DENIED;
		}

	}


	/**
	 * @method get_access_status
	 * @desc method to get access status by roles
	 * @return boolean (true if allowed and false if denied)
	 */
	public function get_access_status($role='', $controller='', $action=''){

		// if action not empty then checked action rules
		if($action!='') 
			$this->_role[$role][$controller]['actions'][$action] ;
		else
			$this->_role[$role][$controller]['access'] ;
	}

	/**
	 * @method : access_module
	 * @desc   : method to get access module by group user
	 * @access : public
	 * @return : boolean (true if user allowed to access modules)
	 * @params : $modules (module name)
	 */
	public function access_module($module){

	}

	/**
	 * @method : _check_rule
	 * @desc   : method to get access module by group user
	 * @return : boolean (true if founded false if not found)
	 * @access : private
	 * @params : $role_name 
	 */
	private function _check_role($role_name){
		print_r($this->_role);
		return (isset($this->_role[$role_name]))  ? TRUE : FALSE;
	}

}


class Solid_acl_db extends Solid_acl{

	/**
	 * method to register role 
	 * @return [type] [description]
	 */
	public function register_role(){
		
	}

}