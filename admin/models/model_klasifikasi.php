<?php

class Model_klasifikasi extends MY_Model{


	function __construct(){
		parent::__construct();
		$this->table ='sp_golongan';

	}

	/*
	 gunakan paramater bertipe objek agar fleksibel
	 */
	function getListKlasifikasi($params){
		extract($params);
		$this->query = $this->db->query("SELECT * FROM ".$this->table);
		$this->query .=" WHERE 1=1";
		$this->result = $this->query->result_array();
		return $this->result;
	}

	function comboBox($params =array()){
		extract($params);
		$this->query =" SELECT  golId as value, golKode as label  FROM ".$this->table;
		$this->query .=" WHERE 1=1";
		$this->query .= (isset($kategoriId) && $kategoriId!='') ? " AND golKategoriId=".$kategoriId : "";
		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();
		return $this->result;
	}
	



}
