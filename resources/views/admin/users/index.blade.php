@extends('admin.index')

 
@section('weizhi')
@endsection

@section('content')
 <div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                    <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
            </div>
        </div>


    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 批量删除</button>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" class="am-form-field">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                    </span>
                </div>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                   <table class="table table-striped">
                        <thead>
                            <tr>
                                <td><input type="checkbox" class="tpl-table-fz-check"></td>
                                <td>id</td>
                                <td>用户名</td>
                                <td>邮箱</td>
                                <td>头像</td>
                                <td>操作</td>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach($users as $k=>$v)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{$v->id}}</td>
                                    <td style="width: 270px"><a href="#">{{$v->username}}</a></td>
                                    <td style="width: 290px">{{$v->email}}</td>
                                    <td style="width: 110px">
                                        <img src="{{$v->hwfile}}" style="width:50px; height:40px;"alt="">
                                    </td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                            <button class="btn-xs btn-primary btn-danger">
                                                <a href="/users/{{$v->id}}/edit" style="color: #fff;">
                                                    修改
                                                </a>
                                            </button>
                                                <form class="del" action="/users/{{$v->id}}" method="POST">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn-xs btn-primary
"><span class="am-icon-trash-o"></span> 删除</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                        </tbody>
                    </table>
                    <hr>

                </form>
            </div>

        </div>
    </div>
    <div class="tpl-alert"></div>
</div>


@endsection

@section('js')
<script>
    $('.del').submit(function(){
        if(!confirm('确定删除?')) return false;
    });
</script>
@endsection
                   
