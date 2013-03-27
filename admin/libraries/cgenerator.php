<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
class name : Generator
Author 	   : Putera Kahfi
Description: Class for generate common component like Combobox
*/

class CGenerator{


	function __construct(){
		$CI = & get_instance();
		$CI->load->helper('form_custom');
	}


	/*
	 params :array
	 sample : array('name'=>'combo_name','data'=>$data,'selected'=>'selected_value', 'extra'=>'extra')
	 */
	function generateCombobox($params){
		extract($params);
		$getData = array_to_combo($data_combo);
		$combo = form_dropdown($name, $getData, $selected, $extra);
		return $combo;
	}


}

/* end of library Generator */