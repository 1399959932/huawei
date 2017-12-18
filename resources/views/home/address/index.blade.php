@extends('home.person')

@section('title')
<title>个人中心</title>
@stop

<link rel="stylesheet" type="text/css" href="/css/person.css">
@section('gr')
<li><a href="#">{{session('tel')}}</a></li>
@stop

<style>.top10{height:10px;}</style>

@section('content')
<div class="sns"  style="height: auto;">
	<div class="container" style="height: auto;">
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
					<li class="znx1" style="height: auto;">订单中心
						<div class="ddzx">
							<p class="dd"><a href="/dingdan" style="color: #333;">我的订单</a></p>
								<p style="width: 120px;"><a href="/dizhi" style="color: red; margin-left: 20px;">收货地址</a></p>
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
				
			<div class="s_b_r" style="height: auto;">
				<div class="b_r_t">
					<div class="t_l">
						<p>我的地址</p>
					</div>
					<div class="t_r">
						<ul>
							<li class="zj"><a href="#">默认地址</a></li>
							<li class="yq"><a href="#">新增订单</a></li>
						</ul>
					</div>
					<div class="col-md-12 " style="height: auto;">
						<form class="form-horizontal" action="/dizhi"  method="post">
						<div class="top10"></div>
						  <div class="form-group col-md-12 ">
						    <label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="name">
						    </div>
						  </div>

						  <div class="form-group col-md-12 ">
						    <label for="inputEmail3" class="col-sm-3 control-label">电话号</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="tel">
						    </div>
						  </div>

						  <div class="form-group col-md-12 " >
							<label for="inputEmail3" class="col-sm-3 control-label">地址</label>
						    <div class="col-sm-6">

						    	<div class="clearfix"></div>
							    <div class="top10"></div>
							
							    <select name="province" class="form-control col-md-4" id="dizhi1">
							    	<option value="">请选择</option>
							   
							    </select>
							    <div class="clearfix"></div>

							    <div class="top10"></div>
							    <div class="top10"></div>

									
							    <select name="city" class="form-control col-md-4" id="dizhi1">
							    	<option value="">请选择</option>
							  
							    </select>

							    <div class="clearfix"></div>
							    <div class="top10"></div>
							    <div class="top10"></div>


								
							    <select name="xian" class="form-control col-md-4" id="dizhi3">
							    	<option value="">请选择</option>
							    </select>

							    <div class="clearfix"></div>
							    <div class="top10"></div>
							</div>
						  </div>

						  <div class="form-group col-md-12">
						    <label for="inputEmail3" class="col-sm-3 control-label">详细地址</label>
						    <div class="col-sm-6">
                    			<textarea name="detail" id="" class="form-control"></textarea>
						      
						    </div>
						  </div>

						  <div class="">
		                    <label for="inputEmail3" class="col-sm-3 control-label"></label>
						    <div class="col-sm-6">

		                      <input type="checkbox" value="1" name="is_default"> 是否为默认收货地址
		                    </div>
		                  </div>

						  

						  <div class="clearfix"></div>
					      <div class="top10"></div>
					      <div class="top10"></div>
					      <div class="top10"></div>

						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-success  col-md-6 col-md-3-offset" style="margin-left: 100px;">提交</button>
						    </div>
						  </div>
						</form>
					</div>
				</div>

				<div>
					
				</div>


				<div class="s_b_r" style="height: auto;">
				<div class="b_r_t">
					<div class="t_l">
						<p>我的评论</p>
					</div>
					<div class="t_r">
						<ul>
							<li class="zj"><a href="#">购物评论</a></li>
							<li class="yq"><a href="#">追加评论</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div style="height: 10px;"></div>
					<div style="height: 10px;"></div>
					<div style="height: 10px;"></div>
					@foreach($pinglun as $k=>$v)
					<form action="/goods/{{$v->id}}" method="post">
					
				        <div class="pl">
				            <div class="col-md-2 nav_imgs">
				                <img src="holder.js/90x100?bg=#afd">
				                <h6>{{$v->user_tel}}</h6>
				            </div>
				            
				            <p style="color: red;">华为系列产品___{{$v->goods_id}}</p>
				            <p>{{$v->addtime}}</p>
				            <p>{{$v->content}}</p>
				            <hr>
				            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
				            	<input type="hidden" name="goods_id" value="{{$v->id}}">
					            <button type="submit" class="btn-md bg-danger btn pull-right" id="de">删除</button>
					            {{ method_field('DELETE') }}
					            {{csrf_field()}}
		                        
				        </div>
			    	</form>
			        @endforeach
			    
				</div>

				<div class="clearfix"></div>
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
				<div class="b_r_b" style="height: auto;">
					<div class="b_nr" style="height: auto;">
						
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
								
							</div>
						</div>
					</div>
				</div>

			</div>

		<!-- title商行结束 -->
		</div>
	</div>
</div>


<script>

function init() {
	$.ajax({
		type:'get',
		url:'/getarea',
		dataType:'json',
		data:{pid:0},
		success: function(data){
			for(var i=0;i<data.length;i++){
				var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
				//将option插入到省的select中
				$('select[name=province]').append(option);
			}
		}

	})
}
init();

$('#de').click(function(e){
      var res = confirm('您确定要删除么');
      if(!res){
        return false;
      }
    });

$('select[name=province]').change(function(){
	$('select[name=city]').html('<option value="">请选择</option>')
	//获取当前省的id
	var id = $(this).val();
	//发送ajax获取当前省说对应的时期的信息  是 是是 是
	$.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=city]').append(option);
            }
        }
    })
});

$('select[name=city]').change(function(){
	$('select[name=xian]').html('<option value="">请选择</option>')
	//获取当前市的id
	var id = $(this).val();
	//
	$.ajax({
		type:'get',
		url:'/getarea',
		data: {pid:id},
		dataType:'json',
		success: function(data){
			for(var i=0;i<data.length;i++){
				var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
				//插入
				$('select[name=xian]').append(option);
			}
		}
	}) 

	
});

   

</script>




@stop

