<?php
namespace Home\Controller;
use Library\Column;
use Library\District;
use Library\Industry;
use Library\Task;
use Model\UserModel;
use Think\Controller;
use Library\User;

class PublishController extends BaseController
{
    //发布任务模块
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->indus = new Industry();
        $this->task  = new Task();
        $this->user  = new User();
        $this->indus = new Industry();
        $this->dist  = new District();
        $this->colu  = new Column();
    }
    /*
     * 发布任务
     */
    public function publish(){
        //调取子行业
        if(IS_AJAX){
            if(I('get.industry_id')){
                $industry_id=I('get.industry_id');
                $data=$this->indus->allindus('industry_pid='.$industry_id);
                $this->ajaxreturn($data);
            }else{
                $upid=I('get.upid');
                $data=$this->dist->allDist('upid='.$upid);
                $this->ajaxreturn($data);
            }
        }
        //发布任务
        if($_POST){
            $data=I('post.');
            $data['start_time']=strtotime($data['start_time']);
            $data['end_time']=strtotime($data['end_time']);
            $data['user_id']=user_id();
            $data['username']=username();
            $data['time']=time();
            if($_FILES['file']['name'][0]){
                @$data['file']=func_file('Uploads/task/');
            }
            if($id=$this->task->add($data)){
                $this->success('任务发布成功，请结算','bounty?task_id='.$id);
            }else{
                $this->error('任务发布失败');
            }
        }else {
            //调取任务模式
            $task_model=$this->colu->allcolu('upid='.$this->colu->onecolu(array('name'=>'任务模式'))['id']);
            $this->assign('task_model',$task_model);
            /*调取所有的服务*/
            $parent_indus=$this->indus->AllIndus('industry_pid=0','industry_id,industry_name');
            foreach($parent_indus as $key =>$val){
                foreach($val as $k => $v){
                    if($k=='industry_id'){
                        $parent_indus[$key]['list']=$this->indus->allIndus('industry_pid='.$v,'industry_id,industry_name');
                    }
                }
            }
            $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
            $parent_list=data_merge($parent_list,'industry_pid','industry_id');
            $this->assign('parent_indus',$parent_indus);
            $this->assign('parent_list',$parent_list);
            /*服务结束*/
            //调取所有的省份地区
            $pro=$this->dist->Alldist('upid=0');
            $this->assign('pro',$pro);
            $this->display();
        }

    }
    /*
     * 第二步
     */
    public function bounty($task_id){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        //账户金额
        $user_money=$this->user->oneUser("user_id=".user_id(),'money')['money'];
        //订单金额
        $money=$this->task->oneTask('task_id='.$task_id,'money')['money'];
        $this->assign('money',$money);
        $this->assign('user_money',$user_money);
        $this->display();
    }
    /*
     * 支付发布
     */
    public function payent(){
        //账户金额
        $user_money=$this->user->oneUser("user_id=".user_id(),'money')['money'];
        if(IS_POST){
            $data=I('post.');
            //判断是否设置支付密码
            if($paypassword=$this->user->oneUser("user_id=".user_id(),'paypassword')['paypassword']){
                if($paypassword==md5($data['password'])){
                    //判断账户金额够不够扣款
                    if($user_money>$data['money']){
                        $money['money']=$user_money-$data['money'];
                        if($this->user->save('user_id='.user_id(),$money)){
                            $type['type']=2;
                            //扣款成功修改订单状态
                            if($this->task->save('task_id='.$data['task_id'],$type)){
                                $this->success('支付完成','/Home/Task/taskhall');
                            }
                        }else{
                            $this->error('支付失败,请联系管理员');
                        }
                    }else{
                        $this->error('账户金额不足');
                    }
                }else{
                    $this->error('支付密码错误');
                }
                //else 未设置支付密码使用登录密码
            }else if($this->user->oneUser("user_id=".user_id(),'password')['password']==md5($data['password'])){
                //判断账户金额够不够扣款
                if($user_money>$data['money']){
                    $money['money']=$user_money-$data['money'];
                    if($this->user->save('user_id='.user_id(),$money)){
                        $type['type']=2;
                        //扣款成功修改订单状态
                        if($this->task->save('task_id='.$data['task_id'],$type)){
                            $this->success('支付完成','/home/task/taskhall');
                        }else{
                            $this->success('请勿重复支付');
                        }
                    }else{
                        $this->error('支付失败,请联系管理员');
                    }
                }else{
                    $this->error('账户金额不足');
                }
            }else{
                $this->error('支付密码错误');
            }
        }
    }
}
