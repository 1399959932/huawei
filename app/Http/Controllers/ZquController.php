<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZquController extends Controller
{
    public function prefe()
    {
    	$goods = DB::table('goods')->get();
    	$tupian = DB::table('goods_pic')->get();
    	return view('home.prefe',['goods',$goods],['tupian',$tupian]);
    }
}
