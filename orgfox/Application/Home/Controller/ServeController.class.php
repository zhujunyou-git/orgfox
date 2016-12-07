<?php
namespace Home\Controller;
use Library\Collect;
use Library\District;
use Library\Evaluate;
use Library\OrderShop;
use Library\Shop;
use Library\ShopSte;
use Model\UserModel;
use Think\Controller;
use Library\User;

class ServeController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->user  = new User();
        $this->shop  = new Shop();
        $this->dist  = new District();
        $this->orders= new OrderShop();
        $this->shops = new ShopSte();
        $this->coll  = new Collect();
        $this->eval  = new Evaluate();
    }
    /*
     * 服务超市首页
     */
    public function details(){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        //一级服务

        $one_indus=$this->indus->AllIndus('industry_pid=0','industry_id,industry_pid,industry_name');
        $this->assign('one_indus',$one_indus);
        /*
         * 所有服务
         * 查询到店铺开启的卖家
         * 查询出所有卖家的服务
         */
        $where['option']=1;
        $shopOK=$this->shops->allShops($where,'user_id');
            foreach($shopOK as $key => $val){
                foreach($val as $k => $v){
                    $str.=$v.',';
                }
            }
        if($str=substr($str,0,-1)){
        $indus_list=$this->shop->allshop(array('user_id'=>array('in',$str)));
        foreach($indus_list as $key => $val){
            foreach($val as $k => $v){
                if($k=='pro'){
                   $v and $indus_list[$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                }
                if($k=='city'){
                   $v && $indus_list[$key][$k]=$this->dist->onedist('id='.$v,'name')['name'];
                }
            }
        }}
        $this->assign('indus_list',$indus_list);
        $this->display();
    }
    /*
     * 二级服务并调出条件数据
     */
    public function two_server(){
        if(IS_AJAX){
            $where['indus_id']=I('post.indus_id');
            //数据
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
            }
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
            //数据
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
            }
            //二级服务
            $ajaxdata['three']=$this->indus->allindus('industry_pid='.$where['indus_pid']);
            $this->ajaxreturn($ajaxdata);
        }
    }
    /*
     * 三级条件
     */
    public function server()
    {
        if (IS_AJAX) {
            $where['indus_tid'] = I('post.indus_tid');
            //数据
            $ajaxdata['data'] = $this->shop->allshop($where, 'shop_id,bbbox,pro,city,money,server_name');
            foreach ($ajaxdata['data'] as $key => $val) {
                foreach ($val as $k => $v) {
                    if ($k == 'pro') {
                        $ajaxdata['data'][$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                    }
                    if ($k == 'city') {
                        $ajaxdata['data'][$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                    }
                }
            }
            $this->ajaxreturn($ajaxdata);
        }
    }
    /*
     * 排序条件
     */
    public function order(){
        if(IS_AJAX){
            $data=I('post.');
            $data['indus_id'] and $where['indus_id']=$data['indus_id'];
            $data['indus_pid'] and $where['indus_pid']=$data['indus_pid'];
            $data['indus_tid'] and $where['indus_tid']=$data['indus_tid'];
            $data['order'] and $or=$data['order'];
            switch($or){
                case 1;
                    $order['time']='desc';
                    break;
                case 2;
                    $order['time']='asc';
                    break;
                case 3;
                    $order['money']='desc';
                    break;
                case 4;
                    $order['money']='asc';
                    break;
                case 5;
                    $order['number']='desc';
                    break;
                case 6;
                    $order['number']='asc';
                    break;
            }
            $ajaxdata['data']=$this->shop->allShopOrder($where,$order);
            foreach ($ajaxdata['data'] as $key => $val) {
                foreach ($val as $k => $v) {
                    if ($k == 'pro') {
                        $ajaxdata['data'][$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                    }
                    if ($k == 'city') {
                        $ajaxdata['data'][$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                    }
                }
            }
            $this->ajaxReturn($ajaxdata);
        }
    }
    /*
     * 任务详情
     */
    public function business($shop_id){
        if(IS_AJAX){
            $page=I('post.pageNum');
            $evallist['total']=count($this->eval->alleval('shop_id='.$shop_id));//总数
            $evallist['pageSize']=10;//每页显示条数
            $evallist['totalPage']=ceil ($evallist['total']/10);//总页数
            $evallist['list']=$this->eval->page('shop_id='.$shop_id,$page);
            foreach($evallist['list'] as $key => $val) {
                foreach ($val as $k => $v) {
                    if ($k == 'user_id') {
                        $v and $evallist['list'][$key]['head'] = $this->user->oneuser('user_id=' . $v, 'head')['head'];
                    }
                    if ($k == 'shop_id') {
                        $v and $evallist['list'][$key]['server_name'] = $this->shop->oneshop('shop_id=' . $v, 'server_name')['server_name'];
                    }
                    if ($k == 'time') {
                        $v and $evallist['list'][$key]['time'] = date('Y-m-d',$v);
                    }

                }
            }
            $this->ajaxreturn($evallist);
        }
        //当前任务详情
        $data=$this->shop->oneshop('shop_id='.$shop_id);
        $data['pro'] and $data['pro']=$this->dist->onedist('id=' . $data['pro'], 'name')['name'];
        $data['city'] and $data['city']=$this->dist->onedist('id=' . $data['city'], 'name')['name'];
        $data['indus_tid'] and $data['indus_tid']=$this->indus->oneindus('industry_id='.$data['indus_tid'],'industry_name')['industry_name'];
        $this->assign('data',$data);
        //推荐的数据
        $where['user_id']=$data['user_id'];
        $where['recommend']=1;
        $recommend_list=$this->shop->allshop($where);
        foreach ($recommend_list as $key => $val) {
            foreach ($val as $k => $v) {
                if ($k == 'pro') {
                    $recommend_list[$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                }
                if ($k == 'city') {
                    $recommend_list[$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                }
            }
        }
        $this->assign('recommend_list',$recommend_list);
        //收藏状态
        $coll_where['user_id']=user_id();
        $coll_where['type']=2;
        $coll_where['corr_id']=$shop_id;
        $coll=$this->coll->onecoll($coll_where);
        $this->assign('coll',$coll);
        //用户评价
        $count=count($this->eval->alleval('shop_id='.$shop_id));//总数
        $this->assign('count',$count);
        /*$p=getpage($count,10);*/
        /*$evallist=$this->eval->page('shop_id='.$shop_id,$_GET['p']);*/
        /*$evallist=$this->eval->alleval('shop_id='.$shop_id);
        foreach($evallist as $key => $val) {
            foreach ($val as $k => $v) {
                if ($k == 'user_id') {
                    $evallist[$key]['head'] = $this->user->oneuser('user_id=' . $v, 'head')['head'];
                }
                if ($k == 'shop_id') {
                    $evallist[$key]['server_name'] = $this->shop->oneshop('shop_id=' . $v, 'server_name')['server_name'];
                }
            }
        }
        $this->assign('evallist', $evallist); // 赋值数据集*/
        /*$this->assign('page', $p->show()); */// 赋值分页输出
        $user_id=user_id();
        $this->assign('user_id',$user_id);
        $this->display();
    }


    /*
     * 购买页面
     */
    public function indent($shop_id)
    {
        if(IS_POST){
            $data=I('post.');
            $data['user_id']=user_id();
            $data['username']=username();
            $data['time']=time();
            if($_FILES['file']['name'][0]) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
                $upload->rootPath = './Uploads/orderfile/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $pic='/Uploads/orderfile/';
                $info = $upload->upload();
                $i = 1;
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    foreach ($info as $file) {
                        //$file['savepath'].$file['savename'];
                        $array[$i] =$pic. $file['savepath'] . $file['savename'];
                        $i++;
                    }
                }
                $data['file']='';
                if($array[1]){
                    $data['file'] .= $array[1].',';
                }
                if($array[2]){
                    $data['file'] .= $array[2].',';
                }
                if($array[3]){
                    $data['file'] .= $array[3].',';
                }
            }
            $data['file']=substr($data['file'],0,-1);
            if($id=$this->orders->add($data)){
                $this->success('购买成功，请支付','/home/Serve/pay/id/'.$id);
            }else{
                $this->error('购买成功，请支付');
            }
        }else{
        $data = $this->shop->oneshop('shop_id=' . $shop_id);
        $this->assign('data', $data);
        $where['user_id'] = $data['user_id'];
        $where['recommend'] = 1;
        $recommend_list = $this->shop->allshop($where);
        foreach ($recommend_list as $key => $val) {
            foreach ($val as $k => $v) {
                if ($k == 'pro') {
                    $recommend_list[$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                }
                if ($k == 'city') {
                    $recommend_list[$key][$k] = $this->dist->onedist('id=' . $v, 'name')['name'];
                }
            }
        }
        $this->assign('recommend_list', $recommend_list);
        $this->display();
        }
    }

    /*
     * 支付页面
     */
    public function pay($id){
        if(IS_POST){
            $userdata=$this->user->oneuser('user_id='.user_id());
            if($userdata['paypassword']){//设置支付密码
                if($userdata['paypassword']==md5(I('post.paypassword'))){//匹配密码
                    if(I('post.money')>$userdata['money']){
                        $this->error('余额不足');
                    }else{
                        $data['money']=$userdata['money']-I('post.money');
                        if($this->user->save('user_id='.user_id(),$data)){
                            $this->orders->save('id='.$id,array('type'=>1));
                            $this->success('支付成功,等待内容交付。','/home/User/employer');
                        }else{
                            $this->error('支付失败，请联系管理员');
                        }
                    }
                }else{
                    $this->error('密码不正确');
                }
            }else{
                if($userdata['password']==md5(I('post.paypassword'))){
                    if(I('post.money')>$userdata['money']){
                        $this->error('余额不足');
                    }else{
                        $data['money']=$userdata['money']-I('post.money');
                        if($this->user->save('user_id='.user_id(),$data)){
                            $this->orders->save('id='.$id,array('type'=>1));
                            $this->success('支付成功,等待内容交付。','/home/User/employer');
                        }else{
                            $this->error('支付失败，请联系管理员');
                        }
                    }
                }else{
                    $this->error('密码不正确');
                }
            }

        }else{
        $order_shop=$this->orders->oneorders('id='.$id);
        $this->assign('order_shop',$order_shop);
        $money=$this->user->oneuser('user_id='.user_id(),'money')['money'];
        $this->assign('moeny',$money);
        $this->display();}
    }
    /*
     * 买家服务需求
     */
    public function livt($id){
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $data=$this->orders->oneorders('id='.$id);
        $data['server_name']=$this->shop->oneshop('shop_id='.$data['shop_id'],'server_name')['server_name'];
        $str=$data['file'];
        $data['file']=explode(',',$str);
        $this->assign('data',$data);
        $this->display();
    }
    /*
     * 服务商卖家交付页面
     */
    public function livery($id){
        if(IS_POST){
            $data=I('post.');
            $data['delivery']=1;
            if($_FILES['delivery_file']['name'][0]) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
                $upload->rootPath = './Uploads/orderfile/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $pic='/Uploads/orderfile/';
                $info = $upload->upload();
                $i = 1;
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    foreach ($info as $file) {
                        //$file['savepath'].$file['savename'];
                        $array[$i] =$pic. $file['savepath'] . $file['savename'];
                        $i++;
                    }
                }
                $data['delivery_file']='';
                if($array[1]){
                    $data['delivery_file'] .= $array[1].',';
                }
                if($array[2]){
                    $data['delivery_file'] .= $array[2].',';
                }
                if($array[3]){
                    $data['delivery_file'] .= $array[3].',';
                }
            }
            $data['delivery_file']=substr($data['delivery_file'],0,-1);
            if($this->orders->save('id='.$id,$data)){
                $this->success('交付完成','/home/User/serprovider');
            }else{
                $this->error('交付失败');
            }
        }else{
        /*服务产品*/
        $parent_list=$this->indus->AllIndus('','industry_id,industry_pid,industry_name');
        $parent_list=data_merge($parent_list,'industry_pid','industry_id');
        $this->assign('parent_list',$parent_list);
        /*服务结束*/
        $this->display();
        }
    }
    /*
     * 雇主买家验收页面
     */
    public function livttwo($id){
        if(IS_POST){
            $data=I('post.');
            if($this->orders->save('id='.$id,$data)){
                //增加商品成交量
                $shop_id=$this->orders->oneorders('id='.$id,'shop_id')['shop_id'];
                $this->shop->setInc('shop_id='.$shop_id,'number',1);
                //增加店铺销售量 通过商品id拿到店铺主人的id
                $shop_user_id=$this->shop->oneshop('shop_id='.$shop_id,'user_id')['user_id'];
                $this->shops->setInc('user_id='.$shop_user_id,'total',1);
                //付款给卖家
                $this->success('验收成功','/home/User/employer');
            }else{
                $this->error('验收失败');
            }
        }else{
        $data=$this->orders->oneorders('id='.$id);
        $data['server_name']=$this->shop->oneshop('shop_id='.$data['shop_id'],'server_name')['server_name'];
        $str=$data['delivery_file'];
        $data['delivery_file']=explode(',',$str);
        $this->assign('data',$data);
        $this->display();
        }
    }
    /*
     * 评价页面
     */
    public function evalu($id){
        $this->assign('shop_id',$id);
        $this->display();
    }

}
