<div class="navbar navbar-inverse" style="position: static;">
                 <div class="navbar-inner">
                   <div class="container">
                     <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </a>
                     <a class="brand" href="#"><i data-icon="}"></i>SCMS<sup>.beta</sup></a>
                     <div class="nav-collapse collapse navbar-inverse-collapse">
                      <?php

                      $top_items ='';
                      $icon ='';


                      foreach($items as $data){

                            foreach($data as $val){

                              $class = (isset($val['class'])) ? $val['class'] : "";
                              $top_items .= '<ul class="nav '.$class.' ">';

                              if(isset($val['items'])){
                                
                                $font_icon =(isset($val['font-icon'])) ?  'data-icon="'.$val['font-icon'].'"' : "";
                                $icon = (isset($val['icon'])) ? $val['icon'] : "";
                                $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                                $top_items .= '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="'.$val['link'].'">'.$active_icon.$val['label'].' <b class="caret"></b></a>';
                                $top_items .= '<ul class="dropdown-menu">';

                                foreach($val['items'] as $sub){ // level 1 menu
                                        if(isset($sub['class']) && $sub['class']=='divider')
                                            $top_items .='<li class="divider"></li>';
                                        elseif(isset($sub['items'])){ 

                                              $font_icon =(isset($sub['font-icon'])) ?  'data-icon="'.$sub['font-icon'].'"' : "";
                                              $icon = (isset($sub['icon'])) ? $sub['icon'] : "";
                                              $active_icon = (isset($font_icon) | isset($icon)) ?'<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                                              $top_items .= '<li class="dropdown-submenu"><a tabindex="-1" href="'.$sub['link'].'">'.$active_icon.$sub['label'].'</a>';
                                              $top_items .= '<ul class="dropdown-menu">';

                                              foreach($sub['items'] as $sub_sub){ // level 2 menu
                                                $font_icon =(isset($sub_sub['font-icon'])) ?  'data-icon='.$sub_sub['font-icon'] : "";
                                                $icon = (isset($sub_sub['icon'])) ? $sub_sub['icon'] : "";
                                                $active_icon = (isset($font_icon) | isset($icon)) ? '<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                                                $top_items .= '<li><a tabindex="-1" href="'.$sub_sub['link'].'">'.$active_icon.$sub_sub['label'].'</a><li>';
                                              }

                                              $top_items .='</ul>';
                                              $top_items .='</li>';
                                    }else{

                                                $font_icon =(isset($sub['font-icon'])) ?  'data-icon="'.$sub['font-icon'].'"' : "";
                                                $icon = (isset($sub['icon'])) ? $sub['icon'] : "";
                                                $active_icon =(isset($font_icon) | isset($icon)) ? '<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";
                                                $top_items .= '<li><a href="'.$sub['link'].'">'.$active_icon.$sub['label'].'</a></li>';
                                    }
                                        
                                }
                                $top_items .='</ul>';
                                $top_items .='</li>';
                              }elseif(isset($val['html'])){
                                  $top_items .=$val['html'];
                              }else{
                                $font_icon =(isset($val['font-icon'])) ?  'data-icon="'.$val['font-icon'].'"' : "";
                                $icon = (isset($val['icon'])) ? $val['icon'] : "";
                                $active_icon = (isset($font_icon) | isset($icon)) ? '<i class="icon '.$icon.'"'.$font_icon.'></i> ' : "";   
                                $top_items .= '<li><a href="'.$val['link'].'">'.$active_icon.$val['label'].'</a></li>';
                              }
                              $top_items .='</ul>';

                            }
                      }


                      echo $top_items;
                      ?>
                     </div><!-- /.nav-collapse -->
                   </div>
                 </div><!-- /navbar-inner -->
               </div>
