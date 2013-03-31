<?php


class Model_tingkat extends MY_Model{


	function __construct(){
		parent::__construct();
		$this->table='sp_tingkat';
	}

	function comboBox(){
		$this->query ="SELECT tingkatId as value, tingkatKode as label FROM ".$this->table;
		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();
		return $this->result;
	}
}