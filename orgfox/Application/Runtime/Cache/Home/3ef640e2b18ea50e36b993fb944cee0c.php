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
    <div class="container marginTop taskhall detailsmian">
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">招聘</a></p>
      <div class="halllist">
        <ul>
          <li>
            <h3 class="pull-left">一级服务：</h3>
            <div class="listcontent pull-left">
                <span class="pull-left">全部</span>
                <p>
                    <?php if(is_array($one_indus)): $i = 0; $__LIST__ = $one_indus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)" class="one" data-id="<?php echo ($vo['industry_id']); ?>"><?php echo ($vo['industry_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </p>
            </div>
          </li>
          <li>
            <h3 class="pull-left">二级服务：</h3>
            <div class="listcontent pull-left">
                <div>
                    <span class="pull-left">全部</span>
                    <p class="sedtwo">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <h3 class="pull-left">三级服务：</h3>
            <div class="listcontent pull-left">
                <div>
                    <span class="pull-left">全部</span>
                    <p class="therep">

                    </p>
                </div>
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
               <span data-id="0" onclick="myvalue(0,0,this)">综合</span>
               <span data-id="1" onclick="myvalue(1,2,this)">发布时间</span>
               <span data-id="2" onclick="myvalue(3,4,this)">价格↓</span>
               <span data-id="3" onclick="myvalue(5,6,this)">成交量</span>
               <select name="" id="">
                 <option value="所在区域">所在区域</option>
               </select>
           </div>
           <div class="detailscenter">
                <ul class="twoul">
                    <?php if(is_array($indus_list)): $i = 0; $__LIST__ = $indus_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                     <a href="<?php echo U('Serve/business?shop_id='.$vo['shop_id']);?>">
                       <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(<?php echo ($vo['bbbox']); ?>);"alt=""></span>
                       <div>
                          <p class="detailmoney"><em>￥<?php echo ($vo['money']); ?></em><span class="pull-right">成交量：<?php if(empty($vo['number'])): ?>0 <?php else: ?> <?php echo ($vo['number']); endif; ?></span></p>
                          <p class="sername">服务名称：<span><?php echo ($vo['server_name']); ?></span></p>
                          <p class="address"><b><?php echo ($vo['pro']); ?>-<?php echo ($vo['city']); ?></b><i class="pull-right">联系我</i></p>
                       </div>
                     </a>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
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
  <div style="display: none">
      <form action="" id="formac">
          <input type="hidden" class="parents" name="indus_id"/>
          <input type="hidden" class="childrens" name="indus_pid"/>
          <input type="hidden" class="minchildrens" name="indus_tid"/>
          <input type="hidden" class="if" name="order"/>
      </form>
  </div>
  </body>
