<?php
namespace Admin\Controller;
use Think\Controller;
use Library\User;
class IndexController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->obj = new User();
    }
    /*
     * 登录页
     */
    public function login(){
            $this->display();
    }
    /*
     * 验证码
     */
    public function verify()
    {
        $config = array(
            'fontSize' => 26,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    /*
     * 首页
     */
    public function index()
    {
        if ($_POST) {
            $Ve = I('post.Captcha');
            $where['username'] = I('post.username');
            $where['password'] = md5(I('post.password'));
            $user_id = $this->obj->oneUser($where, 'user_id');
            $bg_permission=$this->obj->oneUser($where, 'bg_permission');
            if (!check_verify($Ve)) {
                $this->error('！验证码错误');
            }elseif(!$user_id){
                $this->error('！账号密码错误');
            }elseif(!$bg_permission){
                $this->error('！非管理员不能登陆后台');
            }else{
                $where_userid['userid'] = $user_id;
                $user = $this->obj->oneUser($where_userid);
                session('user', $user);
                $this->success('欢迎登陆后台','index/index');
            }
        } else {
            $this->display();
        }
    }

}