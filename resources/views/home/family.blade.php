@extends('home.classify')

<link rel="stylesheet" type="text/css" href="/css/family.css">
@section('title')
<title>荣耀家族</title>
@stop

@section('content')
<!-- 轮播图部分开始 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
	</ol>

  	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	    <div class="item active">
		    <img src="holder.js/1349x450?bg=#acd" alt="...">
		    <div class="carousel-caption">
		    </div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	    <div class="item">
		    <img src="holder.js/1349x450?bg=#acd" alt="...">
		    <div class="carousel-caption">
		    </div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	    <div class="item">
	      	<img src="holder.js/1349x450?bg=#acd" alt="...">
	      	<div class="carousel-caption">
	      	</div>
	    </div>
	</div>
  	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div>
<!-- 轮播图部分结束 -->
<!-- 荣耀精品部分开始 -->
<div class="container">
	<div class="ryao">
		<div class="ry">
			<div class="ry_t">
				<span></span>
				<h2>荣耀精品</h2>
			</div>
			<div class="ry_b">
				<div class="ry_b_t">
					<div class="col-md-3" style="padding: 0px;">
						<div class="one">
							<img src="holder.js/200x200?bg=#fed" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">荣耀9</div>
							<div class="des">最高优惠500元</div>
							<div class="price">&yen;2299</div>
						</div>
					</div>
					<div class="col-md-3" style="padding: 0px; border-left: 1px solid #ddd;">
						<div class="one">
							<img src="holder.js/200x200?bg=#fed" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">荣耀9</div>
							<div class="des">最高优惠500元</div>
							<div class="price">&yen;2299</div>
						</div>
					</div>
					<div class="col-md-3" style="padding: 0px; border-left: 1px solid #ddd;">
						<div class="one">
							<img src="holder.js/200x200?bg=#fed" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">荣耀9</div>
							<div class="des">最高优惠500元</div>
							<div class="price">&yen;2299</div>
						</div>
					</div>
					<div class="col-md-3" style="padding: 0px; border-left: 1px solid #ddd;">
						<div class="one">
							<img src="holder.js/200x200?bg=#fed" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">荣耀9</div>
							<div class="des">最高优惠500元</div>
							<div class="price">&yen;2299</div>
						</div>
					</div>
				</div>
				<div class="ry_b_b">
					<div class="col-md-4" style="padding: 0px;">
						<img src="holder.js/386x198?bg=#fed">
					</div>
					<div class="col-md-4" style="padding: 0px; border-left: 1px solid #ddd;">
						<img src="holder.js/386x198?bg=#fed">
					</div>
					<div class="col-md-4" style="padding: 0px; border-left: 1px solid #ddd;">
						<img src="holder.js/386x198?bg=#fed">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 荣耀精品部分结束 -->
<!-- 手机部分开始 -->
<div class="container">
	<div class="iph">
		<div class="iph_nr">
			<div class="iph_t">
				<span></span>
				<ul>
					<li class="shji"><a href="#">手机</a></li>
					<li><a href="#">荣耀系列</a></li>
					<li><a href="#">畅玩系列</a></li>
					<li><a href="#">合约机</a></li>
					<li class="duo"><a href="#">更多&nbsp;&nbsp;></a></li>
				</ul>
			</div>
			<div class="iph_b">
				<div class="col-md-4 b_dy" style="padding: 0px;">
					<img src="holder.js/370x490?bg=#fed">
				</div>
				<div class="col-md-4 b_de" style="padding: 0px;margin-left: 22px;">
					<div class="de_y">
						<img src="holder.js/150x150?bg=#fed" style="margin-left: 20px;margin-top: 43px;">
						<div class="zi">
							<h3>荣耀V8</h3>
							<p class="xs">限时最高省600</p>
							<p>&yen;1699</p>
						</div>
					</div>			
				</div>
				<div class="col-md-4 b_de" style="padding: 0px;margin-left: 22px;"></div>
			</div>
		</div>
	</div>
</div>
<!-- 手机部分结束 -->
@stop