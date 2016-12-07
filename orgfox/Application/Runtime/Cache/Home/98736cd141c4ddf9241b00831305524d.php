<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>建设邦登陆</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin">
    <div class="loginHead">
	<div class="container">
		<ul class="left-nav">
			<li class="nav-item"><a href='#'class="nav-item-link active">回到首页</a></li>
			<li class="nav-item">欢迎您，<a href='#'class="nav-item-link active">请登录</a></li>
			<li class="nav-item"><a href='#'class="nav-item-link active">免费注册</a></li>
			<li class="nav-item"><a href='#'class="nav-item-link active">试运营</a></li>
		</ul>
		<ul class="right-nav">
			<li class="nav-item has-sub">
				<a href="#">我是雇主<span class="caret"></span></a>
				<ul class="nav-item-sub nav-sub-list">
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
				</ul>
			</li>
			<li class="nav-item has-sub">
				<a href="#">我是雇主<span class="caret"></span></a>
				<ul class="nav-item-sub nav-sub-list">
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
					<li><a href="#">找服务商</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#">帮助中心</a></li>
			<li class="nav-item has-sub">
				<a href="javascript:viod(0);" class="nav-item-link">帮助中心</a>
				<div class="nav-item-sub">
					<dl>
						<dt>任务</dt>
						<dd>
							<ul>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
							</ul>
						</dd>
					</dl>
					<div class="line"></div>
					<dl>
						<dt>人才</dt>
						<dd>
							<ul>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
								<li><a href="#">一级建造师</a></li>
							</ul>
						</dd>
					</dl>			
				</div>
			</li>
			<li class="nav-item"><a href="#">推广</a></li>
		</ul>
	</div>
</div>


    <div class="login">
        <div class="loginbox1">
            <h3>第二步</h3>
            <form class="form-horizontal" id='fillForm' role="form" class="form-horizontal" method="post" action="<?php echo U('index/fill_in');?>">
              <div class="form-group">
                <label for="fillName2" class="col-sm-4 control-label">输入新密码</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="fillName2" name='password' placeholder="" value=''>
                </div>
              </div>
              <div class="form-group">
                <label for="fillName" class="col-sm-4 control-label">请确认密码</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="fillName" name='password' placeholder="" value=''>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="hidden" name="uid" value="<?php echo ($uid); ?>">
                  <button type="submit" class="btn btn-default">提交</button>
                </div>
              </div>
            </form>
        </div>
    </div>
    <!--css代码库-->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/css/myCss.css" rel="stylesheet">
<link href="/Public/css/bootstrapValidator.min.css" rel="stylesheet">
<!--js代码库-->
<script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/Public/js/bootstrapValidator.min.js'></script>


    <script>
    </script>
  </body>
</html>