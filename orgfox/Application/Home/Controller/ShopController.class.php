<?php
namespace Home\Controller;
use Behavior\ReadHtmlCacheBehavior;
use Library\AuthAlipay;
use Library\AuthBank;
use Library\AuthRealname;
use Library\District;
use Library\Shop;
use Library\ShopSte;
use Library\User;
use Think\Controller;


class ShopController extends BaseController
{
    //店铺
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->shopS = new ShopSte();
        $this->user  = new User();
        $this->real  = new AuthRealname();
        $this->pay   = new AuthAlipay();
        $this->bank  = new AuthBank();
        $this->dist  = new District();
        $this->shop  = new Shop();
    }
    /*
     * 我的店铺
     */
    public function myshop(){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        //店铺数据

        $shop_list=$this->shopS->oneshopS('user_id='.user_id());
        $user=$this->user->oneuser('user_id='.user_id());
        $shop_list['head']=$user['head'];
        $user['pro'] and $shop_list['pro']=$this->dist->onedist('id='.$user['pro'],'name')['name'];
        $user['city'] and $shop_list['city']=$this->dist->onedist('id='.$user['city'],'name')['name'];
        $shop_list['real']=$this->real->oneReal('user_id='.user_id(),'real_status')['real_status'];//2验证通过
        $shop_list['pay'] =$this->pay->onealipay('user_id='.user_id(),'alipay_status')['alipay_status'];//2验证通过
        $shop_list['bank']=$this->bank->onebank('user_id='.user_id(),'bank_status')['bank_status']; //2验证通过

        /*
         * 发布的服务
         */
        $list=$this->shop->allshop('user_id='.user_id());
        foreach($list as $key => $val){
            foreach($val as $k => $v){
                if($k=='pro'){
                 $v and  $list[$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                }
                if($k=='city'){
                 $v and  $list[$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                }
            }
        }
        $this->assign('list1',$list);
        $this->assign('shop_list',$shop_list);
        $this->display();
    }
    /*
     * 店铺设置
     */
    public function shopSte(){
        if(IS_POST){
            $data=I('post.');
            $data['one_id']=implode(',',$data['one_id']);
            $data['two_id']=implode(',',$data['two_id']);
            $data['there_id']=implode(',',$data['there_id']);
            $data['user_id']=user_id();
            $data['username']=username();
            if($_FILES['headpicture']['name']){
                $data['headpicture']=func_fileone('Uploads/headpicture/','headpicture');
                $headpicture=$this->shopS->oneshopS('user_id='.user_id(),'headpicture')['headpicture'];
                unlink($_SERVER['DOCUMENT_ROOT'].$headpicture);
            }
            if($_FILES['footpicture']['name']){
                $data['footpicture']=func_fileone('Uploads/footpicture/','footpicture');
                $footpicture=$this->shopS->oneshopS('user_id='.user_id(),'footpicture')['footpicture'];
                unlink($_SERVER['DOCUMENT_ROOT'].$footpicture);
            }
            if($this->shopS->oneshopS('user_id='.user_id())){
                if($this->shopS->save('user_id='.user_id(),$data)){
                    $this->success('店铺设置成功');
                }else{
                    $this->error('店铺设置失败');
                }
            }else{
                if($this->shopS->add($data)){
                    $this->success('店铺设置成功');
                }else{
                    $this->error('店铺设置失败');
                }
            }

        }
    }
    /*
     * 发布服务
     */
    public function release(){
        if(IS_POST){
            $data=I('post.');
            $data['user_id']=user_id();
            $data['username']=username();
            $data['time']=time();
            if($_FILES['aabox']['name']){
                $data['aabox']=func_fileone('Uploads/aabox/','aabox');
            }
            if($_FILES['bbbox']['name']){
                $data['bbbox']=func_fileone('Uploads/bbbox/','bbbox');
            }
            if($this->shop->add($data)){
                $this->success('服务发布成功');
            }else{
                $this->error('服务发布失败');
            }

        }
    }

}
