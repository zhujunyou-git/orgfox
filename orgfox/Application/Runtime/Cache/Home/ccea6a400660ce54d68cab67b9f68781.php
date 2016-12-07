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
    <!--css代码库-->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/css/myCss.css" rel="stylesheet">
<link href="/Public/css/bootstrapValidator.min.css" rel="stylesheet">
<!--js代码库-->
<script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/Public/js/bootstrapValidator.min.js'></script>


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
            <h3>登录 赚钱之路，从这里开始！</h3>
            <form class="form-horizontal" id='defaultForm1' role="form" class="form-horizontal" method="post" action="">
              <div class="form-group">
                <label for="exampleInputName2" class="col-sm-3 control-label">用户</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputName2" name='username' placeholder="" value=''>
                  <p style='display: none;'>用户不能为空</p>
                  <span style='display: none;'>用户尚未注册</span>
                  <span style='display: none;' class="uu">用户尚未激活</span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword3" name='password' placeholder="" value=''>
                  <p style='display: none;'>密码不能为空</p>
                  <span style='display: none;'>账号/密码错误</span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="col-sm-3 control-label">验证码</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword4" name='Captcha' size='4' maxlength='4' placeholder="" value=''>
                  <p style='display: none;'>验证码不能为空</p>
                  <span style='display: none;'>验证码错误</span>
                </div>
                <div class="col-sm-4 Verifi">
                    <img src="<?php echo U('Index/verify');?>" alt="" classs="form-control"  onClick="this.src=this.src+'?'+Math.random()">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-default" id="gobtn">登录</button>
                  <button type="button" class="btn btn-default register">注册</button>
                 <a href="<?php echo U('Index/find');?>">找回密码</a>
                </div>
              </div>
            </form>
        </div>
        <div class="loginbox2" >
            <form id="defaultForm" role="form" class="form-horizontal" method="post" action="ajaxlogin.php"
                >
                <h3 class="form-signin-heading">请输入注册信息：</h3>
                <div class="form-group">
                    <label for="username"class="col-sm-4 control-label" >用户名：</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="username" id="username" placeholder=''/>
                        <p style="display: none;">必须由字母或者数字而且必须大于六位数</p>
                        <span style="display: none;">该用户已注册</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">密码：</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="password" name="password" id="password" placeholder=''/>
                        <p style="display: none;">必须大于6位数和小于30位数</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="repassword" class="col-sm-4 control-label">确认密码：</label>
                    <div class="col-sm-8">
                         <input class="form-control"type="password" name="repassword" id="repassword" placeholder=''/>
                         <p style="display: none;">必须跟密码一致</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">邮箱：</label>
                    <div class="col-sm-8">
                        <input class="form-control"type="email" name="email" id="email" placeholder=''/>
                        <p style="display: none;">邮箱格式不对，请重新输入</p>
                    </div>
                </div>
                <div class="form-group loginbox2-right" >
                        <button class="btn btn-lg btn-primary btn-block" id="gobtn1" type="button">确认注册</button>
                         <a class="btn btn-lg btn-primary btn-block" href="../">返回首页</a>
                </div>
            </form>
        </div>
    </div>
    <div class="Popup">
        <div>
            <p>注册成功，请到邮箱激活</p>
            <button class="btn btn-lg btn-primary btn-block col-sm-5" id="denglu">确定</button>
        </div>
        
    </div>
    <script>
        (function(){
        $('#denglu').click(function(){
            $(this).parents('.Popup').css('display','none');
            $('.loginbox1').css('display','block');
            $('.loginbox2').css('display','none');
            $('.register').attr('disabled','disabled');
        });
        var frominput1=$("#defaultForm1").find('input');
        $("#gobtn").click(function(){
            var _this=$(this)
            var input=$(this).parents("#defaultForm1").find('input');
            console.log(input[2])
            var divlength=$(this).parents("#defaultForm1").find('.has-error').length;
            for(var k=0;k<input.length;k++){
                if(input[k].value==''){
                    $(this).parents('.form-group').siblings('.form-group').eq(k).addClass('has-error');
                    $(this).parents('.form-group').siblings('.form-group').eq(k).find('p').css('display','block');
                }else{
                    $(this).parents('.form-group').siblings('.form-group').eq(k).removeClass('has-error');
                    $(this).parents('.form-group').siblings('.form-group').eq(k).find('p').css('display','none');
                    if(divlength==0){
                        $.post('<?php echo U("index/login");?>', $("form#defaultForm1").serialize(), function (text, status) {
                            if(text.status==1){
                             window.location.href="home/index/index";
                            }else{
                                if(text.info=='账号密码错误，请重新输入'){
                                   $('#inputPassword3').siblings('span').css('display','block');
                                   $('#inputPassword3').parents('.form-group').addClass('has-error');
                                   $('#exampleInputName2').parents('.form-group').addClass('has-error');
                                }else if(text.info=='验证码错误'){
                                   $('#inputPassword4').siblings('span').css('display','block');
                                   $('#inputPassword4').parents('.form-group').addClass('has-error');
                                }else if(text.info=='账号还没激活，请激活'){
                                   $('#exampleInputName2').siblings('span.uu').css('display','block');
                                   $('#exampleInputName2').parents('.form-group').addClass('has-error');
                                }else{
                                    alert('登录失败');
                                }
                            }
                        });
                        break;
                    }
                }
            }
        });
        $('.register').click(function(){
            $(this).parents('.loginbox1').css('display','none')
            $(this).parents('.loginbox1').siblings('.loginbox2').css('display','block')
        });
        $('#gobtn1').click(function(){
            var _input=$(this).parents("#defaultForm").find('input');
            for(var i=0;i<_input.length;i++){
                if(_input[i].value==''){
                    $(this).parents('.form-group').siblings('.form-group').eq(i).addClass('has-error');
                    $(this).parents('.form-group').siblings('.form-group').eq(i).find('p').css('display','block');
                }else{
                    $(this).parents('.form-group').siblings('.form-group').eq(i).removeClass('has-error');
                    $(this).parents('.form-group').siblings('.form-group').eq(i).find('p').css('display','none');
                    var has=$(this).parents("#defaultForm").find('.has-error').length;
                    if(has==0){
                        $(this).parents('.form-group').siblings('.form-group').eq(i).find('p').css('display','none');
                        $.post("<?php echo U('index/register');?>", $("form#defaultForm").serialize(), function (text, status) {
                            if(text.status==1){
                                $(this).attr('disabled','disabled');
                                $('.Popup').css('display','block');
                                $('#username').siblings('span').css('display','none');
                                $('#username').parents('.form-group').removeClass('has-error');
                                $('#email').siblings('p').css('display','none');
                                $('#email').parents('.form-group').removeClass('has-error');
                            }else{
                                if(text.info=='该账号已经注册'){
                                   $('#username').siblings('span').css('display','block');
                                   $('#username').parents('.form-group').addClass('has-error');
                               }else if(text.info=='邮箱格式不对，请重新输入'){
                                   $('#email').siblings('p').css('display','block');
                                   $('#email').parents('.form-group').addClass('has-error');
                               }else{
                                   
                               }
                            }
                        });
                        break;
                    }
                }
            }
        });
        var frominput=$('#defaultForm').find('input');
        var Attr,Attr1;
        frominput.keyup(bb);
        function bb(){
            if(this.id=='username'){
                var _this=$(this);
                var patrn=/^[a-zA-Z\d]\w{3,11}[a-zA-Z\d]$/;
                if(this.value.length<6||this.value.length>30){
                    $(this).parents('.form-group').addClass('has-error');
                    $(this).siblings('p').css('display','block');
                }else{
                    if(patrn.test(this.value)){
                        $(this).parents('.form-group').removeClass('has-error');
                        $(this).siblings('p').css('display','none');
                    }
                }
            }
            if(this.id=='password'){
                if(this.value.length<6||this.value.length>30){
                    $(this).parents('.form-group').addClass('has-error');
                    $(this).siblings('p').css('display','block');
                }else{
                    Attr=this.value;
                    $(this).parents('.form-group').removeClass('has-error');
                    $(this).siblings('p').css('display','none');
                }
            }
            if(this.id=='repassword'){
                if(frominput[1].value==''){
                    this.value='';
                }else{
                    Attr1=this.value;
                    console.log(Attr1+"+"+Attr)
                    if(Attr===Attr1){
                        $(this).parents('.form-group').removeClass('has-error');
                        $(this).siblings('p').css('display','none');
                    }else{
                        $(this).parents('.form-group').addClass('has-error');
                        $(this).siblings('p').css('display','block');
                    }
                }
            }
        }
    })()</script>
  </body>
</html>