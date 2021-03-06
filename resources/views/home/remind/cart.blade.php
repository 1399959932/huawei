@extends('homes.public')
@section('title')
<title>加入购物车</title>
@section('header')
<link rel="stylesheet" type="text/css" href="/css/ddym.css">
<link rel="stylesheet" type="text/css" href="/css/gwc.css">
<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/fl.js"></script>
<style>.top10{height:10px;}</style>
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
                <select>
                    <option>更多精彩</option>
                </select>
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
        	<h4>确认订单</h4>
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

<!-- 确认订单 开始 -->
@section('content')

<div class="qrdd" style="height: auto;">
	<div class="container">
		<!-- <div class="col-md-12 qrdd_up">

			<p>收货地址</p>
			<div class="dizhi">
				<h5>+新增收货地址</h5>
			</div>
		</div> -->
		
		<div class="clearfix"></div>
    <div class="top10"></div>
    <div class="clearfix"></div>
    <div class="top10"></div>


		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <a href="#" class="alert-link">加入购物车成功</a>
      <di class="col-md-12" style="height: 300px;">
          <a href="/cart" style="line-height: 300px; font-size: 16px; margin-left: 450px;" class="center-block">去查看购物车GO!!></a>
      </div>
		</div>
		
    <div class="clearfix"></div>
	 
</div>
@stop
<!-- 确认订单 结束 -->
