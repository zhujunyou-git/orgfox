<?php
namespace Library;
use Library\Base;

class Collect extends Base
{
    public function __construct()
    {
        $this->obj = M('Collect');
    }

    public function oneColl($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();

    }

    public function allColl($map, $field = '*')
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

    public function del($map){
        return $this->obj->where($map)->delete();
    }

    /*public function setInc($map,$datas,$money){
        return $this->obj->where($map)->setInc($datas,$money);
    }*/

}

