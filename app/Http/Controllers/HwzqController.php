<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HwzqController extends Controller
{
    public function zhuanq(){
        //读取商品
        $tupian = DB::table('goods_pic')->get();
        // dd($tupian);
        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->orderBy('id','desc')
        ->paginate(20);
        
        //便利商品信息s
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')
            ->where('goods_id',$value->id)
            ->value('pic');
        }
        // dd($goods);

        // $cates = DB::table('cate')->get();   
        //模板

        // return view('home.goods.list',compact('goods'));
        return view('home.prefe',compact('goods','tupian'));

    }

     public function hua(){
        //读取商品
        $tupian = DB::table('goods_pic')->get();
        // dd($tupian);
        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->orderBy('id','desc')
        ->paginate(20);
        
        //便利商品信息
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')
            ->where('goods_id',$value->id)
            ->value('pic');
        }
        // dd($goods);

        $cates = DB::table('cate');
        //模板

        // return view('home.goods.list',compact('goods'));
        return view('home.official',compact('goods','tupian'));

    }

}
