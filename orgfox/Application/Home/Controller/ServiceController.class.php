<?php
namespace Home\Controller;
use Library\District;
use Library\Shop;
use Library\ShopSte;
use Model\UserModel;
use Think\Controller;
use Library\User;

class ServiceController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->user = new User();
        $this->shops= new ShopSte();
        $this->dist = new District();
    }
    /*
     * 企业导航
     */
    public function ServiceProvider(){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        //一级服务
        $one_indus=$this->indus->AllIndus('industry_pid=0','industry_id,industry_pid,industry_name');
        $this->assign('one_indus',$one_indus);
        /*
         *店铺
         */
        $where_shop['option']=1;
        $shop=$this->shops->allshops($where_shop);
        foreach($shop as $key => $val){
            foreach($val as $k => $v){
                if($k == 'user_id'){
                    $shop[$key]['head']=$this->user->oneuser('user_id='.$v,'head')['head'];
                }
                if($k == 'indus_id'){
                   $v and  $shop[$key]['indus_id']=$this->indus->oneindus('industry_id='.$v,'industry_name')['industry_name'];
                }
                if($k == 'indus_pid'){
                    $v and  $shop[$key]['indus_pid']=$this->indus->oneindus('industry_id='.$v,'industry_name')['industry_name'];
                }
                if($k == 'indus_tid'){
                    $v and  $shop[$key]['indus_tid']=$this->indus->oneindus('industry_id='.$v,'industry_name')['industry_name'];
                }
                if($k == 'pro'){
                    $v and  $shop[$key]['pro']=$this->dist->onedist('id='.$v,'name')['name'];
                }
                if($k == 'city'){
                    $v and  $shop[$key]['city']=$this->dist->onedist('id='.$v,'name')['name'];
                }
            }
        }
        $this->assign('shop',$shop);
        $this->display();
    }
    /*
    * 二级服务并调出条件数据
    */
    public function two_server(){
        if(IS_AJAX){
            $where['indus_id']=I('post.indus_id');
            /*//数据
            $ajaxdata['data']=$this->shop->allshop($where,'shop_id,bbbox,pro,city,money,server_name');
            foreach($ajaxdata['data'] as $key => $val){
                foreach($val as $k => $v){
                    if($k=='pro'){
                        $v and  $ajaxdata['data'][$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                    }
                    if($k=='city'){
                        $v and  $ajaxdata['data'][$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                    }
                }
            }*/
            //二级服务
            $ajaxdata['two']=$this->indus->allindus('industry_pid='.$where['indus_id']);
            $this->ajaxreturn($ajaxdata);
        }
    }
    /*
     * 三级服务并调出条件数据
     */
    public function three_server(){
        if(IS_AJAX){
            $where['indus_pid']=I('post.indus_pid');
            /*//数据
            $ajaxdata['data']=$this->shop->allshop($where,'shop_id,bbbox,pro,city,money,server_name');
            foreach($ajaxdata['data'] as $key => $val){
                foreach($val as $k => $v){
                    if($k=='pro'){
                        $ajaxdata['data'][$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                    }
                    if($k=='city'){
                        $ajaxdata['data'][$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                    }
                }
            }*/
            //二级服务
            $ajaxdata['three']=$this->indus->allindus('industry_pid='.$where['indus_pid']);
            $this->ajaxreturn($ajaxdata);
        }
    }
}
