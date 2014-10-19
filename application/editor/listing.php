<?php
class  Listing  extends Engine{
                       public function front(){ 
                       
                       if($this->session){
                                              
                                              $getlist =$this->session['result']['getlist'];
                                              
                       } 
                       
                       // Start  getList Class
                       $this->results($getlist); 
                       $list = $this->result[$getlist];
      
                       if(!isset($this->get['list'])){ 
                       
                                              $_['getpath'] = 'index.php?list=';  
                                              $_['mkdir'] = 'index.php?mkdir=create'; 
                                              $_['rename_dir'] ='index.php?rendir=';
                                              $_['rename'] ='index.php?rename=';
                                              $_['remove'] ='index.php?remove=';
                                              $_['rmdir'] ='index.php?rmdir=';
                                              $_['dirpath'] = '';
                       
                       } else { 
                       
                                              $_['getpath'] = 'index.php?list=' . $this->get['list']; 
                                              $_['rename_dir'] ='index.php?list=' .$this->get['list'] .'&rendir=';
                                              $_['rename'] ='index.php?list=' .$this->get['list'] .'&rename=';
                                              $_['remove'] ='index.php?list=' .$this->get['list'] .'&remove=';
                                              $_['rmdir'] ='index.php?list=' .$this->get['list'] .'&rmdir=';
                                              $_['mkdir'] = $this->link('index.php?list='.$this->get['list']. '&mkdir=create'); 
                                              $_['dirpath'] = $this->get['list'];
                       
                       }
                       
                                              $_['fwrite'] = $this->link('index.php?create=file&path=');
                                              $_['flist'] = 'index.php?list=';
                                              $_['open'] = 'index.php?file=';
                                              $_['index'] = 'index.php';
                       /*  GET  */
                       if(isset($this->get['mkdir'])) { 
                       
                                              if(!isset($this->post['create_dir'])){
                                                                     $this->template(DIR_TEMPLATE . 'editor/mkdir.tpl',$_);
                                              }
                       
                       } 
                       
                       
                       if(isset($this->get['rename'])){ 
                       
                                              if(!isset($this->post['rename_file'])){
                                                                     $_['renamefile'] = $this->get['rename']; 
                                                                     $this->template(DIR_TEMPLATE . 'editor/rename_file.tpl',$_);
                                              }
                       
                       } 
                       
                       if(isset($this->get['remove'])){ 
                       
                                              if(!isset($this->post['remove_file'])){
                                                                     $_['removefile'] = $this->get['remove']; 
                                                                     $this->template(DIR_TEMPLATE . 'editor/remove_file.tpl',$_);
                                              }
                       
                       } 
                       
                       if(isset($this->get['rmdir'])){ 
                                              if(!isset($this->post['rmdir'])){
                                                                     $_['dirname'] = $this->get['rmdir']; 
                                                                     $this->template(DIR_TEMPLATE . 'editor/remove_dir.tpl',$_);
                                              }
                       } 
                       
                       if(isset($this->get['rendir'])){ 
                       
                                              if(!isset($this->post['rename_dir'])){
                                                                     $_['dirname'] = $this->get['rendir']; 
                                                                     $this->template(DIR_TEMPLATE . 'editor/rename_dir.tpl',$_);
                                              }
                       
                       } 
                       
                       
                       /*   POST  */
                       
                       if(isset($this->post['rename_file']) && isset($this->post['filename'])){ 
                       
                                                                     $list->getRename($this->post,$this->error); 
                                                                     $this->redirect($this->post['getpath']);
                       } 

                       if(isset($this->post['remove_file']) && isset($this->post['remove'])){ 

                                              $list->getRemove($this->post,$this->error); 
                                              $this->redirect($this->post['getpath']);
                       } 
                       
                       
                       if(isset($this->post['create_dir']) && isset($this->post['dirname'])){ 
                       
                                              $list->getMkdir($this->post,$this->error);
                                              $this->redirect($this->post['getpath']);
                       
                       }
                       
                       if(isset($this->post['rmdir']) && isset($this->post['dirname'])){ 
                       
                                                                     $list->getRmdir($this->post,$this->error);
                                                                     $this->redirect($this->post['getpath']);
                       
                       }
                       
                       if(isset($this->post['rename_dir']) && isset($this->post['dirname'])){ 
                       
                                              $list->getRenameDir($this->post,$this->error);
                                              $this->redirect($this->post['getpath'],$this->language['error']);
                       
                       }


                       if(isset($this->get['list'])){
                                              
                                              $this->get['list'] = $this->get['list'];
                                              $_['uplist'] = $list->upList($this->get['list']);  
                       
                       } else {
                                              
                                              $this->get['list'] = "";
                       
                       }

                       $userpath = "";
                       $result = $list->getListing($this->get['list'],$userpath);
                       
                       if($this->get['list']){ 
                       
                                              $_['show_directory'] = $this->get['list']; 
                                              $_['root'] = false;
                       
                       } else { 
                       
                                               $_['show_directory'] = '/';
                                               $_['root'] = true;
                        
                       } 
                       
                       if($result !='homepage_error'){ 
                        $_['result'] = $result;
             
                                              $this->template(DIR_TEMPLATE . 'editor/file_list.tpl',$_); 

                       } else{ 
                       
                                              $_['text_error'] = $error_critical_error; 
                                              
                                              $this->template(DIR_TEMPLATE . 'error/error.tpl',$_); 
                                              
                                              $key = array_keys($_SESSION['path']);
                                              
                                                                     for($i=0;$i<count($key);$i++){ 
                                                                                            for($j=0;$j<count($_SESSION['path'][$key[$i]]);$j++){
                                                                                                                   
                                                                                            @unlink($_SESSION['path'][$key[$i]][$j]); 
                                                                                            header('location:index.php?error=true');
                                                                                            
                                                                                             }
                                                                     }
                       }
                       
   }
}
?>
