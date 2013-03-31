<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * component table
 * @author putera kahfi
 */

class Table extends MX_Controller{

	private $_head;

	private $_body;

	private $_footer;

	private $_table;

	function __construct(){
		parent::__construct();
	}

	/**
	 * method to generate table data
	 * @param  [type] $data [data parsing]
	 * @return [type]       [description]
	 * @access public
	 */
	public function table_data(){
		$this->solid_lang->load('core_application/table');
		$this->load->view('table_data', $this->_table);
	}
}