<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * bootstrap widget
 * this is using bootmetro
 * @author  putera kahfi 
 */

class Wbootstrap extends MX_Controller{

	private $_data;
	private $_setup;

	function __construct(){
		parent::__construct();
		$this->_setup();
	}

	/**
	 * method to setup, modif this page if you neet to load library, js, css
	 * @return [type] [description]
	 */
	private function _setup(){
		$setup['css']= array('bootstrap','metro');
		$setup['js']= array('bootstrap','metro');
		$this->load->view('setup', $setup);
	}

	/**
	 * method to generate navbar
	 * @param  $panel_data
	 * @return void
	 * @access public
	 * 
	 * example param
	 * =====================================================================
	 * 	$data['items'][]= array(
	 *					array('icon'=>'icon-home','label'=>'Home','link'=>site_url()),
	 *					array('font-icon'=>'&#x0021;','label'=>'System Management','link'=>'#',
	 *						'items'=>array(
	 *							array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
	 *							array('icon'=>'icon-bookmark','label'=>'Modules ','link'=>site_url('c=core_module')),
	 *							array('icon'=>'icon-bookmark','label'=>'Group','link'=>site_url('c=core_group')),
	 *							array('class'=>'divider'),
	 *							array('icon'=>'icon-bookmark','label'=>'User','link'=>site_url('c=core_user')),
	 *							array('icon'=>'icon-bookmark','label'=>'Application','link'=>"#",
	 *								'items'=>array(
	 *									array('icon'=>'icon-bookmark','label'=>'Application','link'=>site_url('c=core_application')),
	 *									array('icon'=>'icon-bookmark','label'=>'Application Unit','link'=>site_url('c=core_group'))
	 *								)
	 *							),
	 *								array('icon'=>'icon-bookmark','label'=>'Menu','link'=>"#",
	 *								'items'=>array(
	 *									array('icon'=>'icon-bookmark','label'=>'Menu','link'=>site_url('c=core_application')),
	 *									array('icon'=>'icon-bookmark','label'=>'Group Menu','link'=>site_url('c=core_group')),
	 *									array('icon'=>'icon-bookmark','label'=>'Actions','link'=>site_url('c=core_group')),
	 *								)
	 *							),
	 *					)));
	 *======================================================================
	 * widget usage
	 * Modules::run('bootstrap/navbar', $data);
	 */
	public function navbar($nav_data){

		$this->_data='';
		$this->_data = $nav_data;
		$this->load->view('navbar', $this->_data);
	}

	/**
	 * dropdown bootstrap
	 * @return void
	 * @access public
	 */
	public function dropdown(){
		$this->load->view('dropdown');
	}

	/**
	 * button group component
	 * @access public
	 */
	public function btngroup($data){
		$this->load->view('btngroup');
	}

	/**
	 * button dropdown component
	 * @param  string $data [items of dropdown]
	 * @return void
	 * example param
	 * ============================================================================================
	 * $data['items'][] = array(
     * array('icon'=>'icon-home','label'=>'Homes','position'=>'dropup',
     *        'items'=>array(
     *             array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
     *             array('font-icon'=>'a','label'=>'Unit','link'=>site_url('c=core_unit'),
     *                  'items'=>array(
     *                        array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
     *                        array('font-icon'=>'a','label'=>'Unit','link'=>site_url('c=core_unit')),
     *                    )
     *              ),
     *        )
     *  ));
     * =====================================================================================
     * widget usage
	 * Modules::run('bootstrap/btndropdown', $data);
	 */
	public function btndropdown($data){
		$this->_data='';
		$this->_data = $data;
		$this->load->view('btndropdown', $this->_data);
	}

	/**
	 * breadcrumb component
	 * @param  [type] $data  [items ]
	 * @param  string $setup [global setup] (optional)
	 * @return void
	 * example param
	 * $data['setup'] = array('divider'=>'|');	
	 * $data['items'][] = array(
     *   array('icon'=>'icon-home','label'=>'Home','link'=>site_url()),
     *   array('icon'=>'icon-share-3','label'=>'Social','link'=>'#'),
     *   array('icon'=>'icon-share-3','label'=>'Social','link'=>'#'),
     *   array('icon'=>'icon-share-3','label'=>'Social','class'=>'active'),);
     * =========================================================================
     * widget usage
     * Modules::run('bootstrap/breadcrumb', $data, $setup);
	 * 
	 */
	public function breadcrumb($data, $setup=''){
		
		$this->_data ='';
		$this->_data =$data;
		$this->_setup = array('divider'=>'/');
		$this->_data['setup'] = ($setup!='') ? $setup : $this->_setup;
		$this->load->view('breadcrumb', $this->_data);
	}


	public function pagination($data){
		$this->load->view('pagination');
	}
	
	/**
	 * alert component
	 * @return [type] [description]
	 * example param
	 * $alert['items'][] = array('class'=>'alert-error','title'=>'this is title','content'=>'this is content');
	 * ===============================================================================================
	 * widget usage
	 * Modules::run('bootstrap/alert', $alert);
	 */
	public function alert($data){
		$this->_data = $data;
		$this->load->view('alert', $this->_data);
	}

}