<?php
namespace Home\Controller;
use Library\Agreement;
use Library\Column;
use Library\Delivery;
use Library\Evaluate;
use Library\Industry;
use Library\Task;
use Library\Task_pid;
use Library\User;
use Think\Controller;

/*
 * 发标     标的状态为1
有人投标状态为2改为投标中
乙方中标 标的状态为3  关闭投标
为3的时候出现协议签约 签约完成状态为4
为4的时候出现内容交付 内容交付完成状态为5
为5的时候出现雇主验收 雇主验收完成状态为6 打款结束
为6的时候进行双方评价
 */
class TaskController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->task = new Task();       //任务表
        $this->indus= new Industry();   //行业表
        $this->task_p= new Task_pid();  //任务投标表
        $this->user = new User();       //用户表
        $this->agr  = new Agreement();  //协议表
        $this->deli = new Delivery();   //交付内容表
        $this->eval = new Evaluate();   //评价表
        $this->colu = new Column();     //栏目表
    }
    /*
     * 交易大厅
     */
    public function taskhall(){
        if(IS_AJAX){
            $type=I('get.a1');//赏金状态
            $state=I('get.b1');//服务状态
            $c1=I('get.c1');//排序
            $d1=I('get.d1');//省份还没做
            $e1=I('get.e1');//市区还没做
            switch($c1){
                case 1;
                    $order['task_id']='desc';
                    break;
                case 2;
                    $order['task_id']='asc';
                    break;
                case 3;
                    $order['time']='desc';
                    break;
                case 4;
                    $order['time']='asc';
                    break;
                case 5;
                    $order['money']='desc';
                    break;
                case 6;
                    $order['money']='asc';
                    break;
                case 7;
                    $order['number']='desc';
                    break;
                case 8;
                    $order['number']='asc';
                    break;
            }
            $type and $where['type']=$type;
            //$state and $where['service_state']=$state;
            switch($state) {
                case 3;
                    $where['service_state'] = 3;
                    break;
                case 2;
                    $where['service_state'] = 2;
                    break;
                case 4;
                    $where['service_state'] = array(array('eq',4),array('eq',5),'or');
                    break;
                case 6;
                    $where['service_state'] = 6;
                    break;
            }
            $count=count($this->task->allTaskOrder($where?$where:'',$order?$order:array('task_id'=>'desc')));//总数
            $p=getpage($count,10);
            $_GET['p'] ? $page= $_GET['p'] : $page=1;
            $dataAll['list']=$this->task->page($where?$where:'',$order?$order:array('task_id'=>'desc'),$page);
            foreach($dataAll['list'] as $key => $val){
                foreach($val as $k => $v){
                    if($k=='time'){
                        $dataAll['list'][$key][$k]=date('Y-m-d',$v);
                    }
                }
            }
            $dataAll['page']=$p->show();
            $this->ajaxReturn($dataAll);
        }
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $user_id=user_id();
        $this->assign('user_id',$user_id);
        //分页数据显示
        $_GET['p'] ? $page= $_GET['p'] : $page=1;
        $type=I('get.a1');//赏金状态
        $state=I('get.b1');//服务状态
        $c1=I('get.c1');//排序
        $d1=I('get.d1');//省份还没做
        $e1=I('get.e1');//市区还没做
        switch($c1){
            case 1;
                $order['task_id']='desc';
                break;
            case 2;
                $order['task_id']='asc';
                break;
            case 3;
                $order['time']='desc';
                break;
            case 4;
                $order['time']='asc';
                break;
            case 5;
                $order['money']='desc';
                break;
            case 6;
                $order['money']='asc';
                break;
            case 7;
                $order['number']='desc';
                break;
            case 8;
                $order['number']='asc';
                break;
        }
        $type and $where['type']=$type;
        //$state and $where['service_state']=$state;
        switch($state) {
            case 3;
                $where['service_state'] = 3;
                break;
            case 2;
                $where['service_state'] = 2;
                break;
            case 4;
                $where['service_state'] = array(array('eq',4),array('eq',5),'or');
                break;
            case 6;
                $where['service_state'] = 6;
                break;
        }
        $count=count($this->task->allTaskOrder($where?$where:'',$order?$order:array('task_id'=>'desc')));//总数
        $p=getpage($count,10);
        $dataAll=$this->task->page($where?$where:'',$order?$order:array('task_id'=>'desc'),$page);
        $this->assign('dataAll',$dataAll);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    /*
     * 服务详情
     */
    public function delivery($task_id){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        //标的数据
        $data=$this->task->oneTask('task_id='.$task_id);
        $data['head']=$this->user->oneUser('user_id='.$data['user_id'],'head')['head'];
        $data['task_model_id']=$this->colu->oneColu('id='.$data['task_model_id'],'name')['name'];
            //调取服务类型数据
        foreach($data as $key => $val){
            if($key=='indus_id'){
                $data[$key]=$this->indus->oneIndus('industry_id='.$val,'industry_name')['industry_name'];
            }
            if($key=='indus_pid'){
                $data[$key]=$this->indus->oneIndus('industry_id='.$val,'industry_name')['industry_name'];
            }
            if($key=='end_time'){
                $data[$key]=date('Y-m-d',$val);
            }
        }
            //判断是否已经投标
        $array=explode(',',$data['bidder']);
        if(in_array(user_id(),$array)){
            $bidder=1;
        }else{
            $bidder='';
        }
        $this->assign('bidder',$bidder);
        //--投标数据结束

        //选标状态-发标人才可以选标。设为中标按钮
        if($data['user_id']==user_id() && $data['service_state']==2){
            $xuanbiao=1;
        }
        $this->assign('xuanbiao',$xuanbiao);
        //--按钮结束

        //调取投标人员数据
        $task_p=$this->task_p->allTask_p('task_id='.$task_id);
        //--调取投标人员数据结束
        foreach($task_p as $key => $val){
            foreach($val as $k => $v){
                if($k=='file'){
                    $task_p[$key][$k]=array_filter(explode(",", $v));
                }
            }
        }
        //标数量
        $nowhere['task_id']=$task_id;
        $nowhere['status']='0';
        $nomunber=count($this->task_p->allTask_p($nowhere));//未中标数量
        $okwhere['task_id']=$task_id;
        $okwhere['status']='1';
        $okmunber=count($this->task_p->allTask_p($okwhere));//中标数量
        $sunwhere['task_id']=$task_id;
        $sunmunber=count($this->task_p->allTask_p($sunwhere));//投标总数
        //--标数量

        //判断甲方是否已签署协议
        $where['task_id']=$task_id;
        $where['status']='1';
        $task_pid=$this->task_p->oneTask_p($where);//拿到中标的人的信息
        if($task_pid){
            $agr_status=$this->agr->oneAgr('task_pid='.$task_pid['task_pid'],'agr_status')['agr_status'];//根据中标信息查看对应协议
        }
        //--签署协议

        //内容交付
        $deli=$this->deli->oneDeli('task_id='.$task_id);
        foreach($deli as $k => $v){
                if($k=='file'){
                    $deli[$k]=array_filter(explode(",", $v));
                }
        }
        //评价
        if($task_pid) {
            $eval = $this->eval->oneeval(array('to_user_id=' . $task_pid['user_id'],'task_id'=>$data['task_id']));//雇主
        }
        $evals=$this->eval->oneeval(array('to_user_id'=>$data['user_id'],'task_id'=>$data['task_id']));//服务商
        $user_id=user_id();
        //第三方进入
        if($user_id==$task_pid['user_id']||$user_id==$data['user_id']){
            $third=1;
        }else{
            $third=0;
        }
        $this->assign('third',$third);//第三方
        $this->assign('evals',$evals);//服务商评价
        $this->assign('eval',$eval);//雇主评价
        $this->assign('deli',$deli);
        $this->assign('agr_status',$agr_status);
        $this->assign('task_pid',$task_pid);//中标数据
        $this->assign('user_id',$user_id);//当前用户ID
        $this->assign('task_p',$task_p);//投标数据
        $this->assign('data',$data);//发标数据
        $this->assign('okmunber',$okmunber);//中标数量
        $this->assign('nomunber',$nomunber);//未中标数量
        $this->assign('sunmunber',$sunmunber);//投标总数
        $this->display();
    }
    /*
     * 投标页面
     */
    public function tas($task_id){
        $data=$this->task->oneTask('task_id='.$task_id);
        $this->assign('data',$data);
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $this->display();
    }
    /*
     * 投标
     */
    public function bid($task_id){
        //表单提交表示投标
        if(IS_POST){
            $data=I('post.');
            if($_FILES['file1']['name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
                $upload->rootPath = './Uploads/task1/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $pic='/Uploads/task1/';
                $info = $upload->upload();
                $i = 1;
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    foreach ($info as $file) {
                        //$file['savepath'].$file['savename'];
                        $array[$i] =$pic. $file['savepath'] . $file['savename'];
                        $i++;
                    }
                }
                $data['file']='';
                if($array[1]){
                    $data['file'] .= $array[1].',';
                }
                if($array[2]){
                    $data['file'] .= $array[2].',';
                }
                if($array[3]){
                    $data['file'] .= $array[3].',';
                }
            }
            $data['file']=substr($data['file'],0,-1);
            $data['user_id']=user_id();
            $data['username']=username();
            $data['time']=time();
            $data['head']=$this->user->oneUser('user_id='.user_id(),'head')['head'];
            $this->task_p->add($data);
            //投标数+1；
            $this->task->setInc('task_id='.$task_id,'number',1);
            //添加投标人的ID
            if($bidder=$this->task->oneTask('task_id='.$task_id,'bidder')['bidder']){
                $bidd['bidder']=$bidder.','.user_id();
            }else{
                $bidd['bidder']=user_id();
            }
            $bidd['service_state']=2;//把状态修改为选标中
            if($this->task->save('task_id='.$task_id,$bidd)){
                $this->success('投标成功','/home/task/delivery/task_id/'.$task_id);
            }else{
                $this->error('投标失败');
            }
        }
        //--投标结束
    }
    /*
     * 设为中标
     */
    public function status($task_pid){
        //修改标状态为工作中
        $task['service_state']=3;
        $task_id=$this->task_p->oneTask_p('task_pid='.$task_pid,'task_id')['task_id'];
        $this->task->save('task_id='.$task_id,$task);
        //--修改当前标改为中作中
        //将该人员选中为中标状态
        $task_p['status']=1;
        if($this->task_p->save('task_pid='.$task_pid,$task_p)){
            $this->success('设为中标成功');
        }else{
            $this->error('设为中标失败');
        }
    }
    /*
     * 签约
     */
    public function treaty($task_pid){
        if(IS_POST){
            $data=I('post.');
            if($data['acetic_ok']){
                unset($data['armour_ok']);
                unset($data['start_time']);
                unset($data['end_time']);
                $data['agr_status']=2;
                if($this->agr->save('id='.$data['id'],$data)){
                    $this->success('协议签署完毕','/home/task/delivery?task_id='.$data['task_id']);
                }else{
                    $this->error('协议签署失败');
                }
            }
            if($data['armour_ok']){
                $data['agr_status']=1;
                $data['start_time']=strtotime($data['start_time']);
                $data['end_time']=strtotime($data['end_time']);
                if($this->agr->add($data)){
                    //协议签署完成
                    $task['service_state']=4;
                    $task_id=$this->task_p->oneTask_p('task_pid='.$task_pid,'task_id')['task_id'];
                    $this->task->save('task_id='.$task_id,$task);
                    $this->success('协议签署完毕，请等待乙方签署协议','/home/task/delivery?task_id='.$data['task_id']);
                }else{
                    $this->error('协议签署失败');
                }
            }

        }else{
        $task_p=$this->task_p->oneTask_p('task_pid='.$task_pid);
        $task=$this->task->oneTask('task_id='.$task_p['task_id'],'title,money');
        $agr=$this->agr->oneAgr('task_pid='.$task_pid);
        $this->assign('agr',$agr);
        $this->assign('task',$task);
        $this->assign('task_p',$task_p);
        $this->display();
        }
    }
    /*
     * 内容交付
     */
    public function taskdelivery($task_pid)
    {
        $data=$this->task_p->oneTask_p('task_pid='.$task_pid,'task_id,task_pid,user_id,username');
        $this->assign('data',$data);
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $this->display();
    }
    public function taskdeliveryadd()
    {
        if (IS_POST) {
            $data = I('post.');
            if ($_FILES['file']['name'][0]) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
                $upload->rootPath = './Uploads/task_deli/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $pic = '/Uploads/task_deli/';
                $info = $upload->upload();
                $i = 1;
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    foreach ($info as $file) {
                        //$file['savepath'].$file['savename'];
                        $array[$i] = $pic . $file['savepath'] . $file['savename'];
                        $i++;
                    }
                }
                $data['file'] = '';
                if ($array[1]) {
                    $data['file'] .= $array[1] . ',';
                }
                if ($array[2]) {
                    $data['file'] .= $array[2] . ',';
                }
                if ($array[3]) {
                    $data['file'] .= $array[3] . ',';
                }
            }
            $data['file'] = substr($data['file'], 0, -1);
            $data['status']=1;
            $data['time']=time();
            if($this->deli->add($data)){
                $task['service_state']=5;
                $this->task->save('task_id='.$data['task_id'],$task);
                $this->success('交付完成','/home/task/delivery/task_id/'.$data['task_id']);
            }else{
                $this->error('交付失败');
            }
        }
    }
    /*
     * 验收付款
     */
    public function check(){
        if(IS_POST){
            $data=I('post.');
            //判断支付密码是否正确
            if(md5($data['paypassword'])==$this->user->oneUser('user_id='.user_id(),'paypassword')['paypassword']){
                //密码正确进行打款修改标的状态为完成状态
                //拿到订单的金额
                $money=$this->task->oneTask('task_id='.$data['task_id'],'money')['money'];
                //拿到中标成功的用户的id
                $user_id=$this->task_p->oneTask_p('task_pid='.$data['task_pid'],'user_id')['user_id'];
                //打款
                if($this->user->setInc('user_id='.$user_id,'money',$money)){
                    $taskdata['service_state']=6;
                    $this->task->save('task_id='.$data['task_id'],$taskdata);
                    $this->success('成功打款');
                }else{
                    $this->error('打款失败');
                }
            }else if(md5($data['paypassword'])==$this->user->oneUser("user_id=".user_id(),'password')['password']){
                //密码正确进行打款修改标的状态为完成状态
                //拿到订单的金额
                $money=$this->task->oneTask('task_id='.$data['task_id'],'money')['money'];
                //拿到中标成功的用户的id
                $user_id=$this->task_p->oneTask_p('task_pid='.$data['task_pid'],'user_id')['user_id'];
                //打款
                if($this->user->setInc('user_id='.$user_id,'money',$money)){
                    $taskdata['service_state']=6;
                    $this->task->save('task_id='.$data['task_id'],$taskdata);
                    $this->success('成功打款');
                }else{
                    $this->error('打款失败');
                }
        }else{
                $this->error('密码错误');
            }
        }
    }
    /*
     * 评价模块
     */
    public function evaluation($task_id,$task_pid){
        //雇主评价页面
        $task=$this->task->oneTask('task_id='.$task_id);
        $to_user_id=$this->task_p->oneTask_p('task_pid='.$task_pid,'user_id')['user_id'];
        $this->assign('to_user_id',$to_user_id);
        $this->assign('task',$task);
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $this->display();
    }
    public function evaluation1($task_pid){
        //服务商评价页面
        $task_p=$this->task_p->oneTask_p('task_pid='.$task_pid);
        foreach($task_p as $key => $val){
                if($key=='file'){
                    $task_p[$key]=array_filter(explode(",", $val));
                }
        }
        $to_user_id=$this->task->oneTask('task_id='.$task_p['task_id'],'user_id')['user_id'];
        $this->assign('to_user_id',$to_user_id);
        $this->assign('task_p',$task_p);
        $this->display();
    }
    public function evaluate(){
          if(IS_POST){
              $data=I('post.');
              $data['time']=time();//评价时间
              $data['user_id']=user_id();
              if($data['type'] == 1){//有type的话是雇主评价
                  if($this->eval->add($data)){
                      $this->success('评价完成','/home/task/delivery/task_id/'.$data['task_id']);
                  }else{
                      $this->error('评价失败');
                  }
              }else{
                  if($this->eval->add($data)){
                      $this->success('评价完成','/home/task/delivery/task_id/'.$data['task_id']);
                  }else{
                      $this->error('评价失败');
                  }
              }

          }
    }
}
