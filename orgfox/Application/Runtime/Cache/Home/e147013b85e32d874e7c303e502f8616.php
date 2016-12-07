<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账号管理</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/css/fotorama.css">
    <link href="/Public/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
         <div class="container-fluid personalTop">
            <div class="container">
              <div class="pull-left personalNav">
                  <a href="<?php echo U('index/index');?>" class="pull-left"><img src="/Public/img/logo1.jpg" class="autoimg" alt=""></a>
                  <p class="pull-left">
                    <a href="PersonalCenter.html" >我的主页</a>
                    <a href="employer.html">我是雇主</a>
                    <a href="serprovider.html">我是服务商</a>
                    <a href="administration.html" class="cur">账号管理</a>
                    <a href="mynews.html">我的消息</a>
                  </p>
              </div>
              <div class="mysearchs personalsearchs pull-right">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">服务<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left myinput" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入关键词">
                  </div>
                  <button type="submit" class="btn btn-default">搜索</button>
                </form>
              </div>
              </div>
            </div>
         </div>
         <div class="container personalmain employer">
             <div class="personalleft pull-left">
                <div>
                   <h3><img src="/Public/img/I5.png" class="autoimg" alt="">基本资料</h3>
                   <ul class="cur">
                     <li class="cur"><a href="javascript:void(0);">资料完善</a></li>
                     <li><a href="javascript:void(0);">技能标签</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I6.png" class="autoimg" alt="">账号安全</h3>
                   <ul>
                     <li><a href="javascript:void(0);">修改登录密码</a></li>
                     <li><a href="javascript:void(0);">修改支付密码</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I7.png" class="autoimg" alt="">财务管理</h3>
                   <ul>
                     <li><a href="javascript:void(0);">收支明细</a></li>
                     <li><a href="javascript:void(0);">我要提现</a></li>
                     <li><a href="javascript:void(0);">我要充值</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I15.png" class="autoimg" alt="">认证管理</h3>
                   <ul>
                     <li><a href="javascript:void(0);">实名认证</a></li>
                     <li><a href="javascript:void(0);">银行卡绑定</a></li>
                     <li><a href="javascript:void(0);">支付宝绑定</a></li>
                     <li><a href="javascript:void(0);">邮箱绑定</a></li>
                     <li><a href="javascript:void(0);">手机绑定</a></li>
                   </ul>
                </div>
             </div>
             <div class="employerright pull-right employer1 administr">
                 <div  class="cur">
                   <h3>资料完善</h3>
                   <form action="<?php echo U('administrationUpdate');?>" class="form-horizontal formziliao" method="post" name="formziliao" id="formziliao">
                    <div class="form-group">
                      <label for="zlusername" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" readonly="readonly" value="<?php echo ($data["username"]); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">电子邮箱</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="zlemail" name="email" value="<?php echo ($data["email"]); ?>" onblur="CheckMail(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nametrue" class="col-sm-2 control-label" >真实姓名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nametrue" name="nametrue" value="<?php echo ($data["nametrue"]); ?>" onblur="Checkname(this.value,this)">
                      </div>
                    </div>
                    <div class="btn-group btn-group-justified form-group">
                        <label for="nametrue" class="col-sm-2 control-label">所在地</label>
                        <div class="col-sm-10">
                          <div class="btn-group">
                            <select name="pro"  id="pro">
                                <option value="">请选择</option>
                                <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"  <?php echo $data['pro']==$vo['id'] ? "selected='selected'" : '';?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                          </div>
                          <div class="btn-group">
                            <select name="city"  id="city" data-city=<?php echo ($data['city']); ?>>

                            </select>
                          </div>
<!--                          <div class="btn-group">
                            <select name="area" id="area">

                            </select>
                          </div>-->
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="telnumber" class="col-sm-2 control-label">手机号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="telnumber" name="phone" value="<?php echo ($data["phone"]); ?>" onblur="checkMobile(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="qqnumber" class="col-sm-2 control-label">QQ</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="qqnumber" name="qq" value="<?php echo ($data["qq"]); ?>" onblur="Checknum(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="info" class="col-sm-2 control-label">个人信息</label>
                      <div class="col-sm-5">
                       <textarea class="form-control textarex" rows="3" name="Information" ><?php echo ($data["information"]); ?></textarea>
                      </div>
                    </div>
                    <div class="form-a">
                        <input type="hidden" name="user_id" value="<?php echo ($data["user_id"]); ?>">
                        <input type="button" class="mybuttonalink" value="保存"/>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>实名认证</h3>
                   <form action="<?php echo U('Authentication/realname');?>" class="form-horizontal formziliao" method="post" enctype="multipart/form-data" >
                    <div class="form-group shiming">
                      <span class="imgboxmy"><img src="/Public/img/z3.png" class="autoimg" alt=""></span>
                      <label for="zsname" class="col-sm-2 control-label">真实姓名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="zsname" name="realname" onblur="mima(this.value,this)" value="<?php echo ($realname["realname"]); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="idnumer" class="col-sm-2 control-label">身份证号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="idnumer" name="id_card" maxlength="18" min-length="18" onblur="mima(this.value,this)" value="<?php echo ($realname["id_card"]); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nametrue" class="col-sm-2 control-label">证件图：</label>
                      <div class="col-sm-5">
                        <input type="file" class="form-control" id="nametrue" name="id_pic" onblur="mima(this.value,this)">
                      </div>
                        <?php if($realname["status"] == 1): ?><div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核中</span>
                            </div>
                            <?php elseif($realname["status"] == 2 ): ?>
                            <div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核通过</span>
                            </div>
                            <?php else: endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="goimging">
                          <img src="<?php echo ($realname["id_pic"]); ?>" class="autoimg" alt="">
                        </div>
                    </div>
                    <div class="form-a">
                        <input type="submit" value="提交" class="mybuttonalink">
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>手机绑定</h3>
                   <form action="" class="form-horizontal formziliao">
                    <div class="form-group shiming">
                      <span class="imgboxmy"><img src="/Public/img/z2.png" class="autoimg" alt=""></span>
                      <label for="telnumers" class="col-sm-2 control-label">手机号码</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="telnumers"  placeholder="手机号码" onblur="checkMobile(this.vlaue,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink">提交</a>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>我要充值</h3>
                   <form action="<?php echo U('pay/doalipay');?>" class="form-horizontal" method="post">
                    <div class="form-group shiming mchongzhi">
                      <p class="myassets">我的资产：<b>1000.00</b>元</p>
                      <label for="username" class="col-sm-2 control-label">充值金额</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" name="WIDtotal_fee"  placeholder="充值金额">
                      </div>
                    </div>
                    <div class="form-group">
                      <h4 class="h4boxautoimg">选择支付方式：</h4>
                      <div>
                        <span>
                            <input type="checkbox" class="" id="username" name="pay" value="1">
                            <b><img src="/Public/img/zfb1.jpg" class="autoimg" alt=""></b>
                        </span>
                      </div>
                    </div>
                    <div class="form-a">
                        <input type="submit" value="确认充值" >
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>我要提现</h3>
                   <form action="" class="form-horizontal formziliao">
                    <div class="form-group shiming mchongzhi">
                      <p class="myassets">我的资产：<b>1000.00</b>元</p>
                      <label for="kingmoney" class="col-sm-2 control-label">提现金额</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="kingmoney"  placeholder="提现金额" onblur="Checknum(this.value,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <h4 class="h4boxmyautoimg">你还未进行支付绑定！</h4>
                      <a href="javascript:void(0);" class="mybuttonalink">提现</a>
                      <a href="javascript:void(0);" style="display:none;">去绑定</a>
                    </div>
                   </form>
                 </div>
                 <div  >
                   <h3>银行卡绑定</h3>
                   <form action="<?php echo U('Authentication/bank');?>" class="form-horizontal formziliao" method="post">
                    <div class="form-group shiming">
                      <span class="imgboxmy"><img src="/Public/img/z4.png" class="autoimg" alt=""></span>
                      <label for="telphone" class="col-sm-3 control-label">真实姓名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="telphone" name="realname" value="<?php echo ($bank["realname"]); ?>" placeholder="真实姓名" >
                      </div>
                        <?php if($bank["bank_status"] == 1 ): ?><div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核中</span>
                            </div>
                            <?php elseif($bank["alipay_status"] == 2 ): ?>
                            <div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核通过</span>
                            </div>
                            <?php else: endif; ?>
                    </div>
                    <div class="btn-group btn-group-justified form-group">
                        <label for="nametrue" class="col-sm-3 control-label">开户银行</label>
                        <div class="col-sm-9">
                          <div class="btn-group">
                            <select name="bank_name" id="">
                              <option value="">请选择</option>
                              <option value="中国农业银行" <?php echo $bank['bank_name']=="中国农业银行" ? "selected='selected'" : '';?>>中国农业银行</option>
                              <option value="中国工商银行" <?php echo $bank['bank_name']=="中国工商银行" ? "selected='selected'" : '';?>>中国工商银行</option>
                              <option value="中国招商银行" <?php echo $bank['bank_name']=="中国招商银行" ? "selected='selected'" : '';?>>中国招商银行</option>
                              <option value="中国建设银行" <?php echo $bank['bank_name']=="中国建设银行" ? "selected='selected'" : '';?>>中国建设银行</option>
                              <option value="中国交通银行" <?php echo $bank['bank_name']=="中国交通银行" ? "selected='selected'" : '';?>>中国交通银行</option>
                              <option value="中国浦发银行" <?php echo $bank['bank_name']=="中国浦发银行" ? "selected='selected'" : '';?>>中国浦发银行</option>
                              <option value="中国民生银行" <?php echo $bank['bank_name']=="中国民生银行" ? "selected='selected'" : '';?>>中国民生银行</option>
                              <option value="中国中信银行" <?php echo $bank['bank_name']=="中国中信银行" ? "selected='selected'" : '';?>>中国中信银行</option>
                              <option value="中国邮政储蓄银行" <?php echo $bank['bank_name']=="中国邮政储蓄银行" ? "selected='selected'" : '';?>>中国邮政储蓄银行</option>
                              <option value="中国兴业银行" <?php echo $bank['bank_name']=="中国兴业银行" ? "selected='selected'" : '';?>>中国兴业银行</option>
                              <option value="中国华夏银行" <?php echo $bank['bank_name']=="中国华夏银行" ? "selected='selected'" : '';?>>中国华夏银行</option>
                              <option value="中国银行" <?php echo $bank['bank_name']=="中国银行" ? "selected='selected'" : '';?>>中国银行</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="btn-group btn-group-justified form-group">
                        <label for="nametrue" class="col-sm-3 control-label">开户银行所在地</label>
                        <div class="col-sm-9">
                          <div class="btn-group">
                              <select name="bank_pro"  id="pro1">
                                  <option value="">请选择</option>
                                  <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"  <?php echo $bank['bank_pro']==$vo['id'] ? "selected='selected'" : '';?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                              </select>
                          </div>
                          <div class="btn-group">
                            <select name="bank_city" id="city1"  >

                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="kfname" class="col-sm-3 control-label">开户行名称</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="kfname" name="deposit_name" value="<?php echo ($bank['deposit_name']); ?>" placeholder="开户行名称" onblur="Checkname(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="yhnumer" class="col-sm-3 control-label">银行卡号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="yhnumer" name="deposit_account"  value="<?php echo ($bank['deposit_account']); ?>" placeholder="银行卡号" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="yhnumers" class="col-sm-3 control-label">再输一次银行卡号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="yhnumers"  placeholder="再输入一次银行卡号" onblur="mimas(this.value,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink
                      ">提交</a>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>邮箱绑定</h3>
                   <form class="form-horizontal formziliao " method="post" action="<?php echo U('Authentication/email');?>">
                    <div class="form-group shiming">
                      <span class="imgboxmy"><img src="/Public/img/z5.png" class="autoimg" alt=""></span>
                      <label for="myeilan" class="col-sm-2 control-label">邮箱</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="myeilan" placeholder="邮箱" name="email" value="<?php echo ($email["email"]); ?>" onblur="CheckMail(this.value,this)">
                      </div>
                        <?php if($email["is_activate"] == 0): ?><div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">请到邮箱激活</span>
                            </div>
                            <?php elseif($email["is_activate"] == 1): ?>
                            <div class="col-sm-3">
                                <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">邮箱已激活</span>
                            </div>
                            <?php else: endif; ?>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink">发送邮件</a>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>支付宝绑定</h3>
                   <form action="<?php echo U('Authentication/alipay');?>" class="form-horizontal formziliao" method="post">
                    <div class="form-group shiming">
                      <span class="imgboxmy"><img src="/Public/img/z1.png" class="autoimg" alt=""></span>
                      <label for="zfusername" class="col-sm-3 control-label">支付宝姓名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="zfusername" name="payname" placeholder="支付宝姓名" value="<?php echo ($pay["payname"]); ?>" onblur="mima(this.value,this)">
                      </div>

                        <?php if($pay["alipay_status"] == 1 ): ?><div class="col-sm-3">
                            <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核中</span>
                        </div>
                            <?php elseif($pay["alipay_status"] == 2 ): ?>
                            <div class="col-sm-3">
                            <span style="font-size: 14px;line-height: 32px;color: #fff;background: #5bc0de;margin-top: 1px;display: block;width: 80px;text-align: center;">审核通过</span>
                        </div>
                            <?php else: endif; ?>

                    </div>
                    <div class="form-group">
                      <label for="zfname" class="col-sm-3 control-label">支付宝账号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="zfname" name="alipay" value="<?php echo ($pay["alipay"]); ?>" placeholder="支付宝账号" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="turezfnumer" class="col-sm-3 control-label">确认支付宝账号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="turezfnumer"  placeholder="确认支付宝账号" onblur="mimas(this.value,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink">提交</a>
                    </div>
                   </form>
                 </div>
                 <div >
                   <h3>修改登录密码</h3>
                   <form action="<?php echo U('loginPassword');?>" class="form-horizontal formziliao" method="post">
                    <p class="modify">为了您的权益与安全，请不要将登录密码透露给他人，并且牢记您的新密码</p>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">当前密码</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control"  name="password" placeholder="当前密码" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">新密码</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control"   placeholder="新密码" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">确认密码</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" name="password1"  placeholder="确认密码" onblur="mimas(this.value,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink">提交</a>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>修改支付密码</h3>
                   <form action="<?php echo U('payPassword');?>" class="form-horizontal formziliao" method="post">
                    <p class="modify"> 
                      支付密码变更：在进行操作同时，请牢记自己的新支付密码，支付密码将用于涉及到资金流确认时使用。如：提现、付款等【用户的初始支付密码与用户密码相同】
                    </p>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">当前支付密码</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nowpassword" name="paypassword" placeholder="当前支付密码" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">新支付密码</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="paypassword1" placeholder="新支付密码" onblur="mima(this.value,this)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">确认支付密码</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="newpassword"  placeholder="确认支付密码" onblur="mimas(this.value,this)">
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="javascript:void(0);" class="mybuttonalink">确定</a>
                    </div>
                   </form>
                 </div>
                 <div>
                   <h3>收支明细</h3>
                   <form action="" class="form-horizontal">
                    <div class="form-group shiming mchongzhi">
                      <p class="myassets">我的资产：<b>1000.00</b>元</p>
                      <div class="alinkbox">
                          <a href="" >充值</a>
                          <a href="" class="myalink">提现</a>
                      </div>
                    </div>
                    <div class="formrow">
                      <div class="row">
                        <div class="col-sm-4 cur"><a href="javascript:void(0);">最近交易记录</a></div>
                        <div class="col-sm-4 "><a href="javascript:void(0);">充值记录</a></div>
                        <div class="col-sm-4 "><a href="javascript:void(0);">提现记录</a></div>
                      </div>
                        <div class="checkrow">
                            <div class="cur">
                                <div class="row firstrow">
                                    <div class="col-sm-3">编号</div>
                                    <div class="col-sm-3">流水</div>
                                    <div class="col-sm-3">项目收支</div>
                                    <div class="col-sm-3">时间</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"><span>1111</span></div>
                                    <div class="col-sm-3">发布任务</div>
                                    <div class="col-sm-3">-1.00</div>
                                    <div class="col-sm-3">2016-10-24  15:55</div>
                                </div>
                            </div>
                            <div>
                                <div class="row firstrow">
                                    <div class="col-sm-3">编号</div>
                                    <div class="col-sm-3">充值账号</div>
                                    <div class="col-sm-3">充值金额</div>
                                    <div class="col-sm-3">充值时间</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"><span>1111</span></div>
                                    <div class="col-sm-3">11111111</div>
                                    <div class="col-sm-3">1.00</div>
                                    <div class="col-sm-3">2016-10-24  15:55</div>
                                </div>
                            </div>
                            <div>
                                <div class="row firstrow">
                                    <div class="col-sm-3">编号</div>
                                    <div class="col-sm-3">提现人</div>
                                    <div class="col-sm-3">提现金额</div>
                                    <div class="col-sm-3">时间</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"><span>1111</span></div>
                                    <div class="col-sm-3">xxxx</div>
                                    <div class="col-sm-3">1.00</div>
                                    <div class="col-sm-3">2016-10-24  15:55</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </form>
                 </div>
             </div>
         </div>
          <div class="container-fluid flooreih marginTop">
              <div class="container">
                     <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>
                     <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a>   <a href="">RSS订阅</a> </p> 
                     <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>    
              </div>
          </div>
          <script src="/Public/js/jquery-2.1.1.min.js"></script>
          <script type="text/javascript">
           $(".employer .personalleft h3").click(function(){
              $(this).siblings("ul").toggleClass("cur");
           });
           $(".employer .personalleft a").click(function(){
            $(this).parents(".personalleft").find("li").removeClass("cur");
            $(this).parents("li").addClass("cur");
            var thistext=$(this).text()
            for(var i=0;i<$(".administr h3").length;i++){
               if(thistext===$(".administr h3").eq(i).text()){
                  $(".administr>div").eq(i).addClass("cur").siblings().removeClass("cur")
               }
            }
           });
           var o=$("#yhnumer").val();
           //手机验证
           function checkMobile(s,t){  
              var regu =/^1[34578]\d{9}$/;
              var re = new RegExp(regu);
              if (re.test(s)) {
                t.style.borderColor="#ccc";
                return true;
              }else{
                t.value="";
                t.style.borderColor="red";
                return false;
              }
            } 
            //邮箱验证
            function CheckMail(mail,t) {
             var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             if (filter.test(mail)) {
              t.style.borderColor="#ccc";
              return true;
            }
             else {
              t.value="";
             t.style.borderColor="red";
             return false;}
            }
            //姓名验证
            function Checkname(name,t) {
             var filter  =/^[\u4E00-\u9FA5]+$/;
             if (filter.test(name)) {
              t.style.borderColor="#ccc";
              return true;
             }
             else {
              t.value="";
             t.style.borderColor="red";
             return false;}
            }
            //数字验证
            function Checknum(num,t) {
             var filter =/^\d+(\.\d+)?$/;
             if (filter.test(num)) {
              t.style.borderColor="#ccc";
              return true;
             }
             else {
              t.value="";
             t.style.borderColor="red";
             return false;
             }
            }
            //密码验证
            function mima(minum,t){
                if(minum==null||minum==""){
                  t.value="";
                  t.style.borderColor="red";
                  return false;
                }else{
                  o=minum;
                  t.style.borderColor="#ccc";
                  return true;
                }
            }
            //密码匹配
            function mimas(minums,t){
                if(minums==null||minums==""||o!==minums){
                  t.style.borderColor="red";
                  t.value="";
                  return false;
                }else{
                  t.style.borderColor="#ccc";
                  return true;
                }
            }
            $(".mybuttonalink").click(function(){
              var rl=$(this).parents(".formziliao").find("input");
              var length=rl.length;
              var a=0;
              for(var i=0;i<length;i++){
                if(rl.eq(i).val()==null||rl.eq(i).val()==''){
                     
                }else{
                  a++;
                }
              }
              if(a===length){
                $(this).parents(".formziliao").find("input,select,textarea").css("border","1px solid #ccc");
                $(this).parents(".formziliao").submit();
              }else{
                $(this).parents(".formziliao").find("input,select,textarea").css("border","1px solid red");
              }
            });
           var myselect=$("#city").data("city");
           var myselect1=$("#pro").val();

           $(function(){
               var html2="";
               var myoption=""
               $.get("<?php echo U('administration');?>",{upid:myselect1},function(msg){
                   for(var key in msg){
                       html2= '<option name="city" value='+'"'+msg[key].id+'"'+ ">"+msg[key].name+"</option>";
                       $("#city").append(html2)
                       if(myselect==msg[key].id){
                           $("#city option").eq(key).attr("selected","selected")
                       }
                   }


               });
           })
           var myselect3=$("#city1").data("city");
           var myselect2=$("#pro1").val();
           $(function(){
               var html3="";
               var myoption=""
               $.get("<?php echo U('administration');?>",{upid:myselect2},function(msg){
                   for(var key in msg){
                       html3= '<option name="city" value='+'"'+msg[key].id+'"'+ ">"+msg[key].name+"</option>";
                       $("#city1").append(html3)
                       if(myselect3==msg[key].id){
                           $("#city1 option").eq(key).attr("selected","selected")
                       }
                   }


               });
           })
              $("#pro").change(function(){
                  var html='';
                  var thisvalue=$(this).val();
                  $.get("<?php echo U('administration');?>",{upid:thisvalue},function(msg){
                      for(var key in msg){
                          html+= '<option value='+'"'+msg[key].id+'"'+ ">"+msg[key].name+"</option>"
                      }
                      $("#city").html(html);
                  });
              });
           $("#pro1").change(function(){
               var html='';
               var thisvalue=$(this).val();
               $.get("<?php echo U('administration');?>",{upid:thisvalue},function(msg){
                   for(var key in msg){
                       html+= '<option value='+'"'+msg[key].id+'"'+ ">"+msg[key].name+"</option>"
                   }
                   $("#city1").html(html);
               });
           });
           $(".formrow div a").click(function(){
               $(this).parent().addClass("cur").siblings().removeClass("cur");
               $(".checkrow>div").eq($(this).parent().index()).addClass("cur").siblings().removeClass("cur");
           })
          </script>
    </body>
</html>