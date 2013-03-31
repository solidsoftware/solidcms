<?php /*%%SmartyHeaderCode:169771373951437ec8ac95d8-86163748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78e01dc5909c9f75bf0d598066eb9fc14059dae' => 
    array (
      0 => 'admin/themes/bootadmin/views/layouts/main.php',
      1 => 1363377208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169771373951437ec8ac95d8-86163748',
  'variables' => 
  array (
    'THEMEPATH' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51437ec8bc6565_22128774',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51437ec8bc6565_22128774')) {function content_51437ec8bc6565_22128774($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Components · Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootadmin/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/css/docs.css" rel="stylesheet">
    <link href="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

   <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">SOLID</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">System Management <b class="caret"></b></a>

                <ul class="dropdown-menu">
		  <li><?php echo '<?php'; ?>  echo anchor(site_url('core_menu'),'Menu'); <?php echo '?>'; ?></li>
                  <li><a href="#">User</a></li>
		  <li><a href="#">Group User</a></li>
    		  <li><a href="#">Application</a></li>
		</li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div> <br/>

    <div class="container-fluid">
	
	indexnya adalah di sini

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/jquery.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/bootstrap-affix.js"></script>
    <script src="<?php echo '<?php'; ?> echo $this->template->get_theme_path() <?php echo '?>'; ?>/js/application.js"></script>



  </body>
</html>
<?php }} ?>