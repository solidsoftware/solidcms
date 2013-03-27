 <form class="form-horizontal" action="<?php echo site_url('core_unit/insert'); ?>" method="POST">
<table >
<tr>
<td>Unit Name</td>
<td>
	<input type="text" name="group" id="inputUnit" placeholder="Unit" class="{required:true}">
</td>
</tr>
<tr>
<td>Unit Description</td>
<td>
	<input type="text" name="group_desc" id="unitDesc" placeholder="Unit Description" class="{required:true}">
 </td>
</tr>		
<tr>
	<td>
		 <button type="submit" class="btn">Save</button>
	</td>
	</tr>
</table>

</form>