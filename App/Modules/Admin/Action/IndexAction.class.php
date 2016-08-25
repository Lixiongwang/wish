<?php
// 后台台首页控制器
class IndexAction extends CommonAction {
    
    /**
     * 登入视图
     */
    public function index(){
	    
        $this->display();
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/index');
    }
    
}
?>