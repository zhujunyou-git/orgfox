<?php
namespace Admin\Controller;
use Library\Column;
use Think\Controller;
use Library\User;
class ColumnController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->colu     = new Column();
    }
    public function add(){
        if(IS_POST){
            $data=I('post.');
            if($this->colu->add($data)){
                $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
        }
    }
    public function del($id){
        if($id){
            if ($this->colu->del('id='.$id)) {
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        }
    }
    public function save(){
        if(IS_POST){
            $data=I('post.');
            if($this->colu->save('id='.$data['id'],$data)){
                $this->success('修改成功');
            } else {
                $this->error('修改失败');
            }
        }
    }

}