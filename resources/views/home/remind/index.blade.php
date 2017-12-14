@extends('homes.public')
@section('title')
<title>购物车</title>
@stop
@section('header')
<link rel="stylesheet" type="text/css" href="/css/ddym.css">
<link rel="stylesheet" type="text/css" href="/css/gwc.css">

<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/js/fl.js"></script>

<style>.top10{height:10px;}.jk li{float:left; list-style: none;  line-height: 20px; height: 60px; font-size: 14px; line-height: 60px;}</style>
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
                <li class="dl"><a href="#">{{session('tel')}}</a></li>
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
@section('content')

<div class="qrdd" style="height: auto;" >
    <form action="/cart/geren" method="post">
	<div class="container bg-success" >
		<div class="col-md-12 qrdd_up" >  

			<p>收货地址</p>
			<div class="col-md-4 " id="dizhi">
				<h5><a href="/dizhi">+新增收货地址</a></h5>
			</div>

            <div class="col-md-4 ">
                
            </div>

		</div>
		
		<div class="clearfix"></div>
		
		<div class="col-md-12 qrdd_cen" style="height: auto;">
			<div class="cen_left bg-info" style="height: auto;">
         <div class="left_top">
             <p>发票信息 &nbsp;<span>注：如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</span>
             </p>
             <ul class="list-unstyled list-inline">
                 <li><a href="#">电子普通发票</a></li>
                 <li><a href="#">个人</a></li>
                 <li class="xiugai"><a href="#"> 修改</a></li>
             </ul>
         </div>    
         <ul class="col-md-12 jk">
             <li class="col-md-3 col-md-offset-1">商品图片</li>
             <li class="col-md-4">商品名称</li>
             <li class="col-md-2">商品数量</li>
             <li class="col-md-1">小结</li>

         </ul>
         @foreach($goods as $k=>$v)   
         <table class="left_cen col-md-12">
            <tr class="list-unstyled list-inline ">
                <th scope="row" >
                    <input type="checkbox" name="goods_id[]" value="{{$v->id}}" style="margin-left: 30px;">
                </th>
                <td class="col-md-3 text-center"><a href="/goods/{{$v->detail->id}}"><img src="{{$v->pic}}" width="140" height="80"></a></ta>
             
                 <td class="col-md-4"><a href="/goods/{{$v->detail->id}}">{{$v->detail->title}}</a></td>
                 <td class="shu col-md-1">{{$v->num}}</td>
                 <td class="jinqian col-md-2">&yen;{{$v->danjia}}</td>

                 <td> 
                    <i cid="{{$v->id}}"  class="delete" style="cursor: pointer;"> 
                     删除</i>
                 </td>                  
             </tr>
         </table>     
         @endforeach  
         <div class="left_bot">
             <!-- <div class="col-md-2">
                 <p>配</p>
             </div>
             <div class="col-md-10 bot">
                 <img src="holder.js/50x77">
                 <ul class="list-unstyled list-inline">
                     <li><a href="#">荣耀V9 play 半入耳式耳机(金色)</a></li>
                     <li class="shujia"><a href="#">x1</a></li>
                 </ul>
             </div> -->

         </div>       
      </div>
      
      <div class="cen_right col-md-4">
                <div class="right_top">
                    <p>商品由<span>&nbsp;华为商城&nbsp;</span>选择合作快递</p>
                </div>         
                <div class="right_bot">
                    <ul class="list-unstyled list-inline">
                        
                        <li><a href="#">商品总金额：@foreach($goods as $kk=>$vv)
                            @endforeach<span></span></a></li>
                        
                        <li class="yunfei"><a href="#">运费：<span>¥0.00</span></a></li>
                        <li class="youhui"><a href="#">优惠：<span>-¥100.00</span></a></li>
                       
                        <li class="jiesuan"><a href="#">结算金额：<span> @foreach($goods as $kk=>$vv)
                         @endforeach</span></a></li>
                       
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
               
                <p>应付总额：<span></span></p>
                <input type="text" name="dizhi" value="无收货地址不可下单,点击填充">
                {{csrf_field()}}
                <button type="submit">提交订单</button>
            </div>
        </div>
	</div>
    </form>
</div>


<script>
 $(function(){
      $('.delete').click(function(){

            if(!confirm('确定删除?')) return false;
            //获取相关信息
            var cid = $(this).attr('cid');
            var tr = $(this).parents('tr');
            //发送请求
            $.ajax({
                type:'get',
                url: '/cart/delete',
                data: {'cid':cid},
                success: function(data){
                    if(data == '1') {
                        tr.fadeOut(1000,function(){
                            alert('移出成功!!!');
                        });
                    }
                }

            })
            return false;
        });
     
  })
</script>
@stop
