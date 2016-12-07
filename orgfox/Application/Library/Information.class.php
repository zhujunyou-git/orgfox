<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/3
 * Time: 15:12
 */
namespace Library;
use Library\Base;

class Information extends Base
{
    public function __construct()
    {
        $this->obj = M('information');
    }

    public function oneInfo($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allInfo($map, $field = '*')
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