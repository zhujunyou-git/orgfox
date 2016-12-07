<?php
namespace Library;
use Library\Base;

class Task_pid extends Base
{
    public function __construct()
    {
        $this->obj = M('task_pid');
    }

    public function oneTask_p($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allTask_p($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->select();
    }

    public function add($datas)
    {
        return $uid=$this->obj->add($datas);
    }

    public function save($map,$datas)
    {
         return $this->obj->where($map)->save($datas);
    }


}

