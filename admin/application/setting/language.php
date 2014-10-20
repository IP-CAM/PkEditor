<?php
class  Language  extends Engine{
                       public function index(){ 
                       
                                              $this->results('getmysql');
                                              $results = $this->result['getmysql']; 
                                              $_['languages'] = array();
                                              $languages = $results->getLanguages();
                                              
                                              foreach($languages as $language){
                                                                     $status = $results->getSetting($language['name'],$language['localisation']);
                                                                     $_['languages'][] = array('language_id'  => $language['language_id'],
                                                                                            'name'  => $language['name'],
                                                                                            'code' => $language['code'],
                                                                                            'localisation' => $language['localisation'],
                                                                                            'status' => $status);
                                              }
                                              $_['add'] = HTTP_ADMIN . 'index.php?set=language&add=new';
                                              $_['edit'] = HTTP_ADMIN . 'index.php?set=language&edit=';
                                              $_['action'] = HTTP_ADMIN . 'index.php?set=language';  
                                              $_['cancel'] = HTTP_ADMIN . 'index.php?set=language';  
                       
                                              $this->template(DIR_TEMPLATE . 'setting/language.tpl',$_);     
                       
                                              if(isset($this->get['edit'])){
                                              
                                                                     $_['language'] = $results->getLanguage($this->get['edit']);
                                                                     $_['status'] = $results->getSetting($_['language']['name'],$_['language']['localisation']);
                                                                     $this->template(DIR_TEMPLATE . 'setting/edit_language.tpl',$_);     
                                              
                                              } 
                                              if(isset($this->get['add'])){
                                              
                                                                     $this->template(DIR_TEMPLATE . 'setting/add_language.tpl',$_);     
                                              
                                              }
                       
                                              if(isset($this->post['edit'])){
                                                                     
                                                                     if(isset($this->post['language']) && !isset($this->post['delete'])){
                                                                                            
                                                                                            $results->updateLanguage($this->post);
                                                                     
                                                                     } elseif(isset($this->post['delete'])){
                                                                                            
                                                                                            $results->deleteLanguage($this->post['delete']);
                                                                     
                                                                     }
                                              
                                                                     $this->redirect(HTTP_ADMIN . 'index.php?set=language');
                                                                     
                                              }
                                              if(isset($this->post['add'])){
                                                                     if($this->validate($this->post)){
                                                                                            
                                                                                            $results->addLanguage($this->post);
                                                                                            $this->redirect(HTTP_ADMIN . 'index.php?set=language');
                                                                     
                                                                     } else{
                                                                                            if(isset($this->post['name'])){
                                                                                                                   
                                                                                                                   $_['name'] = $this->post['name'];
                                                                                            
                                                                                            } else{
                                                                                                                   
                                                                                                                   $_['name'] = '';
                                                                                            
                                                                                            }  
                                                                                            if(isset($this->post['code'])){
                                                                                                                   
                                                                                                                   $_['code'] = $this->post['code'];
                                                                                            
                                                                                            } else{
                                                                                                                   
                                                                                            $_['code'] = '';
                                                                                            
                                                                                            }
                                                                                            if(isset($this->post['localisation'])){
                                                                                                                   
                                                                                                                   $_['localisation'] = $this->post['localisation'];
                                                                                            
                                                                                            } else{
                                                                                                                   
                                                                                                                   $_['localisation'] = '';
                                                                                            
                                                                                            }
                                                                                            $this->template(DIR_TEMPLATE . 'error/add_language.tpl',$_);    
                                                                     }
                                              }
                       }
                       private function validate($data){
                                              
                                              $error = $this->error;
                                              $warning = '';
                                              
                                              if(!isset($data['name'])){
                                                                     
                                                                     return false;
                                              
                                              } elseif(trim($data['name']) == ''){
                                                                     
                                                                     return false;
                                              
                                              }elseif(!isset($data['localisation'])){
                                                                     
                                                                     return false;
                                              
                                              } elseif(trim($data['localisation']) == ''){
                                                                     
                                                                     return false;
                                              
                                              }else{
                                                                     
                                                                     return true;
                                              
                                              }
                       
                       }
}
?>
