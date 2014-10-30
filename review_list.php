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
<?php
require_once("./content_header.php");
?>
	<div class="xbox-mid-container container">
	</div>
		<div class="xbox-mid-container container" >
		<!-- tab-header-->
		<div class="xbox-fullwidth xbox-tab">
			<div class="xbox-mid-container container">
				<div class="row">
				<div class="col-sm-6">	
					<div class="row">
						<div class="col-sm-3 xbox-tab-item xbox-tab-selected">
							<p class="text-center">我的工作台</p>
							<hr>
						</div>
						<div class="col-sm-3 xbox-tab-item">
							<p class="text-center">插件一览表</p>
							<hr>
						</div>
					</div>
				</div>
				</div>
			</div>
			<hr>
		</div><!-- tab-header end-->
<table class="table table-hover xbox-table">
  <thead>
	<tr>
	  <th class="col-sm-3"><div><p>名称</p></div></th>
	  <th class="col-sm-1"><div><p>类型</p></div></th>
	  <th class="col-sm-2"><div><p>平台</p></div></th>
	  <th class="col-sm-1"><div><p>版本号</p></div></th>
	  <th class="col-sm-2"><div><p>任务</p></div></th>
	  <th class="col-sm-2"><div><p>操作</p></div></th>
	  <th class="col-sm-1"><div><p>查看</p></div></th>
	</tr>
  </thead>
  <tbody>
	<tr>
	<td><div><img class="xbox-app-sicon" src="http://img.wdjimg.com/mms/icon/v1/3/be/a941f4213c4731e5838a148952a51be3_256_256.png"/>来打我呀来打我呀</div></td>

	  <td><div>sdk</div></td>
	  <td><div><span class="xbox-app-ios"/></div></td>
	  <td>
			<div>
			<p>v 6.1</p>
			</div>
	   <td>
			<div>
			<p>来来来审核</p>
			<div>
	  </td>
	  <td>
			<div>
			<p><a href="#" class="theme-color">审核</a></p>
			</div>
	  </td>
	  <td>
			<div>
			<p><a href="#" class="theme-color">审核详情</a></p>
			</div>
	  </td>
	</tr>
	<tr>
	  <td><div>2</div></td>
	  <td><div>sdk</div></td>
	  <td><div><span class="xbox-app-android"/></div></td>
	  <td>
			<div>
			<p>v 6.1</p>
			</div>
	  </td>
	  <td>
			<div>
			<p>已上线</p>
			</div>
	  </td>
	  <td>
			<div>
			<p><a>审核</a></p>
			</div>
	  </td>

	  <td>
			<div>
			<p><a>审核详情</a></p>
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

