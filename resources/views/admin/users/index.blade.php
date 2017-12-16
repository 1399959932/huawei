
@extends('admin.index')

@section('title')
<title>商品列表</title>
@endsection

@section('content')
<style>.border{border-radius: 30px;}</style>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="">

    <!-- 提示框 -->
    <div class="tpl-content-scope">

    </div>
    <!-- 提示框结束 -->

    <div class="col-md-12" style="height: auto;">
		<div class="right_col" role="main" >
        <!-- page content -->
        <!-- 在这加 -->
        
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
                    <option value="10" @if($num == 10) selected @endif>10</option>
                    <option value="25" @if($num == 25) selected @endif>25</option>
                    <option value="50" @if($num == 50) selected @endif>50</option>
                    <option value="100" @if($num == 100) selected @endif>100</option>
                  </select> entries</label>
                </div></div>
                <div class="col-sm-6 ">
                	<div id="datatable-fixed" class="dataTables_filter pull-right">
                  		<label>Search:
                  			<input type="search" name="keywords" value="{{$keywords}}" class="form-control input-sm" placeholder=""  aria-controls="datatable-fixed-header">
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
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    {{session('msg')}}
                  </div>
                  @endif
                  <!-- 上一行提示结束 -->
                <div class="row">
                  <div class="col-sm-12"><table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-fixed-header_info"><thead>

                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 268px;">Id</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 220px;">用户名</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 201px;">邮箱</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 315px;">头像</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 144px;">操作</th>
                  </tr>
                </thead>

                  @if(count($users) > 0)
                    @foreach($users as $k=>$v)
                    <tr role="row" class="odd">
                      <td class="sorting_1">{{$v->id}}</td>
                      <td>{{$v->username}}</td>
                      <td>{{$v->email}}</td>
                      <td style="width: 110px">
                          <img src="{{$v->hwfile}}" style="width:50px; height:40px;"alt="">
                      </td>
                      <td>
                        <a href="/users/{{$v->id}}/edit" class="btn btn-info btn-sm pull-left" style="margin-right: 10px;margin-left: 10px;" >修改</a>

                        <form action="/users/{{$v->id}}" method="post">
                         <button class="btn btn-danger btn-sm " id="de"> 删除</button>
                         {{method_field('DELETE')}}
                         {{csrf_field()}}
                        </form>
                      </td>
                    </tr>

                    @endforeach

                  @else
                  <tr><td colspan="5" class="text-center">暂无数据</td></tr>
                  @endif
                <tbody>



                </tbody>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable-fixed-header_previous"><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a></li></a></li>
                </ul>
                 {{ $users->appends(['num'=>$num, 'keywords'=>$keywords])->links() }}
              </div></div></div></div>
            </div>
          </div>
        </div>
    </div>

</div>
@section('js')
<script>
    $('.del').submit(function(){
        if(!confirm('确定删除?')) return false;
    });
</script>
@endsection
<<<<<<< HEAD
=======

@endsection


                   
>>>>>>> 0af1c8bceb6fd3a9b19f949ad076c9ea509fab66
