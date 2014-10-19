<?php
require_once("config.php");

                       if(!isset($_GET['error'])){ 
                       
                                              require_once(DIR_SYSTEM. "engine.php");
                                              require_once(DIR_SYSTEM. "mysql.php");
                       
                                              $up = new Engine();  
                       
                                              /* Header */
                                              $start = $up->request('header','common'); 
                                              $header = $start['header']; 
                                              $header->top();
                       
                       
                       
                                              /* Editor Area */
                                              if(isset($up->get['file']) or isset($up->get['create'])){ 
                                              
                                                                     $ed = $up->request('editor','editor');
                                                                     $editor = $ed['editor'];
                                                                     $editor->open();
                                              
                                              } 
                                              elseif(!isset($up->get['file'])  && !isset($up->get['create'])){ 
                                              
                                                                     $body = $up->request('listing','editor'); 
                                                                     $class = $body['listing']; $class->front();
                                                                     
                                              } 
                       
                                              /* Footer */
                                              $end = $up->request('footer','common');
                                              $footer = $end['footer'];
                                              $footer->bottom();
                       
                       }
                       

                       /* Critical Error */
                       if(isset($_GET['error'])){ 
                       
                                              require_once(DIR_SYSTEM. "engine.php");
                                              require_once(DIR_SYSTEM. "mysql.php");
                       
                                              $up = new Engine();  
                                              require(DIR_LANGUAGE . $up->language['data'] .'/' . $up->language['data'] .'.php');
                       
                                              $text_error = $error_critical_error; 
                                              $key = array_keys($_SESSION['path']); 
                                              
                                              for($i=0;$i<count($key);$i++){ 
                                                                     for($j=0;$j<count($_SESSION['path'][$key[$i]]);$j++){ 
                                                                                            if(file_exists($_SESSION['path'][$key[$i]][$j])){ 
                                                                                            @unlink($_SESSION['path'][$key[$i]][$j]);
                                                                                            }
                                                                     }
                                              } 
                       
                                              require(DIR_TEMPLATE . 'common/header.tpl');
                                              require(DIR_TEMPLATE . 'error/error.tpl');
                                              require(DIR_TEMPLATE . 'common/footer.tpl');
                                              exit;
                       
                       }  
?>
