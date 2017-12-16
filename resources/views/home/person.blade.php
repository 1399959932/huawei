@extends('home.classify')

@section('title')
<title>个人中心</title>
@stop

<link rel="stylesheet" type="text/css" href="/css/person.css">
@section('gr')
<li><a href="#">{{session('tel')}}</a></li>
@stop

@section('content')
<div class="sns">
	<div class="container">
		<div class="sns_t">
			<p><a href="#">首页</a></p>
			<p class="yjt">></p>
			<p class="shc"><a href="#">我的商城</a></p>
			<p class="yjt">></p>
			<p class="shc">我的订单</p>
		</div>
		<div class="sns_b">
			<div class="s_b_l">
				<ul>
					<li class="wdsc"><a href="#">我的商城</a></li>
					<li class="znx"><a href="#">站内信</a></li>
					<li class="znx"><a href="#">帮助中心</a></li>
					<li class="znx1">订单中心
						<div class="ddzx">
							<p class="dd"><a href="#">我的订单</a></p>
							<p><a href="#">我的退换货</a></p>
							<p><a href="#">我的回收单</a></p>
							<p><a href="#">商品评价</a></p>
						</div>
					</li>
					<li class="znx1">我的资产
						<div class="ddzx wdzc">
							<p class="zc"><a href="#">我的积分</a></p>
							<p><a href="#">我的优惠券</a></p>
							<p><a href="#">我的代金券</a></p>
							<p><a href="#">我的花瓣</a></p>
							<p><a href="#">等级与特权</a></p>
						</div>
					</li>
					<li class="znx1">购买支持
						<div class="ddzx gmzc">
							<p class="zc"><a href="#">收货地址管理</a></p>
							<p><a href="#">实名认证</a></p>
							<p><a href="#">我的预约</a></p>
							<p><a href="#">到货通知</a></p>
						</div>
					</li>
				</ul>
			</div>

			<div class="s_b_r">
				<div class="b_r_t">
					<div class="t_l">
						<p>我的订单</p>
					</div>
					<div class="t_r">
						<ul>
							<li class="zj"><a href="#">最近六月内订单</a></li>
							<li class="yq"><a href="#">六个月前订单</a></li>
						</ul>
					</div>
				</div>
				<div class="b_r_b">
					<div class="b_nr">
						<div class="b_nr_t">
							<ul>
								<li class="yx"><a href="#">全部有效订单</a></li>
								<li><a href="#">待支付</a></li>
								<li><a href="#">待评价</a></li>
								<li><a href="#">待收货</a></li>
								<li><a href="#">已完成</a></li>
								<li><a href="#">已取消</a></li>
							</ul>
						</div>
						<div class="b_nr_b">
							<div class="b_tm">
								<ul>
									<li class="shop">商品</li>
									<li class="sg"></li>
									<li class="dj">单价/元</li>
									<li class="sg"></li>
									<li class="sl">数量</li>
									<li class="sg"></li>
									<li class="dj">实付款/元</li>
									<li class="sg"></li>
									<li class="zt">订单状态及操作</li>
								</ul>
							</div>
							<div class="b_jl">
								<div class="b_jl_t">
									<div class="t_l">
										<input type="checkbox" name="" class="xz">
										<ul>
											<li class="time">2017-12-10&nbsp;19:47</li>
											<li class="ddh">订单号：</li>
											<li><a href="#">11173074233</a></li>
										</ul>
									</div>
									<div class="t_r">
										<ul>
											<li>待处理</li>
											<li>|</li>
											<li>待支付</li>
										</ul>
									</div>
								</div>
								<div class="b_jl_b">
									<ul>
										<li>
											<img src="holder.js/120x135?bg=#acf" style="float: left;">
											<p><a href="#">荣耀V9&nbsp;play&nbsp;全网通标配版（极光蓝）</a></p>
										</li>
										<li class="jg">&yen;&nbsp;899.00</li>
										<li class="shu">1</li>
										<li class="jg">&yen;&nbsp;0.00</li>
										<li class="tai">
											<span class="ljzf"><a href="#">立即支付</a></span>
											<span class="xqd"><a href="#">修改订单</a></span>
											<span class="xqd"><a href="#">取消订单</a></span>
											<span class="xqd"><a href="#">订单详情</a></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- title商行结束 -->
		</div>
	</div>
</div>
@stop