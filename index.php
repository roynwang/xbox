<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel='stylesheet' href="./static/bootstrap.css">
	<link rel='stylesheet' href="./static/main.css">
	<link rel='stylesheet' href="./static/tipsy.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
  </head>
  <body>
		<div class="xbox-fullwidth theme-bg-color">
			<div class="xbox-mid-container navbar" role="navigation">
			  <div class="xbox-log">
				<a class="navbar-brand xbox-navbar-brand-left" href="#">来打我呀中心</a>
			  </div>
			  <div class="pull-right">
				 <a class="navbar-brand xbox-navbar-brand-right" href="#">帮助</a>	
				 <a class="navbar-brand xbox-navbar-brand-right" title="hello!!!!!!" href="#">登陆</a>
				 <a id="xbox-login" class="navbar-brand xbox-navbar-brand-right" title="hello!!!!!!" href="#">大湿头像</a>
			  </div> 
			</div> <!--navbar-->
		</div><!--xbox-nav-container-->
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

		<div class="container xbox-fullwidth xbox-footer">
			<p class="text-center text-muted footer-text">
				<a href="#">百度官网</a>|<a href="#">免责声明</a>|<a href="#">联系我们</a>
			</p>
			<p class="text-center footer-text">©2014 Baidu 
<a href="#">使用前必读</a>
<span>京ICP证030173号</span>
			</p>
		</div>
<!--右上角用户/登陆对话框-->
	<div class="container" id="profile-tipsy" style="display:none">
		<ul class="xbox-tipsy nav nav-pills nav-stacked">
			<li>
				<a>avator</a>
			</li>
			<hr class="tipsy-hr">
			<li>
				<a><span class="glyphicon glyphicon-user"></span>个人设置</a>
			</li>
			<hr class="tipsy-hr">
			<li>
				<a><span class="glyphicon glyphicon-log-out"></span>退出登陆</a>
			</li>
		</ul>
	</div>
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

