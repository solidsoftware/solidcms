<div class="row-fluid">
<?php echo $breadcrumb ?>
<?php echo $messenger;?>
<?php echo $toppanel ?>
<?php echo $paging ?>
<div class="row-fluid">
<table class="table table-bordered table-striped">
<thead>
	<tr>
	<th>No</th>
	<th><input type="checkbox"/></th>
	<th><?php echo $this->solid_lang->get_lang('head_app_code','table') ?></th>
	<th><?php echo $this->solid_lang->get_lang('head_app_name','table') ?></th>
	<th><?php echo $this->solid_lang->get_lang('head_app_desc','table') ?></th>
	<th>Action</th>
</tr>
</thead>
<tbody>
	<?php foreach($data as $val) :?>
	<tr>
		<td>s</td>
		<td><input type="checkbox"/></td>
		<td><?php echo $val['app_code'] ?></td>
		<td><?php echo $val['app_name'] ?></td>
		<td><?php echo $val['app_desc'] ?></td>
		 <td>
		 <?php
		  $btn_edit = array('icon'=>'icon-pencil',
		  				'label'=>$this->solid_lang->get_lang('edit','button'),
		  				'type'=>'link',
		  				'link'=>$this->solid_dispatcher->get_url('core_application','core_application','input','&id='.$val['app_code']));
		 $btn_delete = array('icon'=>'icon-trashcan',
		  				'label'=>$this->solid_lang->get_lang('delete','button'),
		  				'type'=>'submit',
		  				'extended'=>'onclick ="javascript:return confirm(\'are you sure\')"',
		  				'link'=>$this->solid_dispatcher->get_url('core_application','core_application','delete','&id='.$val['app_code']));
		  
		  echo Modules::run('button',$btn_edit); 
		  echo Modules::run('button',$btn_delete); 
		  ?>
		 </td>
	</tr>
<?php endforeach; ?>
	</tbody>

</table>
</div>
