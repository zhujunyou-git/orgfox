<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>服务超市</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/css/fotorama.css">
<link href="/Public/css/style.css" rel="stylesheet">
    <script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.kxbdmarquee.js"></script>
<script src="/Public/js/fotorama.js"></script>
<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.boot/Public/.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.boot/Public/.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid headerTop">
    <div class="container myHone">
        <?php if($_SESSION['user']): ?><div class="pull-left">欢迎您，已登录<a href="<?php echo U('user/PersonalCenter');?>"><?php echo ($_SESSION['user']['username']); ?></a>
            <a href="<?php echo U('index/Logout');?>">退出</a></div>
            <?php else: ?><div class="pull-left">欢迎您，<a href="<?php echo U('reception');?>">请登录</a><a href="<?php echo U('register');?>">免费注册</a></div><?php endif; ?>
        <div class="pull-right">
            <ul class="right-nav">
                <li class="nav-item has-sub">
                    <a href="#" class="nav-item-link ">我是雇主<span class="caret"></span></a>
                    <ul class="nav-item-sub nav-sub-list">
                        <li><a href="">找服务商</a></li>
                        <li><a href="">发布任务</a></li>
                        <li><a href=""><span class="badge"></span>待付款任务</a></li>
                        <li><a href=""><span class="badge"></span>待付款人才</a></li>
                        <li><a href=""><span class="badge"></span>待评价</a></li>
                    </ul>
                </li>
                <li class="nav-item has-sub">
                    <a href="#" class="nav-item-link">我是猎头<span class="caret"></span></a>
                    <ul class="nav-item-sub nav-sub-list">
                        <li><a href="">发布人才</a></li>
                        <li><a href="">我的店铺</a></li>
                        <li><a href=""><span class="badge"></span>新的雇佣</a></li>
                        <li><a href=""><span class="badge"></span>新服务订单 </a></li>
                        <li><a href=""><span class="badge"></span>待评价</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo U('User/PersonalCenter');?>" class="nav-item-link">用户中心</a>
                </li>
                <li class="nav-item has-sub">
                    <a href="javascript:void(0);" class="nav-item-link">分类导航 <span class="caret"></span></a>
                    <div class="nav-item-sub">
                        <dl>
                            <dt>
                                任务
                            </dt>
                            <dd>
                                <ul>
                                    <li><a href="">一级建造师</a></li>
                                    <li><a href="">二级建造师</a></li>
                                    <li><a href="">结构工程师</a></li>
                                    <li><a href="">注册建筑师</a></li>
                                    <li><a href="">注册电气工程师</a></li>
                                    <li><a href="">注册咨询师</a></li>
                                    <li><a href="">注册设备工程师</a></li>
                                    <li><a href="">土木工程师</a></li>
                                    <li><a href="">造价工程师</a></li>
                                    <li><a href="">监理工程师</a></li>
                                    <li><a href="">八大员</a></li>
                                    <li><a href="">其他证书</a></li>
                                    <li><a href="">爆破工程师</a></li>
                                    <li><a href="">注册消防工程师</a></li>
                                    <li><a href="">中级职称</a></li>
                                    <li><a href="">高级职称</a></li>
                                    <li><a href="">技工证</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <div class="line"></div>
                        <dl>
                            <dt>
                                人才
                            </dt>
                            <dd>
                                <ul>
                                    <li><a href="">一级建造师</a></li>
                                    <li><a href="">二级建造师</a></li>
                                    <li><a href="">结构工程师</a></li>
                                    <li><a href="">注册建筑师</a></li>
                                    <li><a href="">注册电气工程师</a></li>
                                    <li><a href="">注册咨询师</a></li>
                                    <li><a href="">注册设备工程师</a></li>
                                    <li><a href="">土木工程师</a></li>
                                    <li><a href="">造价工程师</a></li>
                                    <li><a href="">监理工程师</a></li>
                                    <li><a href="">八大员</a></li>
                                    <li><a href="">其他证书</a></li>
                                    <li><a href="">注册消防工程师</a></li>
                                    <li><a href="">中级职称</a></li>
                                    <li><a href="">高级职称</a></li>
                                    <li><a href="">技工证</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="javascript:spread(false);void(0);" class="nav-item-link">推广</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container mysearch">
        <a href="" id="logo" class="pull-left"><img src="/Public/img/logo.jpg" class="autoimg"alt=""><p>为企业服务</p></a>
        <div class="mysearchs pull-left">
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
            <div class="navbar-collapse">
                <p>热门搜索:<a href="">建筑工程</a><a href="">建筑工程</a><a href="">建筑工程</a><a href="">建筑工程</a></p>
            </div>
        </div>
    </div>
</div>

