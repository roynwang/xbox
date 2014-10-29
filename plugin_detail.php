<!DOCTYPE html>
<html lang="en">
<head>
	<link rel='stylesheet' href="./static/css/bootstrap.css">
	<link rel='stylesheet' href="./static/css/tipsy.css">
	<link rel='stylesheet' href="./static/css/main.css">
	<link rel='stylesheet' href="./static/css/xboxmodal.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
</head>
<body>
	<?php
	require_once("./xbox_nav.php");
	?>
	<div class="xbox-content">
		<?php
		require_once("./content_header.php");
		?>
		<div class="xbox-mid-container container">
			<div class="row vertical-center" style="height: 188px">
				<div class="col-sm-2">
					<img class="xbox-app-licon" src = "http://img.wdjimg.com/mms/icon/v1/3/bd/5295ac6a9c6d51e8285690bdbe1b1bd3_256_256.png"/>
				</div>
				<div class="col-sm-6 xbox-app-info">
					<h4>来打我呀</h4>
					<p>ID:1234567</p>
				</div>
				<div class="col-sm-4 pull-right text-right" >
					<p class="xbox-app-action">
						<a class="xbox-a">查看初审详情</a>
						<a class="xbox-a">编辑</a>
					</p>
				</div>
			</div>
			<div id="xbox-fold" style="display: none">
				<div class="container xbox-app-text xbox-app-desc">
					<h4>插件简介</h4>
					<p>喵咪喵咪喵咪咪</p>
				</div>
				<div class="container xbox-app-text xbox-app-doc xbox-doc-links">
					<h4>介绍文档</h4>
					<p><a class="xbox-bcs-file">喵咪</a>
						<a class="xbox-bcs-file">喵咪</a>
						<a class="xbox-bcs-file">喵咪咪</a>
					</p>
				</div>
			</div>
			<hr class="hr-fold">
			<p class="text-center" style="margin-top: -2px">
				<span id="fold-btn" class="info-expand">
				</span>
			</p>

		</div>
		<div class="xbox-mid-container container" >
			<!-- tab-header-->
			<div class="xbox-fullwidth xbox-tab">
				<div class="xbox-mid-container container">
					<div class="row">
						<div class="col-sm-6">	
							<div class="row">
								<div class="col-sm-3 xbox-tab-item xbox-tab-selected">
									<p class="text-center">Android</p>
									<hr>
								</div>
								<div class="col-sm-3 xbox-tab-item">
									<p class="text-center">iOS</p>
									<hr>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="pull-right">	
								<a class="xbox-btn xbox-btn-primary">
									<span class="xbox-span-add"></span>新建插件</a>
								</div>
							</div>
						</div>
					</div>
					<hr>
				</div><!-- tab-header end-->
				<table class="table table-hover xbox-table">
					<thead>
						<tr>
							<th class="col-sm-3"><div><p>版本号</p></div></th>
							<th class="col-sm-4"><div><p>状态</p></div></th>
							<th class="col-sm-3"><div><p>操作</p></div></th>
							<th class="col-sm-2"><div><p>查看</p></div></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div>
									<p>v 6.1</p>
								</div>
							</td>
							<td>
								<div>
									<p><span class="xbox-status-fail"></span>审核未通过</p>
								</div>
							</td>
							<td>
								<div>
									<p><a href="#" class="theme-color">查看数据</a></p>
								</div>
							</td>
							<td>
								<div>
									<p class="xbox-app-action"><a class="xbox-a">审核流程</a> <a class="xbox-a">版本信息</a></p>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<p>v 6.2</p>
								</div>
							</td>
							<td>
								<div>
									<p><span class="xbox-status-on"></span>已上线</p>
								</div>
							</td>
							<td>
								<div>
									<p><a href="#" class="theme-color">编辑</a></p>
								</div>
							</td>
							<td>
								<div>
									<p class="xbox-app-action">
										<a class="xbox-a" data-target="#auth_detail" data-toggle="modal">审核流程</a>
										<a class="xbox-a">版本信息</a>
									</p>
								</div>
							</td>
						</tr>
					</tbody>
				</table> 
			</div>
		</div>
		<?php
		require_once("./xbox_footer.php");
		?>
		<!--  审核详情modal  -->
		<div id="auth_detail" class="modal fade" style="display:none">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4>审核详情</h4>
					</div>
					<div class="modal-body">
						<div class="xbox-review-detail">
							<div class="row">
								<label class="col-sm-3 text-right">插件名称：</label>
								<div class="col-sm-8 text-left xbox-review-detail-text">
									<p >啊哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
								</div>
							</div>
							<div class="row">
								<label class="col-sm-3 text-right">审核结果：</label>
								<div class="col-sm-8 text-left xbox-review-detail-text">
									<p class="xbox-review-detail-result"><em class="review-pass">通过</em></p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="xbox-btn xbox-btn-primary text-center" data-dismiss="modal">确定</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 审核详情modal end-->

	</body>
	


	<script type='text/javascript' src='./static/js/jquery.js'></script> 
	<script type='text/javascript' src='./static/js/bootstrap.js'></script>
	<script type='text/javascript' src='./static/js/jquery.tipsy.js'></script> 
	<script type='text/javascript'>
		$(function(){
			login_tipsy = $('#xbox-login').tipsy({gravity:'ne', opacity: 1, trigger: 'manual', html:true});

			$('#xbox-login').click(function(e){
				e.preventDefault();
				e.stopPropagation();
				if($(".tipsy").length == 0){
					$("#xbox-login").attr("title",$("#profile-tipsy").html());
					login_tipsy.tipsy('show');
					//为tipsy绑定方法,单击tipsy保持显示
					$(".tipsy").click(function(e){
						e.stopPropagation();
					});
				}
			});
			//屏幕任意区域点击则tipsy消失
			$('html').click(function(e){
				if($(".tipsy").length != 0){
					login_tipsy.tipsy('hide');
				}
			});
			$("#fold-btn").click(function(e){
				if($("#xbox-fold").is(':hidden')){
					$("#xbox-fold").slideDown();
					$("#fold-btn").removeClass("info-expand");
					$("#fold-btn").addClass("info-fold");
				}
				else{
					$("#xbox-fold").slideUp();
					$("#fold-btn").removeClass("info-fold");
					$("#fold-btn").addClass("info-expand");
				}
			});
			$(".xbox-tab-item").click(function(e){
				$(".xbox-tab-selected").removeClass("xbox-tab-selected");
				$(this).addClass("xbox-tab-selected");
			});
		});
</script>
</html>

