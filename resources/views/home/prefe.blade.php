@extends('home.classify')

@section('title')
<title>华为专区</title>
@stop

<link rel="stylesheet" type="text/css" href="/css/prefe.css">

@section('content')
<!-- 轮播图部分结束 -->
<div class="slide">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>

        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >
            @foreach($lbt as $k=>$v)

            <div class="item  @if($k==0) active @endif">
               
                <img src="{{$v->pic}}" alt="..." width="100%">
                <div class="carousel-caption"></div>
            </div>
            @endforeach
           
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- 轮播图部分结束 -->
<!-- 华为精品部分开始 -->
<div class="container">
	<div class="hwjp">
		<div class="jp_t">
			<span></span>
			<h2>华为精品</h2>
		</div>
		<div class="jp_b">
			<div class="b_t">
                @foreach($tupian as $k=>$v)
                @if($k > 71 && $k< 75)
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea;">
					<img src="{{$v->pic}}" width="299px;" height="278px;">
				</div>
                @elseif($k == 75)
				<div class="col-md-3" style="padding: 0px; border: 1px solid #eaeaea; border-left: none;">
					<img src="{{$v->pic}}" width="299px;" height="278px;">
				</div> 
                @endif 
                 @endforeach
			</div>
			<div class="b_b">
                @foreach($tupian as $k=>$v)
                @if($k > 75 && $k < 78)
				<div class="col-md-4" style="padding: 0px;">
					<img src="{{$v->pic}}" width="386px;" height="190px;">
                    <div class="jie shao">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p class="lc"><a href="#">EMUI5.1流畅体验</a></p>
                        <p class="jia">
                            <span></span>
                            <a href="#">&yen;1749</a>
                        </p>
                    </div>
				</div>
                @elseif($k == 78 )
				<div class="col-md-4" style="margin-left: -10px;">
					<img src="{{$v->pic}}" width="386px;" height="190px;">
                    <div class="jie">
                        <h3><a href="#">华为平板M3&nbsp;青春版8英寸</a></h3>
                        <p class="lc"><a href="#">EMUI5.1流畅体验</a></p>
                        <p class="jia">
                            <span></span>
                            <a href="#">&yen;1749</a>
                        </p>
                    </div>
				</div>
                @endif
                @endforeach
			</div>
		</div>
	</div>
