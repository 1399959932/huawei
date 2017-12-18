<!DOCTYPE html>
<html>
<head>
	<title>华为消费者业务官网</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/holder.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/official.css">
    <script type="text/javascript">
    	$(function(){
    		//圆圈
    		$(".chan > .container > .pin > ul > li").click(function(){
    			$(this).addClass("one").siblings(".chan > .container > .pin > ul > li").removeClass("one");
    		})


    		//下拉菜单
    		$(".nav > .container > .headers > .nav_menu > ul > .menu_1").click(function(){
    			$('.drop').slideToggle('80');
    		})
    		
    	})
    </script>
</head>
<body>
<!-- 头部部分开始 -->
<div class="ed navbar-fixed-top">
<div class="nav">
	<div class="container">
		<div class="headers">
			<div class="nav_logo">
				@foreach($tupian as $k=>$v)
				@if($k == 71)
				<img src="{{$v->pic}}" width="109px;" height="25px;">
				@endif
				@endforeach
			</div>
			<div class="nav_menu">
				<ul>
					<li class="menu_1">
						<a href="#">智能手机</a>
						<div class="drop">
							<div class="container">
								<div class="dr_cha">
									<span class="glyphicon glyphicon-remove col-md-offset-11 cha"></span>
								</div>
								<div class="dr_nr">
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>Mate&nbsp;10</h2>
											<p></p>
											<!-- <span>预见未来</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;Mate系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>P10</h2>
											<p></p>
											<!-- <span>人像摄影大师</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;P系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>nova&nbsp;2s</h2>
											<p></p>
											<!-- <span>高颜值&nbsp;爱自拍</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;nova系列</a>
										</div>
									</div>
								</div>
								<div class="dr_foo">
									<a href="#">查看全部智能手机</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_1">
						<a href="#">笔记本&平板</a>
						<div class="drop">
							<div class="container">
								<div class="dr_cha">
									<span class="glyphicon glyphicon-remove col-md-offset-11 cha"></span>
								</div>
								<div class="dr_nr">
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>Mate&nbsp;10</h2>
											<p></p>
											<!-- <span>预见未来</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;Mate系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>P10</h2>
											<p></p>
											<!-- <span>人像摄影大师</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;P系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>nova&nbsp;2s</h2>
											<p></p>
											<!-- <span>高颜值&nbsp;爱自拍</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;nova系列</a>
										</div>
									</div>
								</div>
								<div class="dr_foo">
									<a href="#">查看全部笔记本&平板</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_1">
						<a href="#">穿戴设备</a>
						<div class="drop">
							<div class="container">
								<div class="dr_cha">
									<span class="glyphicon glyphicon-remove col-md-offset-11 cha"></span>
								</div>
								<div class="dr_nr">
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>Mate&nbsp;10</h2>
											<p></p>
											<!-- <span>预见未来</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;Mate系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>P10</h2>
											<p></p>
											<!-- <span>人像摄影大师</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;P系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>nova&nbsp;2s</h2>
											<p></p>
											<!-- <span>高颜值&nbsp;爱自拍</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;nova系列</a>
										</div>
									</div>
								</div>
								<div class="dr_foo">
									<a href="#">查看全部穿戴设备</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_1">
						<a href="#">智能家居</a>
						<div class="drop">
							<div class="container">
								<div class="dr_cha">
									<span class="glyphicon glyphicon-remove col-md-offset-11 cha"></span>
								</div>
								<div class="dr_nr">
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>Mate&nbsp;10</h2>
											<p></p>
											<!-- <span>预见未来</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;Mate系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>P10</h2>
											<p></p>
											<!-- <span>人像摄影大师</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;P系列</a>
										</div>
									</div>
									<div class="col-md-4 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>nova&nbsp;2s</h2>
											<p></p>
											<!-- <span>高颜值&nbsp;爱自拍</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;nova系列</a>
										</div>
									</div>
								</div>
								<div class="dr_foo">
									<a href="#">查看全部智能家居</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_1">
						<a href="#">更多产品</a>
						<div class="drop">
							<div class="container">
								<div class="dr_cha">
									<span class="glyphicon glyphicon-remove col-md-offset-11 cha"></span>
								</div>
								<div class="dr_nr">
									<div class="col-md-6 drop1" style="padding: 0px; margin-left: 230px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>Mate&nbsp;10</h2>
											<p></p>
											<!-- <span>预见未来</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;Mate系列</a>
										</div>
									</div>
									<div class="col-md-6 drop1" style="padding: 0px;">
										<div class="drop1_zi">
											<h2>HUAWEI<br>P10</h2>
											<p></p>
											<!-- <span>人像摄影大师</span> -->
										</div>
										<div class="drop1_tu">
											<img src="holder.js/179x254" style="margin-left: 64px;">
										</div>
										<div class="drop1_ck">
											<a href="#">查看全部HUAWEI&nbsp;P系列</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_1">
						<a href="#">软件应用</a>
					</li>
					<li class="menu_1">
						<a href="#">服务与支持</a>
					</li>
					<li class="menu_1">
						<a href="#">华为商城</a>
					</li>
				</ul>
			</div>
			<div class="nav_ss">
				<img src="/img/ss.png">
			</div>
		</div>
	</div>
