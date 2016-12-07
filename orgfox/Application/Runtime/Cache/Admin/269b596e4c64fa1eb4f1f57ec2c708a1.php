<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>任务配置</title>
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">任务管理</a>></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3 class="myalink">
					<a class="cur">基本配置</a>
					<a>流程配置</a>
					<a>权限配置</a>
					<a>自定义输入字段</a>
				</h3>
			</div>
			<div class="public-content-cont">
				<div class="myprocess">
					<div class="process1">
						<h3 class="sos"><strong>基本配置</strong></h3>
						<form action="" method="post">
							<div class="row1">
								<div class="row-left">
									<div class="form-group">
										<label for="">模型名称：</label>
										<input class="form-input-txt" type="text" name="nun1" value="兼职(单人悬赏)">
									</div>
								</div>
							</div>
							<div class="row1">
								<div class="row-left">
									<div class="form-group">
										<label for="">是否开启：</label>
										<input class="inputradio" type="radio" name="nun2" value="兼职(单人悬赏)">是
										<input class="inputradio" type="radio" name="nun2" value="兼职(单人悬赏)">否
									</div>
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
									<label for="">网站底部信息</label>
									<textarea id="editor_id" name="content"  class="form-input-textara" style="width:700px;height:300px;"></textarea> 
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
									<label for=""></label>
                                    <button>提交</button>
								</div>
							</div>
						</form>
					</div>
					<div class="process2 ">
						<h3 class="sos"><strong>流程配置</strong></h3>
						<form action="" method="post">
							<div class="row1">
								<div class="form-group">
								任务佣金策略：任务规则设置和异常任务资金分配
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务审核金额设定：</label>
								<input type="text" name="moneysd" class="form-input-txt">
								元(发布赏金低于该设定金额的任务需要审核，设为0即无限制)
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
							    <label for="">任务最大金额设定：</label>
								<input type="text" name="moneysd1" class="form-input-txt">
								元(设置任务最大金额,为0时不生效)
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务最小金额设定：</label>
								<input type="text" name="moneysd2" class="form-input-txt">
								元(设置任务最小金额不得小于0元)
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务提成比例：</label>
								<input type="text" name="moneysd3" class="form-input-txt">
								%(站长提取任务佣金的百分比，设为0即无抽佣)
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
									<label for="">任务失败返金抽成比例：</label>
								<input type="text" name="moneysd4" class="form-input-txt">
								%(%(任务异常失败时站长佣金百分比，设为0即无抽佣))
								</div>
							</div>
							<div class="row1">	    
								<div class="form-group">
								<label for="">人才隐藏：</label>
								<input type="radio" name="moneysd5" class="">关闭
								<input type="radio" name="moneys5" class="">开启
								开启之后普通猎头用户可以隐藏人才(雇主增值服务时依然强制隐藏)
								</div>
							</div>
                            <div class="row1">
								<div class="form-group">
								任务时间规则设定：任务交易时间规则和用户参与时间限制
								</div>
							</div>
							<div class="row1 tsbox">
								<div class="form-group">
									<label for="">任务推荐截止时间最大规则：</label>
									<div class="tboxs">
										<div style="margin-bottom:10px">
											 1<input type="text" name="moneysd6" class="form-input-txt">元以上
											 <input type="text" name="moneysd7" class="form-input-txt">天
										</div>
										<div>
											2<input type="text" name="moneysd8" class="form-input-txt">元以上
											<input type="text" name="moneysd9" class="form-input-txt">天<a href="">删除规则</a>
										</div>
                                        <a href="" style="margin-top:10px">添加规则</a>
									</div>
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务公示期时间：</label>
								<input type="text" name="moneysd11" class="form-input-txt">
								天（大于等于0的整数天，设为0即无公示期）
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务推荐截止最小天数：</label>
								<input type="text" name="moneysd12" class="form-input-txt">
								天（大于等于1的整数天，且需要小于等于推荐时间最大规则天数）
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">任务投票期时间：</label>
								<input type="text" name="moneysd13" class="form-input-txt">
								天（大于等于1的整数天）
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">新注册用户投票时间限制：</label>
								<input type="text" name="moneysd14" class="form-input-txt">
								小时（大于等于0的整数小时，设为0即无注册时间限制）
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">选标时间设置：</label>
								<input type="text" name="moneysd15" class="form-input-txt">
								天(大于等于1的整数天)
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">交付期最大时间限制：</label>
								<input type="text" name="moneysd16" class="form-input-txt">
								天  （逾期未完成交付，任务直接冻结交由管理员处理）
								</div>
							</div>
                            <div class="row1">
								<div class="form-group">
								延期规则设定：任务投标期结束前可延期，选标期后无法延期
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">延期最小金额：</label>
								<input type="text" name="moneysd17" class="form-input-txt">
								元
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								<label for="">延期最大天数：</label>
								<input type="text" name="moneysd18" class="form-input-txt">
								天
								</div>
							</div>
							<div class="row1 tsbox">
								<div class="form-group">
									<label for="">延期规则添加：</label>
									<div class="tboxs">
										<div style="margin-bottom:10px">
											 第<input type="text" name="moneysd19" class="form-input-txt">元以上
											 次 不低于悬赏总金额的<input type="text" name="moneysd20" class="form-input-txt">%<a href="">删除规则</a>
										</div>
										<div>
											 第<input type="text" name="moneysd21" class="form-input-txt">元以上
											 次 不低于悬赏总金额的<input type="text" name="moneysd" class="form-input-txt">%<a href="">删除规则</a>
										</div>
                                        <a href="" style="margin-top:10px">添加规则</a>
									</div>
								</div>
							</div>
							<div class="row1">
								<div class="form-group">
								选标规则设定：雇主选标异常情况下的系统辅助流程规则:
								</div>
							</div>
							<div class="row1">	    
								<div class="form-group">
								<label for="">任务过期操作设定：(选标期结束后有投标雇主未选标时)</label>
									
								<input type="radio" name="moneysd" class="">关闭
								<input type="radio" name="moneysd" class="">开启
								</div>
							</div>
							<div class="row1">	    
								<div class="form-group">
									<label for=""></label>
                                  <button>提交</button>
								</div>
							</div>
						</form>
					</div>
					<div class="process3 cur">
						<h3 class="sos"><strong>权限配置</strong></h3>
						<form action="" method="post">
						    <div class="row1">
								<div class="row-left">
	                                <div class="form-group"><strong>项目名称</strong></div>
								</div>
								<div class="row-left">
	                                <div class="form-group"><strong>用户身份</strong></div>
								</div>
							    <div class="row-left">
	                                <div class="form-group"><strong>编辑</strong></div>
								</div>
							</div>
							<div class="row1">
								<div class="row-left"><div class="form-group">发布任务</div></div>
								<div class="row-left"><div class="form-group">买家(雇主)</div></div>
								<div class="row-left"><div class="form-group"><button>权限配置</button></div></div>
							</div>
							<div class="row1">
								<div class="row-left"><div class="form-group">交稿</div></div>
								<div class="row-left"><div class="form-group">卖家(猎头)</div></div>
								<div class="row-left"><div class="form-group"><button>权限配置</button></div></div>
							</div>
							<div class="row1 lastrow1">
								<div class="form-group">
	                             <button>提交</button>
	                            </div>
							</div>
                        </form>
                        <div class="qxszhi" style="display:none;">
                        	<h3 class="sos"><strong>权限编辑</strong></h3>
	                        <form action="" method="post">
		                        <div class="row1">
		                        	<div class="row-left">
			                        	<div class="form-group">
											<strong>所属模型</strong>
										</div>
		                        	</div>
		                      		<div class="row-left">
			                        	<div class="form-group">
											悬赏/发布任务
										</div>
		                        	</div>
								</div>
		                        <div class="row1">
		                        	<div class="row-left">
			                        	<div class="form-group">
											<strong>条件限制</strong>
										</div>
		                        	</div>
		                      		<div class="row-left">
			                        	<div class="form-group myrzheng">
											用户必须同时通过
											<div><input type="checkbox" name="yinhang">银行认证</div>
											<div><input type="checkbox" name="youxiang">邮箱认证</div>
											<div><input type="checkbox" name="shiming">实名或企业认证</div>
											<div><input type="checkbox" name="shouji">手机认证</div>
											<div><input type="checkbox" name="zhifubao">支付宝认证</div>
										    才能发布任务
										</div>
		                        	</div>
		                        	<div class="row-left">
		                        		<div class="form-group">
		                        		权限配置
		                        		<input type="radio" name="year">是
		                        		<input type="radio" name="year">否
		                        		</div>
		                        	</div>
								</div>
								<div class="row1">
									<div class="form-group lastrow1">
										<button>提交</button>
									</div>
								</div>
	                        </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="../kingediter/kindeditor-all-min.js"></script>
<script>
	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>