<?php
namespace Admin\Controller;
use Think\Controller;
use Library\User;
class MissionController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();

    }
    public function configure(){
        $this->display();
    }

}