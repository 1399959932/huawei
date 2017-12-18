<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CartController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());
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
    	
        $dizhi = DB::table('address')->where('user_id',session('id'))->get();

        
            //读取收货地址
            foreach($dizhi as $key=>$value){
                $value->pname = DB::table('chinamap')->where('id',$value->province)->value('area_name');
                $value->cname = DB::table('chinamap')->where('id',$value->city)->value('area_name');
                $value->xname = DB::table('chinamap')->where('id',$value->xian)->value('area_name');

            }
            // dd($dizhi);

        //读取购物车中的内容
        $id = session('id');
        $goods = DB::table('carts')->where('user_id',$id)->get();
        // dd($goods);
        
    	//根据id来获取id的详细信息
    	foreach($goods as $key => $value){
    		$value->detail = DB::table('goods')->where('id',$value->goods_id)->first();
    		$value->pic = DB::table('goods_pic')->where('goods_id',$value->goods_id)->value('pic');

            $value->danjia = $value->detail->price * $value->num;
            //$value->zongjiajia = $value->detail;

            // $zongjia = [];
            // $value->zongjia = $zongjia;
            // $zongjia += $value->danjia;

    	}

        // dd($goods->value->zongjia);


    	return view('home.remind.index', compact('goods','dizhi'));

    	// dd($goods);
    }

    public function delete(Request $request)
    {
        //获取id
        $id = $request->input('cid');
        // 删除购物车内容
        if(DB::table('carts')->where('id',$id)->delete()) {
            echo 1;
        }else{
            echo "0";
        }
    }
}
