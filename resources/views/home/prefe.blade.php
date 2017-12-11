@extends('home.classify')

@section('title')
<title>华为专区</title>
@stop

<link rel="stylesheet" type="text/css" href="./css/prefe.css">

@section('content')
<!-- 轮播图部分结束 -->
<div class="slide">
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
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="holder.js/100px450?bg=#dac" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#def" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#abf" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#eda" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#cbe" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#dac" alt="...">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="holder.js/100px450?bg=#def" alt="...">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- 轮播图部分结束 -->
<!-- 华为精品部分开始 -->
<div class="container">
	<div class="hwjp">
		<div class="jp_t">
			<span></span>
			<h2>华为精品</h2>
		</div>
		<div class="jp_b">
			<div class="b_t">
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea;">
					<img src="holder.js/298x278?bg=#aef">
				</div>
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea; border-left: none;">
					<img src="holder.js/299x278?bg=#aef">
				</div>
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea; border-left: none;">
					<img src="holder.js/299x278?bg=#aef">
				</div>
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea; border-left: none;">
					<img src="holder.js/299x278?bg=#aef">
				</div>
			</div>
			<div class="b_b">
				<div class="col-md-4" style="padding: 0px;">
					<img src="holder.js/386x190?bg=#aef">
                    <div class="jie">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p><a href="#">EMUI5.1流畅体验</a></p>
                        <p><a href="#">&yen;1749</a></p>
                    </div>
				</div>
				<div class="col-md-4" style="margin-left: -10px;">
					<img src="holder.js/386x190?bg=#aef">
				</div>
				<div class="col-md-4" style="margin-left: 5px;">
					<img src="holder.js/386x190?bg=#aef">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 华为精品部分结束 -->
@stop