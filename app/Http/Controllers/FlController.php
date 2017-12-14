<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FlController extends Controller
{
    public function fl($id){
    	// $goods = DB::table('goods')->where('id',$id)->first();
    	// $goods_pic = DB::table('goods_pic')->where('id',$id)->get();
    	return view('homes.fl');
    }
}
// compact('goods','goods_pic')