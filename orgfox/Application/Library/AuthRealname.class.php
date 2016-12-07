<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/28
 * Time: 15:21
 */

namespace Library;


class AuthRealname extends Base{
    public function __construct()
    {
        $this->obj = M('Auth_realname');
    }

    public function oneReal($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allReal($map, $field = '*')
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

    public function saveAll($map,$datas,$status){
        if($status){
           return  $this->obj->where(array('realname_id' => array('IN', $map)))->where($status)->save($datas);
        }else{
           return  $this->obj->where(array('realname_id' => array('IN', $map)))->save($datas);
        }
    }
    public function delAll($map){
        return $this->obj->where(array('alipay_id' => array('IN', $map)))->where('real_status != 2')->delete();
    }


}