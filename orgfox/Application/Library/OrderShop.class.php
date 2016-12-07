<?php
namespace Library;
use Library\Base;

class OrderShop extends Base
{
    public function __construct()
    {
        $this->obj = M('order_shop');
    }

    public function oneOrderS($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allOrderS($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->select();
    }

    public function inOrders($datas){
        return $this->obj->where(array('shop_id' => array('IN', $datas)))->where('type = 1')->select();
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

