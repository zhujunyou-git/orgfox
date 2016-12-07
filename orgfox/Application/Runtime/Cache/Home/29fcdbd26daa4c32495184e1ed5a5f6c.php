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
                  <a href="index.html" class="pull-left"><img src="/Public/img/logo1.jpg" class="autoimg" alt=""></a>
                  <p class="pull-left">
                    <a href="">我的主页</a>
                    <a href="">我是雇主</a>
                    <a href="">我是服务商</a>
                    <a href="">账号管理</a>
                    <a href="">我的消息</a>
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
                        <span class="Headpro"><img src="/Public/img/golgal.jpg" class="" alt=""></span>
                        <p>账号名称:<?php echo ($_SESSION['user']['username']); ?></p>
                        <div class="attestation">
                             <a href=""><img src="/Public/img/z1.png" class="autoimg"alt=""></a>
                             <a href=""><img src="/Public/img/z2.png" class="autoimg"alt=""></a>
                             <a href=""><img src="/Public/img/z3.png" class="autoimg"alt=""></a>
                             <a href=""><img src="/Public/img/z4.png" class="autoimg"alt=""></a>
                             <a href=""><img src="/Public/img/z5.png" class="autoimg"alt=""></a>
                        </div>
                   </div>
                   <div class="personalline personaltwo">
                       <p>手机：暂无</p>
                       <p>QQ；暂无</p>
                       <p>邮箱；暂无<a href="<?php echo U('administration');?>" class="pull-right">完善资料</a></p>
                   </div>
                   <div class="personalline personalthere">
                       <h3>我的资产</h3>
                       <p>￥500.00</p>
                       <div class="personbutton">
                         <a href="" class="czbutton pull-left">充值</a>
                         <a href="" class="txbutton pull-right">提现</a>
                       </div>
                       <a href="">查看明细</a>
                   </div>
                   <div class="personalfour">
                     <h3>我的关注</h3>
                     <a href="">快去逛逛</a>
                   </div>
               </div>
               <div class="personalright pull-right">
                   <div>
                      <p class="perindex"><?php echo ($_SESSION['user']['username']); ?>, 这是你的【主页】！</p>
                      <div class="ribox">
                          <ul>
                            <li>
                              <div>
                                <img src="/Public/img/zy1.png" class="autoimg" alt="">
                                <p>逛逛，看有哪些需要的</p>
                                <a href="<?php echo U('serve/Supermarketserve');?>">进入服务超市</a>
                              </div>
                            </li>
                            <li>
                              <div>
                                <img src="/Public/img/zy2.png" class="autoimg" alt="">
                                <p>这里有你想要的 </p>
                                <a href="<?php echo U('Task/taskhall');?>">查看交易大厅</a>
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
                                <span>123456</span>
                                <span>10人浏览/两人投标</span>
                                <span>两天前</span>
                                <span>已托管赏金</span>
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
    </body>
</html>