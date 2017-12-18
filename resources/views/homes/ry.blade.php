<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>荣耀官网</title>
	<link rel="stylesheet" type="text/css" href="/css/rygw.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		// 图片变大
		$(function(){
			 $(".zx >.container > .zx_cen > .zx_up > .up_left").hover(function(){
			 	$(this).find("img").stop().animate({
			 		width:"370px",
					height:"282px",
					top:"-10px",
					left:"-10px"
			 	},1000)
			 },function(){
			 	$(this).find("img").stop().animate({
			 		width:"360px",
					height:"272px",
					top:"0px",
					left:"0px"
			 	},1000)
			 })
		})
// 导航下拉
		$(function(){
			$(".header_title > .container > .title_ul > .cp").hover(function(){
				$(this).find(".dwt").stop().slideDown();
			},function(){
				$(this).find(".dwt").stop().slideUp();
			})
		})
	</script>
</head>
<body>
	<!-- 导航定位 -->
<div class="dhdw navbar-fixed-top">
	<!-- 荣耀官网 header 开始 -->
    <div class="header">
    	<div class="container">
    		<div class="col-md-12 header_nav text-right">
    			<ul class="list-unstyled list-inline">
    				<li><a href="#">华为商城</a></li>
    				<li><a href="#">花粉俱乐部</a></li>
    				<li><a href="#">EMUI</a></li>
    				<li class="dl"><a href="#">登录</a></li>
    				<li class="xian">|</li>
    				<li><a href="#">注册</a></li>
    			</ul>
    		</div>
    	</div>
    </div>


    <div class="header_title">
      <div class="container">
    	<div class="col-md-1 no-padding">
    		<img src="holder.js/111x60">
    	</div>
    	<ul class="list-unstyled list-inline title_ul">
    		<li class="cp">
    			<a href="#">产品</a>
    			<div class="dwt">
    				<dl class=" dwt_ul ul_left">
    					<dt><a href="#">手机</a></dt>
    					<dd><a href="#">荣耀V10</a></dd>
    					<dd><a href="#">荣耀畅玩7X</a></dd>
    					<dd><a href="#">荣耀V9 play</a></dd>
    					<dd><a href="#">更多 ></a></dd>
    				</dl>
    				<dl class=" dwt_ul">
    					<dt><a href="#">平板</a></dt>
    					<dd><a href="#">荣耀Waterplay</a></dd>
    					<dd><a href="#">荣耀畅玩平板2</a></dd>
    					<dd><a href="#">荣耀平板2</a></dd>
    					<dd><a href="#">更多 ></a></dd>
    				</dl>
    				<dl class=" dwt_ul">
    					<dt><a href="#">穿戴设备</a></dt>
    					<dd><a href="#">荣耀畅玩手环A2</a></dd>
    					<dd><a href="#">荣耀手表S1</a></dd>
    					<dd><a href="#">荣耀畅玩手环A1</a></dd>
    					<dd><a href="#">更多 ></a></dd>
    				</dl>
    				<dl class=" dwt_ul">
    					<dt><a href="#">智能家庭</a></dt>
    					<dd><a href="#">荣耀分布式路由</a></dd>
    					<dd><a href="#">荣耀路由2</a></dd>
    					<dd><a href="#">荣耀路由X1增强版</a></dd>
    					<dd><a href="#">更多 ></a></dd>
    				</dl>
    				<dl class=" dwt_ul">
    					<dt><a href="#">配件</a></dt>
    					<dd><a href="#">荣耀移动电源</a></dd>
    					<dd><a href="#">荣耀自拍杆</a></dd>
    					<dd><a href="#">荣耀小口哨</a></dd>
    					<dd><a href="#">更多 ></a></dd>
    				</dl>
    				<div class="list_xt"></div>
    				<dl class="dwt_ul ul_width">
    					<dt>推荐</dt>
    					<dd><div class="dd_tupian"><img src="img/img12.png"></div></dd>
    				</dl>
    			</div>
    		</li>
    		<li><a href="#">伙伴通</a></li>
    		<li><a href="#">关于荣耀</a></li>
    		<li><a href="#">新闻</a></li>
    		<li><a href="#">视频</a></li>
    		<li><a href="#">活动</a></li>
    		<li><a href="#">服务支持</a></li>
    	</ul>
    	<div class="search col-md-3 pull-right">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
        </div>
    </div>
