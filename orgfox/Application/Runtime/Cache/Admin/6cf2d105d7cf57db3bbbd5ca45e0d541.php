<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>任务管理</title>
	<link rel="stylesheet" href="/Public/css/reset.css" />
	<link rel="stylesheet" href="/Public/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">用户管理</a>></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>银行卡</h3>
			</div>
			<div class="public-content-cont">
			<form action="" method="post">
				<h3 class="sos"><strong>银行列表</strong></h3>
				<div class="row1">
					<div class="row-left">
						<div class="form-group">
							<label for="">农业银行</label>
						</div>
					</div>
				    <div class="row-left">
						<div class="form-group">
                            <input type="button" value="修改"  class="addcos">
                            <input type="button" value="删除" class="mydelete">
						</div>
					</div>
				</div>
				

				<div class="row1">
					<div class="row-left">
						<div class="form-group">
                          <input type="button" value="添加" class="buttonme">
						</div>
					</div>
				</div>
				</form>
		        <div class="row1 myfixed myfixed1">
					<div class="form-group">
						<form action="">
						<h3>修改开户银行<a href="javascript:void(0);">x</a></h3>
						<input type="text" name="" id="" class="form-input-txt">
						<a href="javascript:void(0);" class=""></a>
						<input type="submit" class="buttonbox sunmit" value="提交">
						</form>
					</div>
				</div>
		        <div class="row1 myfixed myfixed2">
					<div class="form-group">
						<form action="">
						<h3>添加开户银行<a href="javascript:void(0);">x</a></h3>
						<input type="text" name="" id="" class="form-input-txt">
						<a href="javascript:void(0);" class=""></a>
						<input type="submit" class="buttonbox sunmit" value="提交">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script>
     	$(".mydelete").click(function(){
            $(this).parents(".row1").remove();
     	});
     	$(".addcos").click(function(){
           $(".myfixed1").css("display","block");
     	});
     	$(".buttonme").click(function(){
           $(".myfixed2").css("display","block");
     	});
     	$(".myfixed h3 a").click(function(){
           $(".myfixed1,.myfixed2").css("display","none");
     	});
</script>
</body>
</html>