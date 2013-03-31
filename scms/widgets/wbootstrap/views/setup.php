<?php 

if(isset($css)){
	foreach ($css as $links){
		echo  '<link href="'.$links.'.css" rel="stylesheet">';
	}
}

if(isset($js)){
	 foreach($js as $scr){
	 echo '<script src="'.$scr.'"></script>';
	 }
}

?>