@extends('homes.public')
<link rel="stylesheet" type="text/css" href="/css/xq.css">
<script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
<body data-spy="scroll" data-target="#navbar-example">

<script type="text/javascript">
    $(function(){
        $('.goods-title >.nav_choice > .ziti > ul > li').click(function(){
            $(this).addClass("active").siblings("li").removeClass("active");
        })
    })
</script>
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
              <li class="active"> <a href="#"> {{$goods->title}}</a></li>
            </ol>
        </nav>

        <!-- 商品展示部分 -->
        <!-- 图片内容 开始 -->
        <div class="left goods-imgs col-md-5">
            <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="6">
                                @foreach($goods_picda as $k=>$v)
                                <img src="{{$v->pic}}" frameborder="0" width="450" height="450" name="lefts">
                                
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" height="20px;"></td>
                        </tr>
                        <tr>
                          
                          <!-- <td width="15px;"></td> -->
                          @foreach($goods_pic as $k=>$v)
                          <td style="margin-right: 10px;">
                           <a href="" target="lefts">
                            <img src="{{$v->pic}}" width="60" height="60">
                           </a>
                          </td>

                          <td style="margin-right: 10px;">
                           <a href="" target="lefts">
                            <img src="{{$v->pic}}" width="60" height="60">
                           </a>
                          </td>


                          <td style="margin-right: 10px;">
                           <a href="" target="lefts">
                            <img src="{{$v->pic}}" width="60" height="60">
                           </a>
                          </td>

                          <td style="margin-right: 10px;">
                           <a href="" target="lefts">
                            <img src="{{$v->pic}}" width="60" height="60">
                           </a>
                          </td>




                          @endforeach
                        </tr>
                    </table>
        </div>
        <!-- 商品标题 开始 -->
        <div class="right goods-title col-md-7">
            <!-- 标题 -->
            <p class="biaoti">{{$goods->title}}</p>
            
            <h5 class="price">{{$goods->price}}</h5>
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
            <div class="nav_choice col-md-12">
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <ul class="list-unstyled list-inline ziti_ul">
                        <li class="active" >
                            <img src="holder.js/30x30">
                            <a  title="香槟金">香槟金</a>
                        </li>
                        <li>
                            <img src="holder.js/30x30">
                            <a title="摩卡金">摩卡金</a>
                        </li>
                        <li>
                            <img src="holder.js/30x30">
                            <a title="亮黑色">亮黑色</a>
                        </li>
                        <li>
                            <img src="holder.js/30x30">
                            <a title="樱粉色">樱粉色</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择制式</h5>
                    <ul class="list-unstyled list-inline ziti_ul">
                        <li>
                            <a title="全网通版">全网通版</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择容量</h5>
                    <ul class="list-unstyled list-inline ziti_ul"> 
                        <li>
                            <a title="4GB+64GB">4GB+64GB</a>
                        </li>
                        <li>
                            <a title="6GB+128GB">6GB+128GB</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择套餐</h5>
                    <ul class="list-unstyled list-inline ziti_ul">
                        <li>
                            <a title="官方标配">官方标配</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="ziti ziti_2">
                    <h5>保障服务</h5>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-left: 10px;background: #fff;">
                        可选保障服务
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height: 100px;">
                            <li><a title="无需延保">延保：<span>无需延保</span></a></li>
                            <li class="yanse"><a title="延长服务宝（半年期）">延长服务宝（半年期）¥98.00</a></li>
                            <li class="yanse"><a title="终端延保服务（一年期）">终端延保服务（一年期）¥188.00</a></li>
                            <li style="height: 40px;"></li>
                            <li><a title="无需碎屏保">碎屏保：<span>无需碎屏保</span></a></li>
                            <li class="yanse"><a title="碎屏服务宝（一年期）">碎屏服务宝（一年期）¥159.00</a></li>
                        </ul>
                        </div>

                </div>
                <div class="clearfix"></div>
                <form action="/cart" method="post">
                    <p class="tishi">已选择商品:&nbsp;&nbsp;&nbsp;{{$goods->title}}</p>
                    <div class="time col-md-10">
                        <div class="zengjia">
                            <input type="text" class="jia_left" value="1" name="num">
                            <input type="hidden" name="goods_id" value="{{$goods->id}}">
                            <div class="jia_right">
                                <div id="right_up">+</div>
                                <div id="right_bot">-</div>
                            </div>
                        </div>
                        {{csrf_field()}}

                        <button type="submit" class="inputs">加入购物车</button>
                        <button class="inputs">立即下单</button>

                    </div>
                </form>
                <div class="col-md-2">
                    <div class="tishi_1">
                        <div class="tishi_1_up">
                            <img src="img/img5.png">
                            <div class="up_dw">以旧换新,<span>最高可抵&yen;599</span></div>
                        </div>
                        <div class="tishi_1_bot">
                            <img src="img/img6.png">
                            <div class="bot_dw">
                                <h5>用手机扫码进行购买</h5>
                                <img src="img/img7.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 商品标题 结束 -->
    </section>
    <!-- 内容区结束 -->
    <hr>
    <!-- center1 开始 -->
    <div class="container">
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
            <div class="col-md-12 tupian">
                <img src="holder.js/1349x647" style="margin-left: -15px;">
            </div>
            <div class="col-md-12" id="one">
                <img src="holder.js/1349x646?bg=#ade" style="margin-left: -15px;">
            </div>
            <div class="col-md-12">
                <img src="holder.js/1349x645?bg=#afd" style="margin-left: -15px;">
            </div>
        </div>
    </div>
    <!-- center2 结束 -->
    <!-- 规格参数 开始 -->
    <div class="clearfix"></div>
    <div class="container" id="two">
        <div class="center3_ggcs">
            <p>规格参数</p>
            <hr>
            <div class="col-md-2">
                <h3>主要参数</h3>
            </div>
            <div class="col-md-10 canshu">
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通，主副卡不区分卡槽，支持Nano SIM卡。（ 注1：双卡4G网络使用，需要根据运营商网络和相关业务部署情况确定是否支持。 当前网络仅中国移动支持VOLTE业务。 后续手机软件功能可能跟随网络匹配升级，请以手机实际版本支持功能为准。 注2：两张电信卡不能同时使用。）</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>

                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul><ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 规格参数 结束 -->
    <!-- 主体 开始 -->
    <div class="clearfix"></div>
        <div class="zhuti">
            <div class="container">
              <div class="col-md-2">
                <h3>主体</h3>
              </div>
              <div class="col-md-10 canshu">
                  <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通，主副卡不区分卡槽，支持Nano SIM卡。（ 注1：双卡4G网络使用，需要根据运营商网络和相关业务部署情况确定是否支持。 当前网络仅中国移动支持VOLTE业务。 后续手机软件功能可能跟随网络匹配升级，请以手机实际版本支持功能为准。 注2：两张电信卡不能同时使用。）</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>

                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul>
                <ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10">双卡双待单通</li>
                </ul><ul>
                    <li class="col-md-2"><a href="#">传播名</a></li>
                    <li class="list-unstyled col-md-10" id="there">双卡双待单通</li>
                </ul>
              </div>
            </div>
        </div>
    <!-- 主体 结束 -->
    <!-- 包装 开始 -->
    <div class="clearfix"></div>
    <div class="container">
        <div class="baozhuang">
            <p>包装</p>
            <hr>
            <ul>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
            </ul>
            <div class="ten"></div>
            <ul>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
                <li><a href="#">手机（含内置电池） X 1</a></li>
            </ul>
        </div>
    </div>
    <!-- 包装 结束 -->
    <!-- 售后服务 开始 -->
    <div class="container">
        <div class="shouhou">
            <p>售后服务</p>
            <hr>
            <div class="col-md-10 col-md-offset-2">
                <ul>
                    <li><a href="#">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</a></li>
                    <li><a href="#">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</a></li>
                    <li><a href="#">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</a></li>
                    <li><a href="#">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul class="list-unstyled">
                    <li>* 以上页面中的数据为理论值，均来自华为内部实验室，于特定测试环境下所得（请见各项具体说明），实际使用中可能因产品个体差异、软件版本、使用条件和环境因素不同略有不同，请以实际使用的情况为准。</li>
                    <li>* 以上页面中的数据为理论值，均来自华为内部实验室，于特定测试环境下所得（请见各项具体说明），实际使用中可能因产品个体差异、软件版本、使用条件和环境因素不同略有不同，请以实际使用的情况为准。</li>
                    <li id="four">* 以上页面中的数据为理论值，均来自华为内部实验室，于特定测试环境下所得（请见各项具体说明），实际使用中可能因产品个体差异、软件版本、使用条件和环境因素不同略有不同，请以实际使用的情况为准。</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 售后服务 结束 -->
    <!-- 好评度 开始 -->
    <div class="hpd">
        <div class="container" >
            <div class="col-md-1">
                <h5>好评度</h5>
            </div>
            <div class="col-md-2">
                <h1>100%</h1>
            </div>
            <div class="col-md-1">
                <h5>买家印象</h5>
            </div>
            <div class="col-md-8">
                <ul class="list-unstyled list-inline">
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 好评度 结束 -->

    <!-- form评论开始 -->
    <div class="col-md-8 bg-ingo col-md-offset-2" style="height: 100px; margin-left: 380px; height: auto;">
        <div class="top10" style="height: 10px;"></div>
        <div class="top10" style="height: 10px;"></div>
        <form action="/goods/pinglun" method="post">
            <div class="" style="height: 30px;">我要评论 
                <button type="button" class="btn btn-default btn-sm" value="1" name="star">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-sm" value="2" name="star">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-sm" value="3" name="star">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-sm" value="4" name="star">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-sm" value="5" name="star">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
            </div>
            <br> 
            <textarea name="content" class="col-md-12" style="height: 100px;" placeholder="请输入你的评论">
                
            </textarea>
            <input type="hidden" name="goods_id" value="{{$goods->id}}">

            {{csrf_field()}}
            <div class="clearfix"></div>
            <div class="top10" style="height: 10px;"></div>
            <button style="submit" class="btn-lg btn-danger pull-right">评论</button>
            
        </form>
    </div>
    <!-- form评论结束 -->


    <!-- 评论 开始 -->
    <div class="clearfix"></div>
    <div class="container">
        <form action="/goods/id" method="post">
        <!-- 搜索
        搜索
        搜索 -->
        <div id="datatable-fixed" class="dataTables_filter pull-right">
            <label>Search:
                <input type="search" name="keywords" value="{{$keywords}}" class="form-control input-sm" placeholder=""  aria-controls="datatable-fixed-header">
             </label>
            &nbsp;
            <button class="btn btn-info btn-sm" type="submit">搜索</button>
        </div>

        <!-- 搜索
        搜索
        搜索 -->
        
        <div class="clearfix"></div>
        <div class="top10" style="height: 10px;"></div>
        <div class="top10" style="height: 10px;"></div>

        <div class="col-md-9 lefts">
                <div class="col-md-12">
                    <ul class="list-unstyled list-inline">
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                    <li>高端大气&nbsp;877</li>
                </ul>
                </div>
            </div>

            <div class="clearfix"></div>
    
        @foreach($pinglun as $k=>$v)
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
        </div>
        @endforeach
    </form>
        <hr>
        

        <hr>
        <div class="col-md-2 gongji">
            <h5>共1112条评论</h5>
            
        </div>
        <div class="col-md-10 text-right">
            <nav>
                  <ul class="pagination" >
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
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
            </nav>
        </div>
    </div>
    <!-- 评论 结束 -->
    <!-- 购买咨询 开始 -->
    <div class="clearfix"></div>
    <div class="container">
        <div class="gmzx">
            <p>购买咨询</p>
            <hr>
            <div class="col-md-8">
                <ul class="list-unstyled list-inline">
                    <li>全部资讯</li>
                    <li>全部资讯</li>
                    <li>全部资讯</li>
                    <li>全部资讯</li>
                    <li>全部资讯</li>
                    <li>全部资讯</li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="zi"><h5>温馨提示：因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！
                给您带来的不便还请谅解，谢谢！</h5></div>
                <hr>
            </div>
            <div class="col-md-12">
                <h6>网友: 13804****0   2017-12-04  14:29:36</h6>
                <h5><b>咨询内容&nbsp;:&nbsp;</b>抢到后,可以开具单位发票吗?是开具增值税专用发票还是普票?</h5>
                <div class="ten"></div>
                <span><b>回复&nbsp;:&nbsp;</b>亲爱的用户,您好!抢购订单不支持开具增值税专票,可以开普票,感谢您对华为产品的支持.</span>
                <h6>2017-12-04 15:18:37</h6>
            </div>

            <div class="clearfix"></div>
            <hr>
              <div class="col-md-12">
                <h6>网友: 13804****0   2017-12-04  14:29:36</h6>
                <h5><b>咨询内容&nbsp;:&nbsp;</b>抢到后,可以开具单位发票吗?是开具增值税专用发票还是普票?</h5>
                <div class="ten"></div>
                <span><b>回复&nbsp;:&nbsp;</b>亲爱的用户,您好!抢购订单不支持开具增值税专票,可以开普票,感谢您对华为产品的支持.</span>
                <h6>2017-12-04 15:18:37</h6>
            </div>

            <div class="clearfix"></div>
            <hr>
              <div class="col-md-12">
                <h6>网友: 13804****0   2017-12-04  14:29:36</h6>
                <h5><b>咨询内容&nbsp;:&nbsp;</b>抢到后,可以开具单位发票吗?是开具增值税专用发票还是普票?</h5>
                <div class="ten"></div>
                <span><b>回复&nbsp;:&nbsp;</b>亲爱的用户,您好!抢购订单不支持开具增值税专票,可以开普票,感谢您对华为产品的支持.</span>
                <h6>2017-12-04 15:18:37</h6>
            </div>
        </div> 
        <div class="clearfix"></div>  
        <hr>
        <div class="clearfix"></div>
            <div class="col-md-2 fenye">
                <h5>共303条</h5>
            </div>
            <div class="col-md-10 text-right">
                <nav class="col-md-12">
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
    <!-- 购买咨询 结束 -->
    <!-- 我要咨询 开始 -->
    <div class="clearfix"></div>
    <div class="wyzx">
        <div class="container">
            <div class="col-md-3 col-md-offset-5">
            <div class="p">我要咨询</div>
            </div>
        </div>
    </div>
    <!-- 我要咨询 结束 -->
    <!-- 浏览记录 开始 -->
    <div class="container">
        <div class="col-md-12 lljl">
            <p>-浏览记录-</p>
            <div class="col-md-12">
                <div class="col-md-2">
                    <img src="holder.js/120x142?bg=#afd">
                    <span>{{$goods->title}}</span>
                    <h5>{{$goods->pirce}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- 浏览记录 结束 -->
        <!-- 定位 开始 -->
    <div class="dingwei " style="margin-left: 275px;">
        <ul class="center2_ul col-md-12 list-unstyled list-inline " style="text-align: center;" id="dianji">
            <li><a href="#one">商品详情</a></li>
            <li><a href="#two">规格参数</a></li>
            <li><a href="#there">包装与售后</a></li>
            <li><a href="#four">用户评价(1112)</a></li>
        </ul>
    </div>
    <!-- 定位 结束 -->
@stop
</body>