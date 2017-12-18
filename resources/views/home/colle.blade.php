@extends('home.index')
@section('content')
<!-- 导航部分开始 -->
<div class="dh">
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
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="holder.js/100px450?bg=#acd" alt="...">
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
    <!-- 侧边选项卡开始 -->
    <div class="cebi">
        <ul>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>手机</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>荣耀</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>HUAWEI P系列</span>
                </a>
                <span class="jito col-md-offset-3">></span>

                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览手机频道</a></p>
                        <p class="col-md-offset-9"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi">
                            <p><a href="#">荣耀</a></p>
                            <p><a href="#">HUAWEI&nbsp;P系列</a></p>
                            <p><a href="#">荣耀畅玩系列</a></p>
                            <p class="meta"><a href="#">HUAWEI&nbsp;Mate系列</a></p>
                            <p><a href="#">HUAWEI&nbsp;nova系列</a></p>
                            <p><a href="#">HUAWEI&nbsp;麦芒系列</a></p>
                            <p><a href="#">华为畅享系列</a></p>
                            <p class="meta"><a href="#">合约机</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 93 && $k < 97)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 97)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>笔记本&nbsp;&&nbsp;平板</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>平板电脑</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>笔记本电脑</span>
                </a>
                <span class="jito col-md-offset-3">></span>
                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览笔记本&nbsp;&&nbsp;平板频道</a></p>
                        <p class="col-md-offset-8"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi">
                            <p><a href="#">平板电脑</a></p>
                            <p><a href="#">笔记本电脑</a></p>
                            <p><a href="#">笔记本配件</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 97 && $k < 101)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 101)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>穿戴</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>手环</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>手表</span>
                </a>
                <span class="jito col-md-offset-6">></span>

                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览穿戴频道</a></p>
                        <p class="col-md-offset-9"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi">
                            <p><a href="#">手环</a></p>
                            <p><a href="#">手表</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 101 && $k < 105)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 105)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>智能家居</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>子母路由</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>电视盒子</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>路由器</span>
                </a>
                <span class="jito">></span>

                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览智能家居频道</a></p>
                        <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi" style="width: 550px;">
                            <p><a href="#">子母路由</a></p>
                            <p><a href="#">电视盒子</a></p>
                            <p><a href="#">路由器</a></p>
                            <p><a href="#">电力猫</a></p>
                            <p><a href="#">随性wifi</a></p>
                            <p class="meta"><a href="#">HUAWEI&nbsp;HiLink生态产品</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 105 && $k < 109)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 109)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>通用配件</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>移动电源</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>耳机</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>音响</span>
                </a>
                <span class="jito col-md-offset-2">></span>

                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览通用配件频道</a></p>
                        <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi" style="width: 545px;">
                            <p><a href="#">移动电源</a></p>
                            <p><a href="#">耳机</a></p>
                            <p><a href="#">音箱</a></p>
                            <p class="meta"><a href="#">自拍杆/支架</a></p>
                            <p><a href="#">充电器/线材</a></p>
                            <p><a href="#">U盘/存储卡</a></p>
                            <p><a href="#">排插</a></p>
                            <p><a href="#">摄像机/镜头</a></p>
                            <p><a href="#">智能硬件</a></p>
                            <p class="meta"><a href="#">生活周边</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 109 && $k < 113)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 113)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="cb_1">
                <a href="#" class="col-md-12" id="phone">
                    <span>专属配件</span>
                </a>
                <a href="#" class="col-md-offset-1" id="rong">
                    <span>保护壳</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>保护套</span>
                </a>
                <a href="#" id="rong" class="col-md-offset-1">
                    <span>贴膜</span>
                </a>
                <span class="jito col-md-offset-2">></span>

                <div class="list">
                    <div class="list_t">
                        <p class="liu"><a href="#">浏览专属配件频道</a></p>
                        <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
                    </div>
                    <div class="list_c">
                        <div class="c_zi">
                            <p><a href="#">保护壳</a></p>
                            <p><a href="#">保护套</a></p>
                            <p><a href="#">贴膜</a></p>
                            <p class="meta"><a href="#">盒子专属配件</a></p>
                            <p><a href="#">表带</a></p>
                        </div>
                    </div>
                    <div class="list_b">
                        @foreach($shouye as $k=>$v)
                        @if($k > 113 && $k < 117)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @elseif($k == 117)
                        <div class="b_cp">
                            <img src="{{$v->pic}}" style="width: 120px;height: 120px; margin-top: 25px;margin-left: 25px;margin-bottom: 25px;">
                            <h5>{{$v->title}}</h5>
                            <h5 class="mo">&yen;{{$v->price}}</h5>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
    <!-- 侧边选项卡结束 -->
    <!-- 轮播图下开始 -->
    <div class="container">
        <div class="lbx">
            <div class="col-md-3 lbx_1">
                @foreach($shouye as $k=>$v)
                @if($k == 0)
                <img src="{{$v->pic}}" style="border-radius: 100%; margin: 10px; float: left;" width="60" height="60">
                @endif
                @endforeach
                <ul>
                    <li>欢迎来到华为商城,请<a href="#">登录</a></li>
                    <li>还没账号？<a href="#">注册</a>即可享受&nbsp;&nbsp;&nbsp;&nbsp;></li>
                    <li>
                        <button>新人福利</button>
                        <button>会员频道</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 lbx_1 lbx_2">
                @foreach($shouye as $k=>$v)
                @if($k > 0 && $k < 7)
                <div class="col-md-2 xt" style="padding: 0px; margin-right: 22px;">
                    <img src="{{$v->pic}}">
                    <h6>{{$v->title}}</h6>
                </div>
                @elseif($k == 6)
                <div class="col-md-2 xt xt1" style="padding: 0px;margin-right: 0px;">
                    <img src="{{$v->pic}}">
                    <h6>{{$v->title}}</h6>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-md-3 lbx_1 lbx_3">
                <div class="lb_t">
                    <p><a href="#">公告</a></p>
                </div>
                <div class="lb_b">
                    <ul>
                        @foreach($shouye as $k=>$v)
                        @if($k > 6 && $k < 10)
                        <li class="col-md-4" style="padding: 0px;">
                            <img src="{{$v->pic}}">
                            <span>{{$v->title}}</span>
                        </li>
                        @elseif($k == 9)
                        <li class="col-md-4" style="margin-right: 0px">
                            <img src="{{$v->pic}}">
                            <span>{{$v->title}}</span>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 轮播图下结束 -->
