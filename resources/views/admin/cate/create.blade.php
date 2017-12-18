@extends('admin.index')

<style>
.tpl-logo img{
    margin-top: 30px;
}
[class*=am-icon-]:before{
    margin-top: 30px;
}
</style>
@section('content')
<div class="">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>


        </div>
        <div class="tpl-block ">

            <div class="am-g tpl-amazeui-form">


                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" action="/cate" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">分类名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" placeholder="姓名 / Name"  name="name">
                            </div>
                        </div>
                        <div class="am-form-group" >
                            <label for="user-name" class="am-u-sm-3 am-form-label pull-left" >分类等级</label>
                            <div class="am-u-sm-4 pull-left"  >
                                <select name="pid">
                                    <option value="0">顶级分类</option>
                                    @foreach($cate as $k=>$v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary">添加</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
