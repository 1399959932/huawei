@extends('layouts.index')

@section('title')
<title>商品添加</title>
@endsection

@section('ycbt')
<style>.border{border-radius: 30px;}</style>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
         后台首页
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">购物车</a></li>
        <li class="am-active">添加</li>
    </ol>
    <!-- 提示框 -->
    <div class="tpl-content-scope">
		
    </div>
    <!-- 提示框结束 -->

    <div class="col-md-12" style="height: auto;">
    	<form class="am-form am-form-horizontal" action="/goods" method="post" enctype="multipart/form-data">
            <div class="am-form-group" >
                <label class="am-u-sm-1 am-form-label text-info">商品名称</label>
                <div class="am-u-sm-6 pull-left">
                    <input type="text"  name="title" class="border form-contro">
                    <!-- <small>输入你的名字，让我们记住你。</small> -->
                </div>
            </div>

            <div class="top10"></div>

            <div class="am-form-group">
                <label class="am-u-sm-1 am-form-label text-info">价格</label>
                <div class="am-u-sm-6 pull-left">
                    <input type="text" name="price" class="form-control border">
                    <!-- <small>邮箱你懂得...</small> -->
                </div>
            </div>

			<div class="top10"></div>
            <div class="am-form-group">
                <label class="am-u-sm-1 am-form-label text-info">库存</label>
                <div class="am-u-sm-6 pull-left" >
                    <input type="text"  name="kuchun" class="form-control border">
                    
                </div>
            </div>

            <div class="top10"></div>
            <div class="am-form-group">
                <label class="am-u-sm-1 am-form-label text-info">商品图片</label>
                <div class="am-u-sm-6 pull-left" >
                    <input type="file"  multiple  name="pic[]" class="form-control border">
                </div>
            </div>

            <div class="top10"></div>
            <div class="am-form-group">
                <label  class="am-u-sm-1 am-form-label text-info">商品详情</label>
                <div class="am-u-sm-6 pull-left" >
                     <script id="editor" type="text/plain" name="content" style="width:754px;height:500px;"></script>
                </div>
            </div>

            {{csrf_field()}}
            
			<div class="clearfix"></div>

			<div class="top20"></div>
            <div class="am-form-group">
                <div class="am-u-sm-3 am-u-sm-push-2 bg-info">
                    <button type="submit" class="am-btn am-btn-success col-md-12 border" >添加</button>
                </div>
            </div>
        </form>
    </div>

</div>

<script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script>
@endsection