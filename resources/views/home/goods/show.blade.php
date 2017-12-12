@extends('homes.xqym')
@section('title')
<title>商品详情</title>
@endsection

<style>.top10{height:10px;}</style>
<body style="height: auto;">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/css/share.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/js/social-share.min.js"></script>
<section>    

@section('content')
    <hr>
    <!-- 内容区开始 -->
    <section class="container">
        <!-- 导航部分 -->
        <nav>
            <ol class="breadcrumb">
              <li><a href="#">首页 </a></li>
              <li><a href="#">手机</a></li>
              <li class="active"><a href="#"> HUAWEI Mate系列</a></li>
              <li class="active"> <a href="#"> HUAWEI Mate 10 保时捷设计 6GB+256GB 全网通版（钻石黑）</a></li>
            </ol>
        </nav>

        <!-- 商品展示部分 -->
        <!-- 图片内容 开始 -->
        <div class="left goods-imgs col-md-5">
            <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="6">
                                @foreach($goods_picda as $k=>$v)
                                <iframe src="{{$v->pic}}" frameborder="0" width="450" height="450" name="lefts">
                                </iframe>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" height="20px;"></td>
                        </tr>
                        <tr>
                          
                          <td width="15px;"></td>
                          @foreach($goods_pic as $k=>$v)
                          <td>
                           <!-- <a href="/img/imgs.jpeg" target="lefts"> -->
                           <img src="{{$v->pic}}" width="60" height="60">
                           <!-- </a> -->
                          </td>
                          @endforeach
                        </tr>
                    </table>
        </div>
        <!-- 图片内容 结束 -->
        <!-- 商品标题 开始 -->
        <div class="right goods-title col-md-7">
            <!-- 标题 -->
            <h2>{{$goods->title}}</h2>
            
            <h5 class="price">¥{{$goods->price}}</h5>
            <hr>
            <ul class="sm list-unstyled list-inline">
                <li class="padding-left"><a href="#">服务说明</a></li>
                <li><a href="#">已满48元以免运费</a></li>
            </ul>
            <div class="clearfix"></div>
            <ul class="sm list-unstyled list-inline">
                <li class="padding-top"><a href="#">商品编码</a></li>
                <li class="padding-top"><a href="#">已满48元以免运费</a></li>
            </ul>
            <div class="clearfix"></div>
            <hr>
            <div class="nav_choice col-md-8">
                <!-- <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div> -->
               <!--  <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div> -->
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        可选保障服务
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        </ul>
                        </div>

                </div>
                <div class="top10"></div>
                <div class="top10"></div>

                <div class="top10"></div>

                <div class="top10"></div>

                <div class="top10"></div>

                <div class="clearfix"></div>
                <p>已选择商品:&nbsp;&nbsp;&nbsp;{{$goods->title}}</p>
                <div class="time col-md-10">
                    <div class="zengjia">
                        <input type="text" class="jia_left" value="1">
                        <div class="jia_right">
                            <div id="right_up">+</div>
                            <div id="right_bot">-</div>
                        </div>
                    </div>
                    <form action="">
                        <button type="submit" class="inputs" >加入购物车</button>
                    </form>

                    
                </div>
                <br/>
                <br/>
                <br/>

                <div class="top10"></div>
                <div class="top10"></div>

                <div class="top10"></div>

                <div class="top10"></div>

                <div class="social-share" data-disabled="google" ></div>

                <!--  css & js -->
                <link rel="stylesheet" href="dist/css/share.min.css">
                <script src="dist/js/social-share.min.js"></script>


            </div>
        </div>
        <!-- 商品标题 结束 -->
    </section>
    <!-- 内容区结束 -->
    <hr>
    <!-- center1 开始 -->
    <<div class="container">
      <div class="center">
        <p>-推荐商品-</p>
        <div class="col-md-3 padding-top">
            <img src="holder.js/110x110" class="pull-left" title="华为经典耳机（USB Type-c版）">
            <h5 class="text-left">HUAWEI MateDock 2 </h5>
            <h5 class="text-left">扩展坞</h5>
            <h5 class="text-left">&yen;299</h5>
        </div>
        <div class="col-md-3 padding-top">
            <img src="holder.js/110x110" class="pull-left" title="华为经典耳机（USB Type-c版）">
            <h5 class="text-left">HUAWEI MateDock 2 </h5>
            <h5 class="text-left">扩展坞</h5>
            <h5 class="text-left">&yen;299</h5>
        </div>
        <div class="col-md-3 padding-top">
            <img src="holder.js/110x110" class="pull-left" title="华为经典耳机（USB Type-c版）">
            <h5 class="text-left">HUAWEI MateDock 2 </h5>
            <h5 class="text-left">扩展坞</h5>
            <h5 class="text-left">&yen;299</h5>
        </div>
        <div class="col-md-3 padding-top">
            <img src="holder.js/110x110" class="pull-left" title="华为经典耳机（USB Type-c版）">
            <h5>HUAWEI MateDock 2 </h5>
            <h5>扩展坞</h5>
            <h5>&yen;299</h5>
        </div>
      </div>
    <div class="clearfix"></div>
    <hr>
    </div>
    <!-- center1 结束 -->
    <div class="clearfix"></div>
    <!-- center2 开始 -->
    <div class="container-fulid">
        <div style="margin: 0px auto; width: 1349px;">
            <ul class="center2_ul col-md-12 list-unstyled list-inline " style="text-align: center;" id="dianji">
                <li><a href="#one">商品详情</a></li>
                <li><a href="#two">规格参数</a></li>
                <li><a href="#there">包装与售后</a></li>
                <li><a href="#four">用户评价(1112)</a></li>
            </ul>
            @foreach($goods_pic as $k=>$v)
            <div class="col-md-12" id="one">

                <img src="{{$v->pic}}" style="  width:449px; height: 400px; margin-left: 400px;">
                
                <div class="top10"></div>
                <div class="top10"></div>

            </div>
           @endforeach
        </div>
        <!-- <hr> -->
    </div>
    <div class="top10"></div>
    <div class="top10"></div>
    <div class="top10"></div>
    <div class="top10"></div>
    <div class="top10"></div>

 
 
@endsection

</body>