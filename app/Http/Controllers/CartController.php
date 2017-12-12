<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CartController extends Controller
{
    public function store(Request $request)
    {

    	$data = $request->only(['goods_id','num']);
    	$data['created_at'] = date('Y-m-d H:i:s');
    	$data['user_id'] = session('id');

    	// dd($data);

    	if($res = DB::table('carts')->insert($data) ){
    		return view('home.remind.cart');
    	} else{
    		return back()->with('msg','shibai');
    	}
    }

    public function index()
    {
    	//读取购物车中的内容
    	$id = session('id');
    	$goods = DB::table('carts')->where('user_id',$id)->get();

    	//根据id来获取id的详细信息
    	foreach($goods as $key => $value){
    		$value->detail = DB::table('goods')->where('id',$value->goods_id)->first();
    		$value->pic = DB::table('goods_pic')->where('goods_id',$value->goods_id)->value('pic');
    	}

        // dd($goods);

    	return view('home.remind.index', compact('goods'));

    	// dd($goods);
    }
}