</div>
<!-- 华为精品部分结束 -->
<!-- 手机部分开始 -->
<div class="container">
    <div class="cell">
        <div class="cell_t">
            <span></span>
            <h2><a href="#">手机</a></h2>
        </div>
        <div class="cell_c">
            <ul>
                <li class="mate"><a href="#">HUAWEI&nbsp;Mate系列</a></li>
                <li><a href="#">HUAWEI&nbsp;P系列</a></li>
                <li><a href="#">HUAWEI&nbsp;nova系列</a></li>
                <li><a href="#">HUAWEI&nbsp;麦芒系列</a></li>
                <li><a href="#">华为畅享系列</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="cell_b">
            @foreach($tupian as $k=>$v)
            @if($k == 79)
            <div class="col-md-3" style="padding: 0px;">
                <img src="{{$v->pic}}" width="291px;" height="592px;">
            </div>
            @endif
            @endforeach
            <div class="col-md-6" style="padding: 0px;">
                <div class="pp">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div> 
                @foreach($tupian as $k=>$v)
                @if($k == 80)              
                <img src="{{$v->pic}}" width="594px;" height="290px;">
                @endif
                @endforeach
                <div class="pin">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 81 )
                <img src="{{$v->pic}}" style="margin-top: 12px;" width="291px;" height="290px;">
                @endif
                @endforeach
                <div class="pai">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 82 )
                <img src="{{$v->pic}}" style="margin-top: 12px;" width="291px;" height="290px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-3" style="padding: 9px;margin-top: -9px;">
                <div class="ppm">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 83)
                <img src="{{$v->pic}}" width="291px;" height="290px;">
                @endif
                @endforeach
                <div class="ming">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 84)
                <img src="{{$v->pic}}" width="291px;" height="290px;" style="margin-top: 14px;">
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- 手机部分结束 -->
<!-- 笔记本电脑部分开始 -->
<div class="container">
    <div class="note">
        <div class="note_t">
            <span></span>
            <h2><a href="#">笔记本电脑</a></h2>
        </div>
        <div class="note_c">
            <ul>
                <li class="com"><a href="#">笔记本电脑</a></li>
                <li><a href="#">笔记本配件</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="note_b">
            <div class="col-md-4" style="padding: 0px;">
                @foreach($tupian as $k=>$v)
                @if($k == 85)
                <img src="{{$v->pic}}">
                @endif
                @endforeach
            </div>
            <div class="col-md-4 grid" style="padding: 0px; background: #fff; height: 375px; border-right: 1px solid #eaeaea;">
                <div class="info">
                    <h3><a href="#">HUAWEI&nbsp;MateBook&nbsp;D</a></h3>
                    <p class="mian"><a href="#">尊享6期分期免息</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;4988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 86)
                <img src="{{$v->pic}}" style="border-top: 1px solid #eaeaea; margin-left: 124px; margin-top: 72px; margin-bottom: 110px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-4 grid" style="padding: 0px; background: #fff; height: 375px; border-right: 1px solid #eaeaea;">
                <div class="info">
                    <h3><a href="#">HUAWEI&nbsp;MateBook&nbsp;D</a></h3>
                    <p class="mian"><a href="#">&nbsp;</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;4988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 87)
                <img src="{{$v->pic}}" style="border-top: 1px solid #eaeaea; margin-left: 124px; margin-top: 72px; margin-bottom: 110px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-8 ce" style="padding: 0px;">
                <div class="bian">
                    <h3><a href="#">HUAWEI&nbsp;MateBook</a></h3>
                    <p class="mian"><a href="#">&nbsp;</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;6988</a>
                    </p>
                </div>
                 @foreach($tupian as $k=>$v)
                @if($k == 88)
                <img src="{{$v->pic}}" style="border-bottom: 1px solid #eaeaea; border-top: 1px solid #eaeaea;">
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- 笔记本电脑部分结束 -->
<!-- 平板穿戴部分开始 -->
<div class="container">
    <div class="note dress">
        <div class="note_t">
            <span></span>
            <h2><a href="#">平板&穿戴</a></h2>
        </div>
        <div class="note_c">
            <ul>
                <li class="com ping"><a href="#">平板电脑</a></li>
                <li><a href="#">手环/手表</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="note_b dress_b">
            <div class="col-md-4" style="padding: 0px; height:740px;background: red;">
                @foreach($tupian as $k=>$v)
                @if($k == 89)
                <img src="{{$v->pic}}">
                @endif
                @endforeach
            </div>
            <div class="col-md-4 grid" style="padding: 0px; background: #fff; border-right: 1px solid #eaeaea; border-top: 1px solid #eaeaea;">
                <div class="info">
                    <h3><a href="#">HUAWEI&nbsp;MateBook&nbsp;D</a></h3>
                    <p class="mian"><a href="#">尊享6期分期免息</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;4988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 91)
                <img src="{{$v->pic}}" style="width: 200px;height: 200px; margin-left: 121px; margin-top: 60px; margin-bottom:110px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-4 grid" style="padding: 0px; background: #fff; border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
                <div class="info">
                    <h3><a href="#">HUAWEI&nbsp;MateBook&nbsp;D</a></h3>
                    <p class="mian"><a href="#">&nbsp;</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;4988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 92)
                <img src="{{$v->pic}}" style=" width: 200px ; height: 200px; margin-left: 120px; margin-top: 60px; margin-bottom:110px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-8 ce" style="padding: 0px;">
                <div class="bian">
                    <h3><a href="#">HUAWEI&nbsp;MateBook</a></h3>
                    <p class="mian"><a href="#">&nbsp;</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;6988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 93)
                <img src="{{$v->pic}}" style="border-bottom: 1px solid #eaeaea; border-top: 1px solid #eaeaea; width: 800px; height: 372px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-8 ce" style="padding: 0px; background: red;">
                <div class="bian">
                    <h3><a href="#">HUAWEI&nbsp;MateBook</a></h3>
                    <p class="mian"><a href="#">&nbsp;</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;6988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 94)
                <img src="{{$v->pic}}" style="border-bottom: 1px solid #eaeaea; border-top: 1px solid #eaeaea; width: 800px; height: 372px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-4 grid" style="padding: 0px; background: #fff; height: 375px; border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
                <div class="info">
                    <h3><a href="#">HUAWEI&nbsp;MateBook&nbsp;D</a></h3>
                    <p class="mian"><a href="#">尊享6期分期免息</a></p>
                    <p class="yuan">
                        <span></span>
                        <a href="#">&yen;4988</a>
                    </p>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 95)
                <img src="{{$v->pic}}" style=" width: 200px; height: 200px; margin-left: 134px; margin-top: 40px;">
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- 平板穿戴部分结束 -->
<!-- 智能家居部分开始 -->
<div class="container">
    <div class="cell znjj">
        <div class="cell_t">
            <span></span>
            <h2><a href="#">智能家居</a></h2>
        </div>
        <div class="cell_c">
            <ul>
                <li class="mate you"><a href="#">子母路由</a></li>
                <li><a href="#">电视盒子</a></li>
                <li><a href="#">电力猫</a></li>
                <li><a href="#">路由器</a></li>
                <li><a href="#">随性WiFi</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="cell_b">
            <div class="col-md-3" style="padding: 0px;">
                @foreach($tupian as $k=>$v)
                @if($k == 96)
                <img src="{{$v->pic}}" width="291px;" height="592px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-6" style="padding: 0px;">
                <div class="pp">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>  
                @foreach($tupian as $k=>$v)
                @if($k == 97)            
                <img src="{{$v->pic}}" width="594px;" height="290px;">
                @endif
                @endforeach
                <div class="pin">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 98)
                <img src="{{$v->pic}}" style="margin-top: 12px;width: 291px; height: 290px;">
                @endif
                @endforeach
                <div class="pai">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 99)
                <img src="{{$v->pic}}" style="margin-top: 12px; margin-left: 9px; width: 291px; height: 290px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-3" style="padding: 9px;margin-top: -9px;">
                <div class="ppm">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 100)
                <img src="{{$v->pic}}" style="width: 291px; height: 290px;">
                @endif
                @endforeach
                <div class="ming">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 101)
                <img src="{{$v->pic}}" style="margin-top: 12px; width: 291px; height: 290px;">
                @endif
                @endforeach
            </div>
        </div>
        <div class="cell_b_x">
            <ul class="list-unstyled">
                @foreach($tupian as $k=>$v)
                @if($k >101 && $k < 106)
                <li class="col-md-2 x_nr" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 25px; width: 120px; height: 120px;">
                    <h3><a href="#">华为随行WiFi&nbsp;2&nbsp;mini</a></h3>
                    <p class="usb"><a href="#">4G三网通&nbsp;USB供电</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @elseif($k == 106)
                <li class="col-md-2 x_nr" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 25px; width: 120px; height: 120px;">
                    <h3><a href="#">华为随行WiFi&nbsp;2&nbsp;mini</a></h3>
                    <p class="usb"><a href="#">4G三网通&nbsp;USB供电</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @endif
                @endforeach
                @foreach($tupian as $k=>$v)
                @if($k == 107)
                <li class="col-md-2 x_nr" style="padding: 0px; width: 133px;">
                    <img src="{{$v->pic}}" style="margin-top: 25px; width: 128px; height: 120px; margin-left: 5px;">
                    <h3><a href="#">华为随</a></h3>
                    <p class="usb"><a href="#">4G三网通</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 智能家居部分结束 -->
