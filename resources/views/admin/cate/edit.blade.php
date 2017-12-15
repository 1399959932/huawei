@extends('admin.index')
@section('content')
<style>.border{border-radius: 30px;}</style>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="">
    
    <!-- 提示框结束 -->

    <div class="col-md-12" style="height: auto;">
    	<form class="am-form am-form-horizontal" action="/cate" method="post" enctype="multipart/form-data">
            <div class="am-form-group">
                <label class="am-u-sm-1 am-form-label text-info"></label>
                <div class="am-u-sm-6 pull-left"  style="float:left;">
                    <input type="text"  name="title" class="border form-contro" value="{{$cate->name}}">
                    <!-- <small>输入你的名字，让我们记住你。</small> -->
                </div>
            </div>

            <div class="top10"></div>

            <div class="am-form-group">
                <label class="am-u-sm-1 am-form-label text-info"></label>
                <div class="am-u-sm-6 pull-left"  style="float:left;">
		           <select name="pid">
                        <option value="{{$cate->pid}}">顶级分类</option>
                        @foreach($cate as $k=>$v)
                        <option value=""></option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{csrf_field()}}
            {{method_field('PUT')}}
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
@endsection