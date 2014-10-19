<?php
class getList extends Engine{
                       public function getListing($get = "",$userpath){ 
                                              $pm = $this->control(); 
                                              if($pm !='homepage_error'){ 
                                                                     if($get == '' or $get == '/'){ 
                                                                                            $path = DIR_HOME;  
                                                                                             $root = true;
                                                                      } 
                                                                     $language = $this->error;
                                                                     $href = "";
                                                                     if($get !='' && $get !='/'){
                                                                                             $path = DIR_HOME . $get ; 
                                                                                             $root = false;
                                                                     }  
                                                                      $result = array(); 
                                                                      $i=0;  $j=0;
                                                                       $files = array();
                                                                       
                                                                       if(!opendir($path)){
                                                                                              $errors = sprintf($language['error_invalid_permission'],$path,'');  
                                              
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                    
                                                                                              
                                                                       }
                                                                        $dir = opendir($path);
                                                                         while(($file = readdir($dir)) !=false){ 
                                                                          if($file !='.' && $file !='..'){
                                                                       
                                                                                                                   if($root == true){ 
                                                                                                                    $dirname{$j} = $href . $file.'/'; 
                                                                                                                    $dfile{$i} = $file;
                                                                                                                     } else{ 
                                                                                                                     if(is_dir($path. $file)){ 
                                                                                                                     $dirname{$i} = $get . $file .'/';
                                                                                                                      $dfile{$i} = $file . '/';
                                                                                                                      }
                                                                                                                       
                                                                                                                       } 
                                                                                                                       if(is_file($path.$file)){
                                                                                                                                          array_push($files,$file);
                                                                                                                                          }
                                                                                                                                          if(is_dir($path. $file)){ 
                                                                                                                                          $result['dir'][] = array("path" => $path . $file,"dir" =>  $userpath. $dirname{$j},"dirname" => $dfile{$j}); 
                                                                                                                                          
                                                                                                                     }
                                                                                                                     }
                                                                                                                      $i++; $j++; 
                                                                                               } 
                                                                                     if(isset($result['dir'])){
                                                                                                                                            $result['dir'] = $this->array_msort($result['dir'], array( 'dir'=>SORT_ASC,'dirname'=>SORT_ASC)); 
                                                                                        }
                                                                                                                                            if(count($files) > 0){ 
                                                                                                                                            $sort_order = $this->sortTypes($files,$path);
                                                                                                                                              $arr = $this->array_msort($sort_order, array( 1=>SORT_ASC,0=>SORT_ASC)); 
                                                                                                                                              $result['files'] = $arr;
                                                                                                                                               }  
                                                                                                                       $result['path'] = $path; 
                                                                                                                    return $result;
                                               } 
                                              else {
                                                                     return $pm;
                                              }
                       }
                       private function sortTypes($files,$path){ 
                       
                                              $types = array(); 
                                              
                                              for($i=0;$i<count($files);$i++){ 
                                                                     $ex = explode('.',$files[$i]);  
                                                                     $ex = array_reverse($ex); 
                                                                     $types[] = array(0 =>$files[$i],1 => $ex[0], 2  => $this->kgb($path.$files[$i]), 3 => $path. $files[$i]); 
                                              } 
                                              return $types;
                       }
                       private function kgb($file){ 
                       
                                              $bytes = filesize($file); 
                                              
                                               if($bytes > 1023){
                                                                     return round($bytes/1024,2) . ' kb'; 
                                              } else{
                                                                     return $bytes .' b';
                                              } 
                       }
                       private function array_msort($array, $cols){
                                              
                                              $colarr = array();
                       
                                              foreach ($cols as $col => $order) {
                                                                     
                                                                     $colar[$col] = array();
                                                                     
                                                                     foreach ($array as $k => $row) {
                                                                                            $colarr[$col]['_'.$k] = strtolower($row[$col]); 
                                                                     }
                                              }
                                              
                                              $eval = 'array_multisort(';  foreach ($cols as $col => $order) { $eval .= '$colarr[\''.$col.'\'],'.$order.',';  }  $eval = substr($eval,0,-1).');'; 
                                              eval($eval); 
                                              
                                              $ret = array(); 
                       
                                              foreach ($colarr as $col => $arr) { 
                                              
                                                                     foreach ($arr as $k => $v) { 
                                                                     
                                                                                            $k = substr($k,1); if (!isset($ret[$k])) $ret[$k] = $array[$k];
                                                                                            $ret[$k][$col] = $array[$k][$col];
                                                                     
                                                                     }
                                              } 
                       
                                              return $ret; 
                                              
                       }
                       public function upList($list){ 
                       
                                              $part = explode('/',$list); 
                                              
                                              if(count($part)== 2){ 
                                              
                                                                     return false; 
                                                                     
                                              } elseif(count($part) > 2){ 
                                              
                                                                     $part = array_reverse($part);
                                                                     unset($part[1]); 
                                                                     $part = array_reverse($part); 
                                                                     $path = implode('/',$part); return '?list=' . $path;
                                              }
                       
                       }
                       private function control(){
                                              
                                              $pth = DIR_HOME; $d = opendir('/'); 
                                              $box = array(); 
                                              while(($dir = readdir($d)) !=false){
                                                                     
                                                                     if($dir !='.' && $dir !='..' && $dir !='home' && $dir !='var' && $dir !='usr'){ 
                                                                                            if(is_dir('/'.$dir)){
                                                                                                                   
                                                                                                                   array_push($box,$dir);
                                                                     
                                                                                            }
                                                                     } 
                                              
                                              } 
                                              
                                              $que = explode('/',$pth);
                                              array_shift($que); 
                                              $pdir = $que[0];  
                       
                                              for($i = 0; $i<count($box);$i++){ 
                                                                     if($box[$i] == $pdir){
                                                                                            
                                                                     return 'homepage_error'; 
                                                                     
                                                                     }
                                              }	
                                              
                                              if($pth == '/') return 'homepage_error'; 
                                              
                       }
                       public function getMkdir($data,$language){ 
                       
                                              if(is_dir(DIR_HOME .$data['dirpath'])){
                                              
                                                                     if(is_writable(DIR_HOME .$data['dirpath'])){
                                                                                            mkdir(DIR_HOME .$data['dirpath'] . $data['dirname']);
                                                                     } else{
                                                                                 if(!mkdir(DIR_HOME .$data['dirpath'] . $data['dirname'])){
                                                                                                          $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['dirpath'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].'
                                                                                                                 <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                           }    
                                                                     }
                                              
                                              } else{
                                                              $error = sprintf($language['error_directory_not_found'],DIR_HOME .$data['dirpath'],'');       
                                                             exit('<div id="error">'. $error.' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . ' </a></div>');
                                              }
                       
                       }
                       public function getRmdir($data,$language){ 
                                              if(is_dir(DIR_HOME .$data['dirpath'] . $data['dirname'])){
                                              
                                                                     if(is_writable(DIR_HOME .$data['dirpath'] . $data['dirname'])){
                                                                                           if(!rmdir(DIR_HOME .$data['dirpath'] . $data['dirname'])){           
                                                                                                          $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['dirpath'] . $data['dirname'],'');  
                       
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                           }
                                                                     } else{
                                                                                            if(!rmdir(DIR_HOME .$data['dirpath'] . $data['dirname'])){
                                                                                                                   
                                                                                                          $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['dirpath'] . $data['dirname'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                           }
                                                                     }
                                              
                                              } else{
                                                              $error = sprintf($language['error_directory_not_found'],DIR_HOME .$data['dirpath'] . $data['dirname'],'');     
                                                             exit('<div id="error">'. $error .' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                              }
                       }
                       public function getRenameDir($data,$language){ 
                                              if(is_dir(DIR_HOME . $data['dirpath'] . $data['oldname'])){
                                                                     if(is_writable(DIR_HOME . $data['dirpath'] . $data['oldname'])){
                                                                                            
                                                                                            if(!rename(DIR_HOME .$data['dirpath'] . $data['oldname'], DIR_HOME . $data['dirpath'] . $data['dirname'] )){
                                                                                                          $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['dirpath'] . $data['oldname'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                           }                                        
                                                                     } else{
                                                                                               if(!rename(DIR_HOME .$data['dirpath'] .$data['oldname'],DIR_HOME . $data['dirpath'] .$data['dirname'] )){      
                                                                                                          $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['dirpath'] . $data['oldname'],'');  
                       
                                                                                                                                        $error = error_get_last();
                                                                                                                                        exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                             }    
                                                                    }
                                              } else {
                                                                 
                                                              $error = sprintf($language['error_directory_not_found'],DIR_HOME .$data['dirpath'] . $data['oldname'],'');         
                                                             exit('<div id="error">'.$error .'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                          
                                                          
                                              }
                       }
                       public function getRename($data,$language){ 
                                              if(is_file(DIR_HOME . $data['dirpath'] . $data['oldname'])){
                                                                     if(is_writable(DIR_HOME . $data['dirpath'] . $data['oldname'])){
                                                                                            
                                                                                            if(!rename(DIR_HOME . $data['dirpath'] . $data['oldname'],DIR_HOME . $data['dirpath'] . $data['filename'])){
                                                                                                          $errors = sprintf($language['error_invalid_file_permission'],DIR_HOME .$data['dirpath'] . $data['oldname'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                            }
                                                                                            
                                                                     } else{
                                                                                 if(!rename(DIR_HOME . $data['dirpath'] . $data['oldname'],DIR_HOME . $data['dirpath'] . $data['filename'])){
                                                                                                          $errors = sprintf($language['error_invalid_file_permission'],DIR_HOME .$data['dirpath'] . $data['oldname'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                            }    
                                                                                    
                                                                     }
                                              } else{
                                                                 
                                                              $error = sprintf($language['error_file_not_found'],DIR_HOME .$data['dirpath']. $data['oldname'],'');         
                                                             exit('<div id="error">'. $error . ' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                             
                                              }
                       }
                       public function getRemove($data,$language){ 
                                              if(is_file(DIR_HOME . $data['dirpath'] . $data['remove'])){
                                                                     if(is_writable(DIR_HOME . $data['dirpath'] . $data['remove'])){
                                                                                            
                                                                                            unlink(DIR_HOME . $data['dirpath'] . $data['remove']);
                                                                                            
                                                                     } else{
                                                                                
                                                                                 if(!unlink(DIR_HOME . $data['dirpath'] . $data['remove'])){
                                                                                                          $errors = sprintf($language['error_invalid_file_permission'],DIR_HOME .$data['dirpath'] . $data['remove'],'');  
                                                                                                                 $error = error_get_last();
                                                                                                                 exit('<div id="error">'.$errors.'<br/>'.$error['message'].' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                                            }  
                                                                                    
                                                                     }
                                              } else{
                                                                 
                                                              $error = sprintf($language['error_file_not_found'],DIR_HOME .$data['dirpath'],'');         
                                                             exit('<div id="error">'. $error. ' <a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                             
                                              }
                       }
}
?>
