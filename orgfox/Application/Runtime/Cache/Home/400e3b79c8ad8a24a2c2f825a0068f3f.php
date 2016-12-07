<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账号管理</title>
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
         <div class="container-fluid personalTop">
            <div class="container">
              <div class="pull-left personalNav">
                  <a href="index.html" class="pull-left"><img src="/Public/img/logo1.jpg" class="autoimg" alt=""></a>
                  <p class="pull-left">
                    <a href="">我的主页</a>
                    <a href="">我是雇主</a>
                    <a href="">我是服务商</a>
                    <a href="">账号管理</a>
                    <a href="">我的消息</a>
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
                <div style="display:block !important;">
                   <h3><img src="/Public/img/I5.png" class="autoimg" alt="">基本资料</h3>
                   <ul>
                     <li class="cur"><a href="javascript:void(0);">资料完善</a></li>
                     <li><a href="javascript:void(0);">用户头像</a></li>
                     <li><a href="javascript:void(0);">技能标签</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I6.png" class="autoimg" alt="">账号安全</h3>
                   <ul>
                     <li><a href="javascript:void(0);">登录密码</a></li>
                     <li><a href="javascript:void(0);">支付密码</a></li>
                     <li><a href="javascript:void(0);">账号绑定</a></li>
                     <li><a href="javascript:void(0);">账号认证</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I7.png" class="autoimg" alt="">财务管理</h3>
                   <ul>
                     <li><a href="javascript:void(0);">收支明细</a></li>
                     <li><a href="javascript:void(0);">我要提现</a></li>
                     <li><a href="javascript:void(0);">账户充值</a></li>
                   </ul>
                </div>

             </div>
             <div class="employerright pull-right employer1 administr">
                 <div style="display:block !important;">
                   <h3>资料完善</h3>
                   <form action="" class="form-horizontal" >
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" readonly="readonly" value="<?php echo ($_SESSION['user']['username']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">电子邮箱</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nametrue" class="col-sm-2 control-label">真实姓名</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nametrue">
                      </div>
                    </div>
                    <div class="btn-group btn-group-justified form-group">
                        <label for="nametrue" class="col-sm-2 control-label">所在地</label>
                        <div class="col-sm-10">
                          <div class="btn-group">
                            <select name="" id="">
                              <option value="悬赏">悬赏</option>
                            </select>
                          </div>
                          <div class="btn-group">
                            <select name="" id="">
                              <option value="任务状态">时间段</option>
                              <option value="任务状态">时间段</option>
                              <option value="任务状态">时间段</option>
                              <option value="任务状态">时间段</option>
                            </select>
                          </div>
                          <div class="btn-group">
                            <select name="" id="">
                              <option value="任务状态">任务状态</option>
                              <option value="任务状态">任务状态</option>
                              <option value="任务状态">任务状态</option>
                              <option value="任务状态">任务状态</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="telnumber" class="col-sm-2 control-label">手机号</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="telnumber">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="qqnumber" class="col-sm-2 control-label">QQ</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="qqnumber">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="info" class="col-sm-2 control-label">个人信息</label>
                      <div class="col-sm-5">
                       <textarea class="form-control textarex" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-a">
                      <a href="">保存</a>
                    </div>
                   </form>
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
            $(this).parents("li").addClass("cur")
           })
          </script>
    </body>
</html>