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
                           <a href="">栏目管理</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>栏目列表</strong></h3>
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
					                           栏目名称
											</div>
										</div>

										<div class="row-left">
											<div class="form-group">
					                           操作
											</div>
										</div>
									</div>
									<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="myparents">
										<div class="row1 moneyrow5">
											<div class="row-left">
												<div class="form-group">
						                           <input type="button" class="form-input-txt" name="nunber" value="<?php echo ($vo['id']); ?>">
												</div>
											</div>
											<div class="row-left">
												<div class="form-group">
						                           <span><?php echo ($vo['name']); ?></span>
						                           <input type="button" class="seelook" value="查看子类">
												</div>
											</div>

											<div class="row-left">
												<div class="form-group">
												   <a href="<?php echo U('columnedit?id='.$vo['id']);?>" >编辑</a>
												   <a href="<?php echo U('column/del?id='.$vo['id']);?>" data-id="<?php echo ($vo['id']); ?>" class="myidbox">删除</a>
						                           <input type="button" class="addlook"   value="增加子类">
												</div>
											</div>
										</div>
										<?php if(is_array($vo['list'])): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><div class="mychildren">
											<div class="row1 moneyrow5">
												<div class="row-left">
													<div class="form-group">
							                           <input type="button" class="form-input-txt" name="nunber" value="1">
													</div>
												</div>
												<div class="row-left">
													<div class="form-group">
							                           <span><?php echo ($li['name']); ?></span>
													</div>
												</div>

												<div class="row-left">
													<div class="form-group">
														<a href="<?php echo U('columnedit?id='.$li['id']);?>">编辑</a>
														<a href="<?php echo U('column/del?id='.$li['id']);?>">删除</a>
													</div>
												</div>
											</div>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
                                     <div class="row1">
                                     	<div class="row-left">
                                     		<div class="form-group">
                                     			<a href="columnadd.html">添加栏目</a>
                                     		</div>
                                     	</div>
                                     </div>								
								</form>
							</div>
					        <div class="row1 myfixed myfixed2">
								<div class="form-group">
									<form action="<?php echo U('column/add');?>" method="post">
									<h3>添加子类<a href="javascript:void(0);">x</a></h3>
									<input type="text" name="name"  class="form-input-txt">
									<input type="submit" class="buttonbox sunmit" value="提交">
										<input type="hidden" value="" name="upid" class="myhidden"/>
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