<?php

//后台登入控制器
class LoginAction extends Action {
    /**
     * 登入视图
     */
    public function index(){
        $this->display();
    }
    
    /**
     * 登入验证
     */
    public function login(){
        //登入验证
        header("content-type:text/html; charset=utf-8");
        if (!$_POST) halt('页面不存在');
        if (I('code','','md5')!=session('verify')){
            $this->error('验证码错误');
        }
        
        $username = I('username');
        $pwd = I('password','','md5');
        
        $user = M('user')->where(array('username' => $username))->find();
        
        if (!$user||$user['password'] != $pwd){
            $this->error('账号或密码错误');
        }
        
        if ($user['lock']) $this->error('用户被锁定');
        
        //更新数据库
        $data = array(
            'id' => $user['id'],
            'logintime' => time(),
            //'loginip' => get_client_ip(),
        );
        
        M('user')->save($data);
         
        //写入session
        session('uid',$user['id']);
        session('username',$user['username']);
        session('logintime',date('Y-m-d H:i:s',$user['logintime']));
        //session('loginip',$user['loginip']);
        
        //跳转后台首页
        $this->redirect('Admin/Index/index');
    }
    
    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify(4,1,'png',80,25);
    }
}
?>