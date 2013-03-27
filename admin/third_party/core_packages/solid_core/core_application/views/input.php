<script type="text/javascript" src="<?php echo base_url(); ?>admin/third_party/core_packages/solid_core/core_application/scripts/core_application.js"> </script>
<form id="form-input" class="form-horizontal" action="<?php echo $action ?>" method="POST">
<table >
<tr>
<td>Application Code</td>
<td>
		<?php

   

	$data = array(
              'name'        => 'app_code',
              'id'          => 'app_code',
              'value'       => (isset($detail['app_code'])) ? $detail['app_code'] : "" ,
              'maxlength'   => '100',
              'size'        => '50',
              'class'		=> 'input '
            );

	echo form_hidden('data_id',isset($detail['app_code']) ? $detail['app_code'] : "" ) ;
	echo form_input($data);
	?>
</td>
</tr>
<tr>
<td>Application Name</td>
<td>
	<?php
	$data = array(
              'name'        => 'app_name',
              'id'          => 'app_name',
              'value'       => (isset($detail['app_name'])) ?  $detail['app_name'] : "",
              'maxlength'   => '100',
              'size'        => '50',
              'class'		    => 'input'
            );

	echo form_input($data);
	?>
</td>
</tr>
<tr>
<td>Application Description</td>
<td>

	<?php
	$data = array(
              'name'        => 'app_desc',
              'id'          => 'app_desc',
              'value'       => (isset($detail['app_desc'])) ? $detail['app_desc'] : "",
              'maxlength'   => '100',
              'size'        => '50',
              'class'		=> 'input'
            );

	echo form_input($data);
	?>

</td>
</tr>		
<tr>
	<td>
		 <button type="submit" class="btn">Save</button>
		 <button type="submit" class="btn">Cancel</button>
	</td>
	</tr>
</table>

</form>