<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>银行认证列表</title>
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
						<a href="" >银行认证列表</a>
					</h3>
				</div>
				<div class="public-content-cont">
				<h3 class="sos"><strong>银行认证详细信息</strong></h3>
				<div class="moneycheck">
						<div class="moneyblock">
							<div class="cur">
								<div class="row1 moneyrow4">
									<div class="row-left">
										<div class="form-group">
				                           用户名
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                          <?php echo ($bandata['username']); ?>
										</div>
									</div>
								</div>
								<div class="row1 moneyrow4">
									<div class="row-left">
										<div class="form-group">
				                           开户银行 
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                          <?php echo ($bandata['bank_name']); ?>
										</div>
									</div>
								</div>
								<div class="row1 moneyrow4">
									<div class="row-left">
										<div class="form-group">
				                           开户银行所在地  
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
											<?php echo ($bandata['bank_pro']); ?>,<?php echo ($bandata['bank_city']); ?>
										</div>
									</div>
								</div>
								<div class="row1 moneyrow4">
									<div class="row-left">
										<div class="form-group">
				                           开户行名称  
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           <?php echo ($bandata['deposit_name']); ?>
										</div>
									</div>
								</div>
								<div class="row1 moneyrow4">
									<div class="row-left">
										<div class="form-group">
				                           银行账号   
										</div>
									</div>
									<div class="row-left">
										<div class="form-group">
				                           <?php echo ($bandata['deposit_account']); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<script src="/Public/kingediter/kindeditor-all-min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>

</body>
</html>