<!-- 热销配件部分开始 -->
<div class="container">
    <div class="cell znjj rxpj">
        <div class="cell_t">
            <span></span>
            <h2><a href="#">热销配件</a></h2>
        </div>
        <div class="cell_c">
            <ul>
                <li class="mate you tmo"><a href="#">贴膜</a></li>
                <li><a href="#">保护壳</a></li>
                <li><a href="#">保护套</a></li>
                <li><a href="#">表带</a></li>
                <li><a href="#">耳机</a></li>
                <li><a href="#">VR眼睛/相机</a></li>
                <li><a href="#">电源/充电器/线材</a></li>
                <li><a href="#">自拍杆/支架</a></li>
                <li><a href="#">智能硬件</a></li>
                <li class="gd"><a href="#">更多&nbsp;&nbsp;▶</a></li>
            </ul>
        </div>
        <div class="cell_b">
            <div class="col-md-3" style="padding: 0px;">
                @foreach($tupian as $k=>$v)
                @if($k == 108)
                <img src="{{$v->pic}}" width="291px;" height="592px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-6" style="padding: 0px;">
                <div class="pp">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>  
                @foreach($tupian as $k=>$v)  
                @if($k == 109)           
                <img src="{{$v->pic}}" width="594px;" height="290px;">
                @endif
                @endforeach
                <div class="pin">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 110)
                <img src="{{$v->pic}}" style="margin-top: 12px; width: 291px; height: 290px;">
                @endif
                @endforeach
                <div class="pai">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 111)
                <img src="{{$v->pic}}" style="margin-top: 12px; margin-left: 9px; width: 291px; height: 290px;">
                @endif
                @endforeach
            </div>
            <div class="col-md-3" style="padding: 9px;margin-top: -9px;">
                <div class="ppm">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 112)
                <img src="{{$v->pic}}" style="width: 291px; height: 290px;">
                @endif
                @endforeach
                <div class="ming">
                    <span></span>
                    <h3><a href="#">HUAWEI&nbsp;nova&nbsp;2&nbsp;Plus</a></h3>
                    <h5><a href="#">&yen;2399</a></h5>
                </div>
                @foreach($tupian as $k=>$v)
                @if($k == 113)
                <img src="{{$v->pic}}" style="margin-top: 12px; width: 291px; height: 290px;">
                @endif
                @endforeach
            </div>
        </div>
        <div class="cell_b_x">
            <ul class="list-unstyled">
                @foreach($tupian as $k=>$v)
                @if($k >113 && $k < 118)
                <li class="col-md-2 x_nr" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 25px; width: 120px; height: 120px;">
                    <h3><a href="#">华为随行WiFi&nbsp;2&nbsp;mini</a></h3>
                    <p class="usb"><a href="#">4G三网通&nbsp;USB供电</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @elseif($k == 118)
                <li class="col-md-2 x_nr" style="padding: 0px;">
                    <img src="{{$v->pic}}" style="margin-left: 45px;margin-top: 25px; width: 120px; height: 120px;">
                    <h3><a href="#">华为随行WiFi&nbsp;2&nbsp;mini</a></h3>
                    <p class="usb"><a href="#">4G三网通&nbsp;USB供电</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @endif
                @endforeach
                @foreach($tupian as $k=>$v)
                @if($k == 119)
                <li class="col-md-2 x_nr" style="padding: 0px; width: 133px;">
                    <img src="{{$v->pic}}" style="margin-top: 25px; width: 120px; height: 120px;">
                    <h3><a href="#">华为随</a></h3>
                    <p class="usb"><a href="#">4G三网</a></p>
                    <p class="jige"><a href="#">&yen;279</a></p> 
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 热销配件部分结束 -->
@stop