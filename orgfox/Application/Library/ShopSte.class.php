<?php
namespace Library;
use Library\Base;

class ShopSte extends Base
{   //店铺设置表
    public function __construct()
    {
        $this->obj = M('Shopste');
    }

    public function oneShops($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allShops($map, $field = '*')
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

}

