<?php
namespace Home\Controller;
use Library\AuthAlipay;
use Library\AuthBank;
use Library\AuthEmail;
use Library\AuthRealname;
use Library\User;
use Think\Controller;


class AuthenticationController extends BaseController
{
    //认证管理
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->real= new AuthRealname();
        $this->pay = new AuthAlipay();
        $this->bank= new AuthBank();
        $this->obj = new User();
    }

    /*
     * 实名认证
     */
    public function realname(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/auth/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $pic='/Uploads/auth/';
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            foreach($info as $file){
                $pic.=$file['savepath'].$file['savename'];
            }
            $data=I('post.');
            $data['id_pic']=$pic;
            $data['user_id']=session('user.user_id');
            $data['username']=session('user.username');
            $data['time']=time();
            if($realname=$this->real->onereal('user_id='.session('user.user_id'))){
                $data['real_status']=1;
                unlink($_SERVER['DOCUMENT_ROOT'].$realname['id_pic']);
                if($this->real->save('user_id='.session('user.user_id'),$data)){
                    $this->success('信息修改成功，请等待审核');
                }else{
                    $this->error('信息修改失败');
                }
            }else{
                if($this->real->add($data)){
                    $this->success('信息提交成功，请等待审核');
                }else{
                    $this->error('信息提交失败');
                }
            }

        }
    }
    /*
     * 银行卡认证
     */
    public function bank(){
        if(IS_POST){
            $data=I('post.');
        }
        $data['user_id']=session('user.user_id');
        $data['username']=session('user.username');
        $data['time']=time();
        if($this->bank->oneBank('user_id='.session('user.user_id'))){
            $data['bank_status']=1;
            if($this->bank->save('user_id='.session('user.user_id'),$data)){
                $this->success('信息修改成功，请等待审核');
            }else{
                $this->error('信息修改失败');
            }
        }else{
            if($this->bank->add($data)){
                $this->success('信息提交成功，请等待审核');
            }else{
                $this->error('信息提交失败');
            }
        }
    }
    /*
     * 支付宝认证
     */
    public function alipay(){
        if(IS_POST){
            $data=I('post.');
        }
        $data['user_id']=session('user.user_id');
        $data['username']=session('user.username');
        $data['time']=time();
        if($this->pay->oneAlipay('user_id='.session('user.user_id'))){
            $data['alipay_status']=1;
            if($this->pay->save('user_id='.session('user.user_id'),$data)){
                $this->success('信息修改成功，请等待审核');
            }else{
                $this->error('信息修改失败');
            }
        }else{
            if($this->pay->add($data)){
                $this->success('信息提交成功，请等待审核');
            }else{
                $this->error('信息提交失败');
            }
        }
    }
    /*
     * 邮箱认证
     */
    public function email(){
        if(IS_POST){
            $data['email']=I('post.email');
            if(!isEmail($data['email'])){
                $dataReturn['status'] = 0;
                $dataReturn['info'] = '邮箱格式不对，请重新输入';
            }else{
                $data['is_activate']=0;
                $uid = $this->obj->save('user_id='.session('user.user_id'),$data);
                if ($uid) {
                    $email=$data['email'];
                    $str = "欢迎注册企狐平台,请点击链接激活邮箱:
                                                                www.entefox.com/home/index/activate/uid/" . base64_encode($uid);
                    SendMail($email, "邮箱激活", $str);
                    $this->success('请到邮箱激活');
                }else{
                    $this->error('邮箱已激活');
                }
            }
        }
    }
}