<script src="/Public/js/myindex.js"></script>

    <div class="container-fluid box">
      <div class="box1 container">
          <div class="bigljh">
              <div class="showfl">
                  <div></div>
                  <?php if(is_array($parent_list)): foreach($parent_list as $key=>$list): ?><div>
                          <?php if(is_array($list['list'])): foreach($list['list'] as $key=>$li): ?><p>
                                  <b><?php echo ($li['industry_name']); ?></b>
                                  <?php if(is_array($li['list'])): foreach($li['list'] as $key=>$i): ?><a href=""><?php echo ($i['industry_name']); ?></a><?php endforeach; endif; ?>
                              </p><?php endforeach; endif; ?>
                      </div><?php endforeach; endif; ?>
              </div>
              <div class="nav_fl minnav_fl">
                  <ul>
                      <li class="cur"><div><i class="caricons"><img src="/Public/img//icon1.png" alt=""></i>服务产品</div></li>
                      <?php if(is_array($parent_list)): foreach($parent_list as $key=>$li): ?><li class="fun">
                              <em></em>
                              <div class="mydiv">
                                  <span data-id=""><?php echo ($li['industry_name']); ?></span>
                                  <div>
                                      <p>
                                          <?php if(is_array($li['list'])): foreach($li['list'] as $key=>$i): ?><a href=""><?php echo ($i['industry_name']); ?></a><?php endforeach; endif; ?>
                                      </p>
                                  </div>
                              </div>
                          </li><?php endforeach; endif; ?>
                  </ul>
              </div>
              <script>
                  $(".nav_fl li:not('.cur')").mouseenter(function(){
                      var t=$(this);
                      $(".showfl").css("display","block");
                      $(this).find("em").addClass("cur")
                      t.find(".mydiv").addClass("cir").parent().siblings(".fun").children().removeClass("cir");
                      $(".showfl>div").eq(t.index()).addClass("cie").siblings().removeClass("cie");
                  });
                  $(".bigljh").mouseleave(function(){
                      $(".showfl").css("display","none");
                      $(this).find("em").removeClass("cur");
                      $(".nav_fl li:not('.cur') .mydiv").removeClass("cir");
                      $(".showfl>div").removeClass("cie");
                  });
              </script>
          </div>
          <div class="nav_fr">
              <ul class="pull-left">
                  <li><a href="<?php echo U('index/index');?>">首页</a></li>
                  <li><a href="<?php echo U('Task/taskhall');?>">交易大厅</a></li>
                  <li><a href="<?php echo U('serve/Supermarketserve');?>">服务超市</a></li>
                  <li><a href="<?php echo U('service/ServiceProvider');?>">企业导航</a></li>
                  <li><a href="">保障计划</a></li>
                  <li><a href="">企狐学院</a></li>
                  <li><a href="">我要开店</a></li>
              </ul>
              <div class="pull-right fabubox">
                  <a href="<?php echo U('publish/publish');?>">我要发布</a>
              </div>
          </div>
      </div>
  </div>
    <div class="container marginTop taskhall">
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">服务超市</a></p>
      <div class="Supermarket">
        <ul>
          <li>
              <div>
                <img src="/Public/img/sp1.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp2.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp3.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp4.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp5.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp6.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp7.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp8.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp9.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp10.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/sp11.jpg" class="auto/Public/img" alt="">
                <p>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                  <i><a href="">企狐学院</a></i>
                </p>
              </div>
          </li>
          <li>
              <div>
                <img src="/Public/img/last.jpg" class="auto/Public/img" alt="">
              </div>
          </li>
        </ul>
      </div> 
    </div>
    <div class="container-fluid adsp">
        <h4>广告条</h4>
    </div>
    <div class="container-fluid flooreih marginTop">
        <div class="container">
               <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>
               <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a>   <a href="">RSS订阅</a> </p> 
               <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>    
        </div>
    </div>
    <script type="text/javascript">
        $(".marquee1").kxbdMarquee({direction:"left"});
        $(".marquee4").kxbdMarquee({direction:"up",isEqual:false});
        $(".marquee2").kxbdMarquee({direction:"up",isEqual:false});
        $(function(){
            var flsa=true;
            var box=$('.nav_fl .cur div');
            var length=$(".nav_fl li").length;
            var num=box.parent().next().outerHeight(true);
            box.mouseenter(function(){
              if(flsa){
                flsa=false;
                $(this).parents('.nav_fl').animate({'height':length*num+9},400,function(){
                  flsa=true
                });
                  $(this).addClass('cur');
              }
            });
            $('.nav_fl').mouseleave(function(){
              if(flsa){
                flsa=false;
                box.parents('.nav_fl').animate({'height':48},400,function(){
                  flsa=true
                });
                  box.removeClass('cur');
              }
            });
            $(".mydiv").mouseenter(function(){
                $(this).children(".listdatil")./Public/("display","block");
                $(".nav_fl")./Public/("overflow","inherit");
                $(this).parents(".nav_fl li")./Public/("background","#999");
                $(".listdatil")./Public/("height",length*num-49+10);
            });
            $(".mydiv").mouseleave(function(){
                $(this).children(".listdatil")./Public/("display","none");
                $(".nav_fl")./Public/("overflow","hidden");
                $(this).parents(".nav_fl li")./Public/("background","rgba(0,0,0,.77)");
            });
        });
    </script>
  </body>
</html>