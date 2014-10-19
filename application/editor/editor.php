<?php
class Editor extends Engine{
                       public function open(){
                       
                                              if($this->session){
                                              
                                                                     $getfile =$this->session['result']['getfile']; 
                                              
                                              } 
                       
                                              $this->results('getfile');
                                              $ed = $this->result[$getfile]; 
                       
                       
                                              if(isset($this->get['file'])) $gt = 'file'; 
                       
                       
                                              if(isset($this->get['create'])){ 
                                              
                                                                     $language = $this->texts();
                                                                     $gt = 'path'; 
                                                                     $_['action'] = 'index.php?create=new';
                                                                     if(isset($this->post['send']) && isset($this->post['filename'])){ 
                                                                     
                                                                     $add =  $ed->createFile($this->post,$this->error); 
                                                                     $this->redirect("index.php?list=".$this->post['filepath']); 
                                                                     
                                                                     } 
                                                                     
                                                                     if(!$this->post){ 
                                                                     
                                                                                            $paths = explode('/',$this->get['path']);
                                                                                            $paths2 = explode('/',$this->get['path']);
                                                                                            
                                                                                            $f = array_reverse($paths); 
                                                                                            $file = $f[0];  
                                                                                            $home = explode('/',DIR_HOME);
                                                                                            $check = $home; 
                                                                                            array_pop($check); 
                                                                                            
                                                                                            
                                                                                            $cnt = count($home);
                                                                                            $cnt2 = count($paths2); 
                                                                                            $x = $cnt2 - $cnt;
                                                                                            $s = $cnt2 - $x-1; 
                                                                                            $z = array(); 
                                                                     
                                                                                            if($paths2){
                                                                                                                   for($i = $s; $i<count($paths2);$i++){ 
                                                                                                                   
                                                                                                                   $z[$i] = $paths2[$i]; 
                                                                                                                   
                                                                                                                   } 
                                                                                            array_pop($z); 
                                                                                            }
                                                                     
                                                                                            $_['savepath'] = implode('/',$z) . '/' ; 
                                                                                            
                                                                                            $_['text_create_file'] = sprintf($language['text_create_file'],$this->get['path'],1); 
                                                                                            $_['filex'] = $this->link('index.php?create=file&path=' .$this->get['path']); 
                                                                                            $_['filepath'] = 'index.php?create=file&path='.$this->get['path']; 
                                                                                            
                                                                                            $paths = explode('/',$this->get['path']);
                                                                                            $cnt2 = count($paths); 
                                                                                            
                                                                                            $home = explode('/',DIR_HOME);
                                                                                            
                                                                                            $cnt = count($home);
                                                                                            $x = $cnt2 - $cnt;
                                                                                            $s = $cnt2 - $x-1; 
                                                                                            $z = array(); 
                                                                     
                                                                                            if($paths){
                                                                                                                   
                                                                                                                   for($i = $s; $i<count($paths);$i++){ 
                                                                                                                                          $z[$i] = $paths[$i]; 
                                                                                                                   } 
                                                                                                                   
                                                                                                                   array_pop($z); 
                                                                                            
                                                                                            }
                                                                     
                                                                                            $_['cancel'] = 'index.php?list=' .$_['savepath']; 
                                                                                            $this->template(DIR_TEMPLATE . 'editor/editor_menu.tpl',$_);
                                                                                            $this->template(DIR_TEMPLATE . 'editor/create_file.tpl',$_); 
                                                                     } 
                                              } 
                       
                       
                                              if(isset($this->get['file'])){ 
                                                                     $paths = explode('/',$this->get[$gt]);
                                                                     $paths2 = explode('/',$this->get[$gt]);
                                                                     
                                                                     $f = array_reverse($paths); 
                                                                     $file = $f[0];  
                                                                     $home = explode('/',DIR_HOME);
                                                                     $check = $home; 
                                                                     array_pop($check); 
                                                                     $_['checkbox_path'] = 'index.php?file=' . implode('/',$check); 
                                                                     
                                                                     $_['filename'] = $this->get['file']; 
                                                                     $_['filex'] = 'index.php?file=' . $this->get['file']; 
                                                                     
                                                                     $cnt = count($home);
                                                                     $cnt2 = count($paths2); 
                                                                     $x = $cnt2 - $cnt;
                                                                     $s = $cnt2 - $x-1; 
                                                                     $z = array(); 
                                              
                                                                     if($paths2){
                                                                                            for($i = $s; $i<count($paths2);$i++){ 
                                                                                            
                                                                                                                   $z[$i] = $paths2[$i]; 
                                                                                            
                                                                                            } 
                                                                                            array_pop($z); 
                                                                     }
                                              
                                                                     $_['filepath'] = 'index.php?file=' . implode('/',$paths); 
                                                                     $savepath = implode('/',$z) . '/' ; 
                                                                     
                                                                     $_['savepath'] = '&list=' . $savepath; 
                                                                     
                                                                     if(count($paths) > count(explode('/',DIR_HOME))){ 
                                                                     
                                                                                            $_['cancel'] = 'index.php?list='.$savepath;  
                                                                     
                                                                     }  
                                                                     if(count($paths) == count(explode('/',DIR_HOME))){ 
                                                                     
                                                                                            $_['cancel'] = 'index.php';
                                                                     
                                                                     } 
                                              
                                                                     if(!$this->post){
                                                                     
                                                                                            
                                                                                            $result = $ed->getEd($this->get['file']); 
                                                                                            
                                                                                            if($result !='') {
                                                                                                                   
                                                                                                                   $result = $this->linewrap($result,145,"\n",1);
                                                                                                                   $_['result'] = $this->replace($result);
                                                                                                                   
                                                                                            } else{
                                                                                                                   $_['result'] = '';
                                                                                            }
                                                                     } 
                                              
                                                                     if(isset($this->post['send']) && isset($this->post['filename'])){ 
                                                                     
                                                                                            $ed->editFile($this->post,$this->error); 
                                                                                            if(isset($this->post['filepath'])){ 
                                                                                                                   if($this->post['filepath'] !=''){ 
                                                                                                                                          $lst = '?list=';
                                                                                                                   }
                                                                                            }
                                                                                            $this->redirect("index.php". $lst . $this->post['filepath']);
                                                                     } 
                                                                     if(!$this->post){ 
                                                                                            $this->template(DIR_TEMPLATE . 'editor/editor_menu.tpl',$_); 
                                                                                            $this->template(DIR_TEMPLATE . 'editor/editor.tpl',$_);
                                                                     }
                                              } 
                       }

                       private function linewrap($string, $width, $break, $cut) {
                                              $array = explode("\n", $string);
                                              $string = "";
                                              foreach($array as $key => $val) {
                                                                     $string .= wordwrap($val, $width, $break, $cut);
                                                                     $string .= "\n";
                                              }
                                              return $string;
                       }
                       private function replace($data){
                                              $data = str_replace("<","&lt",$data);
                                              return $data;
                       }
}
?>
