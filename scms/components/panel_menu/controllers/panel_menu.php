<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * component panel menu
 * @author putera kahfi
 */

class Panel_menu extends MX_Controller{

	function __construct(){
		parent::__construct();
	}

	/**
	 * method to generate table panel (panel of control data such add, delete)
	 * @access public
	 * sample params
	 * ==============================================================================
	 * $panel =array(
	 * 'menus' =>array(
	 *   array('icon'=>'add','type'=>'button','link'=>site_url(),'label'=>'testing'),
	 *   array('icon'=>'add','type'=>'link','link'=>site_url(),'label'=>'testing2'),
	 *   ));
	 * ========================================================
	 */
	public function table_panel($panel){
		extract($panel);
		$data['menus']=$menus;
		$this->load->view('table_panel',$data);
	}

	/**
	 * method to generate top panel
	 * @param  $items
	 * @return void
	 * @dependency  bootstrap widget::navbar
	 */
	public function top_panel($items=''){
		$data['items'][]= array(
						array('font-icon'=>'&#x0021;','label'=>'Dashboard','link'=>site_url()),
						array('font-icon'=>'&#x006e;','label'=>'System Management','link'=>'#',
							'items'=>array(
								array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
								array('icon'=>'icon-bookmark','label'=>'Modules ','link'=>site_url('c=core_module')),
								array('icon'=>'icon-bookmark','label'=>'Group','link'=>site_url('c=core_group')),
								array('class'=>'divider'),
								array('icon'=>'icon-bookmark','label'=>'User','link'=>site_url('c=core_user')),
								array('icon'=>'icon-bookmark','label'=>'Application','link'=>"#",
									'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Application','link'=>site_url('c=core_application')),
										array('icon'=>'icon-bookmark','label'=>'Application Unit','link'=>site_url('c=core_group'))
									)
								),
									array('icon'=>'icon-bookmark','label'=>'Menu','link'=>"#",
									'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Menu','link'=>site_url('c=core_application')),
										array('icon'=>'icon-bookmark','label'=>'Group Menu','link'=>site_url('c=core_group')),
										array('icon'=>'icon-bookmark','label'=>'Actions','link'=>site_url('c=core_group')),
									)
								),
						)));

$data['items'][]= array(
						array('font-icon'=>'&#x004b;','label'=>'TV Management','link'=>'#',
							'items'=>array(
								array('font-icon'=>'&#x0049;','label'=>'Agendas ','link'=>site_url('c=core_module')),
								array('font-icon'=>'&#x004b;','label'=>'TV Program','link'=>site_url('c=core_group')),
								array('font-icon'=>'&#x0024;','label'=>'Newspool editor','link'=>site_url('c=core_group')),
								array('class'=>'divider'),
								array('font-icon'=>'&#x0038;','label'=>'Schedule','link'=>site_url('c=core_user'),
								'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Today Schedule','link'=>site_url('c=core_application')),
										array('icon'=>'icon-bookmark','label'=>'Agenda event','link'=>site_url('c=core_application')),
									)),
								array('font-icon'=>'&#x0028;','label'=>'Adds','link'=>"#",
									'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Banner','link'=>site_url('c=core_application')),
									)
								),
									array('font-icon'=>'&#xe017;','label'=>'Content','link'=>"#",
									'items'=>array(
										array('font-icon'=>'&#x002a;','label'=>'Photo Gallery','link'=>site_url('c=core_application')),
										array('font-icon'=>'&#x0040;','label'=>'Contact','link'=>site_url('c=core_application')),
										array('font-icon'=>'&#xe12a;','label'=>'About Us','link'=>site_url('c=core_group')),
										array('font-icon'=>'&#xe02b;','label'=>'Polling','link'=>site_url('c=core_group')),
										array('font-icon'=>'&#xe040;','label'=>'News Ticket(announcement)','link'=>site_url('c=core_group')),
									)
								),
						)));

$data['items'][]= array(
						array('font-icon'=>'&#x006e;','label'=>'SCSM extras','link'=>'#',
							'items'=>array(
								array('font-icon'=>'&#x0038;','label'=>'Widgets','link'=>"#",
								'items'=>array(
										array('icon'=>' icon-twitter-2','label'=>'bootstrap','link'=>site_url('c=bootstrap&d=widgets')),
									)),
								array('font-icon'=>'&#x0038;','label'=>'Extensions','link'=>"#",
								'items'=>array(
										array('icon'=>'icon-twitter-2','label'=>'Google map','link'=>site_url('c=mgooglemaps&d=extensions')),
									)),
						)));



				

		
		$data['items'][]= array(
						array('font-icon'=>'`','label'=>'User Info','link'=>'#','class'=>'pull-right',
							'items'=>array(
								array('font-icon'=>'&#xe15e;','label'=>'view profile','link'=>site_url('c=core_unit')),
								array('font-icon'=>'&#xe194;','label'=>'edit profile ','link'=>site_url('c=core_application')),
								array('class'=>'divider'),
								array('font-icon'=>'&#xe204;','label'=>'change password','link'=>site_url('c=core_user')),
								array('font-icon'=>'&#x0057;','label'=>'Logout','link'=>site_url()),
						)));




		$data['items'][]= array(
						array('icon'=>'icon-plus','label'=>'User Info','link'=>'#','class'=>'pull-right','html'=>'<form class="navbar-search pull-left" action="">
                         <input type="text" class="search-query span2" placeholder="Search">
                       </form>')
						);
		$data['items'][]= array(
						array('icon'=>'icon-plus','label'=>'User Info','link'=>'#','class'=>'pull-right','html'=>'<form class="navbar-search pull-left" action="">
                         <input type="text" class="search-query span2" placeholder="Search">
                       </form>')
						);


		return Modules::run('wbootstrap/navbar', $data);
	}
}