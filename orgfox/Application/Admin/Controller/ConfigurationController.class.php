<?php
namespace Admin\Controller;
use Library\Column;
use Library\District;
use Library\Industry;
use Think\Controller;
use Library\User;
class ConfigurationController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->district = new District();
        $this->indus    = new Industry();
        $this->colu     = new Column();
    }
    /*
     * 地区页面
     */
    public function region(){
        $list=$this->district->allDist('upid=0');
        $this->assign('list',$list);
        $this->display();
    }
    /*
     * 添加地区
     */
    public function add()
    {
        if ($_POST) {
            $data = I('post.');
            if ($this->district->add($data)) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
    }
    /*
     * 删除地区
     */
     public function del($id){
        if($id){
            if ($this->district->del('id='.$id)) {
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        }
     }
    /*
     * 二级地区
     */
    public function dq($id){
        $list=$this->district->AllDist("upid=$id");
        $list[0]['upid']=$this->district->oneDist("id=".$list[0]['upid'],"name")['name'];
        $this->ajaxreturn($list);
    }
    /*
     * 三级地区
     */
    public function dqtwo($id){
        $list=$this->district->AllDist("upid=$id");
        $list[0]['upid']=$this->district->oneDist("id=".$list[0]['upid'],"name")['name'];
        $this->ajaxreturn($list);
    }
    /*
     * 修改
     */
    public function update(){
        if($_POST){
            $data=I('post.');
            $displayorder = $_POST['displayorder'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $ids = implode(',', array_values($id));
            $sql = "UPDATE fox_district SET name = CASE id ";
            foreach($name as $key=>$val){
                $sql.=sprintf("WHEN %d THEN '%s '", $id[$key], $val);
            }
            $sql .= "END WHERE id IN ($ids);";
            $sql .= "UPDATE fox_district SET displayorder = CASE id ";
            if($displayorder){
            foreach($displayorder as $key=>$val){
                $sql.=sprintf("WHEN %d THEN %d ", $id[$key], $val);
            }
            }
            $sql .= "END WHERE id IN ($ids);";
            if($this->district->execute($sql)){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
    }
    /*
     * 支付配置
     */
    public function pay(){
        $this->display();
    }
    /*
     * 行业管理
     */
    public function industry(){
        $pid=$this->indus->AllIndus('','industry_id,industry_pid,industry_name,time');
        $pid=data_merge($pid,'industry_pid','industry_id');
        $this->assign('pid',$pid);
        $this->display();
    }



    public function edit($industry_id=0){
        //顶级栏目
        $pid=$this->indus->AllIndus('industry_pid=0','industry_id,industry_name');
        //拿到当前栏目的名称
        $name=$this->indus->oneIndus('industry_id='.$industry_id,'industry_name,industry_id,industry_pid');
        $this->assign('name',$name);
        $this->assign('pid',$pid);
        $this->display();
    }
    /*
     * 栏目管理
     */
    public function column(){
        $data=$this->colu->allcolu('upid=0','id,name');
        foreach($data as $key =>$val){
            $data[$key]['list']=$this->colu->allcolu('upid='.$val['id'],'id,name');
        }
        $this->assign('data',$data);
        $this->display();
    }
    public function columnedit($id=0){
        //顶级栏目
        $upid=$this->colu->Allcolu('upid=0','id,name');
        //拿到当前栏目的名称
        $name=$this->colu->onecolu('id='.$id,'name,id,upid');
        $this->assign('name',$name);
        $this->assign('upid',$upid);
        $this->display();
    }
    public function columnadd(){
        $this->display();
    }


}