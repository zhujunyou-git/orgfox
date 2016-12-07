<?php
namespace Library;
use Library\Base;

class User extends Base
{
    public function __construct()
    {
        $this->obj = M('User');
    }

    public function oneUser($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allUser($map, $field = '*')
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

