<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>支付宝认证列表</title>
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
						<a href="" >支付宝认证列表</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>支付宝认证列表</strong></h3>
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
				                           有效时间
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           处理时间
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           认证状态
										</div>
									</div>
								</div>
								<?php if(is_array($aliList)): $i = 0; $__LIST__ = $aliList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row1 moneyrow3">
									<div class="row-left">
										<div class="form-group">
				                           <input type="checkbox" name="alipay_id[]" class="numberim" value="<?php echo ($vo["alipay_id"]); ?>"><?php echo ($vo["alipay_id"]); ?>
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           <?php echo ($vo["username"]); ?>
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                          终生有效
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           <?php echo (date('Y-m-d',$vo["time"])); ?>
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
											<?php if($vo["alipay_status"] == 1 ): ?>未通过
												<?php else: ?>
												已通过<?php endif; ?>
				                           <a href="<?php echo U('Authentication/zfbwse',['alipay_id'=>$vo['alipay_id']]);?>" class="browse">浏览</a>
											<?php if($vo["alipay_status"] == 1 ): ?><a href="<?php echo U('Authentication/alipay',['alipay_id'=>$vo['alipay_id']]);?>">确认审核</a><?php endif; ?>
										</div>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<div class="row1">
									<div class="row-left">
										<div class="form-group">
											<a href="javascript:void(0);" class="quanbox">全选</a>
											<input type="button" value="批量删除" class="piboxgo">
										</div>
									</div>
								</div>
								<div class="row1 myfixed myfixed1">
									<div class="form-group">
										<form action="<?php echo U('');?>">
										<h3>确定通过审核？<a href="javascript:void(0);">x</a></h3>
											<a href="<?php echo U('Authentication/alipay',['alipay_id'=>$vo['alipay_id']]);?>">确认审核</a>
										</form>
									</div>
							    </div>

								<div class="row1 myfixed myfixed6">
								<div class="form-group">
									<form action="<?php echo U('Authentication/alidel');?>" method="post">
									<h3>确定删除所选？<a href="javascript:void(0);">x</a></h3>
									<input class="buttonbox sunmit" value="确定" type="submit">
										<div class="alipayme" style="opacity: 0;">

										</div>
									</form>
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
       });
      $(".delbox1").click(function(){
	     $(".myfixed1").css("display","block");
	   });
	   $(".goboxs2").click(function(){
	     $(".myfixed2").css("display","block");
	   });
	   $(".myfixed h3 a").click(function(){
	     $(".myfixed1,.myfixed2,.myfixed6").css("display","none");
	   });
	   $(".piboxgo").click(function(){
		  	var b=0;
		  	var input=$(this).parents("form").find(".numberim");
	       	for(var i=0;i<input.length;i++){
	         	if(input[i].checked){
	                b++;
					$(".alipayme").append(input[i])
	         	}
	         }
		  	if(b>0){
		  		$(".myfixed6").css("display","block");
		  	}else{
		  		alert("没有所选项");
		  	}
	   });
     });
</script>
</body>
</html>