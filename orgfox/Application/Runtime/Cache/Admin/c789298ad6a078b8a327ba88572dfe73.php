<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>行业管理</title>
	<link rel="stylesheet" href="/Public/css/reset.css" />
	<link rel="stylesheet" href="/Public/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="myboxdiv">
			<div class="public-nav">您当前的位置：<a href="">全局配置</a>></div>
			<div class="public-content">
				<div class="public-content-header">
					<h3 class="moneyone">
                           <a href="">行业管理</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>行业列表</strong></h3>
				<div class="moneycheck">
						<div class="moneyblock">
							<div class="cur">
								<form action="">
									<div class="row1 moneyrow5">
										<div class="row-left">
											<div class="form-group">
					                           编号
											</div>
										</div>
										<div class="row-left">
											<div class="form-group">
					                           行业名称
											</div>
										</div>
										<div class="row-left">
											<div class="form-group">
					                           修改时间
											</div>
										</div>
										<div class="row-left">
											<div class="form-group">
					                           操作
											</div>
										</div>
									</div>
									<?php if(is_array($pid)): foreach($pid as $key=>$vo): ?><div class="myparents">
										<div class="row1 moneyrow5">
											<div class="row-left">
												<div class="form-group">
						                           <input type="button" class="form-input-txt" name="nunber" value="<?php echo ($vo["industry_id"]); ?>">
												</div>
											</div>
											<div class="row-left">
												<div class="form-group">
						                           <span><?php echo ($vo['industry_name']); ?></span>
						                           <input type="button" class="seelook" value="查看子类">
												</div>
											</div>
											<div class="row-left">
												<div class="form-group">
													<?php echo (date("Y-m-d",$vo['time'])); ?>
												</div>
											</div>
											<div class="row-left">
												<div class="form-group">
												   <a href="<?php echo U('edit?industry_id='.$vo['industry_id']);?>">编辑</a>
												   <a href="<?php echo U('industry/del?industry_id='.$vo['industry_id']);?>" data-id="<?php echo ($vo['industry_id']); ?>" class="myidbox">删除</a>
						                           <input type="button" class="addlook"  value="增加子类">
												</div>
											</div>
										</div>
										<?php if(is_array($vo['list'])): foreach($vo['list'] as $key=>$li): ?><div class="mychildren">
											<div class="row1 moneyrow5">
												<div class="row-left">
													<div class="form-group">
							                           <input type="button" class="form-input-txt" name="nunber" value="<?php echo ($li['industry_id']); ?>">
													</div>
												</div>
												<div class="row-left">
													<div class="form-group">
							                           <span><?php echo ($li['industry_name']); ?></span>
													</div>
												</div>
												<div class="row-left">
													<div class="form-group">
														<?php echo (date("Y-m-d",$li['time'])); ?>
													</div>
												</div>
												<div class="row-left">
													<div class="form-group">
														<a href="<?php echo U('edit?industry_id='.$li['industry_id']);?>">编辑</a>
														<a href="<?php echo U('industry/del?industry_id='.$li['industry_id']);?>">删除</a>
													</div>
												</div>
											</div>
										</div><?php endforeach; endif; ?>
									</div><?php endforeach; endif; ?>
                                     <div class="row1">
                                     	<div class="row-left">
                                     		<div class="form-group">
                                     			<a href="edit.html">添加行业</a>
                                     		</div>
                                     	</div>
                                     </div>								
								</form>
							</div>
					        <div class="row1 myfixed myfixed2">
								<div class="form-group">
									<form action="<?php echo U('industry/indus');?>" method="post">
									<h3>添加子类<a href="javascript:void(0);">x</a></h3>
									<input type="text" name="industry_name"  class="form-input-txt">
									<input type="submit" class="buttonbox sunmit" value="提交">
										<input type="hidden" value="" name="industry_pid" class="myhidden"/>
									</form>
								</div>
							</div>
						</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script>
     $(function(){
     	var a=0;
      $(".seelook").click(function(){
          if(a==0){
          	a=1;
	        $(this).parents(".myparents").css("height","auto");
	        $(this).val("收起子类");
          }else{
          	a=0;
	        $(this).parents(".myparents").css("height","57px");
	        $(this).val("查看子类");
          }
      });
      $(".deletethis").click(function(){
        $(this).parents(".myparents").remove();
      });
	  $(".addlook").click(function(){
	     $(".myfixed2").css("display","block");
		  var a=$(this).siblings('.myidbox').attr("data-id");
		  $(".myhidden").val(a)
	   });
	  $(".myfixed h3 a").click(function(){
	     $(".myfixed2").css("display","none");
	   });
     });

</script>
</body>
</html>