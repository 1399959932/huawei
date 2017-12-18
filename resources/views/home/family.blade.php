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
		    <img src="" alt="...">
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
					@foreach($shouye as $k=>$v)
					@if($k > 123 && $k < 127)
					<div class="col-md-3" style="padding: 0px;">
						<div class="one">
							<img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">{{$v->title}}</div>
							<div class="des">{{$v->youhui}}</div>
							<div class="price">&yen;{{$v->price}}</div>
						</div>
					</div>
					@elseif($k == 127)
					<div class="col-md-3" style="padding: 0px;">
						<div class="one">
							<img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 40px;">
							<div class="tit">{{$v->title}}</div>
							<div class="des">{{$v->youhui}}</div>
							<div class="price">&yen;{{$v->price}}</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				<div class="ry_b_b">
					@foreach($shouye as $k=>$v)
					@if($k > 127 && $k < 130)
					<div class="col-md-4" style="padding: 0px;">
						<img src="{{$v->pic}}">
					</div>
					@elseif($k == 130)
					<div class="col-md-4" style="padding: 0px;">
						<img src="{{$v->pic}}">
					</div>
					@endif
					@endforeach
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
				@foreach($shouye as $k=>$v)
				@if($k == 131)
				<div class="col-md-4 b_dy" style="padding: 0px;">
					<img src="{{$v->pic}}" style="border-radius: 5px;">
				</div>
				@endif
				@endforeach
				<div class="col-md-4 b_de" style="padding: 0px;margin-left: 22px;">
					@foreach($shouye as $k=>$v)
					@if($k > 131 && $k < 133)
					<div class="de_y">
						<img src="{{$v->pic}}" style="margin-left: 20px;margin-top: 43px;width: 150px;height: 150px;">
						<div class="zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 133)
					<div class="de_y" style="margin-top: 24px;">
						<img src="{{$v->pic}}" style="margin-left: 20px;margin-top: 43px;width: 150px;height: 150px;">
						<div class="zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
				<div class="col-md-4 b_de" style="padding: 0px;margin-left: 22px;">
					@foreach($shouye as $k=>$v)
					@if($k > 133 && $k < 135)
					<div class="de_y">
						<img src="{{$v->pic}}" style="margin-left: 20px;margin-top: 43px;width: 150px;height: 150px;">
						<div class="zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 135)
					<div class="de_y" style="margin-top: 24px;">
						<img src="{{$v->pic}}" style="margin-left: 20px;margin-top: 43px;width: 150px;height: 150px;">
						<div class="zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 手机部分结束 -->
<!-- 精品平板部分开始 -->
<div class="container">
	<div class="jppb">
		<div class="pb_nr">
			<div class="pb_nr_t">
				<span></span>
				<ul>
					<li class="shji"><a href="#">精品平板</a></li>
					<li><a href="#">平板电脑</a></li>
					<li class="duo"><a href="#">更多&nbsp;&nbsp;></a></li>
				</ul>
			</div>
			<div class="pb_nr_b">
				@foreach($shouye as $k=>$v)
				@if($k == 136)
				<div class="col-md-4 b_yi" style="padding: 0px;">
					<img src="{{$v->pic}}" style="border-radius: 5px;">
				</div>
				@endif
				@endforeach
				<div class="b_er">
					@foreach($shouye as $k=>$v)
					@if($k > 136 && $k < 138)
					<div class="rypb" style="padding: 0px;">
						<img src="{{$v->pic}}">
						<div class="er_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 138)
					<div class="rypb" style="padding: 0px; float: right;">
						<img src="{{$v->pic}}">
						<div class="er_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				@foreach($shouye as $k=>$v)
				@if($k == 139)
				<div class="col-md-8 san_zi">
					<img src="{{$v->pic}}">
						<div class="sa_zi">
							<h3>{{$v->title}}</h3>
							<p class="zj">{{$v->youhui}}</p>
							<p class="qi">&yen;{{$v->price}}</p>
						</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- 精品平板部分结束 -->
<!-- 智能穿戴部分开始 -->
<div class="container">
	<div class="jppb">
		<div class="pb_nr">
			<div class="pb_nr_t">
				<span></span>
				<ul>
					<li class="shji"><a href="#">智能穿戴</a></li>
					<li><a href="#">手环/手表</a></li>
					<li class="duo"><a href="#">更多&nbsp;&nbsp;></a></li>
				</ul>
			</div>
			<div class="pb_nr_b">
				@foreach($shouye as $k=>$v)
				@if($k == 140)
				<div class="col-md-4 b_yi" style="padding: 0px;">
					<img src="{{$v->pic}}" style="border-radius: 5px;">
				</div>
				@endif
				@endforeach
				<div class="b_er">
					@foreach($shouye as $k=>$v)
					@if($k > 140 && $k < 142)
					<div class="rypb" style="padding: 0px;">
						<img src="{{$v->pic}}">
						<div class="er_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 142)
					<div class="rypb" style="padding: 0px; float: right;">
						<img src="{{$v->pic}}">
						<div class="er_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">{{$v->youhui}}</p>
							<p class="mou">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				@foreach($shouye as $k=>$v)
				@if($k == 143)
				<div class="col-md-8 san_zi">
					<img src="{{$v->pic}}">
						<div class="sa_zi">
							<h3>{{$v->title}}</h3>
							<p class="zj">{{$v->youhui}}</p>
							<p class="qi">&yen;{{$v->price}}</p>
						</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- 智能穿戴部分结束 -->
