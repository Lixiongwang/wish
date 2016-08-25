<?php
class CommonAction extends Action{
    
    //登入检测
    Public function _initialize(){
        if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])){
            $this->redirect('Admin/Login/index');
        }
    }
}

?>