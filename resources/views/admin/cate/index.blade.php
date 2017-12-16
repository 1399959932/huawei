@extends('admin.index')


@section('weizhi')
@endsection

@section('content')
<div class="col-md-12" style="height: auto;">
<div class="right_col" role="main" >
    <!-- page content -->
    <!-- 在这加 -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>商品列表 <small>goods link</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p class="text-muted font-13 m-b-30">
          </p>
          <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
              <div class="col-sm-6">
                <form action="/goods">
                <div class="dataTables_length" id="datatable-fixed-header_length">
            <label>Show
              <select name="num"  aria-controls="datatable-fixed-header" class="form-control input-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100" >100</option>
              </select> entries</label>
            </div></div>
            <div class="col-sm-6 ">
              <div id="datatable-fixed" class="dataTables_filter pull-right">
                  <label>Search:
                    <input type="search" name="keywords" value="" class="form-control input-sm" placeholder=""  aria-controls="datatable-fixed-header">
                 </label>
                  &nbsp;
                  <button class="btn btn-info btn-sm" type="submit">搜索</button>
              </form>
            </div>
          </div>
        </div>
              <!-- 下行是提示 -->
              @if(session('msg'))
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span>
                </button>
                {{session('msg')}}
              </div>
              @endif
              <!-- 上一行提示结束 -->
            <div class="row">
              <div class="col-sm-12">
                <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer " role="grid" aria-describedby="datatable-fixed-header_info"><thead>

              <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:150px;">Id</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 300px;">分类名称</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144px;">操作</th>
              </tr>
            </thead>
            @foreach($cate as $k=>$v)
            <tr role="row" class="odd">
              <td class="sorting_1">{{$v->id}}</td>
              <td>{{$v->name}}</td>
              <td>
                <a href="/cate/{{$v->id}}/edit" class="btn btn-info btn-sm pull-left" style="margin-right: 10px;margin-left: 10px;" >修改</a>

                <form action="/cate/{{$v->id}}" method="post">
                 <button class="btn btn-danger btn-sm del" id="de"> 删除</button>
                 {{method_field('DELETE')}}
                 {{csrf_field()}}
                </form>
              </td>
            </tr>

            @endforeach
            <tbody>



            </tbody>
          </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate"><ul class="pagination">
            <li class="paginate_button previous disabled" id="datatable-fixed-header_previous"><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a></li></a></li>
            </ul>

          </div></div></div></div>
        </div>
      </div>
    </div>
</div>

</div>
<script>
    $('.del').submit(function(){
        if(!confirm('确定删除?')) return false;
    });
</script>
@endsection
