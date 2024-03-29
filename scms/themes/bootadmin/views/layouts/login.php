<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SOlID CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/bootmetro.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/metro-ui-light.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/assets/bootmetro/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>scms/themes/scripts/google-code-prettify/prettify.css" rel="stylesheet">

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
        </div>
      </div>
    </div> <br/><br/>

    <div class="container-fluid">

	<?php echo $template['body']; ?>
    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/bootmetro/scripts/jquery-1.8.2.min.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/scripts/jquery.validate.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/bootmetro/scripts/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>scms/assets/bootmetro/scripts/bootmetro.js"></script>

    <script>
    $(document).ready(function(){
      $("form").validate();
    });
    </script>
  </body>
</html>
