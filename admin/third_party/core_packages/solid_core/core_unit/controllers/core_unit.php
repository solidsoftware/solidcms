<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @class  : Core_unit
 * @desc   : class to handle unit application
 * @author : putera kahfi 
 */
class Core_unit extends MX_Controller{

		function __construct(){

			$this->load->model(array('Model_unit','Core_packages_model_unit'));
			$userSession = array('log_info'=>array(
						'group_id'=>10
				));
			$this->session->set_userdata($userSession);
			//print_r($this->application->get_group_id());die;
			parent::__construct();
		}

		/**
		 * @method :index
		 * @desc   :method to view list unit
		 * @author :putera kahfi
		 * @access :public 
		 */
		public function index(){
			$content['data']= $this->Core_packages_model_unit->get_list_data();
			$this->template->build('index', $content);
		}

		/**
		 *@method : input
		 *@desc   : method to input data
		 *@access : public
		 *@author : putera kahfi
		 */
		public function input(){
			$id = $this->uri->segment(3);
			if($id!=='') 
			$data['detail'] = $this->Model_unit->get_detail_data(array('unit_id'=>$id));
			print_r($data);die;
			$this->template->build('input',$data);
		}


		/**
		 * @method : insert
		 * @desc   : method to insert data unit
		 * @access : public
		 * @return : boolean
		 * @author : putera kahfi
		 */
		public function insert(){
			$result = $this->Model_unit->insert();
			 redirect('core_unit');
		}
}