</div>
</div>
<!-- 头部部分结束 -->
<!-- logo部分开始 -->
<div class="logo">
	<div class="tu">
		@foreach($tupian as $k=>$v)
		@if($k == 35)
		<img src="{{$v->pic}}" width="100%" height="560px;">
		@endif
		@endforeach
		<div class="btns col-md-offset-3">
			<span class="col-md-3"><a href="#">了解HUAWEI&nbsp;Mate&nbsp;10</a></span>
			<span class="col-md-3" style="margin-left: 0px;"><a href="#">HUAWEI&nbsp;Mate&nbsp;10&nbsp;Pro</a></span>
		</div>
	</div>
</div>
<!-- logo部分结束 -->
<!-- 产品部分开始 -->
<div class="chan">
	<div class="container">
		<div class="col-md-2 col-md-offset-2">
			@foreach($tupian as $k=>$v)
			@if($k == 59)
			<img src="{{$v->pic}}" style="margin-top: 70px;">
			@endif
			@endforeach
		</div>
		<div class="col-md-8 col-md-offset-2 pin" style="padding: 0px;">
			<img src="/img/cplo.png" style="margin-top: 5px;">
			<p>6英寸全面屏&nbsp;2000万四镜头</p>
			<ul>
				<li>
					<div class="one"></div>
				</li>			
				<li>
					<div ></div>
				</li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<button>了解更多</button>
			<button style="margin-right: 0px;">立即购买</button>
		</div>
	</div>
</div>
<!-- 产品部分结束 -->
<!-- 查看详情部分开始 -->
<div class="ckxq">
	<div class="container">
		<div class="part">
			<div class="col-md-2 part1" style="padding: 0px;">
				<h2>HUAWEI<br>Mate&nbsp;10<br>保时捷设计</h2>
				<p>预见未来</p>
				@foreach($tupian as $k=>$v)
				@if($k == 60)
				<img src="{{$v->pic}} " width="216px;" height="176px;" style="margin-left: -8px;">
				@endif
				@endforeach
				<button>查看详情</button>
			</div>
			<div class="col-md-2 part1" style="padding: 0px; margin-left: 72px;">
				<h2>HUAWEI<br>Mate&nbsp;10<br>保时捷设计</h2>
				<p>预见未来</p>
				@foreach($tupian as $k=>$v)
				@if($k == 61)
				<img src="{{$v->pic}}" width="216px;" height="176px;" style="margin-left: -8px;">
				@endif
				@endforeach
				<button>查看详情</button>
			</div>
			<div class="col-md-2 part1" style="padding: 0px; margin-left: 72px;">
				<h2>HUAWEI<br>Mate&nbsp;10<br>保时捷设计</h2>
				<p>预见未来</p>
				@foreach($tupian as $k=>$v)
				@if($k == 62)
				<img src="{{$v->pic}}" width="216px;" height="176px;" style="margin-left: -8px;">
				@endif
				@endforeach
				<button>查看详情</button>
			</div>
			<div class="col-md-2 part1" style="padding: 0px; margin-left: 72px;">
				<h2>HUAWEI<br>Mate&nbsp;10<br>保时捷设计</h2>
				<p>预见未来</p>
				@foreach($tupian as $k=>$v)
				@if($k == 63)
				<img src="{{$v->pic}}" width="216px;" height="176px;" style="margin-left: -8px;">
				@endif
				@endforeach
				<button>查看详情</button>
			</div>
		</div>
	</div>
