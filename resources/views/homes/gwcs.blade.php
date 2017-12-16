@extends('homes.public')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/gwc.css">
<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/fl.js"></script>
	<div class="container">
        <!-- 头部开始 -->
        <div class="header">
        <div class="col-md-12 nav">
            <ul class="nav_ul  list-unstyled">
                <li><a href="#">华为官网</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">荣耀官网</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">花粉俱乐部</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">帮助中心</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">v码(优购码)</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">企业购</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">SelectRegion</a></li>
                <li class="xian"><a href="#"></a></li>
                <li class="xia">
                    <a href="#">更多精彩</a>
                    <div class="xiala">
                        <ul class="list-unstyled">
                            <li><a href="#">EMUI</a></li>
                            <li><a href="#">应用市场</a></li>
                            <li><a href="#">云服务</a></li>
                            <li><a href="#">开发者联盟</a></li>
                        </ul>
                        <img src="./img/img4.png">
                        <h5>扫一扫,下载客户端</h5>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6 nav-right" style=" text-indent: 30px;">
            <ul class="nav_ul list-unstyled">
                <li class="dl"><a href="#">188****3256</a></li>
                <li class="xian"><a href="#"></a></li>
                <li><a href="#">我的订单</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!-- logo开始 -->
        <div class="col-md-2" style="margin-top: 10px;">
            <img src="holder.js/210x60" alt="">
        </div>
        <!-- logo结束 -->
        <div class="col-md-2">
        	<h4>我的购物车</h4>
        </div>
        <div class="col-md-8 pull-right gwc_left">
        	<div class="col-md-4">
        		<img src="holder.js/30x30">
        		<h5>我的购物车</h5>
        	</div>
        	<div class="col-md-4">
        		<img src="holder.js/30x30">
        		<h5>填写核对订单</h5>
        	</div>
        	<div class="col-md-4">
        		<img src="holder.js/30x30">
        		<h5>成功提交订单</h5>
        	</div>
        </div>
    </div>
    <!-- 头部结束 -->
    </div> 
@stop
<!--购物车内容 开始 -->
@section('content')
<div class="center">
	<div class="container">
		<div class="col-md-12 gwc_nav">
			<ul class="gwc_ul list-unstyled list-inline">
				<li><input type="checkbox" name=""></li>
				<li><a href="#">全选</a></li>
				<li class="shangpin"><a href="#">商品</a></li>
				<li><a href="#">单价</a></li>
				<li class="shuliang"><a href="#">数量</a></li>
				<li><a href="#">小计</a></li>
				<li class="caozuo"><a href="#">操作</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="gwc_cen">
			<div class="col-md-12 cen_up">
				<input type="checkbox" name="" class="input">
				<img src="holder.js/79x120?bg=#adf">
				<ul class="list-unstyled list-inline up_bot">
					<li><a href="#" title="华为畅享7 Plus 4GB+64GB 全网通高配版（香槟金）">华为畅享7 Plus 4GB+64GB 全网通高配版（香槟金）</a></li>
					<li class="rmb"><a href="#">&yen;1499.00</a></li>
					<li class="jiajian">
						<input type="text" class="jia_left" value="1">
                        <div class="jia_right">
                            <div id="right_up">+</div>
                            <div id="right_bot">-</div>
                        </div>
					</li>
					<li class="rmb_2"><a href="#">&yen;1499.00</a></li>
					<li class="shanchu"><a href="#">删除</a></li>
				</ul>
			</div>
			<div class="col-md-10 cen_down col-md-offset-1">
				<ul class="list-unstyled list-inline">
					<li class="pei"><a href="#">配</a></li>
					<li><img src="holder.js/40x40"></li>
					<li><a href="#">华为AM116半入耳式耳机(金色) 金色</a></li>
					<li class="shu"><a href="#">x1</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="ljjs">
			<ul class="list-unstyled list-inline">
				<li><input type="checkbox" name=""></li>
				<li><a href="#">全选</a></li>
				<li><a href="#">删除</a></li>
			</ul>
			<button>立即结算</button>
			<div class="zj">
				<p>
					<label>总计：</label>
					<span id="sc-cartInfo-totalOriginalPrice">¥&nbsp;1499.00</span>
				</p>
                <div class="total-choose">已选择<em id="totalNumber">&nbsp;1&nbsp;</em>件商品，优惠：<span id="sc">¥&nbsp;0.00</span></div>
			</div>
		</div>
	</div>
</div>
@stop
<!-- 购物车内容 结束 -->