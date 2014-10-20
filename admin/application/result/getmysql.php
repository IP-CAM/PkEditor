<?php
class getMySql { 

                       public function getLanguages(){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $query = $db->query("SELECT * FROM pkeditor_language ORDER BY name ASC");
                                              
                                              return $query->rows;
                       
                       }
                       public function getSetting($language,$localisation){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $query = $db->query("SELECT * FROM pkeditor_setting WHERE value='".$localisation."' AND name='".$language."'");
                                              
                                              if(isset($query->row['name'])){
                                                                     
                                                                     return 1;
                                              
                                              } else{
                                                                     
                                                                     return 0;
                                              
                                              }
                       
                       }
                       public function getLanguage($language_id){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $query = $db->query("SELECT * FROM pkeditor_language WHERE language_id='".$language_id."'");
                                              
                                              return $query->row;
                       
                       }
                       public function updateLanguage($data){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $db->query("UPDATE pkeditor_setting SET value='".$data['localisation'] . "', name='".$data['language']."' WHERE `key`='language'");
                       
                       }
                       public function addLanguage($data){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $db->query("INSERT INTO pkeditor_language SET name='".$data['name']."', code='".$data['code']."',localisation='".$data['localisation'] . "'");
                       
                                              if(isset($data['setting'])){
                                                                     
                                                                     if($data['setting'] == 1){
                                                                                            
                                                                                            $db->query("UPDATE pkeditor_setting SET value='".$data['localisation'] . "', name='".$data['name']."' WHERE `key`='language'");
                                                                     
                                                                     }
                                              
                                              }
                       }
                       public function deleteLanguage($language_id){
                                              
                                              $db = new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                              $db->query("DELETE FROM pkeditor_language WHERE language_id='".$language_id."'");
                       
                       }
}
?>
