<?php
namespace Home\Controller;
use Library\Collect;
use Think\Controller;


class CollectController extends BaseController
{
    //收藏控制器
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this -> coll = new Collect();

    }
    /*
     * 服务商收藏任务
     * 任务type=1
     */
    public function coll_task(){
        if(IS_AJAX){
            $data['type']=1;
            $data['corr_id']=I('post.task_id');
            $data['user_id']=user_id();
            if($this->coll->oneColl('corr_id='.$data['corr_id'])){
                $this->coll->del('corr_id='.$data['corr_id']);
                $dataReturn['status']=0;
                $this->ajaxreturn($dataReturn);
            }else{
                $this->coll->add($data);
                $dataReturn['status']=1;
                $this->ajaxreturn($dataReturn);
            }
        }
    }
    /*
     * 雇主收藏服务
     * type=2
     */
    public function coll_serve(){
        if(IS_AJAX){
            $data['type']=2;
            $data['corr_id']=I('post.corr_id');
            $data['user_id']=user_id();
            if($this->coll->oneColl('corr_id='.$data['corr_id'])){
                $this->coll->del('corr_id='.$data['corr_id']);
                $dataReturn['status']=0;
                $this->ajaxreturn($dataReturn);
            }else{
                $this->coll->add($data);
                $dataReturn['status']=1;
                $this->ajaxreturn($dataReturn);
            }
        }
    }


}
