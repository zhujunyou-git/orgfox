<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地区管理</title>
	<link rel="stylesheet" href="/Public/css/reset.css" />
	<link rel="stylesheet" href="/Public/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="myboxdiv">
			<div class="public-nav">您当前的位置：<a href="">全局配置</a>><a href="">地区管理</a></div>
			<div class="public-content">
				<div class="public-content-header">
					<h3 class="moneyone">
						<a href="javasctipt:void(0);" class="cur">一级</a>
						<a href="javasctipt:void(0);" class="dq">二级</a>
						<a href="javasctipt:void(0);">三级</a>
					</h3>
				</div>
				<div class="public-content-cont mychecksboxaa">
					<div class="regionlist cur">
						<form action="<?php echo U('update');?>" method="post" id="myform1" >
							<div>
								<div class="row1">
									<div class="row-left">
										<div class="form-group">
				                            一级
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            排序
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            操作
										</div>
									</div>
								</div>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row1">
									<div class="row-left">
										<div class="form-group">
				                            <input type="text" name="name[]" value="<?php echo ($vo["name"]); ?>" class="form-input-txt">
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            <input type="text" name="displayorder[]" value="<?php echo ($vo["displayorder"]); ?>" class="form-input-txt">
				                            <input type="hidden" name="id[]" value="<?php echo ($vo["id"]); ?>" >
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            <a href="javascript:void(0);" class="dq" data-id="<?php echo ($vo["id"]); ?>">查看</a>
				                            <a href="<?php echo U('del',['id'=>$vo['id']]);?>"><button class="mydelete">删除</button></a>
										</div>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<div class="row1">
								<div class="row-left">
									<div class="form-group">
										 <a href="javascript:void(0);" class="buttonbox addcos">添加</a>
				                         <button>提交修改</button>
									</div>
								</div>
							</div>
					    </form>
						<!--<div class="row1">
							<div class="form-group">
				                <div class="page">
									<form action="" method="get">
									共<span>42</span>个站点
										<a href="">首页</a>
										<a href="">上一页</a>
										<a href="">下一页</a>
										第<span style="color:red;font-weight:600">12</span>页
										共<span style="color:red;font-weight:600">120</span>页
										<input type="text" class="page-input">
										<input type="submit" class="page-btn" value="跳转">
									</form>
								</div>
							</div>
						</div>-->
						<form action="<?php echo U('add');?>" method="post">
							<div class="row1 myfixed">
								<div class="form-group">
									<h3>添加菜单<span>一级</span><a href="javascript:void(0);">x</a></h3>
									<input type="text" name="name"  class="form-input-txt">
									<input type="hidden" name="upid"  value="0">
									<input type="submit"  class="buttonbox sunmit">
								</div>
							</div>
						</form>

					</div>
					<div class="regionlist">
						<form action="<?php echo U('update');?>" method="post" class="myfrom2">
							<div class="aa">
								<div>
									<div class="row1">
										<div class="row-left">
											<div class="form-group">
												二级
											</div>
										</div>
										<div class="row-left">
											<div class="form-group">
												一级
											</div>
										</div>
										<div class="row-left">
											<div class="form-group">
												操作
											</div>
										</div>
									</div>
								</div>
								<div class="aaboxss">

								</div>
							</div>
							<div class="row1">
								<div class="row-left">
									<div class="form-group">
										<a href="javascript:void(0);" class="buttonbox addcos">添加</a>
				                         <button>提交修改</button>
									</div>
								</div>
							</div>
					    </form>
						<!--<div class="row1">
							<div class="form-group">
				                <div class="page">
									<form action="" method="get">
									共<span>42</span>个站点
										<a href="">首页</a>
										<a href="">上一页</a>
										<a href="">下一页</a>
										第<span style="color:red;font-weight:600">12</span>页
										共<span style="color:red;font-weight:600">120</span>页
										<input type="text" class="page-input">
										<input type="submit" class="page-btn" value="跳转">
									</form>
								</div>
							</div>
						</div>-->
						<form action="<?php echo U('add');?>" method="post">
						<div class="row1 myfixed">
							<div class="form-group">
								<h3>添加菜单<span>二级</span><a href="javascript:void(0);">x</a></h3>
								<input type="text" name="name"  class="form-input-txt">
                                <div class="myfirstfixed"></div>
								<input type="submit" value="提交" >
							</div>
						</div>
						</form>
					</div>
					<div class="regionlist">
						<form action="<?php echo U('update');?>" method="post" class="myfrom3">
							<div>
								<div class="row1">
									<div class="row-left">
										<div class="form-group">
				                            三级
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            二级
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                            操作
										</div>
									</div>
								</div>
								<div class="aaboxss">

								</div>
							</div>
							<div class="row1">
								<div class="row-left">
									<div class="form-group">
										<a href="javascript:void(0);" class="buttonbox addcos">添加</a>
				                         <button>提交修改</button>
									</div>
								</div>
							</div>
					    </form>
						<!--<div class="row1">
							<div class="form-group">
				                <div class="page">
									<form action="" method="get">
									共<span>42</span>个站点
										<a href="">首页</a>
										<a href="">上一页</a>
										<a href="">下一页</a>
										第<span style="color:red;font-weight:600">12</span>页
										共<span style="color:red;font-weight:600">120</span>页
										<input type="text" class="page-input">
										<input type="submit" class="page-btn" value="跳转">
									</form>
								</div>
							</div>
						</div>-->
						<form action="<?php echo U('add');?>" method="post">
							<div class="row1 myfixed">
								<div class="form-group">
									<h3>添加菜单<span>三级</span><a href="javascript:void(0);">x</a></h3>
									<input type="text" name="name"  class="form-input-txt">
									<div class="myfirstfixed1"></div>
									<input type="submit" value="提交">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="/Public/kingediter/kindeditor-all-min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script>
     $(function(){
     	$(".moneyone a").click(function(){
     		$(this).addClass("cur").siblings().removeClass("cur");
     		$(".mychecksboxaa>div").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
     	});
     	$(".mydelete").click(function(){
            $(this).parents(".row1").remove();
     	});
     	$(".addcos").click(function(){
           $(".myfixed").css("display","block");
     	});
     	$(".mychecksboxaa>div h3 a").click(function(){
           $(".myfixed").css("display","none");
     	});
     	$(".sunmit").click(function(){
           var val=$(this).siblings("input");
           if(val.val()==null||val.val()==""){
           	alert("未填写");
           	val.focus();
           }else{
           	$("#myform1").submit();
           	var html=$(".regionlist").html();
           	console.log(html)
		    $(this).parents(".regionlist").append(html);
           }
     	});
     });
	/*
		二级地区
	 */
	 var html="";
	 var html3="";
	$('.dq').click(function(){
		$(".mychecksboxaa>div").eq(1).addClass("cur").siblings().removeClass("cur");
		$(".moneyone a").eq(1).addClass("cur").siblings().removeClass("cur");
		var id=$(this).data('id');
		$.get("<?php echo U('dq');?>",{id:id},function(msg){
			for(var key in msg){
				html+='<div class="row1">'+
						'<div class="row-left">'+
						'<div class="form-group">'+
						'<input type="text" name="name[]" value='+"'"+ msg[key].name+"'" +"id="+"'"+msg[key].id+"'" +'class="form-input-txt">'+
						'</div>'+
						'</div>'+
						'<div class="row-left">'+
						'<div class="form-group">'+
						'<input type="text" readonly="readonly"  value='+"'"+ msg[0].upid+"'"+' class="form-input-txt" >'+
						'<input type="hidden"  name="id[]" value='+"'"+ msg[key].id+"'"+'  >'+
						'</div>'+
						'</div>'+
						'<div class="row-left">'+
						'<div class="form-group">'+
						'<a href="javascript:void(0);" class="dqtwo" data-id='+"'"+msg[key].id+"'"+'>查看</a>'+
				        '<a href='+'"'+"del?id="+msg[key].id+'"'+'>删除</a>'+

						'</div>'+
						'</div>'+
						'</div>'

			}
			$(".myfrom2>div.aa .aaboxss").html(html);
			var html2='<input type="hidden" name="upid" value='+msg[1].upid+'>'
			$('.myfirstfixed').html(html2);
		})
	})
	/*
		三级地区
	 */
	 $(".myfrom2>div.aa .aaboxss").delegate('a','click',function(){
		 $(".mychecksboxaa>div").eq(2).addClass("cur").siblings().removeClass("cur");
		 $(".moneyone a").eq(2).addClass("cur").siblings().removeClass("cur");
		 var id =$(this).data("id");
		 console.log(id)
		 $.get("<?php echo U('dqtwo');?>",{id:id},function(msg){
			 for(var key in msg){
				 html3+='<div class="row1">'+
				 '<div class="row-left">'+
				 '<div class="form-group">'+
				 '<input type="text" name="name[]" value='+"'"+ msg[key].name+"'" +"id="+"'"+msg[key].id+"'" +'class="form-input-txt">'+
				 '</div>'+
				 '</div>'+
				 '<div class="row-left">'+
				 '<div class="form-group">'+
				 '<input type="text"  readonly="readonly" value='+"'"+ msg[0].upid+"'"+' class="form-input-txt" >'+
				 '<input type="hidden"  name="id[]" value='+"'"+ msg[key].id+"'"+'  >'+
				 '</div>'+
				 '</div>'+
				 '<div class="row-left">'+
				 '<div class="form-group">'+
				 '<a href='+'"'+"del?id="+msg[key].id+'"'+'>删除</a>'+

				 '</div>'+
				 '</div>'+
				 '</div>'

			 }
			 $(".myfrom3>div .aaboxss").html(html3);
			 var html4='<input type="hidden" name="upid" value='+msg[1].upid+'>'
			 $('.myfirstfixed1').html(html4);
		 })
	 })
</script>
</body>
</html>