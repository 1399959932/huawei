<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="./huawei/登录/login.css">
	<script type="text/javascript" src="./huawei/登录/slideunlock.js"></script>

	<style>
		.border{border-radius: 30px;}
	</style>

</head>
<body>
	<header class="col-lg-12 col-md-12">
		<div class="logo col-lg-6 col-sm-6 col-md-offset-3">
			
			<div class="huaweii"><img src="./huawei/登录/huaweiLogo.png" alt=""></div>
			<div class="huawei"><b>华为商城</b></div>
		
		</div>
	</header>
	<div class="clearfix"></div>

	<div class="all">
		<div class="denglu">
			<div class="input">
				<div class="top20"></div>
				<div class="top20"></div>
				@if(session('msg'))
					<div class="alert alert-warning" role="alert">
					  <a href="#" class="alert-link">{{$session('msg')}}</a>
					</div>
				@endif
				<form class="form-horizontal" action="/login" method="post">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-6 control-label col-md-offset-1" style="font-size: 20px;">账号登录</label>
				  </div>
				  <div class="top20"></div>

				  <div class="form-group">
				    <div class="col-sm-10 col-md-offset-1" >
				      <input type="type" class="form-control border" id="inputEmail3" placeholder="手机号/邮箱地址" name="tel">
				    </div>
				  </div>
				  <div class="top20"></div>

				  <div class="form-group">
				    <div class="col-sm-10 col-md-offset-1">
				      <input type="password" class="form-control border" id="inputPassword3" placeholder="密码" name="password" >
				    </div>
				  </div>
				  <div class="top20"></div>
				  <div class="form-group" >
				
				  	<div id="slider" class="col-sm-12 col-md-offset-4">
					    <div id="slider_bg"></div>
					    <span id="label">>></span>
					    <!-- 上一行 left 270 -->
					    <span id="labelTip">请按住滑块，拖动到最右边</span> 
					</div>
				  </div>
				  <div class="top20"></div>
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-10">
				      <div class="checkbox">
				        <label style="font-size: 12px;">
				          <input type="checkbox"> 记住华为账号
				        </label>
				      </div>
				    </div>
				  </div>  

				  <div class="top20"></div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-md-10 col-md-offset-1">
				      <button type="submit" class="btn btn-danger col-md-12 btn-md border" >登录</button>
				    </div>
				  </div>
				  {{csrf_field()}}
				</form>
				  <div class="form-group text-right">
				  	<a href="" style="color: #0064cc; font-size: 12px; margin-right: 50px;">更多</a>
				  </div>

				  <div class="form-group text-center">
				  	<a href="" style="color: #0064cc; font-size: 13px; ">注册账号</a>
				  	<span>|</span>
				  	<a href="" style="color: #0064cc; font-size: 13px; ">忘记密码</a>
				  </div>
				  <div class="top20"></div>
				  <div class="top20"></div>
				  <div class="top20"></div>


				   <div class="form-group text-center">
				  	<span style="color: #aaa;"><span>&nbsp;----------&nbsp;&nbsp;</span>使用其他方式登录<span>&nbsp;&nbsp;----------&nbsp;</span></span>
				  </div>
				
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer class="col-md-12 col-lg-12">
		<div class="top20"></div>

		<ul>
			<li class="text-center">
				<a href="">用户协议</a><span>|</span>
				<a href="">隐私政策</a><span>|</span>
				<a href="">常见问题</a>
			</li>
			<div class="top10"></div>
			<li class="text-center"><span>Copyright © 2011-2017  华为软件技术有限公司  版权所有  保留一切权利  苏B2-20070200号 | 苏ICP备09062682号-9</span></li>
		</ul>
		<div class="top20"></div>
		<div class="top20"></div>
	</footer>


<script>
$(function () {
    var slider = new SliderUnlock("#slider",{
			successLabelTip : "验证通过" 
			// $("#label").css('cursor','normal')
		},function(){  
    	});
    slider.init();
})
   
   
</script> 

</body>
</html>