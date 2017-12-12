@extends('homes.public')
@section('title')
<title>详情</title>
@show
<body data-spy="scroll" data-target="#navbar-example">
    

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
                                <iframe src="/img/imgs.jpeg" frameborder="0" width="450" height="450" name="lefts">
                                </iframe>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" height="20px;"></td>
                        </tr>
                        <tr>
                          <td width="15px;"></td>
                          <td>
                           <a href="/img/imgs.jpeg" target="lefts">
                           <img src="/img/imgs.jpeg" width="60" height="60">
                           </a>
                          </td>
                          <td>
                           <a href="/img/imgs3.jpg" target="lefts">
                           <img src="/img/imgs3.jpg" width="60" height="60">
                           </a>
                          </td>
                          <td>
                           <a href="/img/imgs.jpeg" target="lefts">
                           <img src="/img/imgs.jpeg" width="60" height="60">
                           </a>
                          </td>
                          <td>
                           <a href="/img/imgs3.jpg" target="lefts">
                          <img src="/img/imgs3.jpg" width="60" height="60">
                           </a>
                          </td>
                          <td>
                           <a href="/img/imgs.jpeg" target="lefts">
                           <img src="/img/imgs.jpeg" width="60" height="60">
                           </a>
                          </td>
                        </tr>
                    </table>
            <!-- <ul class="list-unstyled list-inline up">
                <li><img src="holder.js/450x450" alt=""></li>
                <li><img src="holder.js/450x450" alt=""></li>
                <li><img src="holder.js/450x450" alt=""></li>
                <li><img src="holder.js/450x450" alt=""></li>
                <li><img src="holder.js/450x450" alt=""></li>
            </ul>   

            <ul class="down list-unstyled list-inline">
                <li><img src="holder.js/60x60" alt=""></li>
                <li><img src="holder.js/60x60" alt=""></li>
                <li><img src="holder.js/60x60" alt=""></li>
                <li><img src="holder.js/60x60" alt=""></li>
                <li><img src="holder.js/60x60" alt=""></li>
            </ul> -->
        </div>
        <!-- 图片内容 结束 -->
        <!-- 商品标题 开始 -->
        <div class="right goods-title col-md-7">
            <!-- 标题 -->
            <h2>HUAWEI Mate 10 保时捷设计 6GB+256GB 全网通版</h2>
            
            <h5 class="price">¥ 8999.00</h5>
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
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div>
                <div class="clearfix"></div>
                <div class="ziti">
                    <h5>选择颜色</h5>
                    <span></span>
                </div>
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
                <div class="clearfix"></div>
                <p>已选择商品:&nbsp;&nbsp;&nbsp;钻石黑 / 全网通版 / 6GB+256GB / 官方标配 </p>
                <div class="time col-md-10">
                    <div class="zengjia">
                        <input type="text" class="jia_left" value="1">
                        <div class="jia_right">
                            <div id="right_up">+</div>
                            <div id="right_bot">-</div>
                        </div>
                    </div>
                    <button class="inputs">加入购物车</button>
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
    <!-- 评论 开始 -->
    <div class="clearfix"></div>
    <div class="container">
        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
        <hr>

        <div class="pl">
            <div class="col-md-2 nav_imgs">
                <img src="holder.js/90x100?bg=#afd">
                <h6>13518*****</h6>
            </div>
            <div class="col-md-1">
                <img src="holder.js/107x22?bg=#aff">
            </div>
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
            <p>速度真快，手机还做飞机！第一天报着试试看的态度抢购，没想到还真抢到了。今天早上到货。真的很快。激动，除了激动还是激动⊙∀⊙！非常喜欢，支持华为，支持国产</p>
            <p>2017-11-30 13:10</p>
            <hr>
            <p style="color:#ac141b;">华为商城回复：<span>亲，您的一句话简洁有力，这就是给我们最大的鼓励，谢谢！</span></p>
        </div>
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
                    <span>HUAWEI Mate 10 保时捷设计</span>
                    <h5>¥8999</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- 浏览记录 结束 -->
        <!-- 定位 开始 -->
    <div class="dingwei">
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