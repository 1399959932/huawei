@extends('home.index')
<!DOCTYPE html>
<html>
<head>
    @section('title')
	<title>智能家居</title>
    @show
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/holder.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/classify.css">
    <script type="text/javascript">
    	$(function(){
			$(".nav_title > .nav_cen > .active").hover(function(){
				$(this).find(".center").stop().slideDown();
			},function(){
				$(".nav_title > .nav_cen > .active").find(".center").stop().slideUp();
			})
})
    </script>
</head>
<body>
<!-- 导航条部分开始 -->
    @section('header')
    <!-- 导航分类开始 -->
    <div class="col-md-9 nav_title">
        <ul class="nav_cen  list-unstyled">
            <li class="active">
                <a href="#">手机</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#">笔记本&平板</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#">穿戴</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div><div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>

                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#">智能家居</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div><div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>

                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#">通用配件</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div><div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>

                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#">专属配件</a>
                <div class="center">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline">
                            <li>全部手机 ></li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li> 
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                            <li>荣耀畅玩系列</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div><div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>
                        <div class="col-md-1 lefts">
                            <img src="holder.js/100x100?bg=#abd">
                            <h5>荣耀V9</h5>
                            <h6>&yen;2599.00</h6>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- 导航分类结束 -->
    @endsection
<!-- 导航条部分结束 -->
<!-- 内容部分开始 -->
@section('content')
<div class="details">
	<div class="container">
		<div class="det_t">
			<ul>
				<li class="sy"><a href="#">首页</a></li>
				<li class="yjt">></li>
				<li class="col-md-1">智能家居</li>
			</ul>
		</div>
		<div class="det_b">
			<div class="d_b_t col-md-12">
				<ul class="list-inline">
					<li class="fl">分类：</li>
					<li class="qb"><a href="#">全部</a></li>
					<li><a href="#">子母路由</a></li>
					<li><a href="#">电视盒子</a></li>
					<li><a href="#">路由器</a></li>
					<li><a href="#">电力猫</a></li>
					<li><a href="#">随身wifi</a></li>
					<li><a href="#">HUAWEI&nbsp;HiLink生态产品</a></li>
				</ul>
			</div>
			<div class="d_b_b col-md-12">
				<ul class="list-inline">
					<li class="px">排序：</li>
					<li class="mr"><a href="#">默认</a></li>
					<li><a href="#">价格</a></li>
					<li><a href="#">评价数</a></li>
					<li><a href="#">上架时间</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 内容部分结束 -->
<!-- 内容图片部分开始 -->
@section('body')
<div class="theme">
	<div class="container">
        @foreach($goods as $k=>$v)
		<div class="col-md-2 theme_1" style="padding: 0px; margin-right: 15px;">
            <a href="/goods/{{$v->id}}">
			<img src="{{$v->pic}}" style="width: 180px;height: 180px;margin-left: 21px;margin-top: 38px;"></a>
			<h5><a href="#">{{$v->title}}</a></h5>
			<h3>&yen;{{$v->price}}</h3>
			<div class="dib">
				<button class="xg">选购</button>
				<ul>
					<li class="pj">6人评价</li>
				</ul>
			</div>
		</div>
        @endforeach
		<nav class="pull-right" style="margin-top: 20px;">
		  	<ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
		  	</ul>
		</nav>
	</div>
</div>
@show
@stop
<!-- 内容图片部分结束 -->
<!-- 脚部部分开始 -->
@section('footer')
<div class="footer">
    <div class="container">
        <div class="foot_t">
            <ul style="margin: 0px;">
                <li class="col-md-3" style="padding: 0px;">
                    <div class="col-md-2" style="padding: 0px;">
                        <img src="holder.js/50x50:bg=#fef">
                    </div>
                    <div class="col-md-10 foot_t_1">
                        <span><a href="#">百强企业&nbsp;品质保证</a></span>
                    </div>
                </li>
                <li class="col-md-3" style="padding: 0px;">
                    <div class="col-md-2" style="padding: 0px;">
                        <img src="holder.js/50x50:bg=#fef">
                    </div>
                    <div class="col-md-10 foot_t_1">
                        <span><a href="#">7天退货&nbsp;15天换货</a></span>
                    </div>
                </li>
                <li class="col-md-3" style="padding: 0px;">
                    <div class="col-md-2" style="padding: 0px;">
                        <img src="holder.js/50x50:bg=#fef">
                    </div>
                    <div class="col-md-10 foot_t_1">
                        <span><a href="#">48元起免运费</a></span>
                    </div>
                </li>
                <li class="col-md-3" style="padding: 0px;">
                    <div class="col-md-2" style="padding: 0px;">
                        <img src="holder.js/50x50:bg=#fef">
                    </div>
                    <div class="col-md-10 foot_t_1">
                        <span><a href="#">448家维修网点&nbsp;全国联保</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot_c">
            <dl class="s1">
                <dt>
                    <p class="line"></p>
                    <p class="title">购物相关</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s1 col-md-offset-1">
                <dt>
                    <p class="line"></p>
                    <p class="title">保修与退换货</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s1 col-md-offset-1">
                <dt>
                    <p class="line"></p>
                    <p class="title">维修与技术支持</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s1 col-md-offset-1">
                <dt>
                    <p class="line"></p>
                    <p class="title">关于我们</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s1 col-md-offset-1">
                <dt>
                    <p class="line"></p>
                    <p class="title">关注我们</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s1 col-md-offset-1">
                <dt>
                    <p class="line"></p>
                    <p class="title">友情链接</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">购物指南</a></li>
                        <li><a href="#">配送方式</a></li>
                        <li><a href="#">支付方式</a></li>
                        <li><a href="#">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <div class="xian"></div>
            <dl class="s1 pull-right">
                <dt>
                    <p class="line"></p>
                    <p class="tit">400-088-6888</p>
                </dt>
                <dd>
                    <ol>
                        <li><a href="#">24小时客服热线（仅收市话费）</a></li>
                        <li><a href="#">在线客服</a></li>
                        <li><a href="#">不良信息举报</a></li>
                    </ol>
                </dd>
            </dl>
        </div>
    </div>
    <div class="foot_b">
        <div class="container">
            @foreach($shouye as $k=>$v)
            @if($k == 118)
            <div class="col-md-1" style="padding:0px;margin-top: 47px;">
                <img src="{{$v->pic}}">
            </div>
            @endif
            @endforeach
            <div class="col-md-6" style="margin-top: 25px;">
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
            </div>
            <div class="pull-right" style="margin-top: 47px;">
                @foreach($shouye as $k=>$v)
                @if($k > 118 && $k < 123)
                <img src="{{$v->pic}}" style="width: 70px;height: 24px;">
                @elseif($k == 120)
                <img src="{{$v->pic}}" style="width: 70px;height: 24px;">
                @elseif($k == 121)
                <img src="{{$v->pic}}" style="width: 70px;height: 24px;">
                @elseif($k == 122)
                <img src="{{$v->pic}}" style="width: 70px;height: 24px;">
                @elseif($k == 123)
                <img src="{{$v->pic}}" style="width: 70px;height: 24px;">
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
<!-- 脚部部分结束 -->
</body>
</html>