</div>
<!-- 荣耀官网 header 结束 -->
</div>
<!-- 轮播图 开始 -->
    <div class="lbt" >
    	<div class="container">
    		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
                @foreach($goods as $k=>$v)
			    <div class="item @if($k==0) active @endif">
			      <img src="{{$v->pic}}" alt="..." >
			      <div class="carousel-caption">
			      </div>
			    </div>
                @endforeach
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
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
    	</div>
    </div>
<!-- 轮播图 结束 -->
<!-- 找到你的手机 开始 -->
    <div class="find">
    	<div class="container">
    		<div class="find_cen">
    			<p>找到你的荣耀手机</p>
    			<div class="select">
    				<div class="col-md-3">
    					<select>
    						<option>产品类型</option>
    						<option>荣耀系列</option>
    						<option>畅玩系列</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<select>
    						<option>屏幕尺寸</option>
    						<option>4.6-5.0英尺</option>
    						<option>5.1-5.5英尺</option>
    						<option>5.6英尺及以上</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<select>
    						<option>网络制式</option>
    						<option>全网通</option>
    						<option>移动4G</option>
    						<option>联通4G</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<select>
    						<option>发布时间</option>
    						<option>2017年</option>
    						<option>2016年</option>
    						<option>2015年</option>
    						<option>2014年</option>
    					</select>
    				</div>
    			</div>
    			<!-- 进度条 开始 -->
    			<div class="jdt"></div>
    			<!-- 进度条 结束 -->
    			<!-- 介绍 开始 -->
    			<div class="jieshao">
                    @foreach($shouye as $k=>$v)
    				<img src="{{$v->pic}}" style="width: 475px;height: 510px;">
                    @endforeach
    				<div class="jieshao_right">
    					<h3>荣耀V10</h3>
    					<h4>我AI的快</h4>
    					<h5>制式：全网通标配版／全网通高配版／全网通尊享版</h5>
    					<h5>颜色：幻夜黑／极光蓝／沙滩金／魅丽红</h5>
    					<h5>容量：4GB+64GB／6GB+64GB／6GB+128GB</h5>
    					<button>立即购买 ></button>
    					<button class="jrdb">加入对比 ></button>
    				</div>
    			</div>
    			<!-- 介绍 结束 -->
    		</div>
    	</div>
    </div>
<!-- 找到你的手机 结束 -->
<!-- 相关推荐 开始 -->
    <div class="xgtj">
    	<div class="container">
    		<div class="xgtj_cen">
    			<p>相关推荐<span>更多></span></p>
    			<div class="cen_nav">
    				<div class="col-md-3 nav_tu tu_1">
    					<h3>荣耀V10</h3>
    					<h5>我AI的快</h5>
    					<img src="holder.js/198x195">
    					<button>立即购买 ></button>
    					<button class="ljgm_left">立即购买 ></button>
    				</div>
    				<div class="col-md-3 nav_tu tu_2">
    					<h3>荣耀V10</h3>
    					<h5>我AI的快</h5>
    					<img src="holder.js/198x195">
    					<button>立即购买 ></button>
    					<button class="ljgm_left">立即购买 ></button>
    				</div>
    				<div class="col-md-3 nav_tu tu_2">
    					<h3>荣耀V10</h3>
    					<h5>我AI的快</h5>
    					<img src="holder.js/198x195">
    					<button>立即购买 ></button>
    					<button class="ljgm_left">立即购买 ></button>
    				</div>
    				<div class="col-md-3 nav_tu tu_2">
    					<h3>荣耀V10</h3>
    					<h5>我AI的快</h5>
    					<img src="holder.js/198x195">
    					<button>立即购买 ></button>
    					<button class="ljgm_left">立即购买 ></button>
    				</div>
    			</div>
    			<div style="margin-top: 20px;">
    				<img src="" style="width: 1140px;height: 480px;">
    			</div>
    		</div>
    	</div>
    </div>
