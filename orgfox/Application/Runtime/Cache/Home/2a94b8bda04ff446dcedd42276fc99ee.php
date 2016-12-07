<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>企狐</title>
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
                    <a href="#" class="nav-item-link">我是服务商<span class="caret"></span></a>
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
<!--          <div class="nav_fl">
              <ul>
                  <li class="cur"><div><i class="caricons"><img src="/Public/img/icon1.png" alt=""></i>服务产品</div></li>
                  <?php if(is_array($top_indus)): $i = 0; $__LIST__ = $top_indus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                          <div class="mydiv">
                              <span><i class="caricons"><img src="<?php echo ($vo["pic"]); ?>" alt=""></i><?php echo ($vo["industry_name"]); ?></span>
                              <div class="listdatil">
                                  <p>
                                      <?php if(is_array($vo["list"])): $i = 0; $__LIST__ = $vo["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><a href=""><?php echo ($li['industry_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                  </p>
                              </div>
                          </div>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
          </div>-->
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
              <div class="nav_fl">
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
          </div>
          <div class="nav_fr">
              <ul class="pull-left">
                  <li><a href="<?php echo U('index/index');?>">首页</a></li>
                  <li><a href="<?php echo U('Task/taskhall');?>">交易大厅</a></li>
                  <li><a href="<?php echo U('serve/details');?>">服务超市</a></li>
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
    <div class="container-fluid banner">
        <div class="fotorama" data-width="1920" data-ratio="1920/440" data-max-width="100%"  data-allowfullscreen="true" data-Autoplay="true">
          <img src="/Public/img/banner.jpg">
          <img src="/Public/img/banner.jpg">
          <img src="/Public/img/banner.jpg">
          <img src="/Public/img/banner.jpg">
        </div>
    </div>
    <div class="container newrecom marginTop">
        <div class="pull-left newre_img"><img src="/Public/img/newre.jpg" class="autoimg" alt=""></div>
        <div class="pull-left newre-slider">
          <div class="marquee1">
            <ul>
                <li><div><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></div></li>
                <li><div><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></div></li>
                <li><div><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></div></li>
            </ul>
          </div>
        </div>
    </div>
    <div class="container marginTop floorOne Floor">
        <h3 class="Floorh1"><a href="" class="pull-right">更多</a>发布最新内容</h3>
        <div class="Floorbox">
            <div class="FloorLeft pull-left">
                <div class="myrelease pull-left">
                   <ul>
                     <li class="preture"><h4>最新发布</h4><span>赢在起跑线</span></li>
                     <li class="listshop">
                         <p>
                           <a href=""><i><img src="/Public/img/ic1.png" alt=""></i>人力资源</a>
                           <a href=""><i><img src="/Public/img/ic2.png" alt=""></i>信息化</a>
                           <a href=""><i><img src="/Public/img/ic3.png" alt=""></i>检测与认证</a>
                           <a href=""><i><img src="/Public/img/ic4.png" alt=""></i>技术研发</a>
                           <a href=""><i><img src="/Public/img/ic6.png" alt=""></i>知识产权</a>
                           <a href=""><i><img src="/Public/img/ic5.png" alt=""></i>销售与市场</a>
                         </p>
                     </li>
                     <li class="listshop listminshop">
                         <p>
                           <a href="">招聘（兼职）</a>
                           <a href="">猎头</a>
                           <a href="">劳务派遣服务</a>
                           <a href="">兼职市场</a>
                           <a href="">社保代理服务</a>
                           <a href="">业务外包</a>
                           <a href="">基础软件</a>
                           <a href="">代理</a>
                           <a href="">云安全</a>
                           <a href="">数据市场</a>
                           <a href="">认证</a>
                           <a href="">检测</a>
                         </p>
                     </li>
                   </ul>
                </div>
                <div class="mynews pull-left">
                  <ul>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                    <li><a href=""><h4>服务名称</h4><p><span class="mymoney">￥100</span><span class="myre">xxxx发布</span><span>1投标</span></p></a></li>
                  </ul>
                </div>
            </div>
            <div class="FloorRight pull-right">
                <h4>最新动态</h4>
                <div class="mydynamic marquee4">
                  <ul>
                     <li><h5>xxx<b>接受了任务：</b>xxxxxxxxxx</h5><p><span class="mytime">赏金：<i>￥50</i></span><span>1小时前</span></p></li>
                     <li><h5>xxx<b>接受了任务：</b>xxxxxxxxxx</h5><p><span class="mytime">赏金：<i>￥50</i></span><span>1小时前</span></p></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container marginTop floorTwo Floor">
        <h3 class="Floorh1"><a href="" class="pull-right">更多</a>最新上架服务</h3>
        <div class="Floorbox">
            <div class="FloorLeft pull-left">
                <div class="myrelease pull-left">
                   <ul>
                     <li class="preture"><h4>服务多多</h4><span>任你挑</span></li>
                     <li class="listshop">
                         <p>
                           <a href=""><i><img src="/Public/img/ic1.png" alt=""></i>人力资源</a>
                           <a href=""><i><img src="/Public/img/ic2.png" alt=""></i>信息化</a>
                           <a href=""><i><img src="/Public/img/ic3.png" alt=""></i>检测与认证</a>
                           <a href=""><i><img src="/Public/img/ic4.png" alt=""></i>技术研发</a>
                           <a href=""><i><img src="/Public/img/ic6.png" alt=""></i>知识产权</a>
                           <a href=""><i><img src="/Public/img/ic5.png" alt=""></i>销售与市场</a>
                         </p>
                     </li>
                     <li class="listshop listminshop">
                         <p>
                           <a href="">招聘（兼职）</a>
                           <a href="">猎头</a>
                           <a href="">劳务派遣服务</a>
                           <a href="">兼职市场</a>
                           <a href="">社保代理服务</a>
                           <a href="">业务外包</a>
                           <a href="">基础软件</a>
                           <a href="">代理</a>
                           <a href="">云安全</a>
                           <a href="">数据市场</a>
                           <a href="">认证</a>
                           <a href="">检测</a>
                         </p>
                     </li>
                   </ul>
                </div>
                <div class="mynews pull-left">
                  <ul>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                    <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""><p><span class="pull-left">￥1000</span><b class="pull-left">服务名称xxxxxxxxxxxx xxxxx</b></p></a></li>
                  </ul>
                  <a href="" class="adbox"><img src="/Public/img/adimg.jpg" class="autoimg" alt=""></a>
                </div>
            </div>
            <div class="FloorRight pull-right">
                <h4>最新推荐业务</h4>
                <div class="mydynamic marquee2">
                  <ul>
                     <li><p><span class="mytime"><i>￥50</i></span><span>成交量:<i>1</i></span></p><h5><b>服务名称xxxxxxxxxxxxxxxx</b></h5></li>
                     <li><p><span class="mytime"><i>￥50</i></span><span>成交量:<i>1</i></span></p><h5><b>服务名称xxxxxxxxxxxxxxxx</b></h5></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container marginTop floorThird Floor">
        <h3 class="Floorh1"><a href="" class="pull-right">更多</a>企业导航</h3>
        <div class="Floorbox">
            <div class="FloorLeft pull-left">
                <div class="myrelease pull-left">
                   <ul>
                     <li class="preture"><h4>千百企业</h4><span>服务100%</span></li>
                     <li class="listshop">
                         <p>
                           <a href=""><i><img src="/Public/img/ic1.png" alt=""></i>人力资源</a>
                           <a href=""><i><img src="/Public/img/ic2.png" alt=""></i>信息化</a>
                           <a href=""><i><img src="/Public/img/ic3.png" alt=""></i>检测与认证</a>
                           <a href=""><i><img src="/Public/img/ic4.png" alt=""></i>技术研发</a>
                           <a href=""><i><img src="/Public/img/ic6.png" alt=""></i>知识产权</a>
                           <a href=""><i><img src="/Public/img/ic5.png" alt=""></i>销售与市场</a>
                         </p>
                     </li>
                     <li class="listshop listminshop">
                         <p>
                           <a href="">招聘（兼职）</a>
                           <a href="">猎头</a>
                           <a href="">劳务派遣服务</a>
                           <a href="">兼职市场</a>
                           <a href="">社保代理服务</a>
                           <a href="">业务外包</a>
                           <a href="">基础软件</a>
                           <a href="">代理</a>
                           <a href="">云安全</a>
                           <a href="">数据市场</a>
                           <a href="">认证</a>
                           <a href="">检测</a>
                         </p>
                     </li>
                   </ul>
                </div>
                <div class="mynews pull-left">
                  <ul>
                    <li>
                        <div>
                          <h6>名称</h6>
                          <div class="btnbox">
                            <button class="leftbtn cur"></button>
                            <button class="rightbtn"></button>
                          </div>
                          <div class="pullbox">
                            <div class="divbox">
                              <div class="cur"><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                              <div><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                            </div>
                          </div>
                          <span>好评率：100%</span>
                          <p>服务类型</p>
                        </div>
                    </li>
                    <li>
                        <div>
                          <h6>名称</h6>
                          <div class="btnbox">
                            <button class="leftbtn cur"></button>
                            <button class="rightbtn"></button>
                          </div>
                          <div class="pullbox">
                            <div class="divbox">
                              <div class="cur"><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                              <div><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                            </div>
                          </div>
                          <span>好评率：100%</span>
                          <p>服务类型</p>
                        </div>
                    </li>
                    <li>
                        <div>
                          <h6>名称</h6>
                          <div class="btnbox">
                            <button class="leftbtn cur"></button>
                            <button class="rightbtn"></button>
                          </div>
                          <div class="pullbox">
                            <div class="divbox">
                              <div class="cur"><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                              <div><a href=""><img src="/Public/img/gol.png"style="background-image:url(/Public/img/golgal.jpg);"class="autoimg" alt=""></a></div>
                            </div>
                          </div>
                          <span>好评率：100%</span>
                          <p>服务类型</p>
                        </div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container floorfour marginTop">
         <div class="fourbox marquee1">
             <ul>
               <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></a></li>
               <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></a></li>
               <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></a></li>
               <li><a href=""><img src="/Public/img/golgal.jpg" class="autoimg" alt=""></a></li>
             </ul>
         </div>
    </div>
    <div class="container floorfive marginTop Floor">
         <h3 class="Floorh1"><a href="" class="pull-right">更多</a>成功案例</h3>
         <div class="fivebox">
           <a href="" class="fivea pull-left"><img src="/Public/img/adminimg.jpg" class="autoimg" alt=""></a>
           <ul class="fiveul pull-left">
             <li><a href=""><img src="/Public/img/golimg.png" class="autoimg" alt="" style="background-image:url(/Public/img/golgal.jpg);"><p>服务名称</p><span><b><img src="/Public/img/golgal.jpg" alt=""></b>服务商名称</span></a></li>
             <li><a href=""><img src="/Public/img/golimg.png" class="autoimg" alt="" style="background-image:url(/Public/img/golgal.jpg);"><p>服务名称</p><span><b><img src="/Public/img/golgal.jpg" alt=""></b>服务商名称</span></a></li>
             <li><a href=""><img src="/Public/img/golimg.png" class="autoimg" alt="" style="background-image:url(/Public/img/golgal.jpg);"><p>服务名称</p><span><b><img src="/Public/img/golgal.jpg" alt=""></b>服务商名称</span></a></li>
           </ul>
         </div>
    </div>
    <div class="container floorsix marginTop">
        <ul>
          <li><img src="/Public/img/ci1.png" class="autoimg" alt=""></li>
          <li><img src="/Public/img/ci2.png" class="autoimg" alt=""></li>
          <li><img src="/Public/img/ci3.png" class="autoimg" alt=""></li>
          <li><img src="/Public/img/ci4.png" class="autoimg" alt=""></li>
        </ul>
    </div>
    <div class="container floorsix marginTop">
       <a href=""><img src="/Public/img/adling.jpg" class="autoimg" alt=""></a>
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
        });
    </script>
  </body>
</html>