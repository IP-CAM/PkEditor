<?php
class session{
                       public function __construct(){
                                              $this->filesystems();
                       }
                       private function filesystems(){
                                              
                                              $fp = $_SERVER['SCRIPT_FILENAME'];
                                              $admin = explode("/",$fp);
                                              $admin = array_reverse($admin);
                                              
                                              if($admin[1] !='admin'){
                                                                     
                                                                     $z = explode('/',$fp);
                                                                     
                                                                     $z = array_reverse($z);
                                                                     $z[0] = '';
                                                                     $z = array_reverse($z);
                                                                     $path = implode('/',$z);
                                                                     $_SESSION['default_home_path'] = $_SERVER['DOCUMENT_ROOT'].'/';
                                                                     $_SESSION['editor_path'] = $path;
                                                                     $dir = opendir($path.'application/editor/');
                                                                     
                                                                     while(($app = readdir($dir)) !=false){
                                                                                            
                                                                                            if($app !='.' && $app !='..'){
                                                                                                                   
                                                                                                                   $f = explode('.', $app);
                                                                                                                   $_SESSION['application'][$f[0]] = $f[0];
                                                                                                                   $_SESSION['path']['application'][] = $path.'application/editor/'.$app;
                                                                                                                   
                                                                                            }
                                                                     
                                                                     }
                                              
                                                                     $dir2 = opendir($path.'application/result/');
                                                                     
                                                                     while(($res = readdir($dir2)) !=false){
                                                                                            
                                                                                            if($res !='.' && $res !='..'){
                                                                                                                   
                                                                                                                   $f = explode('.', $res);
                                                                                                                   $_SESSION['result'][$f[0]] = $f[0];
                                                                                                                   $_SESSION['path']['result'][] = $path.'application/result/'.$res;
                                                                                                                   
                                                                                            }
                                                                     
                                                                     }	
                                                                     
                                                                     $dir3 = opendir($path.'system/');
                                                                     
                                                                     while(($sys = readdir($dir3)) !=false){
                                                                                            
                                                                                            if($sys !='.' && $sys !='..'){
                                                                                                                   
                                                                                                                   $f = explode('.', $sys);
                                                                                                                   $_SESSION['system'][$f[0]] = $sys;
                                                                                                                   $_SESSION['path']['system'][] = $path.'system/'.$sys;
                                                                                                                   
                                                                                            }
                                                          
                                                                     }
                                                                  
                                                                     $dir4 = opendir($path.'template/editor/');
                                                                     
                                                                     while(($tem = readdir($dir4)) !=false){
                                                                                            
                                                                                            if($tem !='.' && $tem !='..'){
                                                                                                                   
                                                                                                                   $f = explode('.', $tem);
                                                                                                                   $_SESSION['system'][$f[0]] = $tem;
                                                                                                                   $_SESSION['path']['template'][] = $path.'template/editor/'.$tem;
                                                                                            
                                                                                            }
                                                                     
                                                                     }        
                                              }
                       }
}
?>
