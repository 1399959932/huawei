@extends('admin.index')

 
@section('weizhi')
@endsection
<style>
.tpl-logo img{
    margin-top: 30px;
}
[class*=am-icon-]:before{
    margin-top: 30px;
}
</style>
@section('content')
<div class="tpl-content-wrapper" style="margin-left: -200px;">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单2
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> 
                    </div>
                </div>
            </div>


        </div>
        <div class="tpl-block ">

            <div class="am-g tpl-amazeui-form">


                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" action="/users" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" placeholder="姓名 / Name"  name="username">
                                <small>输入你的名字，让我们记住你。</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-email" class="am-u-sm-3 am-form-label ">邮箱</label>
                            <div class="am-u-sm-9">
                                <input type="email" id="user-email" placeholder="请输入你的邮箱" name="email">
                                <small>邮箱你懂得...</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" id="user-phone" placeholder="请输入你的密码" name="password">
                            </div>
                        </div>

                       <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label"></label>
                            <div class="am-u-sm-9">
                                <input type="password" id="user-phone" placeholder="再次输入你的密码">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-QQ" class="am-u-sm-3 am-form-label">头像</label>
                            <div class="am-u-sm-9">
                                <input type="file" id="user-QQ"  name="hwfile" placeholder="请选择你的头像" style="border:1px #ccc solid; width:406px; height: 28px;">
                            </div>
                        </div>
                        {{csrf_field()}}
                        <div class="am-form-group">
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
