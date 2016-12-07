<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/20
 * Time: 16:10
 */

namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller{
    protected $obj = '';
    protected $dataReturn = array(
        'status'  => 0,
        'info' => '操作失败!',
        'data'    => ''
    );

    private $noLogin = array(
        'Index/login',
        'Index/verify',
        'Index/index',

    );

    public function _initialize() {
        $action = CONTROLLER_NAME . '/' . ACTION_NAME;
        if(!in_array($action, $this->noLogin)) {
            $this->_ckLogin();
        }
    }

    private function _ckLogin() {
        if(!session('user.user_id')) {
            $this->redirect('Index/login');
        }
    }
}

