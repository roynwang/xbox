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
		<div class="jumbotron xbox-jumbotron-with-bg">
			 <div class="container">
				<div class="row">
				<p>目前已上线1.208个插件</p>
				</div>
				<div class="row">
				<h2>6亿用户在等你</h2>
				</div>
			</div>
		</div>
		<div class="xbox-mid-container container text-center" >
				<div style="margin: 70px auto auto auto;width: 316px">
					<a href="#" class="xbox-btn xbox-btn-orange" id="xbox-enter">进入中心</a>
				</div>
				<p id="xbox-enter-text">
		还不赶快行动,创建属于自己的插件吧,让6亿用户享受福利
				</p>
		</div>
		<div class="xbox-mid-container container">
<div class="row">
<div class="col-sm-12 xbox-steps">
	<div class="row">
	  <div class="col-sm-7 five-three">
		<div class="row">
		  <div class="col-sm-4 text-center">
			<img src ="./static/img/step_init.png"/>
			<h4>ddd</h4>
			<hr class="short-hr">
			<p>ddd</p>
		  </div>
		  <div class="col-sm-4 text-center">
			<img src ="./static/img/step_design.png"/>
			<h4>ddd</h4>
			<hr class="short-hr">
			<p>ddd</p>
		  </div>
		  <div class="col-sm-4 text-center">
			<img src ="./static/img/step_apk.png"/>
			<h4>ddd</h4>
			<hr class="short-hr">
			<p>ddd</p>
		  </div><!-- end inner row -->
		</div>
	  </div>
	  <div class="col-sm-5 five-two text-center">
		<div class="row">
		  <div class="col-sm-6">

			<img src ="./static/img/step_test.png"/>
			<h4>ddd</h4>
			<hr class="short-hr">
			<p>ddd</p>
		  </div>
		  <div class="col-sm-6 text-center">
			<img src ="./static/img/step_pass.png"/>
			<h4>ddd</h4>
			<hr class="short-hr">
			<p>ddd</p>
		  </div>
		</div><!-- end inner row -->
	  </div>
	</div><!-- end outer row -->
 </div>
</div>
				<a class="xbox-steps-more pull-right a-muted" href="#">了解更多</a>
		</div><!--container-->
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
});
</script>
</html>

