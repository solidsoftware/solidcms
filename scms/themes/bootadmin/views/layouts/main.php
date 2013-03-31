<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $template['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="solid content management system">
    <meta name="author" content="putera kahfi">

    <?php echo $template['metadata']; ?>
    <!-- Le styles -->
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/metro-ui-light.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootmetro.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/scripts/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/scripts/jquery-validation/css/screen.css" rel="stylesheet">

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
    <script src="<?php echo base_url() ?>scms/assets/scripts/jquery-1.8.2.min.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/scripts/jquery.sajax.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/scripts/jquery.form.js"></script>
    
    <script src="<?php echo base_url() ?>scms/assets/scripts/jquery-validation/dist/jquery.validate.js"></script>
    
  </head>

   <body>
    <?php  echo Modules::run('panel_menu/top_panel', $test='');?>
   <br/>

    <div class="container-fluid" id="content">

   
    <?php  
    echo $template['body']; 
    ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>scms/assets/bootmetro/scripts/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/bootmetro/scripts/bootmetro.js"></script>

    <script>
    $(document).ready(function(){
      $("form").validate();
    });
    </script>
  </body>
</html>
