<?php
class Header extends Engine{
                       public function top(){
                                              $_['home'] = HTTP_SERVER . 'index.php';
                                              $_['dashboard'] = HTTP_ADMIN;
                                              $_['language'] = HTTP_ADMIN . 'index.php?set=language';
                                              
                                              $this->template(DIR_TEMPLATE . 'common/header.tpl',$_);
                       
                       }
                       public function home(){
                       
                                              $this->template(DIR_TEMPLATE . 'common/home.tpl','');
                       
                       }
}
?>
