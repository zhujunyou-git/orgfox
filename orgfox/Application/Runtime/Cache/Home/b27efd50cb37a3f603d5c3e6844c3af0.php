<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我是雇主（交易管理）</title>
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
                    <a href="PersonalCenter.html">我的主页</a>
                    <a href="employer.html" class="cur">我是雇主</a>
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
         <div class="container personalmain employer">
             <div class="personalleft pull-left">
                <div>
                   <h3><img src="/Public/img/I1.png" class="autoimg" alt="">交易管理</h3>
                   <ul>
                     <li class="cur"><a href="javascript:void(0);">我发布的任务</a></li>
                     <li><a href="javascript:void(0);">我的订单</a></li>
                     <li><a href="javascript:void(0);">交易评价</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I2.png" class="autoimg" alt="">我的收藏</h3>
                   <ul>
                     <li><a href="javascript:void(0);">我收藏的服务</a></li>
                   </ul>
                </div>
             </div>
             <div class="employerright pull-right employer1 administr">
                 <div class="cur">
                   <h3>我发布的任务</h3>
                   <div class="btn-group btn-group-justified mygrouplj">
                      <div class="btn-group">
                        <select name="" id="">
                          <option value="悬赏">悬赏</option>
                        </select>
                      </div>
                      <div class="btn-group">
                        <select name="" id="">
                          <option value="任务状态">任务状态</option>
                        </select>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-default1 mybuttonlh">搜索</button>
                      </div>
                   </div>
                   <div class="listshowies">
                       <?php if(empty($task_list)): ?><div class="shownone">
                          <h3>抱歉！没有找到符合以上条件的任务</h3>
                          <p>你可以重新再进行筛选 或</p>
                          <a href="<?php echo U('publish/publish');?>">发布任务</a>
                        </div><?php endif; ?>
                   </div>
                     <div class="listshowies mylistshow" style="display: none">
                         <div class="shownone">
                             <h3>抱歉！没有找到符合以上条件的任务</h3>
                             <p>你可以重新再进行筛选 或</p>
                             <a href="<?php echo U('task/taskhall');?>">查看交易大厅</a>
                         </div>
                     </div>
                     <div class="taskbox">
                         <ul class="myserlj">
                             <?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                 <b class="pull-left"><img src="" alt=""></b>
                                 <h3>￥<?php echo ($vo['money']); ?><span><?php echo ($vo['title']); ?></span></h3>
                                 <p>
                                     <span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i><?php echo ($vo['username']); ?></span>
                                     <span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i><?php echo ($vo["number"]); ?>投标</span>
                                     <span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i><?php echo (date('Y-m-d',$vo["time"])); ?></span>
                                     <span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i><?php if($vo["type"] == 1): ?>赏金未托管<?php else: ?>赏金已托管<?php endif; ?></span>
                                 </p>
                                 <i><?php echo ($vo["content"]); ?></i>
                                 <i class="boxi"><?php echo ($vo["indus_id"]); ?></i><i class="boxi"><?php echo ($vo["indus_pid"]); ?></i>
                                 <a href="<?php echo U('task/delivery?task_id='.$vo['task_id']);?>" class="lookbox">查看</a>
                             </li><?php endforeach; endif; else: echo "" ;endif; ?>
                         </ul>
                     </div>
                 </div>
                 <div class="">
                   <h3>我的订单</h3>
                   <div class="btn-group btn-group-justified myjusti">
                      <div class="btn-group">
                        <select name="" id="">
                          <option value="悬赏">悬赏</option>
                        </select>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-default3 mybuttonlh">搜索</button>
                      </div>
                   </div>
                   <div class="listshowies">
                       <?php if(empty($order)): ?><div class="listshowies mylistshow">
                           <div class="shownone">
                               <h3>抱歉！暂无订单</h3>
                           </div>
                       </div><?php endif; ?>
                       <div class="listshowies mylistshow" style="display: none;">
                           <div class="shownone">
                               <h3>抱歉！暂无订单</h3>
                           </div>
                       </div>
                        <div class="shownone myorder">
                            <ul>
                            <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <i class="pull-right">
                                    <?php if($vo['type'] == 0): ?><a href="<?php echo U('Serve/pay?id='.$vo['id']);?>">支付</a><?php endif; ?>
                                    <?php if($vo['acceptance'] == 1): ?><a href="javascript:void(0)" class="color">交易完成</a>
                                            <?php if(empty($vo['eval'])): ?><a href="<?php echo U('Serve/evalu?id='.$vo['shop_id']);?>" >去评价</a><?php endif; ?>
                                        <?php else: ?>
                                        <?php if($vo['delivery'] == 1): ?><a href="<?php echo U('Serve/livttwo?id='.$vo['id']);?>">去验收</a>
                                            <?php else: ?>
                                            <a class="nobg">等待服务商交付</a><?php endif; endif; ?>
                                </i>
                                <b class="pull-left autoimg" style="background-image: url(<?php echo ($vo['bbbox']); ?>)"></b>
                                <h4><?php echo ($vo['server_name']); ?></h4>
                                <p>赏金：<span>￥<?php echo ($vo['money']); ?></span></p>
                                <p><?php echo ($vo['autograph']); ?></p>
                              </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                   </div>
                 </div>
                 <div>
                   <h3>交易评价</h3>
                     <form action="<?php echo U(user/employer);?>" class="form2">
                   <div class="btn-group btn-group-justified mygrouplj">
                       <div class="btn-group">
                           <select name="evaluate" >
                               <option value="1">好评</option>
                               <option value="2">中评</option>
                               <option value="3">差评</option>
                           </select>
                       </div>
                       <div class="btn-group">
                           <select name="to_user_id">
                               <option value="1">对我评价</option>
                               <option value="2">对他人评价</option>
                           </select>
                       </div>
                      <div class="btn-group">
                          <input type="hidden" name="eval" value="1">
                        <button type="button" class="btn btn-default btn-default2 mybuttonlh">搜索</button>
                      </div>
                   </div>
                         </form>
                     <div class="listshowies">
                         <?php if(empty($evallist)): ?><div class="shownone myoneljh">
                             <h3>抱歉！没有评论</h3>
                         </div><?php endif; ?>
                         <div class="shownone myoneljh" style="display: none">
                             <h3>抱歉！没有评论</h3>
                         </div>
                         <div class="shownone transaction myshowlj">
                             <?php if(is_array($evallist)): $i = 0; $__LIST__ = $evallist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="businesslists">
                                     <b class="pull-left autoimg" style="background-image: url(<?php echo ($vo['head']); ?>)"></b>
                                     <h3><?php echo ($vo['username']); ?><span>好评率：100%</span></h3>
                                     <p>提交于<?php echo (date("Y-m-d",$vo['time'])); ?></p>
                                     <p class="dybusi"><?php echo ($vo['content']); ?></p>
                                     <div class="eavlbox3">
                                         <p class="first-child">
                                             工作速度：
                                             <input type="hidden" value="<?php echo ($vo['sudu']); ?>"/>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                         </p>

                                         <p class="second-child">
                                             工作质量：
                                             <input type="hidden" value="<?php echo ($vo['zhiliang']); ?>"/>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                         </p>

                                         <p class="third-child">
                                             工作态度：
                                             <input type="hidden" value="<?php echo ($vo['taidu']); ?>"/>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                             <span class="glyphicon glyphicon-star"></span>
                                         </p>
                                     </div>
                                 </div><?php endforeach; endif; else: echo "" ;endif; ?>
                         </div>
                     </div>
                 </div>
                 <div>
                     <h3>我收藏的服务</h3>
                     <div class="btn-group btn-group-justified myjusti">
                         <div class="btn-group">
                             <select name="" id="">
                                 <option value="悬赏">悬赏</option>
                             </select>
                         </div>
                         <div class="btn-group">
                             <button type="button" class="btn btn-default btn-default3 mybuttonlh">搜索</button>
                         </div>
                     </div>
                     <div class="listshowies">
                         <?php if(empty($coll_list)): ?><div class="listshowies mylistshow">
                             <div class="shownone">
                                 <h3>抱歉！暂无收藏服务！</h3>
                             </div>
                         </div><?php endif; ?>
                         <div class="listshowies mylistshow" style="display: none;">
                             <div class="shownone">
                                 <h3>抱歉！暂无收藏服务！</h3>
                             </div>
                         </div>
                         <div class="shownone myorder">
                             <ul>
                                 <?php if(is_array($coll_list)): $i = 0; $__LIST__ = $coll_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                     <i class="pull-right">
                                         <a href="<?php echo U('Serve/business?shop_id='.$vo['shop_id']);?>">查看</a>
                                     </i>
                                     <b class="pull-left autoimg" style="background-image: url(<?php echo ($vo['bbbox']); ?>)"></b>
                                     <h4><?php echo ($vo['server_name']); ?></h4>
                                     <p>赏金：<span>￥<?php echo ($vo['money']); ?></span></p>
                                 </li><?php endforeach; endif; else: echo "" ;endif; ?>
                             </ul>
                         </div>
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
               if(thistext===$(".administr>div>h3").eq(i).text()){
                  $(".administr>div").eq(i).addClass("cur").siblings().removeClass("cur");
               }
            }
           });
           var b,c;
           var a=$(".employerright .transaction .eavlbox3 p");
           for(var i=0;i< a.length;i++){
               b=a.eq(i).find("span");
               c=a.eq(i).find("input");
               b.eq(c.val()-1).addClass("cur");
               if(b.eq(c.val()-1).hasClass("cur")){
                   b.eq(c.val()-1).prevAll("span").addClass("cur");
               }
           }
           //交易评价
           $('.btn-default2').click(function(){
               $(".myshowlj").html("");
               $.post("<?php echo U(user/serprovider);?>",$('.form2').serialize(),function(msg){
                   if(msg[0]){
                       $(".myoneljh").css("display","none");
                   }else{
                       $(".myoneljh").css("display","block");
                   }
                   for(var k in msg){
                       html1='<div class="businesslists">'+
                       '<b class="pull-left autoimg" style="background-image: url('+msg[k].head+')"></b>'+
                       '<h3>'+msg[k].username+'<span>'+'好评率：100%'+'</span></h3>'+
                       '<p>提交于'+msg[k].time+'</p>'+
                       '<p class="dybusi">'+msg[k].content+'</p>'+
                       '<div class="eavlbox3">'+
                       '<p class="first-child">'+
                       '工作速度：'+
                       '<input type="hidden" value='+'"'+msg[k].sudu+'"/>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '</p>'+

                       '<p class="second-child">'+
                       '工作质量：'+
                       '<input type="hidden" value='+'"'+msg[k].zhiliang+'"/>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '</p>'+

                       '<p class="third-child">'+
                       '工作质量：'+
                       '<input type="hidden" value='+'"'+msg[k].taidu+'"/>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '<span class="glyphicon glyphicon-star"></span>'+
                       '</p>'+
                       '</div>'+
                       '</div>'
                       $(".myshowlj").append(html1);
                       var b,c;
                       var a=$(".employerright .transaction .eavlbox3 p");
                       for(var i=0;i< a.length;i++){
                           b=a.eq(i).find("span");
                           c=a.eq(i).find("input");
                           b.eq(c.val()-1).addClass("cur");
                           if(b.eq(c.val()-1).hasClass("cur")){
                               b.eq(c.val()-1).prevAll("span").addClass("cur");
                           }
                       }
                   }
               });
           });
          </script>
    </body>
</html>