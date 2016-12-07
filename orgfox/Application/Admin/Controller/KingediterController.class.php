<?php
namespace Admin\Controller;
use Think\Controller;
use Library\User;
class KingediterController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->obj = new User();
    }

}