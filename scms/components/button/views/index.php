{if $type=='link'}
<a href="{$link}" class="btn {$size}" {$ext_attr}>
	{if $icon!=''}<i class="icon {$icon}"></i>{/if} {$label}
</a> 
{else if $type=='submit'}
<input class="btn {$size}" type="submit" id="{$id}" name="{$id}" value="{$label}" {$ext_attr}  />
{else if $type=='button'}
<button class="btn {$size} " name="{$id}" id="{$id}" {$ext_attr}>
	{if $icon!=''}<i class="icon {$icon}"></i>{/if} {$label}</button>
{/if}

