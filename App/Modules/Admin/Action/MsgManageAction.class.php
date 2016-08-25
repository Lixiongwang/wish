<?php
//愿望管理界面
class MsgManageAction extends CommonAction {
    
    
    public function index(){
        
        import('ORG.Util.Page');//引入分页类
        //统计总条数
        $count= M('wish')->count();
        $page=new Page($count,10);
        $limit = $page->firstRow . ',' . $page->listRows;
        
        
        $wish = M('wish')->order('time DESC')->limit($limit)->select();
        $this->wish=$wish;
        $this->page=$page->show();
        $this->display();
    }
    
    public function delete() {
        $id=I('id','','intval');
        if (M('wish')->delete($id)){
            $this->success('删除成功',U('Admin/MsgManage/index'));
        }else{
            $this->error('删除失败');
        }
    }
}

?>