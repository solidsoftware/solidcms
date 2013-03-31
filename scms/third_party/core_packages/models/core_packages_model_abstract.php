<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @class  : Core_packages_model_abstract
 * @desc   : model core to abstract
 * @parent : CI_Model
 * @author : putera kahfi
 */

abstract class  Core_packages_model_abstract extends CI_Model{

	
	protected $table;/* table name */

	protected $where; /*where condition */

	protected $result; /* result data */

	protected $countData; /* count result data */

	protected  $limit; /* limit data */

	protected  $offset; /* offset data */

	protected  $join;  /* join table */


	function __construct(){
		parent ::__construct();
	}

	/**
	 * @method : get_all_data
	 * @return : array
	 * @access : public
	 * @param : $results, to get result data type
	 */
	public function get_list_data($result ='array'){
		$data = $this->db->get($this->table);
		return ($result=='array') ? $data->result_array() : $data->result();
	}


}
