<!DOCTYPE html>
<html>
<head>
    <title>华为商城官网</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/holder.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/page.css">
    <script type="text/javascript">
        $(function(){
        //侧边导航栏
            $(".cebi > ul > li").hover(function(){
                $(".cebi > .content").show();
                $(".cebi > .content > .list").eq($(this).index()).show().siblings("list").hide();
            }).mouseleave(function(){
                $(".cebi > .content").hide();
                $(".cebi > .content > .list").eq($(this).index()).hide();               
            })
        // 滚动条
            $(window).scroll(function(){
                if($(this).scrollTop()>800){
                    $(".back").css("display","block");
                }else{
                    $(".back").css("display","none");
                }
            })
            $(".back_fh").click(function(){
                var dj=$(window).scrollTop();
                var timer=null;
                timer=setInterval(function(){
                    if(dj<=0){
                        clearInterval(timer);
                    }else{
                        dj-=10;
                        $(window).scrollTop(dj);
                    }
                })
            })
        })
    </script>
</head>
<body>
<!-- 导航条部分开始 -->
@section('header')
<div class="header">
    <!-- 头部开始 -->
    <div class="container">
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
        <div class="col-md-6 nav-right">
        <ul class="nav_ul list-unstyled">
            <li class="dl"><a href="#">请登录</a></li>
            <li><a href="#">注册</a></li>
            <li class="xian"><a href="#"></a></li>
            <li><a href="#">我的订单</a></li>
            <li class="xian"><a href="#"></a></li>
            <li><a href="#">购物车(0)</a></li>
        </ul>
        </div>
        <div class="clearfix"></div>
    <!-- logo开始 -->
        <div class="col-md-3" style="padding: 0px; margin-top: 18px;">
            <img src="holder.js/210x55?bg=#fac&text=logo" alt="">
        </div>
    <!-- logo结束 -->
    <!-- 导航分类开始 -->
    <div class="col-md-9 nav_title" style="padding: 0px;">
        <ul class="nav_cen  list-unstyled">
            <li class="active">
                <a href="#">华为专区</a>
            </li>
            <li class="active">
                <a href="#">荣耀专区</a>
            </li>
            <li class="active">
                <a href="#">HUAWEI&nbsp;Mate&nbsp;10</a>
            </li>
            <li class="active">
                <a href="#">荣耀9</a>
            </li>
            <li class="active">
                <a href="#">华为1212</a>
            </li>
            <li class="active">
                <a href="#">荣耀V9</a>
            </li>
        </ul>
    </div>
    <!-- 导航分类结束 -->
    <!-- 导航搜索开始 -->
    <div class="search col-md-3 pull-right">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
        </div>
    </div>
    <!-- 导航搜索结束 -->
    </div>
    <!-- 头部结束 -->
</div>
@show
<!-- 导航条部分结束 -->
@section('content')

@show
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
            <div class="col-md-1" style="padding:0px;margin-top: 47px;">
                <img src="holder.js/85x25?bg=#fea&text=logo">
            </div>
            <div class="col-md-6" style="margin-top: 25px;">
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
                <p class="ban"><a href="#">隐私政权</a>&nbsp;<a href="#">服务协议</a>&nbsp;Copyright8&nbsp;&copy;&nbsp;2012-2017&nbsp;华为软件技术有限公司&nbsp;版权所有&nbsp;保留一切权利</p>
            </div>
            <div class="pull-right" style="margin-top: 47px;">
                <img src="holder.js/90x32?bg=#afc">
                <img src="holder.js/90x32?bg=#afc">
                <img src="holder.js/90x32?bg=#afc">
                <img src="holder.js/90x32?bg=#afc">
                <img src="holder.js/90x32?bg=#afc">
            </div>
        </div>
    </div>
</div>
@show
<!-- 脚部部分结束 -->
<!-- 返回顶部开始 -->
<div class="back">
    <div class="back_1 back_fh">
        <a href="#">返回顶部</a>
    </div>
    <div class="back_1">
        <a href="#">帮助中心</a>
    </div>
    <div class="back_1">
        <a href="#">意见反馈</a>
    </div>
    <div class="back_1">
        <a href="#">在线客服</a>
    </div>
</div>
<!-- 返回顶部结束 -->
</body>
</html>