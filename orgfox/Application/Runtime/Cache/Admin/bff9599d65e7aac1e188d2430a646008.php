<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑行业</title>
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
				<h3 class="sos"><strong>编辑行业</strong></h3>
				<form action="<?php echo U('Industry/indus');?>" method="post" enctype="multipart/form-data">
				<div class="row1">
					<div class="row-left">
						<div class="form-group">
							<label for="">父行业</label>
							<select class="form-input-txt" name="industry_pid">
								<option value="0">置顶</option>
								<?php if(is_array($pid)): $i = 0; $__LIST__ = $pid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["industry_id"]); ?>" <?php echo $name['industry_pid']==$vo['industry_id']?"selected='selected'":''?>><?php echo ($vo["industry_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row1">
					<div class="row-left">
						<div class="form-group">
							<label for="">行业名称</label>
							<?php if(empty($$name['industry_name'])): ?><input type="text" class="form-input-txt" name="industry_name" value="<?php echo ($name['industry_name']); ?>">
								<input type="hidden" value="<?php echo ($name['industry_id']); ?>" name="industry_id">
								<?php else: ?>
								<input type="text" class="form-input-txt" name="industry_name" ><?php endif; ?>
						</div>
					</div>
				</div>
					<div class="row1">
						<div class="row-left">
							<div class="form-group">
								<label for="">上传图片</label>
								<input type="file" name="file">
							</div>
						</div>
					</div>
				<div class="row1">
					<div class="row-left">
						<div class="form-group">
                            <input type="submit" value="提交">
						</div>
					</div>
				</div>
				</form>
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
	   });
	  $(".myfixed h3 a").click(function(){
	     $(".myfixed2").css("display","none");
	   });
     });
</script>
</body>
</html>