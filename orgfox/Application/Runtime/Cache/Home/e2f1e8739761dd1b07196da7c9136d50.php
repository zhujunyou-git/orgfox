<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
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
        <h3>欢迎注册</h3>
    </div>
    <div class="container-fluid loginbannar registerbannar">
      <div class="container">
         <img src="/Public/img/loginbannar.png" class="autoimg" alt="">
         <div class="loginAccount">
          <h3>账号注册</h3>
              <form role="form" class="form">
                <div class="form-group loginimg">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="username" placeholder="账号">
                </div>
                <div class="form-group loginimg imgtwo">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="密码" name="password" onKeyUp=pwStrength(this.value) onBlur=pwStrength(this.value)>
                </div>
                <div class="form-group">
                    <div class="progress mybar">
                      <div class="progress-bar" id="strength_L" style="width: 33.3333%">
                        弱
                      </div>
                      <div class="progress-bar" id="strength_M" style="width: 33.3333%">
                        中
                      </div>
                      <div class="progress-bar" id="strength_H" style="width: 33.3333%">
                        强
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword2" name="repassword" placeholder="确认密码">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email1" name="email" placeholder="邮箱">
                </div>
                <div class="form-group imgnum">
                  <input type="text" class="form-control" id="numer" name="Captcha" placeholder="验证码">
                  <span><img src="<?php echo U('verify');?>" class="autoimg" alt="" onClick="this.src=this.src+'?'+Math.random()" ></span>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">我同意<a href="">《服务条款》</a>
                  </label>
                </div>
                <div class="form-group loginbutton">
                  <button type="button" class="btn btn-default">立即注册</button>
                </div>
                <div class="form-group loginOther otherregister">
                  <p>第三方登录：</p>
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
    <a href="<?php echo U('index/Reception');?>" style="display: none" id="going">xx</a>
    <script src="/Public/js/jquery-2.1.1.min.js"></script>
<script language=javascript>  
    //判断输入密码的类型  
    function CharMode(iN){  
    if (iN>=48 && iN <=57) //数字  
    return 1;  
    if (iN>=65 && iN <=90) //大写  
    return 2;  
    if (iN>=97 && iN <=122) //小写  
    return 4;  
    else  
    return 8;   
    }  
    //bitTotal函数  
    //计算密码模式  
    function bitTotal(num){  
    modes=0;  
    for (i=0;i<4;i++){  
    if (num & 1) modes++;  
    num>>>=1;  
    }  
    return modes;  
    }  
    //返回强度级别  
    function checkStrong(sPW){  
    if (sPW.length<=4)  
    return 0; //密码太短  
    Modes=0;  
    for (i=0;i<sPW.length;i++){  
    //密码模式  
    Modes|=CharMode(sPW.charCodeAt(i));  
    }  
    return bitTotal(Modes);  
    }  
      
    //显示颜色  
    function pwStrength(pwd){  
    O_color="#eeeeee";  
    L_color="#d9534f";  
    M_color="#f0ad4e";  
    H_color="#5cb85c";  
    if (pwd==null||pwd==''){  
    Lcolor=Mcolor=Hcolor=O_color;  
    }  
    else{  
    S_level=checkStrong(pwd);  
    switch(S_level) {  
    case 0:  
    Lcolor=Mcolor=Hcolor=O_color;  
    case 1:  
    Lcolor=L_color;  
    Mcolor=Hcolor=O_color;  
    break;  
    case 2:  
    Lcolor=Mcolor=M_color;  
    Hcolor=O_color;  
    break;  
    default:  
    Lcolor=Mcolor=Hcolor=H_color;  
    }  
    }  
    document.getElementById("strength_L").style.background=Lcolor;  
    document.getElementById("strength_M").style.background=Mcolor;  
    document.getElementById("strength_H").style.background=Hcolor;  
    $(".mybar .progress-bar").css("color","#fff");  
    return;  
    }
    $(function(){
        $('.btn-default').click(function(){
            $.post("<?php echo U('index/register');?>",$("form").serialize(),function(msg){
               alert(msg.info);
                if(msg.status==1){
                   document.getElementById("going").click();
                }
            })
        });
    })
</script>
    </body>
</html>