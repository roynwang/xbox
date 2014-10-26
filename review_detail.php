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
<div class="xbox-content xbox-mid-container">
	<div class="row">
		<!-- timeline -->
		<div class = "col-sm-3 xbox-review-timeline">
			<?php
					require("review_timeline.php");
			?>	
		</div>
		<!-- endtimeline -->
		<div class="col-sm-1 timeline-vr"></div>
		<!-- review-detail -->
		<div class = "col-sm-8 xbox-review-detail">
			<div>
				<!-- title -->
				<h4 class="text-center">审核详情</h4>
				<!-- review result -->
				<div class="row">
					<label class = "col-sm-3 text-right">审核结果 :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p class="xbox-review-result"><em class="review-pass">通过</em></p>
					</div>
				</div>
				<!-- end review result -->
				<div class="row">
					<label class = "col-sm-3 text-right">审核结果说明 :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p>大湿太牛逼了</p>
					</div>
				</div>
				<div class="row">
					<label class = "col-sm-3 text-right">相关文档  :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p><a>test.doc</a></p>
						<p><a>test.doc</a></p>
						<p><a>test.doc</a></p>
					</div>
				</div>
			</div>
		<!-- review-detail end -->
		<!-- review-detail --> 
			<div>
				<!-- title -->
				<h4 class="text-center">审核详情</h4>
				<!-- review result -->
				<div class="row">
					<label class = "col-sm-3 text-right">审核结果 :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p class="xbox-review-result"><em class="review-pass">通过</em></p>
					</div>
				</div>
				<!-- end review result -->
				<div class="row">
					<label class = "col-sm-3 text-right">审核结果说明 :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p>大湿太牛逼了</p>
					</div>
				</div>
				<div class="row">
					<label class = "col-sm-3 text-right">相关文档  :</label>
					<div class="col-sm-8 text-left xbox-review-detail-text">
						<p><a>test.doc</a></p>
						<p><a>test.doc</a></p>
						<p><a>test.doc</a></p>
					</div>
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