</div>
<!-- 查看详情部分结束 -->
<!-- 图片部分开始 -->
<div class="pict">
	<div class="ure_t">
		<div class="col-md-6 t_zi" style="padding: 0px;">
			@foreach($tupian as $k=>$v)
			@if($k == 64)
			<img src="{{$v->pic}}" width="844px;" height="431px;">
			@endif
			@endforeach
			<p class="col-md-offset-4">人像摄影大师</p>
			<div class="plus col-md-offset-4">
				<a href="#">了解HUAWEI&nbsp;P10&nbsp;Plus</a>
			</div>
		</div>
		<div class="col-md-6 t_zin" style="padding: 0px;">
			@foreach($tupian as $k=>$v)
			@if($k == 65)
			<img src="{{$v->pic}}" width="844px;" height="431px;">
			@endif
			@endforeach
			<p class="col-md-offset-4">这一刻更自由</p>
			<div class="plus col-md-offset-4">
				<a href="#">了解HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a>
			</div>
		</div>
	</div>
	<div class="ure_c">
		<div class="col-md-12" style="padding: 0px;">
			@foreach($tupian as $k=>$v)
			@if($k == 66)
			<img src="{{$v->pic}}" width="1349px;" height="490px;">
			@endif
			@endforeach
		</div>
		<div class="xq">
			<p class="yjwl">预见未来</p>
			<p class="hms">HUAWEI&nbsp;Mate&nbsp;10&nbsp;系列<br>与你共同预见未来更多可能</p>
			<button>了解更多</button>
		</div>
	</div>
	<div class="ure_b">
		<div class="col-md-12" style="padding: 0px;">
			@foreach($tupian as $k=>$v)
			@if($k == 67)
			<img src="{{$v->pic}}" width="1686px;" height="560px;">
			@endif
			@endforeach
		</div>
		<p class="col-md-offset-5">预见未来</p>
		<!-- <div class="col-md-12 hhx">
			<span class="diy col-md-offset-1 glyphicon glyphicon-play"><a href="#">HUAWEI P10 | P10 Plus TVC</a></span>
			<span class="diy glyphicon glyphicon-play"><a href="#">HUAWEI nova2 | nova2 Plus 设计视频</a></span>
			<span class="diy glyphicon glyphicon-play"><a href="#">新一代HUAWEI MateBook产品视频</a></span>
		</div> -->
	</div>
</div>
<!-- 图片部分结束 -->
<!-- 更多产品部分开始 -->
<div class="geng">
	<div class="container">
		<div class="duo">更多产品</div>
		<div class="imgs">
			<ul>
				<li class="col-md-4" style="padding: 0px;">
					@foreach($tupian as $k=>$v)
			        @if($k == 68)
					<img src="{{$v->pic}}" width="300px;" height="396px;">
					@endif
			        @endforeach
					<div class="jish">
						<span>智能手机</span>
						<span class="xian"></span>
						<p>33&nbsp;款产品</p>
					</div>
				</li>
				<li class="col-md-4" style="padding: 0px;" >
					@foreach($tupian as $k=>$v)
			        @if($k == 69)
					<img src="{{$v->pic}}" width="300px;" height="396px;" style="margin-left: 11px;">
					@endif
			        @endforeach
					<div class="jish">
						<span>笔记本&平板</span>
						<span class="xian"></span>
						<p>11&nbsp;款产品</p>
					</div>
				</li>
				<li class="col-md-4" style="padding: 0px;">
					@foreach($tupian as $k=>$v)
			        @if($k == 70)
					<img src="{{$v->pic}}" width="300px;" height="396px;" style="float: right;">
					@endif
			        @endforeach
					<div class="jish">
						<span>穿戴设备</span>
						<span class="xian"></span>
						<p>9&nbsp;款产品</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- 更多产品部分结束 -->
