<?php

class Model_kategori_klasifikasi extends MY_Model{

	
	
	function __construct(){
		parent::__construct();
		$this->table='sp_golongan_kategori';
	}

	function getListKategori($params = array()){
		extract($params);
		$this->query =" SELECT * FROM ".$this->table;
		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();
		return $this->result;
	}

	function comboBox($params =array()){
		$this->query =" SELECT  katId as value, katName as label  FROM ".$this->table;
		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();
		return $this->result;
	}
}