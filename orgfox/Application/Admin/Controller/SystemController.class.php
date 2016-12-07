<?php
namespace Admin\Controller;
use Think\Controller;
use Library\User;
class SystemController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->obj = new User();
    }


}