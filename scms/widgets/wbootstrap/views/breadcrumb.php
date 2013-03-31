<?php


$breadcrumb = '';
foreach ($items as $item){
	$breadcrumb .='<ul class="breadcrumb">';
	foreach($item as $list){
	  $font_icon =(isset($list['font-icon'])) ?  'data-icon="'.$list['font-icon'].'"' : "";
      $icon = (isset($list['icon'])) ? $list['icon'] : "";
      $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
      $divider = (isset($list['divider'])) ? '<span class="divider">'.$list['divider'].'</span>' : '<span class="divider"> '.$setup['divider'].'</span>';
      if(isset($list['class']) && $list['class']=='active')
      $breadcrumb .=' <li class="active">'.$list['label'].'</li>';
  	  else
      $breadcrumb .='<li>'.$active_icon.'<a href="'.$list['link'].'">'.$list['label'].'</a>'.$divider.'</li>';
	}
	$breadcrumb .='</ul>';
}
echo $breadcrumb;
?>