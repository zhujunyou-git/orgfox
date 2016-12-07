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
<div class="container marginTop taskhall">
    <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">交易大厅</a></p>

    <div class="halllist">
        <ul>
            <!-- <li>
               <h3 class="pull-left">服务分类：</h3>
               <div class="listcontent pull-left">
                   <span class="pull-left goingdown">全部</span>
                   <p>
                     <a href="javascript:void(0);" class="goingdown">人力资源</a>
                     <a href="javascript:void(0);" class="goingdown">招聘（兼职）</a>
                   </p>
               </div>
             </li>-->
            <li>
                <h3 class="pull-left">赏金状态：</h3>

                <div class="listcontent pull-left">
                    <span class="pull-left parents0"><a href="javascript:void(0);" class="goingdown" data-id="0">全部</a></span>

                    <p class="parents0">
                        <a href="javascript:void(0);" class="goingdown" data-id="1">未托管</a>
                        <a href="javascript:void(0);" class="goingdown" data-id="2">已托管</a>
                    </p>
                </div>
            </li>
            <li>
                <h3 class="pull-left">服务状态：</h3>

                <div class="listcontent pull-left">
                    <span class="pull-left parents1"><a href="javascript:void(0);" class="goingdown" data-id="0" >全部</a></span>

                    <p class="parents1">
                        <a href="javascript:void(0);" class="goingdown" data-id="3">工作中</a>
                        <a href="javascript:void(0);" class="goingdown" data-id="2">选标中</a>
                        <a href="javascript:void(0);" class="goingdown" data-id="4">交付中</a>
                        <a href="javascript:void(0);" class="goingdown" data-id="6">已结束</a>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container taskhallone">
    <div class="pull-left hallleft">
        <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
    </div>
    <div class="pull-left hallright">
        <div class="halltop parents2">
            <span class="goingdown go1" data-id="1" onclick="myvalue(1,2,this)">综合</span>
            <span class="goingdown go2" data-id="2" onclick="myvalue(3,4,this)">发布时间</span>
            <span class="goingdown go3" data-id="3" onclick="myvalue(5,6,this)">金额</span>
            <span class="goingdown go4" data-id="4" onclick="myvalue(7,8,this)">投标数</span>
            <select name="" id="">
                <option value="所在区域">所在区域</option>
            </select>

        </div>
        <div class="hallcenter">
            <ul class="hallul">
                <?php if(is_array($dataAll)): $i = 0; $__LIST__ = $dataAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <?php if($vo["type"] == 1 ): if($vo["user_id"] == $user_id): ?><a href="<?php echo U('Publish/bounty?task_id='.$vo['task_id']);?>"><?php endif; ?>
                            <em class="pull-right">未托管赏金</em>
                            <h3>￥<?php echo ($vo["money"]); ?><span><?php echo ($vo["title"]); ?></span></h3>
                            <p>
                                <i><img src="/Public/img/ip1.png" class="autoimg" alt=""><?php echo ($vo["username"]); ?></i>
                                <i><img src="/Public/img/ip4.png" class="autoimg" alt=""><?php echo ($vo["number"]); ?>人投标</i>
                                <i><img src="/Public/img/ip3.png" class="autoimg" alt="">截止时间:<?php echo (date("Y-m-d",$vo["end_time"])); ?></i>
                                <i><img src="/Public/img/ip2.png" class="autoimg" alt="">未托管赏金</i>
                            </p>
                            <p><?php echo ($vo["content"]); ?></p>
                            </a>
                            <?php else: ?>
                            <a href="<?php echo U('task/delivery?task_id='.$vo['task_id']);?>">
                                <?php if($vo['service_state'] == 1): ?><em class="pull-right">投标中</em>
                                <?php elseif($vo['service_state'] == 2): ?>
                                    <em class="pull-right">选标中</em>
                                <?php elseif($vo['service_state'] == 3): ?>
                                    <em class="pull-right">工作中</em>
                                <?php elseif($vo['service_state'] == 4): ?>
                                    <em class="pull-right">交付中</em>
                                <?php elseif($vo['service_state'] == 5): ?>
                                    <em class="pull-right">验收中</em>
                                <?php elseif($vo['service_state'] == 6): ?>
                                    <em class="pull-right">已结束</em><?php endif; ?>
                                <h3>￥<?php echo ($vo["money"]); ?><span><?php echo ($vo["title"]); ?></span></h3>
                                <p>
                                    <i><img src="/Public/img/ip1.png" class="autoimg" alt=""><?php echo ($vo["username"]); ?></i>
                                    <i><img src="/Public/img/ip2.png" class="autoimg" alt=""><?php echo ($vo["number"]); ?>人投标</i>
                                    <i><img src="/Public/img/ip3.png" class="autoimg" alt="">截止时间:<?php echo (date("Y-m-d",$vo["end_time"])); ?></i>
                                    <i><img src="/Public/img/ip4.png" class="autoimg" alt="">已托管赏金</i>
                                </p>
                                <p><?php echo ($vo["content"]); ?></p>
                            </a>
                            <?php if($vo['user_id'] != $user_id): ?><b class="taskb" data-id="<?php echo ($vo['task_id']); ?>"></b><?php endif; ?>
                            <input type="hidden" value="<?php echo ($user_id); ?>" class="user_id"><?php endif; ?>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
            <div class="pages">
                <?php echo ($page); ?>
            </div>
    </div>

