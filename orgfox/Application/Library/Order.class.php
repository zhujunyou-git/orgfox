<?php
namespace Library;
use Library\Base;

class Order extends Base
{
    public function __construct()
    {
        $this->obj = M('order_charge');
    }

    public function oneOrder($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allOrder($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->select();
    }

    public function add($datas)
    {
        return $this->obj->add($datas);
    }

    public function save($map,$datas)
    {
         return $this->obj->where($map)->save($datas);
    }
}

