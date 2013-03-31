<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * class to to generate button component
 * @author : putera kahfi
 */

class Button extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	/**
	 * method to generate button
	 * @param  $putton
	 * @return void
	 * @access public
	 * sample param
	 * =========================================================
	 * 	 $btn_delete = array('icon'=>'icon-pencil',
	 *      'label'=>$this->solid_lang->get_lang('delete','button'),
	 *      'type'=>'link',
	 *      'extended'=>'onclick ="javascript:return confirm(\'are you sure\')"',
	 *      'link'=>$this->solid_dispatcher->get_url('core_application','core_application','delete','&id='.$val['app_code']));	  
	 */
	public function index($button){
		extract($button);
		
		$this->smarty->template_dir=APPPATH.'components/button/views';
		$this->smarty->caching = false;
		$this->smarty->assign('label',$label);
		$this->smarty->assign('link',$link);
		$this->smarty->assign('icon',$icon);
		$this->smarty->assign('type',$type);
		$this->smarty->assign('size','btn-mini');
		$this->smarty->assign('id',(isset($id) ? $id : $label));
		$this->smarty->assign('ext_attr',(isset($extended)) ? $extended :"") ;
		$this->smarty->view('index');
	}



}