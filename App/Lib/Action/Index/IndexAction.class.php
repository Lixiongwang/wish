<?php
// 前台首页控制器
class IndexAction extends Action {
    //首页视图
     public function index(){
	 $this->display();
    }
    
    /**
     * 异步发布处理
     */
    public function handle(){
        if (!IS_AJAX) halt('11111');
        $data=array(
            'username' => I('username'),
            'content' => I('content'),
            'time' => time(),
        );
     
        
     if ($id = M(wish)->data($data)->add()){//返回最后插入的id
         $data['id'] = $id;
         $data['content'] = replace_phiz($data['content']);
         $data['time'] = date('y-m-d H:i',$data['time']);
         $data['status']=1;
         $this->ajaxReturn($data,'json');
     }else {//插入数据库失败
         //echo json_encode(array('status' => 0));
         $this->ajaxReturn(array('status' => 0),'json');
         
     }
       
    }
}