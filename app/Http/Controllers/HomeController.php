<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {

      $cate = DB::table('cate')->where('path','0')->get();
      foreach ($cate as $k => $v) {
        $v->goods = DB::table('goods')->where('cate_id',$v->id)->get();
        // dd($v->goods);
        foreach ($v->goods as $key => $val) {
          $val->goods_pic = DB::table('goods_pic')->where('goods_id',$val->id)->value('pic');
        }
      }
      $shouye = DB::table('shouye')->get();
      $lbt = DB::table('lbt')->get();

      // dd($lbt);

      // dd($cate);
    	return view('home.colle',compact('cate','shouye','lbt'));

    	
    	// return view('home.colle','shouye=>$shouye');

    }
}
