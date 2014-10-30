<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel='stylesheet' href="./static/css/bootstrap.css">
	<link rel='stylesheet' href="./static/css/main.css">
	<link rel='stylesheet' href="./static/css/tipsy.css">
	<link rel='stylesheet' href="./static/css/timeline.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
  </head>
  <body>
<?php
require_once("./xbox_nav.php");
?>
<div class="xbox-content xbox-mid-container">
			<?php
					require("review_timeline.php");
			?>	
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

