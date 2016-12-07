<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我要發佈</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fotorama.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/css/fotorama.css">
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/page.css" rel="stylesheet">
      <script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.kxbdmarquee.js"></script>
<script src="/Public/js/fotorama.js"></script>
<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>


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
      <div class="publish">
        <ul>
          <li><span>1</span>选择交易模式</li>
          <li><span>2</span>描述任务需求</li>
          <li><span>3</span>核对交易清单</li>
          <li><span>4</span>成功发布任务</li>
        </ul>
      </div>
      <div class="publishbox1">
        <div class="publishleft pull-left">
          <form action="<?php echo U('Publish/publish');?>" method="post" class="form_shopbox"  enctype="multipart/form-data">
            <div>
              <div class="addingbox">
                <h3 class="h3title">交易模式</h3>
                <div class="leftpub lightbox1" data-id="0">
                    <select name="task_model_id" class="task_model_id">
                        <?php if(is_array($task_model)): $i = 0; $__LIST__ = $task_model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <div class="form-group">
                      <label for="aa">有明确预算，明确的预算更能吸引服务商参与</label>
                      <input type="text" class="form-control" id="aa" name="money">
                    </div>
                    <div class="form-group">
                      <label for="bb">希望多少天完成任务</label>
                      <input type="text" class="form-control" id="bb" name="fintime">
                    </div>
                    <div class="form-group forgo">
                      <label for="bb">设置投稿时间</label>
                      <div>
                          <input type="text" name="start_time" value="" class="form-control linkman form_datetime myof" id="begin_time" placeholder="开始时间" readonly="readonly">
                      </div>
                      <div><!--<?php echo (date('Y-m-d',$agr['start_time'])); ?>-->
                          <input type="text" name="end_time" value="" class="form-control linkman form_datetime myof" id="end_time" placeholder="结束时间" readonly="readonly">
                      </div>
                    </div>
                    <script type="text/javascript">
                        $('#begin_time').datetimepicker({
                            format:'yyyy-mm-dd',
                            language:  'zh-CN',
                            //weekStart: 1,
                            //todayBtn:  1,
                            autoclose: true,
                            todayHighlight: true,
                            startView: 2,
                            minView:"month",
                            todayBtn:true,
                            forceParse: 0
                            //showMeridian: 1
                        }).on("changeDate",function(ev){
                            $('#begin_time').datetimepicker('setStartDate','2012-01-01');
                            var transferdate=transferDate($("#begin_time").val());//转时间日期
                            $('#end_time').datetimepicker('remove');
                            $('#end_time').datetimepicker({
                                format:'yyyy-mm-dd',
                                language:  'zh-CN',
                                minView:"month",
                                autoclose: true,

                                'startDate':transferdate
                            }).on("changeDate",function(ev){
                                var enddate=$("#end_time").val();
                                setEndTime(enddate);
                            });
                        });
                        $('#end_time').datetimepicker({
                            format:'yyyy-mm-dd',
                            language:  'zh-CN',
                            minView:2,
                            autoclose: 1
                        }).on("changeDate",function(ev){
                            var enddate=$("#end_time").val();
                            setEndTime(enddate);
                        });
                        function setEndTime(enddate){
                            $('#begin_time').datetimepicker('remove');
                            $('#begin_time').datetimepicker({
                                format:'yyyy-mm-dd',
                                language:  'zh-CN',
                                autoclose: 1,
                                todayHighlight: 1,
                                minView:"month",
                                startView: 2,
                                forceParse: 0,
                                'endDate':transferDate(enddate)
                            });
                        }
                        //将时间字符串转为date
                        function transferDate(data){
                            var start_time=data;
                            var newTime= start_time.replace(/-/g,"-");
                            var transferdate = new Date(newTime);
                            return transferdate;
                        }
                        function transferTime(str){
                            var newstr=str.replace(/-/g,'-');
                            var newdate=new Date(newstr);
                            var time=newdate.getTime();
                            return time;
                        }
                    </script>
                </div>                
              </div>
            <div class="addingbox1">
             <div class="lightbox1" data-id="1">
              <h3 class="h3title">需求描述</h3>
              <p class="pbox pboxnone">联系手机</p>
              <div class="puinput">
                <div class="form-group">
                    <input type="text" class="form-control" name="phone">
                </div>
              </div>
              <p class="pbox pboxnone">标题</p>
              <div class="puinput">
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                  </div>
              </div>
              <p class="pbox pboxnone">选择服务</p>
              <div class="puinput mepui">
                  <div class="btn-group">
                    <select name="indus_id"  class="indus">
                      <option value="">请选择</option>
                        <?php if(is_array($parent_indus)): $i = 0; $__LIST__ = $parent_indus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['industry_id']); ?>"><?php echo ($vo['industry_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                  </div>
                  <div class="btn-group">
                      <select name="indus_pid" class="indus1">
                          <option value="">请选择</option>
                      </select>
                  </div>
                  <div class="btn-group">
                      <select name="indus_tid" class="indus2">
                          <option value="">请选择</option>
                      </select>
                  </div>
              </div>

                 <p class="pbox pboxnone">选择区域</p>
                 <div class="puinput mepui">
                     <div class="btn-group">
                         <select name="pro"  class="pro">
                             <option value="">请选择</option>
                             <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                         </select>
                     </div>
                     <div class="btn-group">
                         <select name="city" class="pro1">
                             <option value="">请选择</option>
                         </select>
                     </div>
                 </div>

              <p class="pbox pboxnone pjtbox">具体描述</p>
              <textarea class="form-control mytext" rows="10" name="content" placeholder="需求描述需求描述需求描述需求描述需求描述需求描述需求描述需求描述"></textarea>
            </div>
            <p class="pbox pboxnone pjtbox">添加附件</p>
            <input type="file" name="file">
            </div>
          </div>
          <div class="settlement">
            <h3>结算清单</h3>
            <p>托管赏金：<span>￥0</span></p>
            <p>应付总额：<span>￥0</span></p>
             <div class="checkbox lightbox1" data-id="2">
                <label>
                  <input type="checkbox" checked="checked">
                  我已阅读并同意<a href="">《企狐任务发布协议》</a>
                </label>
              </div>
              <input type="button" class="aelement" value="结算">
          </div>
          </form>
        </div>
        <div class="adimg pull-right">
          <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
        </div>
        <div class="publishright pull-right"></div>
      </div>
    </div>
    <div class="container-fluid flooreih marginTop">
        <div class="container">
               <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>
               <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a>   <a href="">RSS订阅</a> </p> 
               <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>    
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
          $("input").change(function(){
            var a=0;
            var length1=$(this).parents(".lightbox1").find("input");
            for(var i=0;i<length1.length;i++){
              if(length1.eq(i).val()!=''&&length1.eq(i).val()!=null){
                a++;
              }
            }
            if(a==length1.length){
              $(".publish li").eq($(this).parents(".lightbox1").data("id")).addClass("cur");
              if($(this).parents(".lightbox1").data("id")==0){
                $(".addingbox1").addClass("cur");
              }
              if($(this).parents(".lightbox1").data("id")==1){
                $(".settlement").addClass("cur");
                $(".settlement p span").text("￥"+$("#aa").val())
              }
            }
          });
            $(".aelement").click(function(){
                var inputs=$(this).parents("form").find("input");
                var aa=$(".settlement").find("input");
                var bb=$("#aa").val()

                if(aa.prop("checked")==false){
                    alert("未同意该协议！")
                }else{
                    if(bb>0){
                        $(this).parents("form").submit();
                    }else{
                        alert("预算不能零")
                    }
                }
/*                for(var i=0;i<inputs.length;i++){
                    if(inputs.eq(i).val()==""&&inputs.eq(i).val()==null){

                        inputs.eq(i).css("border","1px solid red");
                    }else{
                        inputs.eq(i).css("border","1px solid #ccc");
                    }
                }*/
            });
        });
        $(function() {
            $(".indus").change(function () {
                var html = '';
                var thisvalue = $(this).val();
                $.get("<?php echo U('publish');?>", {industry_id: thisvalue}, function (msg) {
                    for (var key in msg) {
                        html += '<option value=' + '"' + msg[key].industry_id + '"' + ">" + msg[key].industry_name + "</option>"
                    }
                    $(".indus1").html(html);
                    $(".indus1").trigger("change");
                });
            });
            $(".indus1").change(function () {
                var html = '';
                var thisvalue = $(this).val();
                $.get("<?php echo U('publish');?>", {industry_id: thisvalue}, function (msg) {
                    for (var key in msg) {
                        html += '<option value=' + '"' + msg[key].industry_id + '"' + ">" + msg[key].industry_name + "</option>"
                    }
                    $(".indus2").html(html);
                });
            });

            $(".pro").change(function () {
                var html = '';
                var thisvalue = $(this).val();
                $.get("<?php echo U('publish');?>", {upid: thisvalue}, function (msg) {
                    for (var key in msg) {
                        html += '<option value=' + '"' + msg[key].id + '"' + ">" + msg[key].name + "</option>"
                    }
                    $(".pro1").html(html);
                });
            });
        });
    </script>
  </body>
</html>