<!-- 相关推荐 结束 -->
<!-- 最新消息 开始 -->
    <div class="zx">
    	<div class="container">
    		<div class="zx_cen">
    			<p>最新消息<span>更多></span></p>
    			<div class="zx_up">
    				<div class="col-md-4 up_left lefts">
    					<div class="imgs"><img src="img/img7.png" style="width: 360px;height: 272px;"></div>
    					<h4>AI速度革命席卷全球,荣耀V10伦敦正式发布</h4>
    					<h5>2017-12-06</h5>
    				</div>
    				<div class="col-md-4 up_left">
    					<div class="imgs">
    					<img src="holder.js/360x272"></div>
    					<h4>AI速度革命席卷全球,荣耀V10伦敦正式发布</h4>
    					<h5>2017-12-06</h5>
    				</div>
    				<div class="col-md-4 up_left">
    					<div class="imgs">
    					<img src="holder.js/360x272"></div>
    					<h4>AI速度革命席卷全球,荣耀V10伦敦正式发布</h4>
    					<h5>2017-12-06</h5>
    				</div>
    			</div>
    			<div class="zx_bot">
    				<div class="col-md-6 bot_left">
    					<img src="holder.js/570x414">
    					<h3>在线客服</h3>
    					<h4>与专业人员联系</h4>
    					<button>开始沟通 ></button>
    				</div>
    				<div class="col-md-6 bot_left">
    					<img src="holder.js/570x414?bg=#aef">
    					<h3>服务中心</h3>
    					<h4>你附近的服务中心</h4>
    					<button>门店地址 ></button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
<!-- 最新消息 结束 -->
<!-- 底部上 开始 -->
    <div class="dbs">
    	<div class="container">
    		<div class="dbs_up">
    			<div class="col-md-6 up_lefts">
    				<ul class="list-unstyled list-inline ul_one one_first">
    					<li class="gyry"><a href="#">关于荣耀</a></li>
    					<li><a href="#">荣耀大事记</a></li>
    					<li><a href="#">新闻中心</a></li>
    				</ul>
    				<ul class="list-unstyled list-inline ul_one">
    					<li class="gyry" style="width: 105px;"><a href="#">产品</a></li>
    					<li style="width: 105px;"><a href="#">手机</a></li>
    					<li><a href="#">平板</a></li>
    					<li><a href="#">穿戴设备</a></li>
    					<li><a href="#">智能家庭</a></li>
    					<li><a href="#">配件</a></li>
    				</ul>
    				<ul class="list-unstyled list-inline ul_one">
    					<li class="gyry"><a href="#">活动</a></li>
    					<li><a href="#">近期活动</a></li>
    					<li><a href="#"></a></li>
    					<li style="margin-top: 30px;" class="gyry"><a href="#">服务支持</a></li>
    					<li><a href="#">在线客服</a></li>
    					<li><a href="#">服务中心</a></li>
    				</ul>
    				<ul class="list-unstyled list-inline ul_one one_second">
    					<li class="gyry"><a href="#">快速链接</a></li>
    					<li><a href="#">物料下载</a></li>
    					<li><a href="#">Vmall购机秘籍</a></li>
    					<li class="dw">
    						<a href="#">移动官网</a>
    						<div class="gwdw">
    							<img src="img/img8.png">
    						</div>
    					</li>
    					<li><a href="#">伙伴通</a></li>
    				</ul>
    				<div class="xiantiao"></div>
    			</div>
    			<div class="col-md-6 up_rights">
    				<div class="rights">
    					<ul class="list-unstyled list-inline">
    						<li><a href="#">联系我们</a></li>
    						<li class="rx"><a href="#">热线电话: (24小时服务热线)</a></li>
    						<li><a href="#">400-830-8300</a></li>
    						<li><a href="#">800-830-8300(座机)</a></li>
    						<li><button><img src="img/img10.png">&nbsp;在线客服</button></li>
    					</ul>
    				</div>  
    				<div class="center">
    					<ul class="list-unstyled list-inline">
    						<li><a href="#">客服邮箱：</a></li>
    						<li><a href="#">任何建议和意见都欢迎向我们反馈</a></li>
    						<li><button><img src="img/img11.png">&nbsp;邮件我们</button></li>
    					</ul>
    				</div> 
    				<div class="youce">
    					<p>关注我们:</p>
    					<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    				</div>                           
    			</div>
    		</div>
    	</div>
    </div>
<!-- 底部上 结束 -->
<!-- footer 开始 -->
    <div class="footer">
    	<div class="container">
    		<div class="col-md-12 footer_up">
    			<ul class="list-unstyle list-inline">
    				<li><a href="#">法律声明</a></li>
    				<li class="fgx">|</li>
    				<li><a href="#">隐私政策</a></li>
    				<li class="fgx">|</li>
    				<li><a href="#">负责条款</a></li>
    				<li class="fgx">|</li>
    				<li><a href="#">关于cookie3</a></li>
    			</ul>
    		</div>
    		<div class="footer_bot col-md-12">Copyright © 2011-2017 华为软件技术有限公司 版权所有 保留一切权利  | <img src="img/img9.png"> 苏公网安备 32011402010006号 苏ICP备17040376号-4</div>
    	</div>
    </div>
<!-- footer 结束 -->
</body>
</html>

