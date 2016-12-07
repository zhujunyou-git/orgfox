<?php
namespace Library;
use Library\Base;

class Delivery extends Base
{
    public function __construct()
    {
        $this->obj = M('Delivery');
    }

    public function oneDeli($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allDeli($map, $field = '*')
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

