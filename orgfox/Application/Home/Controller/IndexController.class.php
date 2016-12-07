<?php
namespace Home\Controller;
use Model\UserModel;
use Think\Controller;
use Library\User;

class IndexController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->obj = new User();
    }
    /*
     * 登录页面
     */
    public function reception(){
        /*$str=GetRandStr(4);
        $_SESSION['verify']=$str;
        $this->assign('str',$str);*/
        $this->display();
    }
    /*
     * 注册
     */
    public function register(){
        if(IS_AJAX){
            $post = I('post.');
            $Ve = I('post.Captcha');
            $where['username'] = $post['username'];

            if (!check_verify($Ve)) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = "验证码错误";
            }else if ($this->obj->oneUser($where)) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = '该账号已经注册';
            } elseif (!isEmail($post['email'])) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = '邮箱格式不对，请重新输入';
            } elseif ($post['password'] != $post['repassword']) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = '两次输入的密码不一致，请重新输入';
            } else {
                unset($post['repassword']);
                $post['password']=md5(I('post.password'));
                $uid = $this->obj->add($post);
                if ($uid) {
                    $dataReturn['status'] = 1;
                    $dataReturn['info'] = '注册成功';
                }
            }
            $this->ajaxreturn($dataReturn);
        }
        $this->display();
    }

    /*
     * 验证码
     */
    public function verify()
    {
        $config = array(
            'fontSize' => 20,    // 验证码字体大小
            'length'   => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'useCurve' => false, // 关闭混肴曲线
    );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    /*
    * 激活账号链接
    */
    public function activate($uid){
        if($uid){
            $where['user_id']=base64_decode($uid);
            $data['is_activate']=1;
            if($this->obj->save($where,$data)){
                $this->success('激活成功去登录',U('index/reception'));
            }else{
                $this->error('激活失败，请联系客服');
            }
        }
    }
    /*
     * 首页
     */
    public function index(){
        if(IS_AJAX){
            $Ve = I('post.Captcha');
            $where['username'] = I('post.username');
            $where['password'] = md5(I('post.password'));
            $wheres['email']=I('post.username');
            $wheres['password'] = md5(I('post.password'));
            $user_id = $this->obj->oneUser($where, 'user_id')['user_id'];
            if(!$user_id){
                $is_activate=$this->obj->oneUser($where, 'is_activate');
                if($is_activate==1){
                    $user_id = $this->obj->oneUser($wheres, 'user_id');
                }
            }
            if (!check_verify($Ve)) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = "验证码错误";
            } else if (!$user_id) {
                $dataReturn['status'] = 0;
                $dataReturn['info'] = '账号密码错误，请重新输入';
            }  else{
                $where_userid['user_id'] = $user_id;
                $user = $this->obj->oneUser($where_userid);
                $dataReturn['status'] = 1;
                $dataReturn['info'] = '欢迎登录建设帮平台';
                $session['session_id']=session_id();
                $this->obj->save($where_userid,$session);
                session('user', $user);
            }
            $this->ajaxreturn($dataReturn);
        }
        /*if(session_id()!=$this->obj->oneUser(user_id(),'session_id')['session_id']){
            session('[destroy]');
        }*/
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $this->display();
    }
    /*
     * 退出登录
     */
    public function Logout(){
        session('[destroy]');
        redirect(U('index/reception'));
    }
}
