@extends('homes.public')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/ddym.css">
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
<div class="qrdd">
	<div class="container">
		<div class="col-md-12 qrdd_up">
			<p>收货地址</p>
			<div class="dizhi">
				<h5>+新增收货地址</h5>
			</div>
		</div>
		<div class="col-md-12 qrdd_cen">
			<div class="cen_left">
               <div class="left_top">
                   <p>发票信息 &nbsp;<span>注：如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</span>
                   </p>
                   <ul class="list-unstyled list-inline">
                       <li><a href="#">电子普通发票</a></li>
                       <li><a href="#">个人</a></li>
                       <li class="xiugai"><a href="#"> 修改</a></li>
                   </ul>
               </div>       
               <div class="left_cen">
                   <img src="holder.js/80x100">
                   <ul class="list-unstyled list-inline">
                       <li><a href="#">荣耀V9 play 全网通标配版（极光蓝）</a></li>
                       <li class="shu"><a href="#">x1</a></li>
                       <li class="jinqian"><a href="#">&yen;1499.00</a></li>
                   </ul>
               </div>       
               <div class="left_bot">
                   <div class="col-md-2">
                       <p>配</p>
                   </div>
                   <div class="col-md-10 bot">
                       <img src="holder.js/50x77">
                       <ul class="list-unstyled list-inline">
                           <li><a href="#">荣耀V9 play 半入耳式耳机(金色)</a></li>
                           <li class="shujia"><a href="#">x1</a></li>
                       </ul>
                   </div>
               </div>       
            </div>
			<div class="cen_right col-md-4">
                <div class="right_top">
                    <p>商品由<span>&nbsp;华为商城&nbsp;</span>选择合作快递</p>
                </div>         
                <div class="right_bot">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">商品总金额：<span>¥999.00</span></a></li>
                        <li class="yunfei"><a href="#">运费：<span>¥0.00</span></a></li>
                        <li class="youhui"><a href="#">优惠：<span>-¥100.00</span></a></li>
                        <li class="jiesuan"><a href="#">结算金额：<span>¥899.00</span></a></li>
                    </ul>
                </div>         
            </div>
		</div>
        <div class="col-md-12 qrdd_bot">
            <div class="col-md-4 bot_left">
                <p>优惠与抵用<span>&nbsp;&nbsp;仅适用于自营实物商品</span></p>
                <div class="yhq">
                    <img src="holder.js/30x20">
                    <h5>使用优惠券</h5>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled list-inline ">
                    <input type="checkbox" name="">
                    <li><a href="#">积分余额 5，不足100不可使用</a></li>
                    <li class="guize"><a href="#">积分使用规则</a></li>
                </ul>
                <ul class="list-unstyled list-inline ">
                    <input type="checkbox" name="">
                    <li><a href="#">积分余额 5，不足100不可使用</a></li>
                    <li class="guize"><a href="#">积分使用规则</a></li>
                </ul>
            </div>
            <div class="col-md-3 bot_right pull-right">
                <p>应付总额：<span>¥899.00</span></p>
                <input type="text" name="" value="无收货地址不可下单,点击填充">
                <button>提交订单</button>
            </div>
        </div>
	</div>
</div>
@stop
<!-- 确认订单 结束 -->
