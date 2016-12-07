<?php
namespace Admin\Controller;
use Library\AuthAlipay;
use Library\AuthBank;
use Library\AuthRealname;
use Library\District;
use Library\Information;
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
        $this->dist= new District();
        $this->info= new Information();
    }

    /*
     * 支付宝审核
     */
    public function alipay(){
        if(I('get.alipay_id')){
            if($this->pay->save('alipay_id='.I('get.alipay_id'),array('alipay_status'=>2))){
                $this->success('审核成功');
            }else{
                $this->error('审核失败');
            }
        }else{
            $aliList=$this->pay->allAlipay('','username,time,alipay_status,alipay_id');
            $this->assign('aliList',$aliList);
            $this->display();
        }

    }
    //支付宝信息详情页
    public function zfbwse($alipay_id){
        $aliData=$this->pay->oneAlipay('alipay_id='.$alipay_id);
        $this->assign('alidata',$aliData);
        $this->display();
    }
    //批量删除
    public function alidel(){
        if(IS_POST){
            $str='';
            $alipay_id=I('post.alipay_id');
            foreach($alipay_id as $val){
                $str.=$val.',';
            }
            $str=substr($str,0,-1);
            if($this->pay->delAll($str)){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }
    /*
     * 银行卡审核
     */
    public function bank(){
        if(I('get.bank_id')){
            if($this->bank->save('bank_id='.I('get.bank_id'),array('bank_status'=>2))){
                $this->success('审核成功');
            }else{
                $this->error('审核失败');
            }
        }else {
            $bankList = $this->bank->allBank();
            $this->assign('bankList', $bankList);
            $this->display();
        }
    }
    //银行详细信息
    public function wse($bank_id){
        $banData=$this->bank->oneBank('bank_id='.$bank_id);
        $banData['bank_pro']=$this->dist->oneDist('id='.$banData['bank_pro'],'name')['name'];
        $banData['bank_city']=$this->dist->oneDist('id='.$banData['bank_city'],'name')['name'];
        $this->assign('bandata',$banData);
        $this->display();
    }
    //批量删除
    public function bankdel(){
        if(IS_POST){
            $str='';
            $bank_id=I('post.bank_id');
            foreach($bank_id as $val){
                $str.=$val.',';
            }
            $str=substr($str,0,-1);
            if($this->bank->delAll($str)){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }
    /*
     * 手机审核
     */
    public function phone(){
        $this->display();
    }
    /*
     * 实名审核
     */
    public function realname(){
        if(IS_POST){
            $data=I('post.');
            if($data['realname_id1']){
                $data1['real_status']=2;//审核通过
                if($this->real->save('realname_id='.$data['realname_id1'],$data1)){
                    //审核成功发送一条信息
                    $info=confInfo();
                    $info['title']='审核详情';
                    $info['content']='审核通过,请到认证中心查看';
                    $this->info->add($info);
                    $this->success('审核成功');
                }else{
                    $this->error('审核不成功');
                }
            }else if($data['realname_id2']){
                $data1['real_status']=3;//审核不通过
                if($this->real->save('realname_id='.$data['realname_id2'],$data1)){
                    //审核不通过发一条信息
                    $info=confInfo();
                    $info['title']='审核详情';
                    $info['content']=$data['content'];
                    $this->info->add($info);
                    $this->success('审核成功');
                }else{
                    $this->error('审核不成功');
                }
            }
        }else{
            $realList=$this->real->allreal();
            $this->assign('realList',$realList);
            $this->display();
        }
    }
    //删除操作
    public function realdel(){
        if(IS_POST){
            $realname_id=I('post.realname_id');
            if($this->real->del('realname_id='.$realname_id)){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }
    //批量操作
    public function realAll($status){
        if($status=='OK'){
            $str='';
            $realname_id=I('post.realname_id');
            foreach($realname_id as $val){
                $str.=$val.',';
            }
            $str=substr($str,0,-1);
            $datas['real_status']=2;
            if($this->real->saveAll($str,$datas)){
                $this->success('审核成功');
            }else{
                $this->error('审核失败');
            }
        }else if($status=='NO'){
            $str='';
            $realname_id=I('post.realname_id');
            foreach($realname_id as $val){
                $str.=$val.',';
            }
            $str=substr($str,0,-1);
            $datas['real_status']=3;
            if($this->real->saveAll($str,$datas,'real_status!=2')){
                $this->success('审核成功');
            }else{
                $this->error('审核失败');
            }
        }else if($status=='DEL'){
            $str='';
            $realname_id=I('post.realname_id');
            foreach($realname_id as $val){
                $str.=$val.',';
            }
            $str=substr($str,0,-1);
            if($this->real->delAll($str)){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }
}
