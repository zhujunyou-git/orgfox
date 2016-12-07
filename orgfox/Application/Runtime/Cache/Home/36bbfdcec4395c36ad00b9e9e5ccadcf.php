<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文件交付</title>
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
    <div class="container marginTop taskhall taskmain">
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">交易大厅</a><span>></span><a href="">建造师</a></p>
    </div>
    <div class="container taskone">
        <h3>服务名称:<?php echo ($data["title"]); ?></h3>
        <div class="taskboxs">
            <div class="pull-left taskboxLeft">
                <div class="Lefttop">
                  <ul class="cheakmouse">
                    <li><a href="javascript:void(0)" class="cur">服务详情</a></li>
                    <li><a href="javascript:void(0)" >投标记录</a></li>


                    <?php if(empty($eval) or empty ($evals)): ?><!--没有人评价的话评价模块不显示-->
                        <?php else: ?>
                        <li><a href="javascript:void(0)">评价</a></li><?php endif; ?>
                      <?php if($third == 1): if(empty($deli)): ?><!--内容交付后才显示-->
                          <?php else: ?>
                          <li><a href="javascript:void(0)">内容交付</a></li><?php endif; endif; ?>
                  </ul>
                </div>
                <div class="bigbox cheakbox">
                   <div  class="cur">
                      <div class="leftcenter">
                          <div class="details cur">
                             <b class="pull-left">
                                 <?php if(empty($data['head'])): ?><img src="/Public/img/aa.jpg" class="autoimg" alt="">
                                     <?php else: ?>
                                     <img src="<?php echo ($data["head"]); ?>" class="autoimg" alt=""><?php endif; ?>
                                 <a href="" title="{fsd}">联系我</a>
                             </b>
                             <p class="pull-left">
                              <span><i><img src="/Public/img/r1.png" class="autoimg" alt="">雇主：<?php echo ($data["username"]); ?></i></span>
                              <span><i><img src="/Public/img/r2.png" class="autoimg" alt="">服务类型：<?php echo ($data["indus_id"]); ?>-<?php echo ($data["indus_pid"]); ?></i></span>
                              <span><i><img src="/Public/img/r3.png" class="autoimg" alt="">交易模式：<?php echo ($data["task_model_id"]); ?></i></span>
                              <span><i><img src="/Public/img/r4.png" class="autoimg" alt="">截止时间：<?php echo ($data["end_time"]); ?></i></span>
                            </p>
                            <em>本服务已托管金额：<strong>￥<?php echo ($data["money"]); ?></strong></em>
                          </div>
                          <div class="record"></div>
                          <div class="evaluate"></div>
                      </div>
                      <div class="Progressbar">
                        <p>
                          <span>01  发布需求，托管赏金</span>
                          <span>02  服务商竞标</span>
                          <span>03  雇主选标</span>
                          <span>04 双方签约</span>
                          <span>05 服务商工作</span>
                          <span>06 任务交付（按约支付赏金）</span>
                          <span>07 评价</span>
                        </p>
                        <div class="cl"></div>
                      </div>
                      <div class="describe">
                          <h3><span>需求描述</span></h3>
                      </div>
                      <div class="desbox">
                        <p><?php echo ($data["content"]); ?></p>
                      </div>
                      <div class="dsfj">
                          <?php if(empty($data['file'])): ?><!--招标附件-->
                              <h3>附件<span>（0）</span></h3>
                              <?php else: ?>
                              <h3>附件<span>（1）</span><a href="<?php echo ($data['file']); ?>">查看</a></h3><?php endif; ?>
                      </div>
                   </div>
                   <div>
                    <div class="winning">
                      <p>
                        <span>全部</span>
                        <span>未中标（<?php echo ($nomunber); ?>）</span>
                        <span>已中标（<?php echo ($okmunber); ?>）</span>
                      </p>
                    </div>
                       <?php if(is_array($task_p)): $i = 0; $__LIST__ = $task_p;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="businesslists delivery">
                        <?php if($agr_status == 2 and $vo["status"] == 1): ?><!--签约完成-->
                                <a href="javascript:(void(0));" class="pull-right autoing">签约完成</a>
                            <?php else: ?>
                            <?php if($xuanbiao == 1 ): ?><!--投标时出现的按钮-->
                                <a href="<?php echo U('task/status?task_pid='.$vo['task_pid']);?>" class="pull-right">选为中标</a><?php endif; ?>
                            <?php if($agr_status == 1 and $vo["status"] == 1 and $user_id == $data['user_id']): ?><!--甲方签署协议后出现-->
                                <a href="javascript:(void(0));" class="pull-right autoing">请等待乙方签署协议</a>
                                <?php elseif($agr_status == 1 and $vo["status"] == 1 and $user_id == $vo['user_id']): ?>
                                <a href="<?php echo U('task/treaty?task_pid='.$vo['task_pid']);?>" class="pull-right">签约</a><!--乙方签约-->
                                <?php else: ?>
                                <?php if($vo["status"] == 1 and $user_id == $data['user_id']): ?><!--设为中标后出现的按钮-->
                                    <a href="<?php echo U('task/treaty?task_pid='.$vo['task_pid']);?>" class="pull-right">签约</a><?php endif; endif; endif; ?>


                           <?php if(empty($vo['head'])): ?><!--头像没有的话使用默认头像-->
                                <b class="pull-left myimgbox" style="background-image: url(/Public/img/r4.png)"></b>
                           <?php else: ?>
                                <b class="pull-left myimgbox" style="background-image: url(<?php echo ($vo['head']); ?>)"></b><?php endif; ?>
                      <h3><?php echo ($vo["username"]); ?><span>好评率：100%</span></h3>
                      <p>提交于<?php echo (date("y-m-d",$vo["time"])); ?></p>
                        <?php if($vo["status"] == 1): ?><!--中标样式-->
                      <p class="dybusi xxboax"><?php echo ($vo["demand"]); ?></p>
                            <?php else: ?>
                      <p class="dybusi"><?php echo ($vo["demand"]); ?></p><?php endif; ?>
                            <em>附件（<?php echo (count($vo['file'])); ?>)</em>

                        <?php if(is_array($vo["file"])): $i = 0; $__LIST__ = $vo["file"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vof): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vof); ?>" target="_blank" class="fjians">查看附件</a><?php endforeach; endif; else: echo "" ;endif; ?>
                      <i style="display: none;"><img src="" alt=""></i>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div>
                    <?php if(empty($eval) or empty ($evals)): ?><!--没有人评价的话评价模块不显示-->
                        <?php else: ?>
                    <div class="xx appraiseshow">
                        <div class="winning">
                            <p>
                                <span class="xx cur"><a href="javascript:void(0);">评雇主</a></span>
                                <span class="xx"><a href="javascript:void(0);">评服务商</a></span>
                            </p>
                        </div>
                        <div class="businesslists">
                            <div class="cur firstcur">
                                <b class="pull-left"><img src="" alt=""></b>
                                <h3><?php echo ($data['username']); ?><span>好评率：100%</span></h3>
                                <p>提交于<?php echo (date("Y-m-d",$data['time'])); ?></p>
                                <p class="dybusi"><?php echo ($evals['content']); ?></p>
                                <?php if($evals['evaluate'] == 1): ?><p>好评</p>
                                    <?php elseif($evals['evaluate'] == 2): ?>
                                    <p>中评</p>
                                    <?php elseif($evals['evaluate'] == 3): ?>
                                    <p>差评</p><?php endif; ?>
                                <div class="eavlbox3">
                                    <p class="first-child">
                                        工作速度：
                                        <input type="hidden" value="<?php echo ($evals['sudu']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                    <p class="second-child">
                                        工作质量：
                                        <input type="hidden" value="<?php echo ($evals['zhiliang']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                    <p class="third-child">
                                        工作态度：
                                        <input type="hidden" value="<?php echo ($evals['taidu']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="secondcur">
                                <b class="pull-left"><img src="" alt=""></b>
                                <h3><?php echo ($task_pid['username']); ?><span>好评率：100%</span></h3>
                                <p>提交于<?php echo (date('Y-m-d',$task_pid['time'])); ?></p>
                                <p class="dybusi"><?php echo ($eval['content']); ?></p>
                                <?php if($eval['evaluate'] == 1): ?><p>好评</p>
                                <?php elseif($eval['evaluate'] == 2): ?>
                                <p>中评</p>
                                <?php elseif($eval['evaluate'] == 3): ?>
                                <p>差评</p><?php endif; ?>
                                <div class="eavlbox3">
                                    <p class="first-child">
                                        工作速度：
                                        <input type="hidden" value="<?php echo ($eval['sudu']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                    <p class="second-child">
                                        工作质量：
                                        <input type="hidden" value="<?php echo ($eval['zhiliang']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                    <p class="third-child">
                                        工作态度：
                                        <input type="hidden" value="<?php echo ($eval['taidu']); ?>">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><?php endif; ?>
                    <div class="xx">
                        <div class="businesslists">
                            <?php if($data['service_state'] == 6): ?><!--任务完成-->
                                <?php if($user_id == $data['user_id']): ?><!--甲方-->
                                    <?php if(empty($eval['id'])): ?><a href="<?php echo U('task/evaluation',array('task_id'=>$data['task_id'],'task_pid'=>$task_pid['task_pid']));?>" class="pull-right">去评价</a><?php endif; ?>
                                    <?php elseif($user_id == $task_pid['user_id']): ?><!--乙方-->
                                    <?php if(empty($evals['id'])): ?><a href="<?php echo U('task/evaluation1?task_pid='.$task_pid['task_pid']);?>" class="pull-right autorigth">去评价</a><?php endif; endif; ?>
                            <?php else: ?>
                                <?php if($deli['status'] == 1 and $data['user_id'] == $user_id): ?><a href="javascript:void(0);" class="pull-right addcos autorigth">验收付款</a>
                                    <a href="javascript:void(0);" class="pull-right autorigth">交易维权</a><?php endif; endif; ?>
                            <a href="" class="pull-right" style="display:none;">去评价</a>
                            <b class="pull-left"><img src="" alt=""></b>
                            <h3><?php echo ($deli['username']); ?><span>好评率：100%</span></h3>
                            <p>提交于<?php echo (date("Y-m-d",$deli['time'])); ?></p>
                            <p class="dybusi xxboax tance"><?php echo ($deli['demand']); ?></p>
                            <em>附件（<?php echo (count($deli['file'])); ?>）</em>
                            <?php if(is_array($deli['file'])): $i = 0; $__LIST__ = $deli['file'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vof): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vof); ?>" target="_blank">查看附件</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <i style="display: none;"><img src="" alt=""></i>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="pull-right taskboxright">
              <div class="lineright">
                <div class="righttop">
                    <div class="rightbox">
                      <h3>投标数</h3>
                      <b><?php echo ($sunmunber); ?></b>
                    </div>
                    <div class="rightbox">
                      <h3>已中标</h3>
                      <b><?php echo ($okmunber); ?></b>
                    </div>
                </div>
                <div class="rightcenter"><!--$data['user_id'] != $user_id-->
                    <?php if(empty($bidder) and $data['user_id'] != $user_id and ($data['service_state'] == 1 or $data['service_state'] == 2 )): ?><!--没有投过标跟投标人才可以投标-->
                        <a href="<?php echo U('task/tas?task_id='.$data['task_id']);?>" id="tpbox">我要投标</a><?php endif; ?>
                    <?php if($agr_status == 2 and $task_pid['user_id'] == $user_id and empty($deli['status'])): ?><!--签约完成-->
                    <a href="<?php echo U('task/taskdelivery?task_pid='.$task_pid['task_pid']);?>">内容交付</a><?php endif; ?>
                    <input type="hidden" value="<?php echo ($data['end_time']); ?>" id="val"/>
                  <p id="divdown1"></p>
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
  <div class="row1 myfixed myfixed1">
      <div class="form-group">
          <form action="<?php echo U('task/check');?>" method="post">
              <h3>请输入支付密码！<a href="javascript:void(0);">x</a></h3>
              <input type="password" name="paypassword">
              <input type="hidden" name="task_id" value="<?php echo ($data['task_id']); ?>">
              <input type="hidden" name="task_pid" value="<?php echo ($task_pid['task_pid']); ?>">
              <input class="buttonbox sunmit" value="确定" type="submit">
          </form>
      </div>
  </div>
    <script type="text/javascript">
        var interval = 1000;
        function ShowCountDown(year,month,day,divdown1)
        {
            var now = new Date();
            var endDate = new Date(year, month-1, day);
            var leftTime=endDate.getTime()-now.getTime();
            var leftsecond = parseInt(leftTime/1000);
            var day1=Math.floor(leftsecond/(60*60*24));
            var hour=Math.floor((leftsecond-day1*24*60*60)/3600);
            var minute=Math.floor((leftsecond-day1*24*60*60-hour*3600)/60);
            var second=Math.floor(leftsecond-day1*24*60*60-hour*3600-minute*60);
            var cc = document.getElementById(divdown1);
            var dd=document.getElementById("tpbox");
            cc.innerHTML = "距离投标结束时间:"+"<br>"+day1+"天"+hour+"时"+minute+"分"+second+"秒";
            if(day1<0){
                cc.innerHTML = "投标已结束"
                dd.style.display="none";
                clearInterval(j);
            }
        }
        var data=document.getElementById("val").value;;
        var year1=data.substr(0,4);
        var month1=data.substr(5,2);
        var date1=data.substr(8,2);
        var j=setInterval(function(){ShowCountDown(year1,month1,date1,'divdown1');}, interval);
        var date = "2013-11-30";
        date = date.substring(0,10);
        date = date.replace(/-/g,'/');
        var timestamp = new Date(date).getTime();

        $(".cheakmouse a").mouseenter(function(){
            $(this).addClass("cur").parent().siblings().children().removeClass("cur");
            $(".cheakbox>div").eq($(this).parent().index()).addClass("cur").siblings().removeClass("cur");
         });
        $(".addcos").click(function(){
            $(".myfixed1").css("display","block");
        });
        $(".myfixed h3 a").click(function(){
            $(".myfixed1").css("display","none");
        });
        $(".winning span").click(function(){
           $(this).addClass("cur").siblings().removeClass("cur");
           $(".businesslists>div").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
        });
        $(function(){
            var val1=$(".secondcur .first-child input").val();
            var val2=$(".secondcur .second-child input").val();
            var val3=$(".secondcur .third-child input").val();
            for(var i=0;i<val1;i++){
                $(".secondcur .first-child span").eq(i).addClass("cur");
            }
            for(var i=0;i<val2;i++){
                $(".secondcur .second-child span").eq(i).addClass("cur");
            }
            for(var i=0;i<val3;i++){
                $(".secondcur .third-child span").eq(i).addClass("cur");
            }
            var val1=$(".firstcur .first-child input").val();
            var val2=$(".firstcur .second-child input").val();
            var val3=$(".firstcur .third-child input").val();
            for(var i=0;i<val1;i++){
                $(".firstcur .first-child span").eq(i).addClass("cur");
            }
            for(var i=0;i<val2;i++){
                $(".firstcur .second-child span").eq(i).addClass("cur");
            }
            for(var i=0;i<val3;i++){
                $(".firstcur .third-child span").eq(i).addClass("cur");
            }
        });
    </script>
  </body>
</html>