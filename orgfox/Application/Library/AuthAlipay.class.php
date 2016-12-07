<?php
namespace Library;
use Library\Base;

class AuthAlipay extends Base
{
    public function __construct()
    {
        $this->obj = M('Auth_alipay');
    }

    public function oneAlipay($map, $field = '*')
    {
        return $this->obj->field($field)->where($map)->find();
    }

    public function allAlipay($map, $field = '*')
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
    public function delAll($map){
        return $this->obj->where(array('alipay_id' => array('IN', $map)))->where('alipay_status != 2')->delete();
    }
}

