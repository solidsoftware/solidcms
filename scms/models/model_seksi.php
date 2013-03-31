<?php


class Model_seksi extends MY_Model{


	function __construct(){
		parent::__construct();
		$this->table = 'sp_seksi';
	}

	function comboBox(){
		$this->query = "SELECT seksiId as value, seksiKode as label FROM ".$this->table;
		$this->query= $this->db->query($this->query); 
		$this->result = $this->query->result_array();
		return $this->result;
	}
	



}