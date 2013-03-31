<?php

  $btngroup ='';
  foreach($items as $data){
   
    foreach($data as $val){
      $position =(isset($val['position'])) ? $val['position'] : "";
      $btngroup .=' <div class="btn-group '.$position.'">';

      $font_icon =(isset($val['font-icon'])) ?  'data-icon="'.$val['font-icon'].'"' : "";
      $icon = (isset($val['icon'])) ? $val['icon'] : "";
      $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                
      $btngroup .= '<button class="btn dropdown-toggle" data-toggle="dropdown" href="test.php">'.$active_icon.$val['label'].'<span class="caret"></span></button>';
    
      if(isset($val['items'])){

        $btngroup .='<ul class="dropdown-menu">';
        foreach($val['items'] as $list){
              $font_icon =(isset($list['font-icon'])) ?  'data-icon="'.$list['font-icon'].'"' : "";
              $icon = (isset($list['icon'])) ? $list['icon'] : "";
              $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                   

            if(isset($list['items'])){
                $btngroup .='<li class="dropdown-submenu"><a tabindex="-1" href="'.$list['link'].'">'.$active_icon.$list['label'].'</a>';
                $btngroup .= '<ul class="dropdown-menu">';
               foreach($list['items'] as $sub_item){
                  $font_icon =(isset($sub_item['font-icon'])) ?  'data-icon="'.$sub_item['font-icon'].'"' : "";
                  $icon = (isset($sub_item['icon'])) ? $sub_item['icon'] : "";
                  $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                  $btngroup .= '<li><a tabindex="-1" href="'.$sub_item['link'].'">'.$active_icon.$sub_item['label'].'</a><li>';
                                    
               }
              $btngroup .='</li>';  
              $btngroup .='</ul>';//end ul class dropdown-menu                           

            }else{
              if(isset($list['class']) && $list['class']==='divider'){
                  $btngroup .='<li class="divider"></li>';
              }else{
                    $btngroup .='<li><a href="'.$list['link'].'">'.$active_icon.$list['label'].'</a></li>';
          
              }
          }
        }
        
      }
      $btngroup .='</ul>';
      $btngroup .='</div>'; // end div class .btn-group
    }
    
  }
  echo $btngroup;


?>