<!-- 脚部部分开始 -->
<div class="jiao">
	<div class="container">
		<div class="footer">
			<div class="footer_t">
				<div class="fwrx">
					<span class="glyphicon glyphicon-earphone">&nbsp;服务热线</span>
					<div class="dian">
						<p class="tel">400-830-8300 / 800-830-8300（座机）</p>
						<p class="time">普通话7*24小时</p>
					</div>
				</div>
				<div class="line"></div>
				<ul>
					<li>
						<img src="图片/logo1.png" style="margin-right: 13px;">
						<a href="#">微信客服</a>
					</li>
					<li>
						<img src="图片/logo2.png" style="margin-right: 13px;">
						<a href="#">在线客服</a>
					</li>
					<li>
						<img src="图片/logo3.png" style="margin-right: 13px;">
						<a href="#">零售店查询</a>
					</li>
					<li style="margin-right: 0px;">
						<img src="图片/logo4.png" style="margin-right: 13px;">
						<a href="#">服务中心查询</a>
					</li>
				</ul>
			</div>
			<div class="footer_c">
				<div class="group" style="margin-left: 50px;">
					<dl>
						<dt>购买产品</dt>
						<dd><a href="#">智能手机</a></dd>
						<dd><a href="#">笔记本&平板</a></dd>
						<dd><a href="#">智能穿戴</a></dd>
						<dd><a href="#">智能家居</a></dd>
						<dd><a href="#">移动宽带</a></dd>
						<dd><a href="#">配件</a></dd>
					</dl>
				</div>
				<div class="group">
					<dl>
						<dt>服务与支持</dt>
						<dd><a href="#">保修政策</a></dd>
						<dd><a href="#">预约服务</a></dd>
						<dd><a href="#">寄修服务</a></dd>
						<dd><a href="#">保修状态查询</a></dd>
						<dd><a href="#">维修配件价格</a></dd>
						<dd><a href="#">维修进度查询</a></dd>
						<dd><a href="#">环保回收</a></dd>
						<dd><a href="#">联系我们</a></dd>
					</dl>
				</div>
				<div class="group">
					<dl>
						<dt>应用与下载</dt>
						<dd><a href="#">用户手册</a></dd>
						<dd><a href="#">预置应用公示</a></dd>
						<dd><a href="#">店面元素下载</a></dd>
					</dl>
				</div>
				<div class="group">
					<dl>
						<dt>新闻中心</dt>
						<dd><a href="#">华为新闻</a></dd>
						<dd><a href="#">华为视频</a></dd>
					</dl>
				</div>
				<div class="group">
					<dl>
						<dt>关于我们</dt>
						<dd><a href="#">关于我们</a></dd>
						<dd><a href="#">华为商城</a></dd>
						<dd><a href="#">企业业务</a></dd>
						<dd><a href="#">运营商网络</a></dd>
						<dd><a href="#">华为海洋</a></dd>
						<dd><a href="#">华为集团</a></dd>
						<dd><a href="#">加入华为</a></dd>
					</dl>
				</div>
			</div>
			<div class="footer_b">
				<div class="copy">
					<div class="uk_icon">
						<div class="tags">
							<a href="#">CN</a>
						</div>
						<div class="icons">
							<div class="fang">
								<span>访问花粉俱乐部</span>
								<a href="#"><img src="图片/logo5.png"></a>
							</div>
							<div class="guan">
								<span>关注我们</span>
								<a href="#"><img src="图片/logo6.png" style="width: 30px;" ></a>
								<a href="#"><img src="图片/logo7.png"></a>
							</div>
							<div class="hua">
								<span>关注花粉俱乐部</span>
								<a href="#"><img src="图片/logo6.png" style="width: 30px;"></a>
								<a href="#"><img src="图片/logo7.png"></a>
							</div>
						</div>
					</div>
					<div class="menu_copy">
						<div class="menu">
							<ul class="list-inline">
								<li><a href="#">网站地图</a></li>
								<li><a href="#">使用条款</a></li>
								<li><a href="#">隐私政策</a></li>
								<li><a href="#">关于cookies</a></li>
								<li><a href="#">法律信息</a></li>
							</ul>
						</div>
						<div class="banq">
							版本所有&nbsp;&copy;&nbsp;华为技术有限公司&nbsp;1998-2017。保留一切权利。粤<a>A2-20044005</a>号
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 脚部部分开始 -->
</body>
</html>