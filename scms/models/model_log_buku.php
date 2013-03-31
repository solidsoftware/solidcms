<?php

class Model_log_buku extends CI_Model{

	private $query;
	private $table='_sp_buku_log';
	private $result;
	private $limit=100;
	private $offset=0;

	

	function __construct(){
		parent::__construct();
	}

	function setLimit($limit){
		$this->limit = $limit;	
	}

	function  setOffset($offset){
		$this->offset= ($offset=='') ? $this->getTotalData() : $offset;	
	}



	/*
	$data type : array
	example = array('bkId'=>1,'bkSeksiId'=>10,'bkTingkatId'=5)
	 */
	function insertData($data){

		$this->result = $this->db->insert($this->table, $data);
		return $this->result;

	}

	function doInsertLogBuku($dataLog, $dataBuku, $bkId){

	
		#$this->db->trans_start();

		/* do insert log buku */
		$getDataLog = $this->Model_log_buku->getDetailData(array('bklogBkId'=>$bkId));
		
		if(isset($getDataLog->bklogBkId) && $getDataLog->bklogBkId!=''){
			$insert = $this->Model_log_buku->update($dataLog, $bkId);
		}else{
			$insert = $this->Model_log_buku->insertData($dataLog);
		}
	
		/* do update buku */
		$insert = $insert && $this->Model_buku->update($dataBuku, $bkId);
		
		$detail = $this->Model_buku->GetDetailBuku(array('bkId'=>$bkId));

		$seksiKode = ($detail->seksiKode != 'Not Set') ? '.' . $detail->seksiKode : '';
       	$mixedGolongan = $detail->golKode . $seksiKode . '.' . $detail->tingkatKode;

		$updateField =array('bklogKodeModifikasi'=>$mixedGolongan);
		$insert = $insert && $this->Model_log_buku->update($updateField, $bkId);

		#$this->db->trans_complete($insert);
		return $insert;

	}

	function update($data, $id){
		$this->db->where('bklogBkId', $id);
		$this->result = $this->db->update($this->table, $data);
		return $this->result;
	}

	function getListData($params = array()){

		extract($params);

		$this->query = " SELECT SQL_CALC_FOUND_ROWS *, DATE_FORMAT(bklogDateModification,'%Y-%m-%d') as bklogDateModification, TIME(bklogDateModification)  as jam FROM ". $this->table;
		$this->query .= " JOIN sp_buku ON sp_buku.bkId=_sp_buku_log.bklogBkId";
		$this->query .=" LEFT JOIN sp_buku_eksemplar ON (sp_buku_eksemplar.bkexBkId=sp_buku.bkId)";
		$this->query .=" JOIN sp_golongan on (sp_golongan.golId=sp_buku.bkGolId) ";
		$this->query .=" JOIN sp_golongan_kategori on (sp_golongan_kategori.katId=sp_golongan.golKategoriId) ";
		$this->query .=" JOIN sp_seksi on (sp_seksi.seksiId=sp_buku.bkSeksiId) ";
		$this->query .=" JOIN sp_tingkat on (sp_tingkat.tingkatId=sp_buku.bkTingkatId) ";
		$this->query .=" LEFT JOIN sp_penerbit on (sp_penerbit.penerbitId=sp_buku.bkPenerbit) ";
		$this->query .= " WHERE 1=1";
		$this->query .=(isset($title) && $title !='') ? " AND bkJudul LIKE '%".$this->db->escape_like_str($title)."%'" : "";
		$this->query .=(isset($date_start) && $date_start!='') ? " AND DATE_FORMAT(bklogDateModification,'%Y-%m-%d') BETWEEN '".$date_start."' AND '".$date_end."'" : '' ;
		$this->query .=(isset($noInventaris) && $noInventaris !='') ? " AND bkexNoInventaris LIKE '%".$noInventaris."%'" : "";
		$this->query .=" GROUP BY bklogBkId ";
		$this->query = $this->db->query($this->query);
		$this->result = $this->query->result_array();

		return $this->result;

	}

	function getDetailData($params){

		extract($params);
		$this->query ="SELECT * FROM ".$this->table;
		$this->query .= " WHERE 1=1  ";
		$this->query .= (isset($bklogId) && $bklogId!='') ? " AND bklogId=".$bklogId : "";

		$this->query .= (isset($bklogBkId) && $bklogBkId!='') ? " AND bklogBkId=".$bklogBkId : "";

		$this->query = $this->db->query($this->query);

		$this->result = $this->query->row();
		return $this->result; 

	
	}

}
