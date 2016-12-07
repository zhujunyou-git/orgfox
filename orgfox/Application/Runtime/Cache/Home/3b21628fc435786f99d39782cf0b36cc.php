<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
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
    <div class="container Receplogin">
        <a href="" class="pull-left"><img src="/Public/img/logo3.jpg" class="autoimg" alt=""></a>
        <h3>欢迎登录</h3>
    </div>
    <div class="container-fluid loginbannar">
      <div class="container">
         <img src="/Public/img/loginbannar.png" class="autoimg" alt="">
         <div class="loginAccount">
          <h3>账号登录</h3>
              <form role="form" class="form">
                <div class="form-group loginimg">
                  <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="用户名/邮箱">
                </div>
                <div class="form-group loginimg imgtwo">
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="密码">
                </div>
                  <div class="form-group imgnum">
                      <input type="text" class="form-control" id="numer" name="Captcha" placeholder="验证码">
                      <span><img src="<?php echo U('verify');?>" class="autoimg" alt="" onClick="this.src=this.src+'?'+Math.random()" ></span>
                  </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">记住密码
                  </label>
                </div>
                <div class="form-group loginbutton">
                  <button type="button" class="btn btn-default">立即登录</button>
                  <a href="<?php echo U('register');?>" class="pull-left">免费注册</a>
                  <a href="" class="pull-right">忘记密码？</a>
                </div>
                <div class="form-group loginOther">
                  <p>可以用以下账号直接登录</p>
                  <a href="" class="denglu1"></a>
                  <a href="" class="denglu2"></a>
                  <a href="" class="denglu3"></a>
                </div>
              </form>
         </div>
      </div>
    </div>
    <div class="container-fluid flooreih">
        <div class="container">
               <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>
               <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a>   <a href="">RSS订阅</a> </p> 
               <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>    
        </div>
    </div>
    <a href='<?php echo U("index");?>' id="boxclick">click</a>
    </body>
</html>
<script src="/Public/js/jquery-2.1.1.min.js"></script>
<script>
    $(function(){
        $('.btn').click(function(){
            $.post("<?php echo U('index');?>",$('.form').serialize(),function(msg){
                if(msg.status==1){
                    alert(msg.info);
                   /*$(".boxclick").click()*/
                    document.getElementById("boxclick").click();
                }else{
                    alert(msg.info);
                }
            });
        })
    })
</script>