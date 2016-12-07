<?php
namespace Home\Controller;
use Library\AuthAlipay;
use Library\AuthBank;
use Library\AuthRealname;
use Library\Collect;
use Library\Column;
use Library\District;
use Library\Evaluate;
use Library\Industry;
use Library\OrderShop;
use Library\Shop;
use Library\ShopSte;
use Library\Task;
use Library\Task_pid;
use Model\UserModel;
use Think\Controller;
use Library\User;

class EvaluateController extends BaseController
{
    /*
     * 初始化
     */
    //交易评价
    public function _initialize()
    {
        parent::_initialize();
        $this->eval = new Evaluate();
    }
    public function shop_add(){
        if(IS_POST) {
            $data = I('post.');
            $data['time'] = time();//评价时间
            $data['user_id'] = user_id();
            $data['type']=1;//服务超市
            if ($this->eval->add($data)) {
                $this->success('评价完成', '/home/User/employer');
            } else {
                $this->error('评价失败');
            }
        }
    }


}
