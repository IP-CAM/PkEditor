 <?php
class Engine{
protected $request = array();
                       protected $result = array();
                       public $get = array();
                       public $post = array();
                       public $session = array();
                       public $language = array();
                       public $error = array();
                       public $_ = array();

                       public function __construct(){ 
                       
                                              $this->get = $_GET; 
                                              $this->post = $_POST; 
                                              require_once(DIR_SYSTEM . 'session.php');
                                              $fp = $_SERVER['SCRIPT_FILENAME'];
                                              $admin = explode("/",$fp);
                                              $admin = array_reverse($admin);
                                              
                                              if($admin[1] !='admin'){
                                                                     $se = new Session();
                                                                     $this->session = $_SESSION;
                                              }
                                              
                                              $this->language = $this->language();
                                              $this->error = $this->error();
                       
                       }
                       public function request($file,$dir){ 
                                              
                                              if(file_exists(DIR_APPLICATION . $dir . '/' . $file . '.php')){ 
                                              
                                                                     require_once(DIR_APPLICATION . $dir . '/' . $file . '.php');
                                                                     $this->request[$file] = new $file;
                                                                     
                                              }
                                              
                                              return $this->request; 
                       }
                       public function results($fw){ 
                       
                                              if(file_exists(DIR_APPLICATION .  'result/' . $fw . '.php')){
                                                                     
                                                                     require_once(DIR_APPLICATION . 'result/' . $fw . '.php');
                                                                     $this->result[$fw] = new $fw(); 
                                                                     
                                              } 
                                              return $this->result; 
                       }
                       public function redirect($path){ 
                       
                                              header('location:' .$path);
                                              
                       }
                       public function error(){ 
                       
                                              require(DIR_LANGUAGE . $this->language['name'] . '/' . $this->language['value'] . '.php'); 
                                              $array = $_['error'];
                                              return($array);
                                              
                       }
                       public function template($file,$_){
                                              
                                              require(DIR_LANGUAGE . $this->language['name'] . '/' . $this->language['value'] . '.php'); 
                                              extract($_);
                                              include($file);
                                              
                       }
                       public function texts(){
                                              
                                              require(DIR_LANGUAGE . $this->language['name'] . '/' . $this->language['value'] . '.php'); 
                                              $text = $_;
                                              return $text;
                                              
                       }
                       public function language(){
                                              
                                              $mysql = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $setting = $mysql->query("SELECT * FROM pkeditor_setting WHERE `key` = 'language'");
                                              return $setting->row;
                                              
                       }
                       public function link($url){
                                              
                                              $url = str_replace('&','&amp;',$url);
                                              return $url;
                                              
                       }
}
?>
