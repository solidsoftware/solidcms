<?php

$alert ='';
foreach($items as $item){
	$alert .='<div class="alert '.$item['class'].'">';
    $alert .='<button type="button" class="close" data-dismiss="alert"></button>';

	if(isset($item['html'])){
		 $alert .= $item['html'];
	}else{
		 if(is_array($item['title'])){

		 }else{
   		 	$alert .='<h4>'.$item['title'].'</h4>';
		 }
    	 $alert .=$item['content'];
	}
    $alert .='</div>';

}
echo $alert;
?>

