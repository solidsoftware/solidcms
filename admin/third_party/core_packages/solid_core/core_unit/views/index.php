<div class="row-fluid">
<div class="span12">
<a class="btn" href="<?php echo site_url('core_unit/input'); ?>"><i class="icon icon-plus-2"></i> Add</a>
<a class="btn" href="<?php echo site_url('core_unit/delete'); ?>"><i class="icon icon-remove"></i> Delete Selected Data</a>
</div>
</div><br/>

<div class="row-fluid">
<table class="table table-bordered table-striped">
<thead>
	<tr>
	<th>No</th>
	<th><input type="checkbox"/></th>
	<th>Unit Name</th>
	<th>Description</th>
	<th>Action</th>
</tr>
</thead>
<tbody>
	<?php foreach($data as $val) : print_r($val); ?>
	<tr>
		<td>s</td>
		<td><input type="checkbox"/></td>
		<td><?php echo $val['unit_name'] ?></td>
		<td><?php echo $val['unit_desc'] ?></td>
		 <td>
		 	<a class="btn btn-mini btn-primary" href="<?php echo site_url('core_unit/input/'.$val['unit_id']); ?>"><i class="icon icon-pencil"></i> edit</a>
		 </td>
	</tr>
<?php endforeach; ?>
	</tbody>

</table>
</div>
