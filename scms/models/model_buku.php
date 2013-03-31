<?php


class Model_buku extends CI_Model{


	private $query;
	private $result;
	private $table = 'sp_buku';
	private $total_row;
	private $limit =100;
	private $offset =0;

	function __construct(){
		parent::__construct();	
	}


	function setLimit($limit){
		$this->limit = $limit;	
	}

	function  setOffset($offset){
		$this->offset= ($offset!='') ? $offset : $this->offset;	
	}

	function  getOffset( ){
		return $this->offset;
	}


	/*
	filter type: Array
	Sample  : array (bkId=1);
	 */
	function getListBuku($filter){

		extract($filter);
		$this->query =" SELECT SQL_CALC_FOUND_ROWS * FROM ".$this->table;
		$this->query .=" LEFT JOIN sp_golongan on (sp_golongan.golId=sp_buku.bkGolId) ";
		$this->query .=" LEFT JOIN sp_buku_eksemplar ON (sp_buku_eksemplar.bkexBkId=sp_buku.bkId)";
		$this->query .=" LEFT JOIN sp_golongan_kategori on (sp_golongan_kategori.katId=sp_golongan.golKategoriId) ";
		$this->query .=" LEFT JOIN sp_seksi on (sp_seksi.seksiId=sp_buku.bkSeksiId) ";
		$this->query .=" LEFT JOIN sp_tingkat on (sp_tingkat.tingkatId=sp_buku.bkTingkatId) ";
		$this->query .=" LEFT JOIN sp_penerbit on (sp_penerbit.penerbitId=sp_buku.bkPenerbit) ";
		$this->query .= " WHERE 1=1";
		$this->query .=" AND bkId NOT IN (SELECT bklogBkId FROM _sp_buku_log)";
		$this->query .=(isset($title) && $title !='') ? " AND bkJudul LIKE '%".$title."%'" : "";
		$this->query .=(isset($penerbit) && $penerbit !='') ? " AND penerbitNama LIKE '%".$penerbit."%'" : "";
		$this->query .=(isset($noInventaris) && $noInventaris !='') ? " AND bkexNoInventaris LIKE '%".$noInventaris."%'" : "";

		
		$this->query .=" ORDER BY bkJudul ASC"; 
		$this->query .=" LIMIT ".$this->offset.','.$this->limit;


		


		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();

		return $this->result;
	

	}


	function GetDetailBuku($filter){
		extract($filter);
		$this->query = "SELECT * FROM sp_buku";
		$this->query .=" JOIN sp_golongan on (sp_golongan.golId=sp_buku.bkGolId) ";
		$this->query .=" JOIN sp_golongan_kategori on (sp_golongan_kategori.katId=sp_golongan.golKategoriId) ";
		$this->query .=" JOIN sp_seksi on (sp_seksi.seksiId=sp_buku.bkSeksiId) ";
		$this->query .=" JOIN sp_tingkat on (sp_tingkat.tingkatId=sp_buku.bkTingkatId) ";
		$this->query .= " WHERE 1=1";
		$this->query .= (isset($bkId) && $bkId!='') ? " AND bkId=".$bkId : '';
		$this->query = $this->db->query($this->query);
		$this->result =$this->query->row();
		return $this->result;
	}


	/*
	data : array
	sample : array ('bkGolId'=>10, 'bkSeksiId'=>10)
	 */
	function update($data, $id){

		$this->db->where('bkId',$id);
		$this->result = $this->db->update($this->table,$data);
		return $this->result;
	}



	function getTotalData(){
		$this->query= $this->db->query(' SELECT FOUND_ROWS() AS TOTAL');	
		$this->result = $this->query->result();
		return $this->result[0]->TOTAL;
	}


}
