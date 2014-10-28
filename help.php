<!DOCTYPE html>
<html lang="en">
<head>
	<link rel='stylesheet' href="./static/css/bootstrap.css">
	<link rel='stylesheet' href="./static/css/main.css">
	<link rel='stylesheet' href="./static/css/tipsy.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
</head>
<body>
	<?php
	require_once("./xbox_nav.php");
	?>
	<div class="xbox-content">
		<div class="xbox-mid-container">
			<h2 class="xbox-help-title">手机百度插件审核流程示意图</h2>
			<img src="./static/img/help_process.png">
			<hr style="margin-top:40px">
			<h2 class="xbox-help-title">相关文档下载</h2>
			<div class="row">
				<div class="col-sm-3 text-center xbox-steps">
					<img src="./static/img/help_manual.png">
					<h4>准入说明</h4>
					<hr class="short-hr">
					<div>
						<a>ddddd</a>
					</div>
				</div>
				<div class="col-sm-3 text-center xbox-steps">
					<img src="./static/img/help_design.png">
					<h4>设计说明</h4>
					<hr class="short-hr">
					<div>
						<a>ddddd</a>
					</div>
				</div>
				<div class="col-sm-3 text-center xbox-steps">
					<img src="./static/img/help_test.png">
					<h4>测试说明</h4>
					<hr class="short-hr">
					<div>
						<a>ddddd</a>
					</div>
				</div>
				<div class="col-sm-3 text-center xbox-steps">
					<img src="./static/img/help_contact.png">
					<h4>联系我们</h4>
					<hr class="short-hr">
					<div>
						<a>ddddd</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	require_once("./xbox_footer.php");
	?>
</body>
<script type='text/javascript' src='./static/js/jquery.js'></script> 
<!-- <script type='text/javascript' src='./static/bootstrap.min.js'></script> -->
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

