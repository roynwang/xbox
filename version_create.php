<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel='stylesheet' href="./static/css/bootstrap.css">
	<link rel='stylesheet' href="./static/css/main.css">
	<link rel='stylesheet' href="./static/css/tipsy.css">
	<link rel='stylesheet' href="./static/css/datepicker.css">
	<link rel='stylesheet' href="./static/css/xboxupload.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
  </head>
  <body>
<?php
require_once("./xbox_nav.php");
?>
<div class="xbox-content">
<?php
require_once("./content_header_narrow.php");
?>
<?php
require_once("./version_create_process_bar.php");
?>
<?php
require_once("./version_test_form.php");
?>
</div>
<?php
require_once("./xbox_footer.php");
?>
  </body>
<script type='text/javascript' src='./static/js/jquery.js'></script> 
<script type='text/javascript' src='./static/js/bootstrap.min.js'></script>
<script type='text/javascript' src='./static/js/jquery.tipsy.js'></script> 
<script type='text/javascript' src='./static/js/datepicker.js'></script> 
<script type='text/javascript' src='./static/js/jquery.ocupload.js'></script> 
<script type='text/javascript' src='./static/js/jquery.xboxupload.js'></script> 
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
	//绑定所有上传事件
	bindXboxUpload();
});
</script>
</html>

