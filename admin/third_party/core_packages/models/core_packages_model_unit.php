<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**
 * @class  : Core_packages_model_unit
 * @desc   : model core to retrive unit data
 * @parent : CI_Model
 * @author : putera kahfi
 */

require_once(__DIR__.'/core_packages_model_abstract.php');
class Core_packages_model_unit extends  Core_packages_model_abstract{

	var $table = 'core_unit';

	function __construct(){
		parent::__construct();
	}




}