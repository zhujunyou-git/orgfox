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
                      <li class="cur"><div><i class="caricons"><img src="/Public/img/icon1.png" alt=""></i>服务产品</div></li>
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
      <p class="hallnav">你所在的位置：<a href="">首页</a><span>></span><a href="">商家详情</a></p>
      <div class="business">
          <span class="businessimg pull-left"><img src="/Public/img//xqt.png" class="autoimg" style="background-image: url(<?php echo ($data['bbbox']); ?>)" alt=""></span>
          <div class="busnessdiv pull-right">
               <h3>企业管理有限公司客服外包</h3>
               <p class="xxmoney">价格<span>￥<?php echo ($data['money']); ?></span></p>
               <div class="msubusne">
                 <div class="pull-left">
                                     <p>服务类别：<?php echo ($data['indus_tid']); ?></p>
                    <p>
                      工作速度：
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                    </p>
                    <p>
                      办事效率：
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                    </p>
                 </div>
                 <div class="pull-right">
                   <p>地址：<?php echo ($data['pro']); ?>-<?php echo ($data['city']); ?></p>
                 </div>
               </div>
                <?php if($data['user_id'] == $user_id): ?><a href="javascript:void(0)" onclick="alert('自己的服务不可以购买')">立即购买</a>
                    <?php else: ?>
               <a href="<?php echo U('indent?shop_id='.$data['shop_id']);?>">立即购买</a><?php endif; ?>
                    <input type="hidden" value="<?php echo ($coll['id']); ?>" class="scdox" >
                    <a href="javascript:void(0)" class="huise" data-id="<?php echo ($data['shop_id']); ?>"><span class="glyphicon glyphicon-star"></span>收藏服务</a>
          </div>
      </div> 
    </div>
    <div class="mybusiness container">
        <div class="detailscenter">
          <ul>
              <?php if(is_array($recommend_list)): $i = 0; $__LIST__ = $recommend_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                 <a href="">
                   <span><img src="/Public/img/detail.png" class="autoimg" style="background-image:url(<?php echo ($vo['bbbox']); ?>);"alt=""></span>
                   <div>
                      <p class="detailmoney"><em>￥<?php echo ($vo['money']); ?></em><span class="pull-right">成交量：<?php echo ($vo['number']); ?></span></p>
                      <p class="sername">服务名称：<span><?php echo ($vo['server_name']); ?></span></p>
                      <p class="address"><b><?php echo ($vo['pro']); ?>-<?php echo ($vo['city']); ?></b><i class="pull-right">联系我</i></p>
                   </div>
                 </a>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
    </div>
    <div class="container taskhallone Details">
      <div class="pull-left hallleft">
        <a href=""><img src="/Public/img/adimg2.jpg" class="autoimg" alt=""></a>
      </div>
      <div class="pull-left hallright hallcenterbox">
           <div class="halltop">
                <a href="javascript:void(0);" class="cur">服务详情</a>
                <a href="javascript:void(0);">用户评价（<em><?php echo ($count); ?></em>）</a>
                <div class="cl"></div>
           </div>
           <div class="detailscenter mycenterdeatils">
               <div class="cur">
                  <img src="/Public/img/xqp.png" class="autoimg" alt="" style="background-image:url(<?php echo ($data['aabox']); ?>);">
               </div>
               <div>
                 <div class="ullistbusi">
                     <div class="shownone transaction myshowlj">
                         <?php if(is_array($evallist)): $i = 0; $__LIST__ = $evallist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="businesslists">
                                 <b class="pull-left autoimg"
                                    style="background-image: url(<?php echo ($vo['head']); ?>)"></b>
                                 <h3><?php echo ($vo['server_name']); ?><span>好评率：100%</span></h3>
                                 <p>提交于<?php echo (date("Y-m-d",$vo['time'])); ?></p>
                                 <p class="dybusi"><?php echo ($vo['content']); ?></p>
                                 <div class="eavlbox3 cur myeavl">
                                     <p class="first-child">
                                         办事效率：
                                         <input type="hidden" value="<?php echo ($vo['sudu']); ?>">
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                     </p>

                                     <p class="second-child">
                                         服务质量：
                                         <input type="hidden" value="<?php echo ($vo['zhiliang']); ?>">
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                     </p>
                                 </div>
                             </div><?php endforeach; endif; else: echo "" ;endif; ?>
                     </div>
                     <div id="main">
                         <div id="pagecount"></div>
                     </div>
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

    <script type="text/javascript">
        $(function(){
            //商家详情
            $(".Details .halltop a").click(function(){
              $(this).addClass("cur").siblings().removeClass("cur");
              $(".mycenterdeatils>div").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
            });
            $(".pjiabox").click(function(){
               $(".pinglunbox").css("display","block");
            });
            $(".pinglunbox a").click(function(){
              $(".pinglunbox").css("display","none");
            })
            $(".pinglunbox .msubusne p span").click(function(){
              var myclass=$(this).parent().attr("class");
              $(this).toggleClass("cur");
              var length=$(this).parent().find(".cur").length;
              console.log(myclass)
              if(myclass==='td'){
                $(".taidu").val(length);
              }
              if(myclass==="xl"){
                $(".xiaolv").val(length);
              }
            });

            //收藏店铺
            $(function(){
                 var vl=$(".scdox").val();
                if(vl){
                    $(".huise").html("<span class='glyphicon glyphicon-star'></span>"+"已收藏");
                }else{
                    $(".huise").html("<span class='glyphicon glyphicon-star'></span>"+"收藏店铺");
                }
            });
            $(".huise").click(function(){
                var id=$(this).data('id');
                var t=$(this);
                $.post("<?php echo U('collect/coll_serve');?>",{corr_id:id},function(msg){
                    if(msg.status==1){
                        t.html("<span class='glyphicon glyphicon-star'></span>"+"已收藏");
                    }else{
                        t.html("<span class='glyphicon glyphicon-star'></span>"+"收藏服务");
                    }
                });
            });
            //评价
            var b,c;
            var a=$(".myeavl p");
            for(var i=0;i< a.length;i++){
                b=a.eq(i).find("span");
                c=a.eq(i).find("input");
                b.eq(c.val()-1).addClass("cur");
                if(b.eq(c.val()-1).hasClass("cur")){
                    b.eq(c.val()-1).prevAll("span").addClass("cur");
                }
            }
        });
    </script>




  <script type="text/javascript">
      var curPage = 1; //当前页码
      var total,pageSize,totalPage;
      //获取数据
      function getData(page){
          $.ajax({
              type: 'POST',
              url: '<?php echo U("Serve/business?shop_id=".$data["shop_id"]);?>',
              data: {'pageNum':page},
              dataType:'json',
              beforeSend:function(){
                  $(".myshowlj").append("<li id='loading'>loading...</li>");
              },
              success:function(json){
                  $(".myshowlj").empty();
                  total = json.total; //总记录数
                  pageSize = json.pageSize; //每页显示条数
                  curPage = page; //当前页
                  totalPage = json.totalPage; //总页数
                  var li = "";
                  var list = json.list;
                  $.each(list,function(index,array){ //遍历json数据列
                      li +='<div class="businesslists">'+
                      '<b class="pull-left autoimg"'+
                      'style="background-image: url('+array.head+')"></b>'+
                      '<h3>'+array.server_name+'<span>好评率：'+"100%"+'</span></h3>'+
                      '<p>提交于'+array.time+'</p>'+
                      '<p class="dybusi">'+array.content+'</p>'+
                      '<div class="eavlbox3 cur myeavl">'+
                      '<p class="first-child">'+
                      '办事效率：'+
                      '<input type="hidden" value='+array.sudu+'>'+
                      '<span class="glyphicon glyphicon-star"></span>'+
                      '<span class="glyphicon glyphicon-star"></span>'+
                      '<span class="glyphicon glyphicon-star"></span>'+
                      '<span class="glyphicon glyphicon-star"></span>'+
                      '<span class="glyphicon glyphicon-star"></span>'+
                      '</p>'+

                      '<p class="second-child">'+
                      '服务质量：'+
                      '<input type="hidden" value="'+array.zhiliang+'">'+
                     '<span class="glyphicon glyphicon-star"></span>'+
                     '<span class="glyphicon glyphicon-star"></span>'+
                     '<span class="glyphicon glyphicon-star"></span>'+
                     '<span class="glyphicon glyphicon-star"></span>'+
                     '<span class="glyphicon glyphicon-star"></span>'+
                      '</p>'+
                      '</div>'+
                      '</div>'
                  });
                  $(".myshowlj").append(li);
                  //评价
                  var b,c;
                  var a=$(".myeavl p");
                  for(var i=0;i< a.length;i++){
                      b=a.eq(i).find("span");
                      c=a.eq(i).find("input");
                      b.eq(c.val()-1).addClass("cur");
                      if(b.eq(c.val()-1).hasClass("cur")){
                          b.eq(c.val()-1).prevAll("span").addClass("cur");
                      }
                  }
              },
              complete:function(){ //生成分页条
                  getPageBar();
              },
              error:function(){
                  alert("数据加载失败");
              }
          });
      }

      //获取分页条
      function getPageBar(){
          //页码大于最大页数
          if(curPage>totalPage) curPage=totalPage;
          //页码小于1
          if(curPage<1) curPage=1;
          pageStr = "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";

          //如果是第一页
          if(curPage==1){
              pageStr += "<span>首页</span><span>上一页</span>";
          }else{
              pageStr += "<span><a href='javascript:void(0)' rel='1'>首页</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'>上一页</a></span>";
          }

          //如果是最后页
          if(curPage>=totalPage){
              pageStr += "<span>下一页</span><span>尾页</span>";
          }else{
              pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'>下一页</a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>尾页</a></span>";
          }

          $("#pagecount").html(pageStr);
      }

      $(function(){
          getData(1);
          $("#pagecount").delegate('a','click',function(){
              var rel = $(this).attr("rel");
              if(rel){
                  getData(rel);
              }
          });
      });
  </script>
  </body>
</html>