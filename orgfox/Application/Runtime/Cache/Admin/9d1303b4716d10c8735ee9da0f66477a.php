<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>手机认证列表</title>
	<link rel="stylesheet" href="/Public/css/reset.css" />
	<link rel="stylesheet" href="/Public/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="myboxdiv">
			<div class="public-nav">您当前的位置：<a href="">用户管理</a>></div>
			<div class="public-content">
				<div class="public-content-header">
					<h3 class="moneyone">
						<a href="" >手机认证列表</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>手机认证列表</strong></h3>
				<div class="moneycheck">
						<div class="moneyblock">
							<form action="">
							<div class="cur">
								<div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="" class="numberqu">编号
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           用户名
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           手机号码
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           手机验证码
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           认证时间
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           认证状态
										</div>
									</div>
								</div>
								<div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="" class="numberim">1
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           ljh
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                          13450175960
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           atz6
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           2016-06-02 11:48:30
										</div>
									</div>			
									<div class="row-left">
										<div class="form-group">
                                            已通过
										</div>
									</div>
								</div>
								<div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="" class="numberim">1
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           ljh
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                          13450175960
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           atz6
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           2016-06-02 11:48:30
										</div>
									</div>			
									<div class="row-left">
										<div class="form-group">
                                            已通过
										</div>
									</div>
								</div>
								<div class="row1">
									<div class="row-left">
										<div class="form-group">
											<a href="javascript:void(0);" class="quanbox">全选</a>
											<input type="button" value="批量删除" class="delectaabb">
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<script src="/Public/kingediter/kindeditor-all-min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script>
     $(function(){
       $(".quanbox").click(function(){
       	var a=0;
         var input=$(this).parents("form").find(".numberim");
         for(var i=0;i<input.length;i++){
         	if(input[i].checked){
                a++; 
         	}
          }
          if(a==input.length){
          	for(var i=0;i<input.length;i++){
          		input.eq(i).prop("checked",false);
          		$(".numberqu").prop("checked",false);
          	}
          }else{
          	for(var i=0;i<input.length;i++){
          		input.eq(i).prop("checked",true);
          		$(".numberqu").prop("checked",true);
          	}
          }
       });
	   $(".delectaabb").click(function(){
		  	var b=0;
		  	var input=$(this).parents("form").find(".numberim");
	       	for(var i=0;i<input.length;i++){
	         	if(input[i].checked){
	                b++; 
	         	}
	         }
		  	if(b>0){
		  		$(".myfixed6").css("display","block");
		  	}else{
		  		alert("没有所选项");
		  	}
	   });
	   $(".myfixed h3 a").click(function(){
	     $(".myfixed6").css("display","none");
	   });

       $(".numberim").click(function(){
       	var b=0;
       	var input=$(this).parents("form").find(".numberim");
       	for(var i=0;i<input.length;i++){
         	if(input[i].checked){
                b++; 
         	}
          }
          if(b==input.length){
            $(".numberqu").prop("checked",true);
          }else{
          	$(".numberqu").prop("checked",false);
          }
       });
       $(".numberqu").click(function(){
       	  $(".quanbox").click();
       })
     });
</script>
</body>
</html>