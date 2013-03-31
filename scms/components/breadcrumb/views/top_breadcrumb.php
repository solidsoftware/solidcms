<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <span class="divider">/</span></li>
	{if $link!=''}
	{foreach from=$link key=k item=data}
	  <li><a href="{$data.link}">{$data.label}</a> <span class="divider">/</span></li>
	{/foreach}
	{/if}
  <li class="active">{$active}</li>
</ul>