<!-- 智能家居部分开始 -->
<div class="container">
	<div class="jiju">
		<div class="jia_nr">
			<div class="jia_nr_t">
				<span></span>
				<ul>
					<li class="shji"><a href="#">智能家居</a></li>
					<li><a href="#">路由器</a></li>
					<li><a href="#">电视盒子</a></li>
					<li><a href="#">电力猫</a></li>
					<li class="duo"><a href="#">更多&nbsp;&nbsp;></a></li>
				</ul>
			</div>
			<div class="jia_nr_b">
				@foreach($shouye as $k=>$v)
				@if($k == 144)
				<div class="col-md-3" style="padding: 0px;">
					<img src="{{$v->pic}}" style="border-radius: 5px;">
				</div>
				@endif
				@endforeach
				<div class="ju">
					@foreach($shouye as $k=>$v)
					@if($k > 144 && $k < 146)
					<div class="aju" style="padding: 0px;float: left;">
						<img src="{{$v->pic}}" style="border-radius: 5px;">
						<div class="ju_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 146)
					<div class="aju" style="padding: 0px;float: right;">
						<img src="{{$v->pic}}" style="border-radius: 5px;">
						<div class="ju_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				<div class="col-md-12 jia_nr_bo" style="padding: 0px;">
					@foreach($shouye as $k=>$v)
					@if($k > 146 && $k < 149)
					<div class="col-md-3 bo_1" style="margin-left: 0px; margin-right: 22px;">
						<img src="{{$v->pic}}" style="margin-top: 20px;margin-left: 40px;">
						<div class="bo_zi">
							<h3>{{$v->title}}</h3>
							<p class="zhj">{{$v->youhui}}</p>
							<p class="jige">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 149)
					<div class="col-md-3 bo_1" style="margin-left: 4px;">
						<img src="{{$v->pic}}" style="margin-top: 20px;margin-left: 40px;">
						<div class="bo_zi">
							<h3>{{$v->title}}</h3>
							<p class="zhj">{{$v->youhui}}</p>
							<p class="jige">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 智能家居部分结束 -->
<!-- 热销配件部分开始 -->
<div class="container">
	<div class="jiju">
		<div class="jia_nr">
			<div class="jia_nr_t">
				<span></span>
				<ul>
					<li class="shji"><a href="#">热销配件</a></li>
					<li><a href="#">贴膜</a></li>
					<li><a href="#">保护壳</a></li>
					<li><a href="#">保护套</a></li>
					<li><a href="#">盒子专属配件</a></li>
					<li><a href="#">表带</a></li>
					<li><a href="#">耳机</a></li>
					<li><a href="#">音响</a></li>
					<li><a href="#">电源/充电器/线材</a></li>
					<li><a href="#">自拍杆/支架</a></li>
					<li><a href="#">智能硬件</a></li>
					<li class="duo"><a href="#">更多&nbsp;&nbsp;></a></li>
				</ul>
			</div>
			<div class="jia_nr_b">
				@foreach($shouye as $k=>$v)
				@if($k == 150)
				<div class="col-md-3" style="padding: 0px;">
					<img src="{{$v->pic}}" style="border-radius: 5px;">
				</div>
				@endif
				@endforeach
				<div class="ju">
					@foreach($shouye as $k=>$v)
					@if($k > 150 && $k < 152)
					<div class="aju" style="padding: 0px;float: left;">
						<img src="{{$v->pic}}" style="border-radius: 5px;">
						<div class="ju_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 152)
					<div class="aju" style="padding: 0px;float: right;">
						<img src="{{$v->pic}}" style="border-radius: 5px;">
						<div class="ju_zi">
							<h3>{{$v->title}}</h3>
							<p class="xs">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
				<div class="col-md-12 jia_nr_bo" style="padding: 0px;">
					@foreach($shouye as $k=>$v)
					@if($k > 152 && $k < 155)
					<div class="col-md-3 bo_1" style="margin-left: 0px; margin-right: 22px;">
						<img src="{{$v->pic}}" style="margin-top: 20px;margin-left: 40px;">
						<div class="bo_zi">
							<h3>{{$v->title}}</h3>
							<p class="zhj">{{$v->youhui}}</p>
							<p class="jige">&yen;{{$v->price}}</p>
						</div>
					</div>
					@elseif($k == 155)
					<div class="col-md-3 bo_1" style="margin-left: 4px;">
						<img src="{{$v->pic}}" style="margin-top: 20px;margin-left: 40px;">
						<div class="bo_zi">
							<h3>{{$v->title}}</h3>
							<p class="zhj">{{$v->youhui}}</p>
							<p class="jige">&yen;{{$v->price}}</p>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 热销配件部分结束 -->
@stop