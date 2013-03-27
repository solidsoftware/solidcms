<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(APPPATH.'/third_party/core_packages/libraries/smarty/libs/Smarty.class.php');
 
class CI_Smarty extends Smarty {


	
 
    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
 
        parent::__construct();
	$this->_smarty_init();

	
    }


    private function _smarty_init(){
	$this->setConfigDir(APPPATH.'third_party/solid_base/libs/smarty/configs');
	$this->setCompileDir(APPPATH.'/cache/smarty/compiled');
	$this->setCacheDir(APPPATH.'/cache/smarty/cached');

        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // Does something <img src="http://searchdaily.net/wp-includes/images/smilies/icon_smile.gif" alt="icon smile CodeIgniter 2 Smarty 3 integration" class="wp-smiley" title="CodeIgniter 2 Smarty 3 integration">
        if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }


	$ci->load->library('template');
	$ci->load->config('template');
        $this->assign('APPPATH', APPPATH );
        $this->assign('BASEPATH', BASEPATH );
	$themePath = $ci->config->item('theme_locations','0').$ci->config->item('theme');
	$this->assign('THEMEPATH', $themePath);

        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 120;
 
        //log_message('debug', "Smarty Class Initialized");
    }

 
    function view($template_name) {
        if (strpos($template_name, '.') === FALSE && strpos($template_name, ':') === FALSE) {
            $template_name .= '.php';
        }
        parent::display($template_name);
    }

 
 
}
 
?>
