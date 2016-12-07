<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>任务大厅</title>
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
    <div class="container-fluid headerTop">
        <div class="container myHone">
          <div class="pull-left">欢迎您，<a href="">请登录</a><a href="">免费注册</a></div>
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
                  <a href="index.php?do=help" class="nav-item-link">帮助中心</a>
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
    <div class="container-fluid box">
      <div class="box1 container detailsdiv">
            <div class="nav_fl mydetails">
              <ul>
                <li class="cur"><div><i class="caricons"><img src="/Public/img/icon1.png" alt=""></i>服务产品</div></li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon2.png" alt=""></i>人力资源</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">劳务派遣服务</a>
                          <a href="">兼职市场</a>
                          <a href="">业务外包</a>
                          <a href="">社保代理活动</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon3.png" alt=""></i>信息化</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">劳务派遣服务</a>
                          <a href="">兼职市场</a>
                          <a href="">业务外包</a>
                          <a href="">社保代理活动</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon4.png" alt=""></i>检测与认证</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon5.png" alt=""></i>金融服务</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon6.png" alt=""></i>技术研发</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon7.png" alt=""></i>知识产权</span>
                    <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon8.png" alt=""></i>管理咨询</span>
                      <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon9.png" alt=""></i>销售与市场</span>
                      <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon10.png" alt=""></i>法律服务</span>
                      <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon11.png" alt=""></i>注册登记</span>
                      <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mydiv">
                    <span><i class="caricons"><img src="/Public/img/icon12.png" alt=""></i>财务服务</span>
                      <div class="listdatil">
                        <p>
                          <a href="">招聘</a>
                          <a href="">猎头</a>
                          <a href="">猎头</a>
                        </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="nav_fr">
              <ul>
                <li><a href="<?php echo U('index/index');?>">首页</a></li>
              </ul>
            </div>
      </div>
    </div>
    <div class="container marginTop taskhall detailsmian">
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">招聘</a><em class="pull-right">企狐为了找到<i>10</i>种产品</em></p>
      <div class="halllist">
        <ul>
          <li>
            <h3 class="pull-left">分类：</h3>
            <div class="listcontent pull-left">
                <span class="pull-left">全部</span>
                <p>
                  <a href="">基础软件</a>
                  <a href="">企业软件</a>
                  <a href="">网络建设</a>
                  <a href="">代理</a>
                  <a href="">云安全</a>
                  <a href="">数据市场</a>
                </p>
            </div>
          </li>
          <li>
            <h3 class="pull-left">雇主保障：</h3>
            <div class="listcontent pull-left">
                <span class="pull-left">全部</span>
                <p>
                  <a href="">保证完成</a>
                  <a href="">保证维护</a>
                </p>
            </div>
          </li>
        </ul>
      </div> 
    </div>
    <div class="container taskhallone Details">
      <div class="pull-left hallleft">
        <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
        <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
      </div>
      <div class="pull-left hallright">
           <div class="halltop">
               <span>综合</span>
               <span>发布时间</span>
               <span>价格↓</span>
               <span>成交量</span>
               <select name="" id="">
                 <option value="所在区域">所在区域</option>
               </select>
           </div>
           <div class="detailscenter">
                <ul>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                  <li>
                     <a href="">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(img/banner.jpg);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥1000</em><span class="pull-right">成交量：0</span></p>
                          <p class="sername">服务名称：<span>xxxxxxxxxxxxxx</span></p>
                          <p class="address"><b>地址</b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li>
                </ul>
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
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/jquery.kxbdmarquee.js"></script>
    <script src="/Public/js/fotorama.js"></script>
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
                $(this).children(".listdatil").css("display","block");
                $(".nav_fl").css("overflow","inherit");
                $(this).parents(".nav_fl li").css("background","#999");
                $(".listdatil").css("height",length*num-49+10);
            });
            $(".mydiv").mouseleave(function(){
                $(this).children(".listdatil").css("display","none");
                $(".nav_fl").css("overflow","hidden");
                $(this).parents(".nav_fl li").css("background","rgba(0,0,0,.77)");
            });
        });
    </script>
  </body>
</html>