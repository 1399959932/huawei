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
                    <div class="jie shao">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p class="lc"><a href="#">EMUI5.1流畅体验</a></p>
                        <p class="jia">
                            <span></span>
                            <a href="#">&yen;1749</a>
                        </p>
                    </div>
				</div>
				<div class="col-md-4" style="margin-left: -10px;">
					<img src="holder.js/386x190?bg=#aef">
                    <div class="jie">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p class="lc"><a href="#">EMUI5.1流畅体验</a></p>
                        <p class="jia">
                            <span></span>
                            <a href="#">&yen;1749</a>
                        </p>
                    </div>
				</div>
				<div class="col-md-4" style="margin-left: 9px;">
					<img src="holder.js/386x190?bg=#aef">
                    <div class="jie">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p class="lc"><a href="#">EMUI5.1流畅体验</a></p>
                        <p class="jia">
                            <span></span>
                            <a href="#">&yen;1749</a>
                        </p>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 华为精品部分结束 -->
<!-- 手机部分开始 -->
<div class="container">
    <div class="cell">
        <div class="cell_t">
            <span></span>
            <h2><a href="#">手机</a></h2>
        </div>
        <div class="cell_c">
            <ul>
                <li class="mate"><a href="#">HUAWEI&nbsp;Mate系列</a></li>
                <li><a href="#">HUAWEI&nbsp;P系列</a></li>
                <li><a href="#">HUAWEI&nbsp;nova系列</a></li>
                <li><a href="#">HUAWEI&nbsp;麦芒系列</a></li>
                <li><a href="#">华为畅享系列</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="cell_b">
            <div class="col-md-3" style="padding: 0px;">
                <img src="holder.js/291x592?bg=#afe">
            </div>
            <div class="col-md-6" style="padding: 0px;">
                <div class="pp">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>               
                <img src="holder.js/594x290?bg=#bef">
                <div class="pin">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                <img src="holder.js/291x290?bg=#bef" style="margin-top: 12px;">
                <div class="pai">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                <img src="holder.js/291x290?bg=#bef" style="margin-top: 12px; margin-left: 9px;">
            </div>
            <div class="col-md-3" style="padding: 9px;margin-top: -9px;">
                <div class="ppm">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                <img src="holder.js/291x290?bg=#afe">
                <div class="ming">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                <img src="holder.js/291x290?bg=#afe" style="margin-top: 12px;">
            </div>
        </div>
    </div>
</div>
<!-- 手机部分结束 -->
<!-- 笔记本电脑部分开始 -->
<div class="container">
    <div class="note">
        <div class="note_t">
            <span></span>
            <h2><a href="#">笔记本电脑</a></h2>
        </div>
        <div class="note_c">
            <ul>
                <li class="com"><a href="#">笔记本电脑</a></li>
                <li><a href="#">笔记本配件</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="note_b">
            <div class="col-md-4" style="padding: 0px;">
                <img src="holder.js/400x746?bg=#afe">
            </div>
            <div class="col-md-4 grid" style="padding: 0px;">
                <img src="holder.js/400x374?bg=#abc" style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
                <div class="info"></div>
            </div>
            <div class="col-md-4" style="padding: 0px;">
                <img src="holder.js/400x374?bg=#abc" style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
            </div>
            <div class="col-md-8" style="padding: 0px;">
                <img src="holder.js/800x372?bg=#abc" style="border-bottom: 1px solid #eaeaea; border-top: 1px solid #eaeaea;">
            </div>
        </div>
    </div>
</div>
<!-- 笔记本电脑部分结束 -->
@stop