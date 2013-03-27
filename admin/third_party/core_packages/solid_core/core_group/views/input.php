 <form class="form-horizontal" action="<?php echo site_url('core_group/insert'); ?>" method="POST">
<table >
<tr>
<td>Group Name</td>
<td>
	<input type="text" name="group" id="inputGroup" placeholder="Group" class="{required:true}">
</td>
</tr>
<tr>
<td>Group Description</td>
<td>
	<input type="text" name="group_desc" id="groupDesc" placeholder="Group Description" class="{required:true}">
 </td>
</tr>		
<tr>
	<td>
		 <button type="submit" class="btn">Save</button>
	</td>
	</tr>
</table>

</form>