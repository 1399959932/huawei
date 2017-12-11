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
    <!-- 侧边选项卡开始 -->
    <div class="cebi">
        <ul>
            <li id="cb_1">
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
            </li>
            <li id="cb_1">
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
            </li>
            <li id="cb_1">
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
            </li>
            <li id="cb_1">
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
            </li>
            <li id="cb_1">
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
            </li>
            <li id="cb_1">
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
            </li>
        </ul>
        <div class="content">
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="list_t">
                    <p class="liu"><a href="#">浏览笔记本&nbsp;&&nbsp;平板频道</a></p>
                    <p class="col-md-offset-8"><a href="#">></a></p>
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="list_t">
                    <p class="liu"><a href="#">浏览穿戴频道</a></p>
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="list_t">
                    <p class="liu"><a href="#">浏览智能家居频道</a></p>
                    <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="list_t">
                    <p class="liu"><a href="#">浏览通用配件频道</a></p>
                    <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="list_t">
                    <p class="liu"><a href="#">浏览专属配件频道</a></p>
                    <p class="col-md-offset-8 col-md-1"><a href="#">></a></p>
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
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                    <div class="b_cp b_cp1">
                        <img src="holder.js/161x170?bg=#acd">
                        <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;10</a></h5>
                        <h5 class="mo"><a href="#">&yen;3899</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- 侧边选项卡结束 -->
    <!-- 轮播图下开始 -->
    <div class="container">
        <div class="lbx">
            <div class="col-md-3 lbx_1">
                <img src="holder.js/60x60?bg=#fec" style="border-radius: 100%; margin: 10px; float: left;">
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
                <div class="col-md-2 xt" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
                <div class="col-md-2 xt xt1" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
                <div class="col-md-2 xt xt1" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
                <div class="col-md-2 xt xt1" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
                <div class="col-md-2 xt xt1" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
                <div class="col-md-2 xt xt1" style="padding: 0px;">
                    <img src="holder.js/50x45?bg=#ace">
                    <h6>优选配件</h6>
                </div>
            </div>
            <div class="col-md-3 lbx_1 lbx_3">
                <div class="lb_t">
                    <p><a href="#">公告</a></p>
                </div>
                <div class="lb_b">
                    <ul>
                        <li class="col-md-4">
                            <img src="holder.js/15x15?bg=#acd">
                            <span>优购码</span>
                        </li>
                        <li class="col-md-4">
                            <img src="holder.js/15x15?bg=#acd">
                            <span>优购码</span>
                        </li>
                        <li class="col-md-4">
                            <img src="holder.js/15x15?bg=#acd">
                            <span>优购码</span>
                        </li>
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
        <div class="col-xs-3 dhx_1">
            <img src="holder.js/97px160?bg=#def">
        </div>
        <div class="col-xs-3 dhx_1">
            <img src="holder.js/97px160?bg=#acd">
        </div>
        <div class="col-xs-3 dhx_1">
            <img src="holder.js/97px160?bg=#ecc">
        </div>
        <div class="col-xs-3 dhx_1">
            <img src="holder.js/100px160?bg=#fea">
        </div>
    </div>
</div>
<!-- 导航下部分结束 -->
<!-- 热销单品部分开始 -->
<div class="container">
    <div class="rexi">
        <h3>热销单品</h3>
        <ul class="list-unstyled">
            <li class="col-md-2">
                <div class="rxdp">
                    <img src="holder.js/100px594?bg=#ced">  
                </div>
            </li>
            <li class="col-md-2">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-left: 42px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-left: 42px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-left: 41px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-top: 14px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-top: 14px; margin-left: 42px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-top: 14px; margin-left: 42px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
            <li class="col-md-2" style="margin-top: 14px; margin-left: 41px;">
                <div class="item">
                    <img src="holder.js/100px200?bg=#afe">
                    <h5><a href="#">荣耀V9&nbsp;play</a></h5>
                    <h6><a href="#">最高优惠200元</a></h6>
                    <h5 class="money"><a href="#">&yen;999</a></h5>  
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- 热销单品部分结束 -->
<!-- 精品推荐部分开始 -->
<div class="container">
    <div class="jptj">
        <h3>精品推荐</h3>
        <ul class="list-unstyled">
            <li class="col-md-2 jipi" style="padding: 0px;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5> 
            </li>
            <li class="col-md-2 jipi" style="padding: 0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5>  
            </li>
            <li class="col-md-2 jipi" style="padding: 0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5>  
            </li>
            <li class="col-md-2 jipi" style="padding: 0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5>  
            </li>
            <li class="col-md-2 jipi" style="padding: 0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5>  
            </li>
            <li class="col-md-1 jipi_1" style="padding: 0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/110x200?bg=#afe">
                <h5><a href="#">HUAWEI&nbsp;WATCH&nbsp;2&nbsp;Pro</a></h5>
                <h6><a href="#">独立通话(eSIM技术)</a></h6>
                <h5 class="money"><a href="#">&yen;2588</a></h5>  
            </li>
        </ul>
    </div>
</div>
<!-- 精品推荐部分结束 -->
<!-- 广告图部分开始 -->
<div class="container">
    <div class="adv col-md-12">
        <img src="holder.js/100px120?bg=#fea">
    </div>
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
                <li class="col-md-3" style="padding: 0px;">
                    <img src="holder.js/290x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
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
                <li class="col-md-3" style="padding: 0px;">
                    <img src="holder.js/290x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
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
                <li class="col-md-3" style="padding: 0px;">
                    <img src="holder.js/290x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
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
                <li class="col-md-3" style="padding: 0px;">
                    <img src="holder.js/290x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
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
                <li class="col-md-6" style="padding: 0px;">
                    <img src="holder.js/590x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            <li class="col-md-2 hou" style="padding: 0px;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-1 hous" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/110x200?bg=#afe">
                <h5><a href="#">华为路由</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
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
                <li class="col-md-6" style="padding: 0px;">
                    <img src="holder.js/590x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            <li class="col-md-2 hou" style="padding: 0px;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-1 hous" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/110x200?bg=#afe">
                <h5><a href="#">华为路由</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
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
                <li class="col-md-6" style="padding: 0px;">
                    <img src="holder.js/590x345?bg=#dcf">
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
                <li class="col-md-3 gao" style="padding: 0px; margin-top: 15px;">
                    <img src="holder.js/290x250?bg=#dcf">
                    <h5><a href="#">HUAWEI&nbsp;Mate&nbsp;9&nbsp;Pro</a></h5>
                    <h6><a href="#">领券享优惠+赠好礼</a></h6>
                    <h5 class="money yuan"><a href="#">&yen;4899</a></h5>
                </li>
            </ul>
        </div>
    </div>
    <div class="house">
        <ul class="list-unstyled">
            <li class="col-md-2 hou" style="padding: 0px;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-2 hou" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/215x200?bg=#afe">
                <h5><a href="#">华为路由&nbsp;WS318&nbsp;增强版</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
            <li class="col-md-1 hous" style="padding:0px; border-left: 1px solid #f5f5f5;">
                <img src="holder.js/110x200?bg=#afe">
                <h5><a href="#">华为路由</a></h5>
                <h6><a href="#">高性能双天线</a></h6>
                <h5 class="money"><a href="#">&yen;129</a></h5>  
            </li>
        </ul>
    </div>
</div>
<!-- 品牌配件部分结束 -->
<!-- 广告图部分开始 -->
<div class="container">
    <div class="adv col-md-12">
        <img src="holder.js/100px120?bg=#fea">
    </div>
</div>
<div class="itm"></div>
<!-- 广告图部分结束 -->
@stop