<div class="clearfix"></div>
<!-- 导航部分结束 -->
<!-- 导航下部分开始 -->
<div class="ten"></div>
<div class="container">
    <div class="dhx">
        @foreach($shouye as $k=>$v)
        @if($k > 23 && $k < 27)
        <div class="col-xs-3 dhx_1">
            <img src="{{$v->pic}}">
        </div>
        @elseif($k == 27)
        <div class="col-xs-3 dhx_1">
            <img src="{{$v->pic}}">
        </div>
        @endif
        @endforeach
    </div>
</div>
<!-- 导航下部分结束 -->
<!-- 热销单品部分开始 -->
<div class="container">
    <div class="rexi">
        <h3>热销单品</h3>
        <ul class="list-unstyled">
            <li class="col-md-2">
                 @foreach($shouye as $k=>$v)
                 @if($k == 18)
                <div class="rxdp">
                    <img src="{{$v->pic}}">  
                </div>
                @endif
                @endforeach
            </li>
            @foreach($shouye as $k=>$v)
            @if($k > 9 && $k < 18)         
            <li class="col-md-2" style="margin-right: 40px; margin-bottom: 10px;">
                <div class="item">
                    <img src="{{$v->pic}}" style="width: 134px;height: 134px; margin-top: 35px;margin-left: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
                </div>
            </li>
            @elseif($k == 17)
            <li class="col-md-2" style="margin-right: 40px; margin-bottom: 10px;">
                <div class="item">
                    <img src="{{$v->pic}}" style="width: 134px;height: 134px; margin-top: 35px;margin-left: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
                </div>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- 热销单品部分结束 -->
