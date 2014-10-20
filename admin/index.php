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

 
                    /*  Area */
                       if(isset($up->get['set'])){
                                              
                                              if($up->get['set'] == 'language'){
                                                                     $lg = $up->request('language','setting');
                                                                     $language = $lg['language'];
                                                                     $language->index();
                                              }
                       
                       } else {
                                              
                         $header->home();
                         
                       }
                       

                     /* Footer */
                       $end = $up->request('footer','common');
                       $footer = $end['footer'];
                       $footer->bottom();

}
?>
