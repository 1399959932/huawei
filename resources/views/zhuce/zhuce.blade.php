<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册_华为账号</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./js/jquery.js"></script>
	<link rel="stylesheet" href="./huawei/zc/zhuce.css">
	<script type="text/javascript" src="./huawei/zc/zhuce.js"></script>

</head>

<body>


	<header class="col-lg-12 col-md-12">
		<div class="logo col-lg-6 col-sm-6 col-md-offset-3">
			
			<div class="huaweii"><img src="./huawei/zc/head-top.png" alt=""></div>
			<div class="huawei"><b>华为商城</b></div>
		
		</div>
	</header>
	<div class="clearfix"></div>	
	<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="all">
			<div class="top20" style="background-color: #f2f2f2;"></div>
			<!-- <div class="clearfix"></div> -->
			<div class="zhucefangshi" >
				<div><span>手机号</span></div>
				<div class="email"><span>电子邮箱</span></div>
				<div class="right"><span>已有华为账号</span>&nbsp;<a href="">登录></a></div>
			</div>

				<form class="form-horizontal" action="/zhuce" method="post">
				  <div class="top20"></div>
				  <div class="top20"></div>
				  <div class="top20"></div>

				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label col-md-offset-1">国家</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="中国" value="中国" style="background-color: #f2f2f2; border-radius: 15px;">
				    </div>
				  </div>
				  <div class="top20"></div>

				  <div class="form-group" >
				    <label for="inputPassword3" class="col-sm-2 control-label col-md-offset-1" >+86(中国)</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入手机号" style="background-color: #f2f2f2; border-radius: 15px;" name="tel" onfocus="show_user()" onblur="hide_user()" id="tel" onkeyup="keyup_user()">
					  <!-- <p id="u_span" style="padding-left: 450px; "></p> -->


				    </div>
				  </div>
				  <div class="top20"></div>
				  
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label col-md-offset-1">图形验证码</label>
				    <div class="col-sm-6" id="yanzheng">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入图形验证码" style="background-color: #f2f2f2; border-radius: 15px;" name="code">
				      <a onclick="javascript:re_captcha();">
				      	<img src="/vcode" id="codei" />
				      </a>
				    </div>
				  </div>
				  <div class="top20"></div>
				  
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label col-md-offset-1">短信验证码</label>
				    <div class="col-sm-6" id="duanxin">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入短信验证码" style="background-color: #f2f2f2; border-radius: 15px;" name="duanxin">
				      <button type="button" id="send" class="btn btn-md">获取验证码</button>
				    </div>
				  </div>
				  <div class="top20"></div>


				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label col-md-offset-1">密码</label>
				    <div class="col-sm-6">
				      <input type="password" class="form-control"  placeholder="请输入密码" style="background-color: #f2f2f2; border-radius: 15px;" name="password" id="pass" min="6" maxlength="18" >
					  <!-- <p id="u_span" style="padding-left: 450px; "></p> -->

				    </div>
				  </div>
				  <div class="top20"></div>


				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label col-md-offset-1">确认密码</label>
				    <div class="col-sm-6">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="请确认密码" style="background-color: #f2f2f2; border-radius: 15px;" min="6" maxlength="18" id="rpass" name="repassword">
					  <!-- <p id="u_span" style="padding-left: 450px; "></p> -->

				    </div>
				  </div>
				  <div class="top20"></div>


				  <div class="form-group">
				    <div class="col-sm-offset-2 col-md-10 col-md-offset-3">
				      <button type="submit" class="btn btn-danger col-md-4" style="border-radius: 30px;" id="submit">注册</button>
				      <span id="tishi"></span>
				    </div>
				  </div>
				  {{csrf_field()}}
				</form>

				<div class="clearfix"></div>
				<div class="top20"></div>
				<div class="top20"></div>
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

			</div>
			
		</div>
	</div>
	<!-- 上一行容器结束 -->


<script>
$(function(){
  	$('#send').click(function()
  	{
		//获取用户的手机号
		var tel = $('input[name=tel]').val();
		 //console.log(tel);

		var res = /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;

		if(!res.test(tel)) {
			alert('手机号格式错误');
			// return;
		}
	
		$.ajax({
			type:'get',
			data:{tel:tel},
			url:'/message',
			success: function(data){
				console.log(data);
			}

		 });

		//发送短信之后 1分钟之内不能点击该按钮
		$(this).addClass('disabled');
		var t = 30;
		//加倒计时
		var inte = setInterval(function()
		{
			$('#send').html(t+'秒后请重试').css('color','red');
			t--;
			if(t < 0) 
			{
				//停止定时器
				clearInterval(inte);
				//使按钮可点
				$('#send').removeClass('disabled');
				//更换文字
				$('#send').html('发送验证码').css('color','#0066cc');
			}
		}, 1000);


	});
		// $.get('/message',{},funciton(){
		// 	console.log(data);
		// });

	// $('button').click(function){
	// 	var pass = $('input[name=password]').val();
	// 	var preg_pass = /^.{6,18}$/;
	// 	var tel = $('input[name=tel]').val();
	// 	var res = /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
	// 	if (!res.test(password)&!preg_pass.test(pass) & pass = ''&tel !='')
	// 	{
	// 		 $('#tishi').innerHTML = "<span style='color:#f00;font-size:12px;'>将填写符合格式的数据</span>";
	// 		// return back('/zhuce')->with('msg','orr');
	// 	}

	// 	else{
	// 		return back('/zhuce')->with('msg','orr');
	// 	}
	// });

});

</script>

</body>
</html>