@extends('home.classify')

@section('title')
<title>商品列表</title>
@endsection
<style>.theme_1{margin-left:12px;margin-right: 9px;margin-top: 18px;}</style>

@section('body')
<div class="theme" style="height: auto;">
    
    <div class="container"  style="width: 1200px;">
        @foreach($goods as $k=>$v)
        <div class="col-md-2 theme_1" style="padding: 0px;">
            <img src="{{$v->pic}}" width="210" height="245">
            <h5><a href="#">{{$v->title}}</a></h5>
            <h3>&yen;{{$v->price}}</h3>
            <div class="dib">
                <button class="xg">选购</button>
                <ul>
                    <li class="pj">6人评价</li>
                </ul>
            </div>
        </div>
        @endforeach
        
        <nav class="pull-right" style="margin-top: 20px;">
            <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection