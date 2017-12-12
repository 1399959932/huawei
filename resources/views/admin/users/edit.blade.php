@extends('admin.index')
@section('content')
<div class="tpl-content-wrapper" style="margin-left: -200px;">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
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
                    <form class="am-form am-form-horizontal" action="/users/{{$users->id}}" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">用户名</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" value="{{$users->username}}" name="username">
                                <small>请输入你想要的用户名</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-email" class="am-u-sm-3 am-form-label">邮箱</label>
                            <div class="am-u-sm-9">
                                <input type="email" id="user-email" value="{{$users->email}}" name="email">
                                <small>邮箱你懂得...</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-QQ" class="am-u-sm-3 am-form-label">头像</label>
                            <div class="am-u-sm-9" >
                                <input type="file" id="user-QQ" value="{{$users->hwfile}}" style="border:1px #ccc solid; width:406px; height: 28px;" name="hwfile">
                            </div>
                            <img src="{{$users->hwfile}}" style="width: 85px; height: 80px; margin-left:15px;" class="pull-right">
                        </div>

                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection