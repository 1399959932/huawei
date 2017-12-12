@extends('admin.index')


@section('content')
<style>
.ines{height: 60px;}
</style>
<div class="tpl-content-wrapper" style="margin-left: -200px;">
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
                            <label for="user-name" class="am-u-sm-3 am-form-label">商品名</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" placeholder="商品名"  name="gd_name" style="width: 200px;">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">价格</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" placeholder="商品价格"  name="gd_price" style="width: 200px;">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">库存</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" placeholder="商品剩余库存"  name="gd_stock" style="width: 200px;">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-QQ" class="am-u-sm-3 am-form-label">商品图片</label>
                            <div class="am-u-sm-9">
                                <input type="file" id="user-QQ"  name="gd_file" style="border:1px #ccc solid; width:406px; height: 28px;">
                            </div>
                        </div>
                        <div class="am-form-group" style="position: relative;">
                            <label for="user-name" class="am-u-sm-3 am-form-label">所属分类</label>
                            <div>
                                <select name="pid">

                                    <option value=""></option>
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