</html>
<script>
    $(function(){
        var html,html1,html2,html3,html4,html5;
        $('.one').click(function(){
            var id=$(this).data('id');
            $(".parents").val(id);
            $(".childrens,.minchildrens,.if").val("");
            $(".twoul,.sedtwo,.therep").html("");
            $.post("<?php echo U('Serve/two_server');?>",{indus_id:id},function(msg){
                 for(var k in msg.two){
                     html='<a href="javascript:void(0);" data-id='+msg.two[k].industry_id+'>'+msg.two[k].industry_name+'</a>';
                     $(".sedtwo").append(html);
                 }
                for(var j in msg.data){
                    html1=
                            '<li>'+
                            '<a href="'+"/index.php/Home/Serve/business/shop_id/"+msg.data[j].shop_id+'.html'+'">'+
                            '<span><img src="/Public/img/detail.png" class="autoimg" '+'style="background-image:url('+msg.data[j].bbbox+');"'+'alt=""></span>'+
                            '<div>'+
                            '<p class="detailmoney"><em>￥'+msg.data[j].money+'</em><span class="pull-right">成交量：'+msg.data[i].number+'</span></p>'+
                            '<p class="sername">服务名称：<span>'+msg.data[j].server_name+'</span></p>'+
                            '<p class="address"><b>'+msg.data[j].pro+'-'+msg.data[j].city+'</b><i class="pull-right">联系我</i></p>'+
                            '</div>'+
                            '</a>'+
                            '</li>';
                    $(".twoul").append(html1);
                }
            });
        });
        $(".sedtwo").delegate("a","click",function(){
             var id=$(this).data('id');
            $(".childrens").val(id);
            $(".twoul,.therep").html("");
            $.post("<?php echo U('Serve/three_server');?>",{indus_pid:id},function(msg){
                for(var k in msg.three){
                    html2='<a href="javascript:void(0);" data-id='+msg.three[k].industry_id+'>'+msg.three[k].industry_name+'</a>';
                    $(".therep").append(html2);
                }
                for(var j in msg.data){
                    html3=
                            '<li>'+
                            '<a href="'+"/index.php/Home/Serve/business/shop_id/"+msg.data[j].shop_id+'.html'+'">'+
                            '<span><img src="/Public/img/detail.png" class="autoimg" '+'style="background-image:url('+msg.data[j].bbbox+');"'+'alt=""></span>'+
                            '<div>'+
                            '<p class="detailmoney"><em>￥'+msg.data[j].money+'</em><span class="pull-right">成交量：'+msg.data[i].number+'</span></p>'+
                            '<p class="sername">服务名称：<span>'+msg.data[j].server_name+'</span></p>'+
                            '<p class="address"><b>'+msg.data[j].pro+'-'+msg.data[j].city+'</b><i class="pull-right">联系我</i></p>'+
                            '</div>'+
                            '</a>'+
                            '</li>';
                    $(".twoul").append(html3);
                }
            });
        });
        $(".therep").delegate("a","click",function(){
            var id=$(this).data('id');
            $(".minchildrens").val(id);
            $(".twoul").html("");
            $.post("<?php echo U('Serve/server');?>",{indus_tid:id},function(msg){
                for(var j in msg.data){
                    html4=
                            '<li>'+
                            '<a href="'+"/index.php/Home/Serve/business/shop_id/"+msg.data[j].shop_id+'.html'+'">'+
                            '<span><img src="/Public/img/detail.png" class="autoimg" '+'style="background-image:url('+msg.data[j].bbbox+');"'+'alt=""></span>'+
                            '<div>'+
                            '<p class="detailmoney"><em>￥'+msg.data[j].money+'</em><span class="pull-right">成交量：'+msg.data[i].number+'</span></p>'+
                            '<p class="sername">服务名称：<span>'+msg.data[j].server_name+'</span></p>'+
                            '<p class="address"><b>'+msg.data[j].pro+'-'+msg.data[j].city+'</b><i class="pull-right">联系我</i></p>'+
                            '</div>'+
                            '</a>'+
                            '</li>';
                    $(".twoul").append(html4);
                }
            });
        });
        $(".halltop span").click(function(){
            var id=$(this).data('id');
            $(".twoul").html("");
          $.post("<?php echo U('Serve/order');?>",$("#formac").serialize(),function(msg){
               for(var j in msg.data){
                   html5=
                           '<li>'+
                           '<a href="'+"/index.php/Home/Serve/business/shop_id/"+msg.data[j].shop_id+'.html'+'">'+
                           '<span><img src="/Public/img/detail.png" class="autoimg" '+'style="background-image:url('+msg.data[j].bbbox+');"'+'alt=""></span>'+
                           '<div>'+
                           '<p class="detailmoney"><em>￥'+msg.data[j].money+'</em><span class="pull-right">成交量：'+0+'</span></p>'+
                           '<p class="sername">服务名称：<span>'+msg.data[j].server_name+'</span></p>'+
                           '<p class="address"><b>'+msg.data[j].pro+'-'+msg.data[j].city+'</b><i class="pull-right">联系我</i></p>'+
                           '</div>'+
                           '</a>'+
                           '</li>';
                   $(".twoul").append(html5);
               }
            });
        });
    });
    var a=0;
    function myvalue(a1,b1,t){
        if(a==0){
            a=1;
            $(".if").prop("value",a1);
        }else{
            a=0;
            $(".if").prop("value",b1);
        }
    }
</script>