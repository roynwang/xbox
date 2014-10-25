<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel='stylesheet' href="./static/bootstrap.css">
	<link rel='stylesheet' href="./static/main.css">
	<link rel='stylesheet' href="./static/tipsy.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
  </head>
  <body>
		<?php
			require_once("./xbox_nav.php");
		?>
		<div class="jumbotron xbox-jumbotron-with-bg">
			 <div class="container">
				<p>目前已上线1.208个插件</p>
				<h1>6亿用户在等你</h1>
				<div class="features-bg"></div>
			</div>
		</div>
		<div class="xbox-mid-container container" id="xbox-enter">
			<p class="text-center">
				<a href="#" class="btn btn-enter">进入中心</a>
			</p>
			<p class="text-center text-muted">
		还不赶快行动,创建属于自己的插件吧,让6亿用户享受福利
			</p>
		</div>
		<div class="xbox-mid-container container">
			<div class="row">
				<div class="col-md-2 xbox-col xbox-col-first pull-left text-center">
					<p text-center text-muted>#ICON</p>
					<h2>HAHA</h2>
					<hr class="short-hr">
					<p class="text-center text-muted">there is some description</p>
				</div>
				<div class="col-md-2 xbox-col text-center">
					<p>#ICON</p>
					<h2>HAHA</h2>
					<hr class="short-hr">
					<p class="text-muted">there is some description</p>
				</div>
				<div class="col-md-2 xbox-col text-center">
					<p>#ICON</p>
					<h2>HAHA</h2>
					<hr class="short-hr">
					<p class="text-muted">there is some description</p>
				</div>

				<div class="col-md-2 xbox-col text-center">
					<p>#ICON</p>
					<h2>HAHA</h2>
					<hr class="short-hr">
					<p class="text-muted">there is some description</p>
				</div>
				<div class="col-md-2 pull-right xbox-col-last xbox-col text-center">
					<p>#ICON</p>
					<h2>HAHA</h2>
					<hr class="short-hr">
					<p class="text-muted">there is some description</p>
				</div>
			</div><!--row-->
			<div class="row">
				<a class="pull-right a-muted" href="#">了解更多</a>
			</div>
		</div><!--container-->
		<?php
			require_once("./xbox_footer.php");
		?>
  </body>
<script type='text/javascript' src='./static/jquery.js'></script> 
<!-- <script type='text/javascript' src='./static/bootstrap.min.js'></script> -->
<script type='text/javascript' src='./static/jquery.tipsy.js'></script> 
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