<!-- 精品推荐部分开始 -->
<div class="container">
    <div class="jptj">
        <h3>精品推荐</h3>
        <ul class="list-unstyled">
            @foreach($shouye as $k=>$v)
            @if($k > 18 && $k < 23)
            <li class="col-md-2 jipi" style="padding: 0px; margin-right: 25px;">
                <img src="{{$v->pic}}" style="width: 134px;height: 134px;margin-left: 43px;margin-top: 38px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>
            </li>
            @elseif($k == 23)
            <li class="col-md-2 jipi" style="padding: 0px;margin-right: 25px;">
                <img src="{{$v->pic}}" style="width: 134px;height: 134px;margin-left: 43px;margin-top: 38px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- 精品推荐部分结束 -->
<!-- 广告图部分开始 -->
<div class="container">
    @foreach($shouye as $k=>$v)
    @if($k == 35)
    <div class="adv col-md-12">
        <img src="{{$v->pic}}">
    </div>
    @endif
    @endforeach
</div>
<!-- 广告图部分结束 -->
<!-- 手机部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t">
            <h3>手机</h3>
            <ul>
                <li><a href="#">荣耀</a></li>
                <li><a href="#">HUAWEI&nbsp;P系列</a></li>
                <li><a href="#">荣耀畅玩系列</a></li>
                <li><a href="#">HUAWEI&nbsp;Mate系列</a></li>
                <li><a href="#">HUAWEI&nbsp;nova系列</a></li>
                <li><a href="#">HUAWEI&nbsp;麦芒系列</a></li>
                <li><a href="#">华为畅享系列</a></li>
                <li><a href="#">合约机</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k => $v)
                @if($k == 36)
                <li class="col-md-3" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k => $v)
                @if($k > 27 && $k < 34)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 43px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 34)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 43px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 手机部分结束 -->
<!-- 笔记本电脑部分开始 -->
<div class="container">
    <div class="iphone brain">
        <div class="iphone_t brain_t">
            <h3>笔记本电脑</h3>
            <ul>
                <li><a href="#">平板电脑</a></li>
                <li><a href="#">笔记本电脑</a></li>
                <li><a href="#">笔记本配件</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b brain_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 37)
                <li class="col-md-3" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k=>$v)
                @if($k > 37 && $k < 40)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 40)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 笔记本电脑部分结束 -->
<!-- 精品平板部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t iph_t">
            <h3>精品平板</h3>
            <ul>
                <li><a href="#">平板电脑</a></li>
                <li><a href="#">笔记本电脑</a></li>
                <li><a href="#">笔记本配件</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 41)
                <li class="col-md-3" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k=>$v)
                @if($k > 41 && $k < 48)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 48)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 精品平板部分结束 -->
<!-- 智能穿戴部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t noop">
            <h3>智能穿戴</h3>
            <ul>
                <li><a href="#">手环</a></li>
                <li><a href="#">手表</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 49)
                <li class="col-md-3" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k=>$v)
                @if($k > 49 && $k < 56)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;
                    height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 56)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;
                    height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 智能穿戴部分结束 -->
<!-- 智能家居部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t home_t">
            <h3>智能家居</h3>
            <ul>
                <li><a href="#">子母路由</a></li>
                <li><a href="#">电视盒子</a></li>
                <li><a href="#">路由器</a></li>
                <li><a href="#">电力猫</a></li>
                <li><a href="#">随性wifi</a></li>
                <li><a href="#">HUAWEI&nbsp;HiLink生态产品</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 57)
                <li class="col-md-6" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k=>$v)
                @if($k > 57 && $k < 63)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;
                    height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 63)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;
                    height: 160px;margin-top: 44px;margin-left: 65px;margin-bottom: 50px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            @foreach($shouye as $k=>$v)
            @if($k > 63 && $k < 68)
            <li class="col-md-2 hou" style="padding: 0px;margin-right: 27px;">
                <img src="{{$v->pic}}" style="width: 134px;
                    height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5> 
            </li>
            @elseif($k == 68)
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="{{$v->pic}}" style="width: 134px;
                    height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- 智能家居部分结束 -->
