<?php
class getFile extends Engine{
                       public function getEd($file){
                       
                                              $pm = $this->control($file);
                                              if($pm !='file_error'){ 
                                                                     if($this->validFile($file) == true){ 
                                                                                            if(file_exists($file)){
                                                                                                                   
                                                                                                                   $string = file_get_contents($file);
                                                                                                                   return $string; 
                                                                                                                   
                                                                                            } else { 
                                                                                            
                                                                                                                   return 'File not found!'; 
                                                                                                                   
                                                                                            } 
                                                                     } else{
                                                                                            
                                                                                            return 'invalid_path';
                                                                     
                                                                     }
                                              }  else{ 
                                              
                                              require(DIR_LANGUAGE . LANGUAGE .'/' . LANGUAGE .'.php'); 
                                              $text_error = $error_critical_error;
                                              $key = array_keys($this->session['path']);
                                              
                                                                     for($i=0;$i<count($key);$i++){
                                                                                            for($j=0;$j<count($this->session['path'][$key[$i]]);$j++){ 
                                                                                                                   if(file_exists($this->session['path'][$key[$i]][$j])){ 
                                                                                                                   
                                                                                                                                          @unlink($this->session['path'][$key[$i]][$j]);
                                                                                                                                          
                                                                                                                   }
                                                                                            }
                                                                     } 
                                                                     header('location:editor.php?error=true');
                                              }
                       }
                       public function validFile($pth){ 
                                              $invalid = array(0=>'',);
                                              $pt = explode('/',$pth); 
                                              array_pop($pt); $path = implode('/',$pt).'/'; 
                                              $dir = opendir($path); 
                                              
                                              while(($file = readdir($dir)) !=false){ 
                                                                     if($file !='.' && $file !='..' && $file !='home'){ 
                                                                                            array_push($invalid,$file); 
                                                                     } 
                                              }  
                                              if(strpos('/',$path)){ 
                                                                     $part = explode("/",$path);
                                                                     $key = array_search($part[1], $invalid);
                                                                     if($key > 0){
                                                                                            return false; exit; 
                                                                     } else{ 
                                                                                            return true; 
                                                                     }
                                              } else{
                                                                     return true;
                                              }
                       }
                       public function createFile($data,$language){ 
                                              $string = str_replace("&lt;", "<",$data['data']); 
                                              $string = str_replace("&gt;", ">",$string);
                                              $string = str_replace("&quot;", "\"",$string);  
                       
                                              if($data['filepath'] == '/'){
                                                                     
                                                                     $data['filepath'] = '';
                                                                     
                                              }
                                              if(is_dir(DIR_HOME . $data['filepath'])){
                                                                     if(!fopen(DIR_HOME . $data['filepath'].$data['filename'],"w")){
                                                                                            
                                                                                            $errors = sprintf($language['error_invalid_permission'],DIR_HOME .$data['filepath'],'');  
                                                                                            exit('<div id="error">'. $errors .'<a href="index.php?list='.$data['filepath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                     
                                                                     }
                                              
                                                                     fwrite($fp,$string); 
                                                                     fclose($fp); 
                                              
                                              }  else { 
                                              
                                                                     $error = sprintf($language['error_directory_not_found'],DIR_HOME . $data['filepath'],'');
                                                                     exit ('<div id="error">'.$error.'<a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                      
                                                }
                       }
                       public function editFile($data,$language){
                                              if($data['filepath'] == '/'){
                                                                     $data['filepath'] ='';
                                              }
                       
                       
                                              if(file_exists($data['filename'])){ 
                                                                     $string = str_replace("&lt;", "<",$data['data']); 
                                                                     $string = str_replace("&gt;", ">",$string); 
                                                                     $string = str_replace("&quot;", "\"",$string); 
                                                                     
                                                                     if(is_writable($data['filename'])){
                                                                                            
                                                                                            $fp = fopen($data['filename'],"w"); 
                                                                                            fwrite($fp,$string);
                                                                                            fclose($fp); 
                                                                     
                                                                     } else {
                                                                                            
                                                                                            $errors = sprintf($language['error_invalid_file_permission'],$data['filename'],'');  
                                                                                            exit('<div id="error">'.$errors.'<a href="index.php?list='.$data['filepath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                                                     }
                                              } else{
                                                                     
                                                                     $error = sprintf($language['error_directory_not_found'],$data['filename'],'');
                                                                     exit ('<div id="error">'.$error.'<a href="index.php?list='.$data['dirpath'].'" class="button" style="float:right;">' . $language['button_close'] . '</a></div>');
                                              
                                              }
                       }
                       private function control($pth){ 
                                              $d = opendir('/'); $box = array();
                                              while(($dir = readdir($d)) !=false){
                                                                     
                                                                     if($dir !='.' && $dir !='..' && $dir !='home' && $dir !='var' && $dir !='usr' && $dir !='web' && $dir !='www '&& $dir !='apache' && $dir !='homepage' && $dir !='public_html'){ 
                                                                                            if(is_dir('/'.$dir)){
                                                                                                                   
                                                                                                                   array_push($box,$dir);
                                                                                                                   
                                                                                            }
                                                                     } 
                                              } 
                                              $que = explode('/',$pth);  array_shift($que); 
                                              $pdir = $que[0]; 
                                              
                                              for($i = 0; $i<count($box);$i++){ 
                                                                     if($box[$i] == $pdir){
                                                                                            
                                                                                            return 'file_error'; 
                                                                                            
                                                                     }
                                              }	
                                              if($pth == '/') return 'file_error'; 
                       }
}
?>
