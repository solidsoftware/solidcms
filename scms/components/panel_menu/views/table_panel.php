<div class="panel">

<?php

foreach($menus as $val){
	$menus = array('icon'=>$val['icon'],
		  		'label'=>$val['label'],
		  		'link'=>$val['link'],
		  		'type'=>$val['type']);
		  
	echo Modules::run('button',$menus);

}	
?>


</div><br/>
