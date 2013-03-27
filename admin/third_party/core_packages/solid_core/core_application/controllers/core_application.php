<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * class manajemen application
 * @author putera kahfi
 * 
 */

class Core_application extends MX_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model('model_core_app');
		$this->solid_lang->load('core_application/table');
	}

	public function index(){
		$content['data'] = $this->model_core_app->get_list_data();
		$this->template->build('index', $content);
	}

	
	/**
	*@method : input
	*@desc   : method to input data
	*@access : public
	*@author : putera kahfi
	*/
	public function input(){

		#$this->template->append_metadata('<script src="../scripts/core_application.js"></script>');
		$data ='';
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if($id!==''){
			$data['detail'] = $this->model_core_app->get_detail_data(array('unit_id'=>$id));
			$data['action'] = $this->solid_dispatcher->get_url('core_application','core_application', 'update');
		}else{
			$data['action'] = $this->solid_dispatcher->get_url('core_application','core_application', 'insert');
		}
		$this->template->build('input',$data);
	}


	/**
	* @method : insert
	* @desc   : method to insert/update data unit
	* @access : public
	* @return : boolean
	* @author : putera kahfi
	*/
	public function insert(){

		$data_id = $this->input->post('data_id');
		$result = $this->model_core_app->insert();

		if($result==TRUE){
			$message = array('message'=>$this->solid_lang->get_lang('success_add','messenger'),
							 'class'=>'alert-success');
		}else{
			$message = array('message'=>$this->solid_lang->get_lang('failed_add','messenger'),
							 'class'=>'alert-block');
		}

		$this->session->set_flashdata('messenger',$message);
		redirect('c=core_application');
	}

	/**
	* @method : insert
	* @desc   : method to update data 
	* @access : public
	* @return : boolean
	* @author : putera kahfi
	*/

	public function update(){

		$data_id = $this->input->post('data_id');
		$result = $this->model_core_app->update();


		if($result==TRUE){
			$message = array('message'=>$this->solid_lang->get_lang('success_update','messenger'),
							 'class'=>'alert-success');
		}else{
			$message = array('message'=>$this->solid_lang->get_lang('failed_update','messenger'),
							 'class'=>'alert-block');
		}

		$this->session->set_flashdata('messenger',$message);
		redirect('c=core_application');
	}

	/**
	 * method to delete data
	 * @access public
	 * @return void
	 */
	public function delete(){
		$result = $this->model_core_app->delete();

		if($result==TRUE){
			$message = array('message'=>$this->solid_lang->get_lang('success_delete','messenger'),
							 'class'=>'alert-success');
		}else{
			$message = array('message'=>$this->solid_lang->get_lang('failed_delete','messenger'),
							 'class'=>'alert-block');
		}

		$this->session->set_flashdata('messenger',$message);
		redirect('c=core_application');

	}


}