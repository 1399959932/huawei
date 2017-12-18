<title>支付</title>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
<script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/holder.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/zfym.css">
<style>
	.height{height: auto;} .top10{height: 10px;}
	.goods-item{
		border:solid 1px #ddd;
	}
	.active{
		border:solid 1px yellow;
	}
	.cur{
		border:solid 1px red;
	}
</style>
<!-- 支付页面 开始 -->
	<div class="container height">
		<div class="zhifu height">
			<div class="zhifu_top">
			    <img src="holder.js/208x32">
			    <div class="xian"></div>
			    <h5>收银台</h5>
			</div>
			<div class="zhifu_cen col-md-12">
				<img src="holder.js/65x65">
				<div class="cen_middler col-md-5">
					<p>订单成功只差付款了</p>
					<p>请您在23小时59分50秒 内完成支付，否则订单将自动取消。</p>
				</div>
				<div class="zhifu_right col-md-2 pull-right">
					<p>订单金额：<span>¥899.00</span></p>
					<select>
						<option>订单详情</option>
					</select>
				</div>
			</div>

			<div class="claerfix"></div>
			<div class="top10"></div>
			<div class="top10"></div>
			<div class="top10"></div>
			<div class="top10"></div>

			<div class="col-md-12 height" >
			  <form action="/dingdan" method="post">
				<h3 class=""><b>收货地址选择</b></h3><hr>
				@foreach($dizhi as $k=>$v)
	            <div class="col-md-3 height" style="border: 1px solid #ccc;box-sizing: border-right: ;r-box; margin-bottom: 10px; height: 162px; ">
	                

	                <address>
	                    

	                   <div class="goods-item" aid="{{$v->id}}" style="height: 132px;">
		                  <strong>{{$v->name}}</strong><br>
		                  <div class="top10"></div>
		                  {{$v->tel}}<br>
		                  <div class="top10"></div>

		                  {{$v->pname}}{{$v->cname}}{{$v->xname}}{{$v->detail}}<br>
		                  <abbr title="Phone">邮编:</abbr> {{$v->province}}
	              		</div>
	                </address>

	            </div>

	            @endforeach
				<input type="hidden" name="address_id">

			</div>

			<div class="clearfix"></div>
			<div class="top10"></div>
			<div class="top10"></div>



			<div class="col-md-12 height" >
				<h3 class=""><b>商品信息</b></h3><hr>
				<div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <table class="table cart mb48">
                        <thead>
                            <tr>
                                <th>图片</th>
                                <th>标题</th>
                                <th>数量</th>
                                <th>单价</th>
                                <!-- <th>小结</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($goodsDate as $k=>$v)
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="{{$v->pic}}" class="product-thumb"  width="200" height="80">
                                    </a>
                                </td>
                                <td>
                                    <span>{{$v->title}}</span>
                                </td>
                                <td>
                                <input type="hidden" name="data[{{$v->id}}][id]" value='{{$v->id}}'>
                                <input type="text" style="width:20%"  name="data[{{$v->id}}][num]" value="{{$v->num}}" >
                                </td>
                                <td>
                                    <span>¥:{{$v->price}}</span>
                                </td>
                                <!-- <td>
                                    <span>¥:{{$xiaojie}}</span>
                                </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
			</div>
			
			<div class="claerfix"></div>
			
			<div class="zhifu_bot col-md-12">
				<ul class="list-unstyled">
					<li class="active"><a href="#">常用</a></li>
					<li><a href="#">平台支付</a></li>
					<li><a href="#">分期支付</a></li>
					<li><a href="#">网银支付</a></li>
				</ul>
				<div class="col-md-12 bot_cen">
					<div class="col-md-2">
						<button>支付宝</button>
					</div>
					<div class="col-md-2 pull-right"  style="margin-top: 120px; font-size: 24px;">
						总价:<span style="color: red"> ¥{{$zongjia}}</span>
                    	{{csrf_field()}}
					</div>
				</div>
			</div>
			<button class="pull-right" type="submit" ><a href="/zhifubao">确认支付</a></button>
	</div>
	<!-- 尾部 开始 -->
		<div class="footer">
			<div class="container">	
		      <div class="col-md-1 footer_top">
		      	<img src="holder.js/80x24?bg=#afd">
		      </div>
		      <div class="col-md-6 footer_cen">
		      	<p>隐私政策 服务协议 Copyright @ 2012-2017 华为软件技术有限公司 版权所有 保留一切权利</p>
		      	<p>隐私政策 服务协议 Copyright @ 2012-2017 华为软件技术有限公司 版权所有 保留一切权利</p>
		      	<p>隐私政策 服务协议 Copyright @ 2012-2017 华为软件技术有限公司 版权所有 保留一切权利</p>
		      </div>
		      <div class="col-md-5 footer_bot">
		      	<img src="holder.js/85x30?bg=#afd">
		      	<img src="holder.js/85x30?bg=#afd">
		      	<img src="holder.js/85x30?bg=#afd">
		      	<img src="holder.js/85x30?bg=#afd">
		      </div>
			</div>
		  </form>
		</div>
	<!-- 尾部 结束 -->
<!-- 支付页面 结束 -->

<script>
$('.goods-item').hover(function(){
	$(this).addClass('active');
},function(){
	$(this).removeClass('active');
}).click(function(){
	$('.goods-item').removeClass('cur');
	$(this).addClass('cur');
	//获取当前的地址id
	aid = $(this).attr('aid');
	//j将值设置到 隐藏域上
	$('input[name=address_id]').val(aid);
});
</script>