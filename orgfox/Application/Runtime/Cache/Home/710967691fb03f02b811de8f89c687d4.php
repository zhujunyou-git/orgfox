<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>雇主评价</title>
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

    <div class="container marginTop taskhall taskmain">
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">交易大厅</a><span>></span><a href="">建造师</a></p>
    </div>
    <div class="container taskone">
            <div class="taskboxs">
            <div class="pull-left taskboxLeft evaluation">
                 <h3>服务商</h3>
                <div class="businesslists">
                  <b class="pull-left"><img src="" alt=""></b>
                  <h3><?php echo ($task_p['username']); ?><span>好评率：100%</span></h3>
                  <p>提交于<?php echo (date('Y-m-d',$task_p['time'])); ?></p>
                  <p class="dybusi xxboax"><?php echo ($task_p['demand']); ?></p>
                  <em>附件（<?php echo (count($task_p['file'])); ?>)</em>
                  <?php if(is_array($$task_p["file"])): $i = 0; $__LIST__ = $$task_p["file"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vof): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vof); ?>" target="_blank">查看附件</a><?php endforeach; endif; else: echo "" ;endif; ?>
                  <i style="display: none;"><img src="" alt=""></i>
                </div>
                <h3>评价</h3>
                <form action="<?php echo U('task/evaluate');?>" id="gondone" method="post">
                  <div class="eavlbox">
                    <div class="eavlbox1">
                      <b>总体评价：</b>
                      <label class="radio-inline">
                        <input type="radio"  id="inlineRadio1" name="evaluate" value="1" class="option1"> <span class="glyphicon glyphicon-star">好评</span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  id="inlineRadio2"name="evaluate" value="2" class="option1"> <span class="glyphicon glyphicon-star">中评</span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  id="inlineRadio3" name="evaluate" value="3" class="option1"> <span class="glyphicon glyphicon-star">差评</span>
                      </label>
                    </div>
                    <div class="eavlbox2">
                      <b>评价内容：</b>
                      <textarea class="form-control" rows="10" class="gong1" name="content"></textarea>
                      <p>最多输入100字</p>
                    </div>
                    <div class="eavlbox3">
                      <b>评价质量：</b>
                      <p class="eabox1">
                        工作速度：
                        <input type="hidden" value="" name="sudu">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                      </p>
                      <p class="eabox2">
                        工作质量：
                        <input type="hidden" value="" name="zhiliang">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                      </p>
                      <p class="eabox3">
                        工作态度：
                        <input type="hidden" value="" name="taidu">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                      </p>
                    </div>
                    <div class="eavlbox4">
                      <input type="hidden" value="<?php echo ($to_user_id); ?>" name="to_user_id">
                      <input type="hidden" value="<?php echo ($task_p['task_id']); ?>" name="task_id">
                      <input type="hidden" value="1" name="type">
                      <input type="submit" value="提交" class="goning"><a href="">返回</a>
                    </div>
                  </div>
                </form>
            </div>
            <div class="pull-right taskboxright evalus">
              <div class="lineright">
                <div class="righttop">
                     <h3>恭喜已完成交易！</h3>
                     <p>请对服务商进行评价</p>
                </div>
              </div>
                <div class="adimg2">
                  <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
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
    <script src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
      var cur;
      $(".eavlbox3 p span").click(function(){
        $(this).addClass("cur")
        $(this).prevAll("span").addClass("cur")
        $(this).nextAll('span').removeClass("cur");
        cur=$(this).parent().find(".cur").length;
        $(this).siblings("input").val(cur);
      });
      
      $(".goning").click(function(){
        var j=0;
        var a=$(".option1").prop("checked");
        var c=$(".eavlbox3 p input");
        for(var i=0;i<c.length;i++){
          if(c.eq(i).val()!=""){
            j++;
          }
        }
        console.log(j)
        if(a==true&&j==c.length){
            $("#gondone").submit();
        }
      });
      //
    </script>
  </body>
</html>