<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人中心</title>
      <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/css/fotorama.css">
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/page.css" rel="stylesheet">
      <script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.kxbdmarquee.js"></script>
<script src="/Public/js/fotorama.js"></script>
<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>


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
                    <a href="PersonalCenter.html" class="cur">我的主页</a>
                    <a href="employer.html">我是雇主</a>
                    <a href="serprovider.html">我是服务商</a>
                    <a href="administration.html">账号管理</a>
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
         <div class="container personalmain">
               <div class="personalleft pull-left">
                   <div class="personalline personalone">
                       <?php if(empty($user['head'])): ?><span class="Headpro addcos" style="background-image: url(/Public/img/golgal.jpg)"> </span>
                            <?php else: ?>
                            <span class="Headpro addcos" style="background-image: url(<?php echo ($user['head']); ?>)"> </span><?php endif; ?>
                        <p>账号名称:<?php echo ($user['username']); ?></p>
                        <div class="attestation">
                             <a href="javascript:void(0);"><img src="/Public/img/z1.png" class="autoimg"alt=""></a>
                             <a href="javascript:void(0);"><img src="/Public/img/z2.png" class="autoimg"alt=""></a>
                             <a href="javascript:void(0);"><img src="/Public/img/z3.png" class="autoimg"alt=""></a>
                             <a href="javascript:void(0);"><img src="/Public/img/z4.png" class="autoimg"alt=""></a>
                             <a href="javascript:void(0);"><img src="/Public/img/z5.png" class="autoimg"alt=""></a>
                        </div>
                   </div>
                   <div class="personalline personaltwo">
                       <p>手机：<?php echo ($user['phone']); ?></p>
                       <p>QQ:<?php echo ($user['qq']); ?></p>
                       <p>邮箱:<?php echo ($user['email']); ?><a href="administration.html" class="pull-right">完善资料</a></p>
                   </div>
                   <div class="personalline personalthere">
                       <h3>我的资产</h3>
                       <p>￥<?php echo ($user['money']); ?></p>
                       <div class="personbutton">
                         <a href="administration.html" class="czbutton pull-left">充值</a>
                         <a href="administration.html" class="txbutton pull-right">提现</a>
                       </div>
                       <a href="">查看明细</a>
                   </div>
                   <div class="personalfour">
                     <h3>我的关注</h3>
                     <a href="taskhall.html">快去逛逛</a>
                   </div>
               </div>
               <div class="personalright pull-right">
                   <div>
                      <p class="perindex"><?php echo ($user['username']); ?>, 这是你的【主页】！</p>
                      <div class="ribox">
                          <ul>
                            <li>
                              <div>
                                <img src="/Public/img/zy1.png" class="autoimg" alt="">
                                <p>逛逛，看有哪些需要的</p>
                                <a href="details.html">进入服务超市</a>
                              </div>
                            </li>
                            <li>
                              <div>
                                <img src="/Public/img/zy2.png" class="autoimg" alt="">
                                <p>这里有你想要的 </p>
                                <a href="taskhall.html">查看交易大厅</a>
                              </div>
                            </li>
                            <li>
                              <div>
                                <img src="/Public/img/zy3.png" class="autoimg" alt="">
                                <p>我有天大的需求需要<br>大神解决</p>
                                <a href="">发布任务</a>
                              </div>
                            </li>
                          </ul>
                      </div>
                   </div>
                   <div>
                     <p class="task"><a href="" class="pull-right">更多</a>我接受的任务<span>我发布的任务</span></p>
                     <div class="taskbox">
                         <ul>
                           <li>
                             <b class="pull-left"><img src="" alt=""></b>
                              <h3>￥2500.00<span>XXXXXXXXXXXXXXXXX</span></h3>
                              <p>
                                <span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i>123456</span>
                                <span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i>10人浏览/两人投标</span>
                                <span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i>两天前</span>
                                <span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i>已托管赏金</span>
                              </p>
                              <i>加急加急加急加急加急加急加急</i>
                              <i  class="boxi">服务类别</i>
                              <a href="" class="lookbox">查看</a>
                           </li>
                         </ul>
                     </div>
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
     <div class="row1 myfixed myfixed1">
         <div class="form-group">
             <form action="<?php echo U('user/head?user_id='.$user['user_id']);?>" method="post" enctype="multipart/form-data">
                 <h3>上传个人图像<a href="javascript:void(0);">x</a></h3>
                 <input type="file" name="head">
                 <input class="buttonbox sunmit" value="确定" type="submit">
             </form>
         </div>
     </div>
    <script>
        $(".addcos").click(function(){
            $(".myfixed1").css("display","block");
        });
        $(".myfixed h3 a").click(function(){
            $(".myfixed1").css("display","none");
        });
    </script>
    </body>
</html>