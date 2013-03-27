<?php

if(!function_exists('array_to_combo')){

	/* 
		return array two dimentions
	*/
	function array_to_combo($arrayData){
  
		$newData = array();
		foreach($arrayData as $key=>$val){
			
			$newData[$val['value']]= $val['label'];
		}

/*
		$hardCombo = array(
				array('test'=>)
				)
		var_dump($newData);
*/
		return $newData;
	}	
}
