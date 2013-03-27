<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Components · Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $template ['metadata'] ?>

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/bootmetro.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/metro-ui-light.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/bootadmin/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/themes/scripts/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/admin/assets/scripts/jquery-validation/css/screen.css" rel="stylesheet">

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

    <!-- scripts -->
    <script src="<?php echo base_url() ?>admin/themes/bootadmin/scripts/jquery-1.8.2.min.js"></script>
    <script src="<?php echo base_url() ?>admin/assets/scripts/jquery-validation/dist/jquery.validate.js"></script>
    
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
                <a href="<?php echo site_url('breadcrumb') ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-th-list icon-white"></i>  Components<b class="caret"></b></a>
                <ul class="dropdown-menu">
		  <li><?php  echo anchor(site_url('components'),'components'); ?></li>
		  <li><?php  echo anchor(site_url('breadcrumb'),'breadcrumb'); ?></li>
                  <li><?php  echo anchor(site_url('messenger'),'messenger'); ?></li>
		  <li><?php  echo anchor(site_url('paging'),'paging'); ?></li>
    		  <li><?php  echo anchor(site_url('combobox'),'combobox'); ?></li>
		</li>
                </ul>
              </li>
 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">System Management <b class="caret"></b></a>
                <ul class="dropdown-menu">
		  <li><?php  echo anchor(site_url('c=core_menu'),'Menu'); ?></li>
      <li><?php  echo anchor(site_url('c=core_unit'),'Unit'); ?></li>
      <li><?php  echo anchor(site_url('c=core_application'),'Application'); ?></li>
		  <li><?php  echo anchor(site_url('c=core_group'),'Group'); ?></li>
		</li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <a class="btn btn-danger" href="<?php echo site_url('c=core_login'); ?>"><i class="icon icon-exit"></i> Logout</a>
            </form>
             <div class="btn-group pull-right">
            <button class="btn btn-mini">Language</button>
              <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
              <!-- dropdown menu links -->
              <li><a href="<?php echo site_url('c=core_language&a=set_language&lang=english') ?>">english</a></li>
              <li><a href="<?php echo site_url('c=core_language&a=set_language&lang=bahasa') ?>">bahasa</a></li>
              </ul>
              </div>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div> <br/><br/><br/>

    <div class="container-fluid">

	<?php echo $template['body']; ?>
    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo base_url() ?>admin/themes/bootadmin/scripts/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>admin/themes/bootadmin/scripts/bootmetro.js"></script>

    <script>
    $(document).ready(function(){
      $("form").validate();
    });
    </script>
  </body>
</html>
