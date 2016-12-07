<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/28
 * Time: 15:21
 */

namespace Library;


class AuthBank extends Base{
    public function __construct()
    {
        $this->obj = M('Auth_bank');
    }

    public function oneBank($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allBank($map, $field = '*')
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
    public function delAll($datas){
        return $this->obj->where(array('bank_id' => array('IN', $datas)))->where('bank_status != 2')->delete();
    }
}