<!-- 热销配件部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t home_t">
            <h3>热销配件</h3>
            <ul>
                <li><a href="#">移动电源</a></li>
                <li><a href="#">耳机</a></li>
                <li><a href="#">充电器/线材</a></li>
                <li><a href="#">自拍杆/支架</a></li>
                <li><a href="#">音箱</a></li>
                <li><a href="#">U盘/存储卡</a></li>
                <li><a href="#">排插</a></li>
                <li><a href="#">摄像机/镜头</a></li>
                <li><a href="#">智能硬件</a></li>
                <li><a href="#">生活周边</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 69)
                <li class="col-md-6" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as  $k=>$v)
                @if($k > 69 && $k < 75)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 40px;margin-left: 65px;margin-bottom: 47px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 75)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 40px;margin-left: 65px;margin-bottom: 47px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            @foreach($shouye as $k=>$v)
            @if($k > 75 && $k < 80)
            <li class="col-md-2 hou" style="padding: 0px; margin-right: 27px;">
                <img src="{{$v->pic}}" style="height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
            </li>
            @elseif($k == 80)
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="{{$v->pic}}" style="height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- 热销配件部分结束 -->
<!-- 品牌配件部分开始 -->
<div class="container">
    <div class="iphone">
        <div class="iphone_t home_t">
            <h3>品牌配件</h3>
            <ul>
                <li><a href="#">移动电源</a></li>
                <li><a href="#">耳机</a></li>
                <li><a href="#">充电器/线材</a></li>
                <li><a href="#">自拍杆/支架</a></li>
                <li><a href="#">音箱</a></li>
                <li><a href="#">U盘/存储卡</a></li>
                <li><a href="#">排插</a></li>
                <li><a href="#">摄像机/镜头</a></li>
                <li><a href="#">智能硬件</a></li>
                <li><a href="#">生活周边</a></li>
                <li class="gedu"><a href="#">更多></a></li>
            </ul>
        </div>
        <div class="iphone_b">
            <ul class="list-unstyled">
                @foreach($shouye as $k=>$v)
                @if($k == 81)
                <li class="col-md-6" style="padding: 0px;">
                    <img src="{{$v->pic}}">
                </li>
                @endif
                @endforeach
                @foreach($shouye as $k=>$v)
                @if($k > 81 && $k < 87)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 40px;margin-left: 65px;margin-bottom: 47px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @elseif($k == 87)
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="width: 160px;height: 160px;margin-top: 40px;margin-left: 65px;margin-bottom: 47px;">
                    <h5><a href="#">{{$v->title}}</a></h5>
                    <h6><a href="#">{{$v->youhui}}</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;{{$v->price}}</a></h5>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            @foreach($shouye as $k=>$v)
            @if($k > 87 && $k < 92)
            <li class="col-md-2 hou" style="padding: 0px; margin-right: 27px;">
                <img src="{{$v->pic}}" style="height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
            </li>
            @elseif($k == 92)
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="{{$v->pic}}" style="height: 134px;margin-top: 40px;margin-left: 45px;margin-bottom: 20px;">
                <h5><a href="#">{{$v->title}}</a></h5>
                <h6><a href="#">{{$v->youhui}}</a></h6>
                <h5 class="money"><a href="#">&yen;{{$v->price}}</a></h5>  
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- 品牌配件部分结束 -->
<!-- 广告图部分开始 -->
<div class="container">
    @foreach($shouye as $k=>$v)
    @if($k == 93)
    <div class="adv col-md-12">
        <img src="{{$v->pic}}">
    </div>
    @endif
    @endforeach
</div>
<div class="itm"></div>
<!-- 广告图部分结束 -->
@stop