<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="/Public/css/reset.css" />
	<link rel="stylesheet" href="/Public/css/login.css" />
</head>
<body>
<div class="page">
	<div class="loginwarrp">
		<div class="logo">管理员登陆</div>
        <div class="login_form">
			<form id="Login" name="Login" method="post" onsubmit="" action="<?php echo U('index/index');?>">
				<li class="login-item">
					<span>用户名：</span>
					<input type="text" name="username" class="login_input">
				</li>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" name="password" class="login_input">
				</li>
				<li class="login-item verify">
					<span>验证码：</span>
					<input type="text" name="Captcha" class="login_input verify_input">
				</li>
				<img src="<?php echo U('verify');?>" border="0" class="verifyimg" onClick="this.src=this.src+'?'+Math.random()"/>
				<div class="clearfix"></div>
				<li class="login-sub">
					<input type="submit" name="Submit" value="登录" />
				</li>                      
           </form>
		</div>
	</div>
</div>
</body>
</html>