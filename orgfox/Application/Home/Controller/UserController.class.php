<?php
namespace Home\Controller;
use Library\AuthAlipay;
use Library\AuthBank;
use Library\AuthRealname;
use Library\Collect;
use Library\Column;
use Library\District;
use Library\Evaluate;
use Library\Industry;
use Library\OrderShop;
use Library\Shop;
use Library\ShopSte;
use Library\Task;
use Library\Task_pid;
use Model\UserModel;
use Think\Controller;
use Library\User;

class UserController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->user = new User();
        $this->dist = new District();
        $this->real = new AuthRealname();
        $this->pay  = new AuthAlipay();
        $this->bank = new AuthBank();
        $this->colu = new Column();
        $this->coll = new Collect();
        $this->task = new Task();
        $this->indu = new Industry();
        $this->task_p=new Task_pid();
        $this->eval = new Evaluate();
        $this->shopS= new ShopSte();
        $this->shop = new Shop();
        $this->orders=new OrderShop();
    }

    /*
     * 用户中心
     */
    public function PersonalCenter(){
        $user=$this->user->oneUser('user_id='.user_id());
        $this->assign('user',$user);
        $this->display();
    }
    /*
     * 完善资料
     */
    public function administration(){
        //调取市区信息
        if(IS_AJAX){
            $upid=I('get.upid');
            $data=$this->dist->allDist('upid='.$upid);
            $this->ajaxreturn($data);
        }else{
            //用户信息
            $data=$this->user->oneUser('user_id='.session('user.user_id'));
            //省份信息
            $pro=$this->dist->allDist('upid=0');
            //实名认证信息
            $realname=$this->real->oneReal('user_id='.session('user.user_id'),'realname,id_card,id_pic,real_status');
            //支付宝认证信息
            $pay=$this->pay->oneAlipay('user_id='.session('user.user_id'),'payname,alipay,alipay_status');
            //银行卡认证信息
            $bank=$this->bank->oneBank('user_id='.session('user.user_id'),'realname,bank_name,bank_pro,bank_city,deposit_name,deposit_account,bank_status');
            //邮箱信息
            $email=$this->user->oneUser('user_id='.session('user.user_id'),'email,is_activate');


            $this->assign('pro',$pro);
            $this->assign('data',$data);
            $this->assign('pay',$pay);
            $this->assign('bank',$bank);
            $this->assign('email',$email);
            $this->assign('realname',$realname);
            $this->display();
        }
    }
    /*
     * 修改登录密码
     */
    public function loginPassword(){
        //修改密码
        if(I('post.password')){
            if($this->user->oneUser('user_id='.session('user.user_id'),'password')['password']!=md5(I('post.password'))){
                $this->error('原始密码错误');
            }else{
                $datas['password']=md5(I('post.password1'));
                if($this->user->save("user_id=".session('user.user_id'),$datas)){
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }
        }
    }
    /*
     * 修改支付密码
     */
    public function payPassword(){
        if(IS_POST){
            if(empty($this->user->oneUser('user_id='.session('user.user_id'),'paypassword')['paypassword'])){
                if($this->user->oneUser('user_id='.session('user.user_id'),'password')['password']!=md5(I('post.paypassword'))){
                    $this->error('密码错误');
                }else{
                    $datas['paypassword']=md5(I('post.paypassword1'));
                    if($this->user->save("user_id=".session('user.user_id'),$datas)){
                        $this->success('修改成功');
                    }else{
                        $this->error('修改失败');
                    }
                }
            }else if($this->user->oneUser('user_id='.session('user.user_id'),'paypassword')['paypassword']!=md5(I('post.paypassword'))){
                    $this->error('密码错误');
                }else{
                $datas['paypassword']=md5(I('post.paypassword1'));
                if($this->user->save("user_id=".session('user.user_id'),$datas)){
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }
        }
    }

    /*
     * 更新信息
     */
    public function administrationUpdate(){
        $data=I("post.");
        if($this->user->save("user_id=".$data['user_id'],$data)){
            $this->success('更新成功');
        }else{
            $this->error('更新失败');
        }
    }
    /*
     * 我是雇主
     */
    public function employer(){
        /*
         * 我发布的任务
         */
        $task_list=$this->task->allTask('user_id='.user_id());
        foreach($task_list as $key => $val){
            foreach($val as $k => $v){
                if($k=='indus_id'){
                    $task_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                }
                if($k=='indus_pid'){
                    $task_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                }
            }
        }
        $this->assign('task_list',$task_list);
        /*
         * 我的订单
         */
        $order=$this->orders->allorders('user_id='.user_id());
        foreach($order as $key=>$val){
            foreach($val as $k=>$v){
                if($k=='shop_id'){
                    $order[$key]['server_name']=$this->shop->oneShop('shop_id='.$v,'server_name')['server_name'];
                    $order[$key]['autograph']=$this->shop->oneShop('shop_id='.$v,'autograph')['autograph'];
                    $order[$key]['bbbox']=$this->shop->oneShop('shop_id='.$v,'bbbox')['bbbox'];
                    //判断是否已经评价
                    $eval_where['user_id']=user_id();
                    $eval_where['shop_id']=$v;
                    $eval_where['type']=1;
                    $order[$key]['eval']=$this->eval->oneeval($eval_where,'id')['id'];
                }
            }
        }
        /*
         * 交易评价
         */
        if(I('post.eval')){
            $eval_wheres['evaluate']=I('post.evaluate');
            $eval_wheres['type']=0;
            if(I('post.to_user_id')==2){
                $eval_wheres['user_id']=user_id();
            }else{
                $eval_wheres['to_user_id']=user_id();
            }
            $evallist=$this->eval->alleval($eval_wheres);
            foreach($evallist as $key => $val){
                foreach($val as $k => $v){
                    if($k=='user_id'){
                        $evallist[$key]['username']=$this->user->oneuser('user_id='.$v,'username')['username'];
                        $evallist[$key]['head']=$this->user->oneuser('user_id='.$v,'head')['head'];
                    }
                }
            }
            $this->ajaxreturn($evallist);
        }
        $eval_wheres['to_user_id']=user_id();
        $eval_wheres['evaluate']=1;
        $eval_wheres['type']=0;
        $evallist=$this->eval->alleval($eval_wheres);
        foreach($evallist as $key => $val){
            foreach($val as $k => $v){
                if($k=='user_id'){
                    $evallist[$key]['username']=$this->user->oneuser('user_id='.$v,'username')['username'];
                    $evallist[$key]['head']=$this->user->oneuser('user_id='.$v,'head')['head'];
                }
            }
        }
        $this->assign('evallist',$evallist);
        $this->assign('order',$order);
        /*
         * 我收藏的服务
         */
        $coll_where['user_id']=user_id();
        $coll_where['type']=2;
        $coll=$this->coll->allcoll($coll_where,'corr_id');
        foreach($coll as $key => $val){
            foreach($val as $k => $v){
                $str.=$v.',';
            }
        }
        if($str){
            $str=substr($str,0,-1);
            $coll_list=$this->shop->allshop(array('shop_id'=>array('in',$str)));
        }
        $this->assign('coll_list',$coll_list);
        $this->display();
    }
    public function mynews(){
        $this->display();
    }

    //上传头像
    public function head($user_id){
        if($_FILES){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
            $upload->rootPath = './Uploads/head/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $pic='/Uploads/head/';
            $info = $upload->upload();
            if (!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            } else {// 上传成功 获取上传文件信息
                foreach ($info as $file) {
                    $pic.=$file['savepath'].$file['savename'];
                }
            }
            $data['head']=$pic;
            $head=$this->user->oneUser('user_id='.$user_id,'head')['head'];
            if($head){
                unlink($_SERVER['DOCUMENT_ROOT'].$head);
            }
            if($this->user->save('user_id='.$user_id,$data)){
                $this->success('上传成功');
            }else{
                $this->error('上传失败');
            }
        }
    }
    /*
     * 我是服务商
     */
    public function serprovider(){
        //调取店铺设置选中的二级三级的数据
        /*
         * 我承接的服务
         */
        $opt_corr_where['user_id']=user_id();
        $opt_corr_where['status']='1';
        $opt_corr_id=$this->task_p->alltask_p($opt_corr_where,'task_id');
        foreach($opt_corr_id as $val){
            foreach($val as $k => $v){
                $opt_str.=$v.',';
            }
        }
        if(I('post.task')){
            $state=I('post.state');
            switch($state) {
                case 3;
                    $opt_where['service_state'] = 3;
                    break;
                case 2;
                    $opt_where['service_state'] = 2;
                    break;
                case 4;
                    $opt_where['service_state'] = array(array('eq',4),array('eq',5),'or');
                    break;
                case 6;
                    $opt_where['service_state'] = 6;
                    break;
            }
            if(I('post.task_model_id')){
                $opt_where['task_model_id']=I('post.task_model_id');
            }
            if($opt_str){
                $opt_str=substr($opt_str,0,-1);
                $opt_where['task_id']=array('in',$opt_str);
                $opt_list=$this->task->allTask($opt_where);
                foreach($opt_list as $key => $val){
                    foreach($val as $k => $v ){
                        if($k=='time'){
                            $opt_list[$key][$k]=date("Y-m-d",$v);
                        }
                        if($k=='indus_id'){
                            $opt_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                        }
                        if($k=='indus_pid'){
                            $opt_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                        }
                        if($k=='type'){
                            if($v==1){
                                $opt_list[$key][$k]='赏金未托管';
                            }else{
                                $opt_list[$key][$k]='赏金已托管';
                            }
                        }
                    }
                }
            }
            $this->ajaxreturn($opt_list);
        }
            if($opt_str){
                $opt_str=substr($opt_str,0,-1);
                $opt_where['task_id']=array('in',$opt_str);
                $opt_list=$this->task->allTask($opt_where);
            }
            foreach($opt_list as $key => $val){
                foreach($val as $k => $v){
                    if($k=='indus_id'){
                        $opt_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                    }
                    if($k=='indus_pid'){
                        $opt_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                    }
                }
            }
        $this->assign('opt_list',$opt_list);//中标数据
        $task_model=$this->colu->allcolu('upid='.$this->colu->onecolu(array('name'=>'任务模式'))['id']);
        $this->assign('task_model',$task_model);//任务模式
        /*
         * 交易评价
         */

        if(I('post.eval')){
            $eval_where['evaluate']=I('post.evaluate');
            $eval_where['type']=0;
            if(I('post.to_user_id')==2){
                $eval_where['user_id']=user_id();
            }else{
                $eval_where['to_user_id']=user_id();
            }
            $evallist=$this->eval->alleval($eval_where);
            foreach($evallist as $key => $val){
                foreach($val as $k => $v){
                    if($k=='user_id'){
                        $evallist[$key]['username']=$this->user->oneuser('user_id='.$v,'username')['username'];
                        $evallist[$key]['head']=$this->user->oneuser('user_id='.$v,'head')['head'];
                    }
                }
            }
            $this->ajaxreturn($evallist);
        }
        $eval_where['to_user_id']=user_id();
        $eval_where['evaluate']=1;
        $eval_where['type']=0;
        $evallist=$this->eval->alleval($eval_where);
        foreach($evallist as $key => $val){
            foreach($val as $k => $v){
                if($k=='user_id'){
                    $evallist[$key]['username']=$this->user->oneuser('user_id='.$v,'username')['username'];
                    $evallist[$key]['head']=$this->user->oneuser('user_id='.$v,'head')['head'];
                }
            }
        }
        $this->assign('evallist',$evallist);
        /*
         * 我的投标记录
         */
        $bid_where['user_id']=user_id();
        $bid_where['status']='0';
        $bid_task_id=$this->task_p->alltask_p($bid_where,'task_id');
        foreach($bid_task_id as $key=> $val){
            foreach($val as $k => $v){
                $bid_str.=$v.',';
            }
        }
        if($bid_str){
            $bid_str=substr($bid_str,0,-1);
            if(I('post.bid')){
                I('post.task_model_id') and $bid_task_where['task_model_id']=I('post.task_model_id');
                $bid_task_where['task_id']=array('in',$bid_str);
                $bid_list=$this->task->allTask($bid_task_where);
                foreach($bid_list as $key => $val){
                    foreach($val as $k => $v){
                        if($k=='time'){
                            $bid_list[$key][$k]=date("Y-m-d",$v);
                        }
                        if($k=='indus_id'){
                            $bid_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                        }
                        if($k=='indus_pid'){
                            $bid_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                        }
                        if($k=='type'){
                            if($v==1){
                                $bid_list[$key][$k]='赏金未托管';
                            }else{
                                $bid_list[$key][$k]='赏金已托管';
                            }
                        }
                    }
                }
                $this->ajaxreturn($bid_list);
            }
            $bid_task_where['task_id']=array('in',$bid_str);
            $bid_list=$this->task->allTask($bid_task_where);
            foreach($bid_list as $key => $val){
                foreach($val as $k => $v){
                    if($k=='indus_id'){
                        $bid_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                    }
                    if($k=='indus_pid'){
                        $bid_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                    }
                }
            }
        }
        $this->assign('bid_list',$bid_list);
        /*
         * 我的订单
         */
        $shop=$this->shop->allshop('user_id='.user_id(),'shop_id');
        foreach($shop as $key=>$val){
            foreach($val as $k=>$v){
                 $shop_id.=$v.',';
            }
        }
        $shop_id=substr($shop_id,0,-1);
        if($shop_id){
            $order=$this->orders->inorders($shop_id);
        }
        foreach($order as $key=>$val){
            foreach($val as $k=>$v){
                if($k=='shop_id'){
                    $order[$key]['server_name']=$this->shop->oneShop('shop_id='.$v,'server_name')['server_name'];
                    $order[$key]['autograph']=$this->shop->oneShop('shop_id='.$v,'autograph')['autograph'];
                    $order[$key]['bbbox']=$this->shop->oneShop('shop_id='.$v,'bbbox')['bbbox'];
                }
            }
        }
        $this->assign('order',$order);
        /*
         * 我的收藏
         */
        $where['user_id']=user_id();
        $where['type']=1;
        $corr_id=$this->coll->allColl($where,'corr_id');
        foreach($corr_id as $val){
            foreach($val as $k => $v){
                $str.=$v.',';
            }
        }
        if($str){
            $str=substr($str,0,-1);
            $task_where['task_id']=array('in',$str);
            $task_list=$this->task->allTask($task_where);
        foreach($task_list as $key => $val){
            foreach($val as $k => $v){
                if($k=='indus_id'){
                    $task_list[$key][$k]=$this->indu->oneIndus('industry_id='.$v,'industry_name')['industry_name'];//调取父类行业
                }
                if($k=='indus_pid'){
                    $task_list[$key][$k]=$this->indu->oneindus('industry_id='.$v,'industry_name')['industry_name'];//调取子类行业
                }
            }
        }
        }
        $this->assign('task_list',$task_list);//收藏列表

        /*
         * 店铺设置
         */
        if($upid=I('get.upid')) {
            $data = $this->dist->allDist('upid=' . $upid);
            $this->ajaxreturn($data);
        }
        if(I('get.industry_id')) {
            $industry_id = I('get.industry_id');
            $data = $this->indus->allindus('industry_pid=' . $industry_id);
            $this->ajaxreturn($data);
        }
        /*调取所有的服务*/
        $parent_indus=$this->indus->AllIndus('industry_pid=0','industry_id,industry_name');
        foreach($parent_indus as $key =>$val){
            foreach($val as $k => $v){
                if($k=='industry_id'){
                    $parent_indus[$key]['list']=$this->indus->allIndus('industry_pid='.$v,'industry_id,industry_name');
                }
            }
        }
        $this->assign('parent_indus',$parent_indus);
        //地区
        $pro=$this->dist->Alldist('upid=0');
        $this->assign('pro',$pro);
        //店铺设置
        $shopS=$this->shopS->oneshopS('user_id='.user_id());
        if($shopS){
            $shopS['city'] and $shopS['city1']=$this->dist->oneDist('id='.$shopS['city'],'name')['name'];
            $shopS['one_id'] and $shopS['one_id']=explode(',',$shopS['one_id']);
            $shopS['two_id'] and $two_id=json_encode(explode(',',$shopS['two_id']));
            $shopS['there_id'] and $there_id=json_encode(explode(',',$shopS['there_id']));
        }
        $this->assign('two_id',$two_id);
        $this->assign('there_id',$there_id);
        $this->assign('shopS',$shopS);
        //服务管理
        $shop_list=$this->shop->allshop('user_id='.user_id());
        $this->assign('shop_list',$shop_list);

        $this->display();
    }
    /*
     * 上下架
     */
    public function SMT(){
        if(IS_GET){
            $data=I('get.');
            if($data['smt']==1){
                if($this->shop->save('shop_id='.$data['shop_id'],$data)){
                    $this->success('上架成功');
                }else{
                    $this->error('上架失败');
                }
            }else{
                if($this->shop->save('shop_id='.$data['shop_id'],$data)){
                    $this->success('下架成功');
                }else{
                    $this->error('下架失败');
                }
            }
        }
    }
    /*
     * 推荐
     */
    public function recommend(){
        if(IS_GET){
            $data=I('get.');
            if($data['recommend']==1){
                if($this->shop->save('shop_id='.$data['shop_id'],$data)){
                    $this->success('推荐成功');
                }else{
                    $this->error('推荐失败');
                }
            }else{
                if($this->shop->save('shop_id='.$data['shop_id'],$data)){
                    $this->success('取消推荐成功');
                }else{
                    $this->error('取消推荐失败');
                }
            }
        }
    }
    /*
     * 删除商品
     */
    public function shopDel($shop_id){
        if($this->shop->del('shop_id='.$shop_id)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    /*
     * 删除店铺设置图片
     */
    public function del_img(){
        if(IS_AJAX){
            //删除店铺头部图片
            if(I('post.val')=='headpicture'){
                $data['headpicture']='';
                if($this->shopS->save('id='.I('post.id'),$data)){
                    $returndata['status']=1;
                }else{
                    $returndata['status']=0;
                }
            }
            if(I('post.val')=='footpicture'){
                $data['footpicture']='';
                if($this->shopS->save('id='.I('post.id'),$data)){
                    $returndata['status']=1;
                }else{
                    $returndata['status']=0;
                }
            }
            $this->ajaxreturn($returndata);
        }
    }
}
