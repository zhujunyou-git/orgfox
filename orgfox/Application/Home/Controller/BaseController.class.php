<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/20
 * Time: 16:10
 */

namespace Home\Controller;
use Library\Industry;
use Think\Controller;

class BaseController extends Controller{

    protected $obj = '';
    protected $dataReturn = array(
        'status'  => 0,
        'info' => '操作失败!',
        'data'    => ''
    );

    private $noLogin = array(
        'Index/reception',//登录
        'Index/register',//注册
        'Index/verify',//验证码
        'Index/activate',//激活账号
        'Index/index',//首页

    );

    public function _initialize() {
        $action = CONTROLLER_NAME . '/' . ACTION_NAME;
        if(!in_array($action, $this->noLogin)) {
            $this->_ckLogin();
        }
        $this->indus=new Industry();
        $this->assign('top_indus',$this->top());
    }

    private function _ckLogin() {
        if(!session('user.user_id')) {
            $this->redirect('Index/reception');
        }
    }
    public function top(){
        $top_indus=$this->indus->allIndus('industry_pid=0','industry_name,pic,industry_id');
        foreach($top_indus as $key => $val){
            $top_indus[$key]['list']=$this->indus->allIndus('industry_pid='.$val['industry_id'],'industry_id,industry_name');
        }
        return $top_indus;
    }

}

