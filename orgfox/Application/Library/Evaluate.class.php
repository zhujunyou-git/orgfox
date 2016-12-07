<?php
namespace Library;
use Library\Base;

class Evaluate extends Base
{
    public function __construct()
    {
        $this->obj = M('Evaluate');
    }

    public function oneeval($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function alleval($map, $field = '*')
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

    public function page($map,$p){
        return $this->obj->where($map)->order('time')->page($p.',10')->select();
    }
}

