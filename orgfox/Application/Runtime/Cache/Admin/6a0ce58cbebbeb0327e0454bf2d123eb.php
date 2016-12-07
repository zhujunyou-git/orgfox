<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>邮箱认证列表</title>
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
						<a href="" >邮箱认证列表</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>邮箱认证列表</strong></h3>
				<div class="moneycheck">
						<div class="moneyblock">
							<form action="">
							<div class="cur">
								<div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="" class="numberqu">用户编号
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           用户名
										</div>
									</div>

									<div class="row-left">
										<div class="form-group">
				                           认证邮箱
										</div>
									</div>

									<div class="row-left">
										<div class="form-group">
				                           认证状态
										</div>
									</div>
								</div>
								<?php if(is_array($emailList)): $i = 0; $__LIST__ = $emailList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="" class="numberim"><?php echo ($vo["user_id"]); ?>
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           <?php echo ($vo["username"]); ?>
										</div>
									</div>

									<div class="row-left">
										<div class="form-group">
											<?php echo ($vo["email"]); ?>
										</div>
									</div>
									<div class="row-left">
										<?php if($vo["is_activate"] == 1 ): ?><div class="form-group">
												已通过
											</div>
											<?php else: ?>
											<div class="form-group">
												未通过
											</div><?php endif; ?>

									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<div class="row1">
									<div class="row-left">
										<div class="form-group">
											<a href="javascript:void(0);" class="quanbox">全选</a>
											<input type="button" value="批量删除">
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