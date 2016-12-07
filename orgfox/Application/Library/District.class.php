<?php
namespace Library;
use Library\Base;

class District extends Base
{
    public function __construct()
    {
        $this->obj = M('District');
    }

    public function oneDist($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allDist($map, $field = '*')
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

    public function del($map){
        return $this->obj->where($map)->delete();
    }

    public function execute($sql){
        return $this->obj->execute($sql);
    }
}

