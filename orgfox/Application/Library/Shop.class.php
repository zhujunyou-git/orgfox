<?php
namespace Library;
use Library\Base;

class Shop extends Base
{
    public function __construct()
    {
        $this->obj = M('Shop');
    }

    public function oneShop($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allShop($map, $field = '*')
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

    public function setInc($map,$datas,$money){
        return $this->obj->where($map)->setInc($datas,$money);
    }

    public function del($map){
        return $this->obj->where($map)->delete();
    }

    public function allShopOrder($map,$order){
        return $this->obj->where($map)->order($order)->select();
    }
}

