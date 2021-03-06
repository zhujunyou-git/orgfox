<?php
namespace Library;
use Library\Base;

class Task extends Base
{
    public function __construct()
    {
        $this->obj = M('task');
    }

    public function oneTask($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allTask($map, $field = '*')
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

    public function allTaskOrder($map,$order){
        return $this->obj->where($map)->order($order)->select();
    }

    public function setInc($map,$data,$number){
        return $this->obj->where($map)->setInc($data,$number);
    }
    public function page($map,$order,$page){
        return $this->obj->where($map)->order($order)->page($page.',10')->select();
    }

}