</div>
<div class="container-fluid flooreih marginTop">
    <div class="container">
        <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>

        <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a> <a href="">RSS订阅</a></p>

        <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>
    </div>
</div>
<div>
    <form action="" class="myformme" style="display: none">
        <input type="hidden" name="a1" class="abox"/>
        <input type="hidden" name="b1" class="bbox"/>
        <div class="mydivhidd">
            <input type="hidden" name="c1" class="cbox"/>
            <input type="hidden" name="d1" class="dbox"/>
            <input type="hidden" name="e1" class="ebox"/>
        </div>
    </form>
</div>
<script type="text/javascript">
  $(function () {
        var aa;
        var a="";
        var b="";
        var c="";
        var a=0;
        var html="";
        $(".goingdown").click(function(){
            var texts;
            var vals=$(".user_id").val();
            $(".hallcenter ul.hallul").html("");
            var t=$(this);
            t.parents(".listcontent").find("a").removeClass("cur");
            t.addClass("cur");
            var r1=t.parent().hasClass("parents0");
            var r2=t.parent().hasClass("parents1");
            var r3=t.parent().hasClass("parents2");
            if(r1){
               a=$(this).data("id");
               $(".abox").val(a);
                texts=$(this).text();
            }
            if(r2){
                b=$(this).data("id");
                $(".bbox").val(b);
            }
           $.get("<?php echo U('task/taskhall');?>",$('.myformme').serialize(),function(msg){

               for(var k in msg['list']){
                   texts=msg['list'][k].service_state;
                   if(texts==6){
                       texts="已结束";
                   }else if(texts==5){
                       texts="验收中";
                   }else if(texts==4){
                       texts="交付中";
                   }else if(texts==3){
                       texts="工作中";
                   }else if(texts==2){
                       texts="选标中";
                   }else{
                       texts="投标中";
                   }
                   if(msg['list'][k].user_id==vals){
                       html='<li>'+
                       '<a href='+'"'+'/index.php/Home/task/delivery/task_id/'+msg['list'][k].task_id+'.html'+'"'+'>'+
                       '<em class="pull-right">'+texts+'</em>'+
                       '<h3>'+msg['list'][k].money+".00"+'<span>'+msg['list'][k].title+'</span>'+'</h3>'+
                       '<p>'+
                       '<i><img src="/Public/img/ip1.png" class="autoimg" alt="">'+msg['list'][k].username+'</i>'+
                       '<i><img src="/Public/img/ip2.png" class="autoimg" alt="">'+msg['list'][k].number+"人投标"+'</i>'+
                       '<i><img src="/Public/img/ip3.png" class="autoimg" alt="">'+msg['list'][k].time+'</i>'+
                       '<i><img src="/Public/img/ip4.png" class="autoimg" alt="">'+"已托管赏金"+'</i>'+'</p>'+
                       '<p>'+msg['list'][k].content+'</p>'+
                       '</a>'+
                       '</li>'
                   }else{
                       html='<li>'+
                       '<a href='+'"'+'/index.php/Home/task/delivery/task_id/'+msg['list'][k].task_id+'.html'+'"'+'>'+
                       '<em class="pull-right">'+texts+'</em>'+
                       '<h3>'+msg['list'][k].money+".00"+'<span>'+msg['list'][k].title+'</span>'+'</h3>'+
                       '<p>'+
                       '<i><img src="/Public/img/ip1.png" class="autoimg" alt="">'+msg['list'][k].username+'</i>'+
                       '<i><img src="/Public/img/ip2.png" class="autoimg" alt="">'+10+"人浏览/两人投标"+'</i>'+
                       '<i><img src="/Public/img/ip3.png" class="autoimg" alt="">'+msg['list'][k].time+'</i>'+
                       '<i><img src="/Public/img/ip4.png" class="autoimg" alt="">'+"已托管赏金"+'</i>'+'</p>'+
                       '<p>'+msg['list'][k].content+'</p>'+
                       '</a>'+
                       '<b class="taskb"></b>'+
                       '</li>'
                   }
                 $(".hallcenter .hallul").append(html);
                 $(".pages").html(msg.page);
               }

            })
        });
      $(".taskb").click(function(){
          var id=$(this).data('id');
          var t=$(this);
          $.post("<?php echo U('collect/coll_task');?>",{task_id:id},function(msg){
               if(msg.status==1){
                   t.addClass("cur")
                }else{
                   t.removeClass("cur");
                }
          });
      });
    });
    var a=0;
    function myvalue(a1,b1,t){
        if(a==0){
            a=1;
            $(".cbox").prop("value",a1);
        }else{
            a=0;
            $(".cbox").prop("value",b1);
        }
    }
</script>
</body>
</html>