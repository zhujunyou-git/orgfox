<?php
namespace Library;
use Library\Base;

class Agreement extends Base
{
    public function __construct()
    {
        $this->obj = M('Agreement');
    }

    public function oneAgr($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allAgr($map, $field = '*')
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

