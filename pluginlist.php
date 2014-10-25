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
<div class="xbox-content">
        <!-- content-header-->
        <div class="xbox-fullwidth grey-bg-color xbox-content-header">
            <div class="xbox-mid-container container">
				<div style="width: 200px; float:left">	
					 <p class="xbox-content-title">我的插件列表</p>
				</div>
				<div style="width: 160px; float:right">
                 <a class="btn xbox-btn-primary" style="margin-right:0"><span class="xbox-span-add"></span>新建插件<a>
				</div>
            </div>
        </div><!-- content-header end-->
		<div class="xbox-mid-container container xbox-vertical-center">
					test
<!--				<p style="line-height:660px;text-align:center;font-size:20px">当前无插件</p> -->
		</div>
		<div class="xbox-mid-container container" style="display: none">
<table class="table table-hover xbox-table">
  <thead>
    <tr>
      <th class="col-sm-3"><div><p>名称</p></div></th>
	  <th class="col-sm-2"><div><p>平台</p></div></th>
      <th class="col-sm-2"><div><p>版本号</p></div></th>
      <th class="col-sm-3"><div><p>状态</p></div></th>
      <th class="col-sm-2"><div><p>操作</p></div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<td><div><img class="xbox-app-sicon" src="http://img.wdjimg.com/mms/icon/v1/3/be/a941f4213c4731e5838a148952a51be3_256_256.png"/>来打我呀来打我呀</div></td>
	  <td><div><span class="xbox-app-ios"/></div></td>
      <td>
			<div>
			<p class="xbox-half-cell-top">v 6.1</p>
			<p class="xbox-half-cell-bottom">v 6.2</p>
			</div>
       <td>
			<div>
			<p class="xbox-half-cell-top"><span class="xbox-status-fail"></span>审核未通过</p>
			<p class="xbox-half-cell-bottom"><span class="xbox-status-off"></span>已下线</p>
			<div>
      </td>
	  <td>
			<div>
			<p class="xbox-half-cell-top"><a href="#" class="theme-color">编辑</a></p>
			<p class="xbox-half-cell-bottom"><a href="#" class="theme-color">查看数据</a></p>
			</div>
      </td>
    </tr>
    <tr>
      <td><div>2</div></td>
	  <td><div><span class="xbox-app-android"/></div></td>
	  <td>
			<div>
			<p class="xbox-half-cell-top">v 6.1</p>
			<p class="xbox-half-cell-bottom">v 6.2</p>
			</div>
	  </td>
	  <td>
			<div>
			<p class="xbox-half-cell-top"><span class="xbox-status-pending"></span>设计资料待提交</p>
			<p class="xbox-half-cell-bottom"><span class="xbox-status-on"></span>已上线</p>
			</div>
      </td>
      <td>
			<div>
			<p class="xbox-half-cell-top"><a href="#" class="theme-color">编辑</a></p>
			<p class="xbox-half-cell-bottom"><a href="#" class="theme-color">查看数据</a></p>
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

