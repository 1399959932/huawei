<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HwgwController extends Controller
{
    public function official()
    {
    	$tupian =DB::table('goods_pic')->get();
    	$goods = DB::table('goods')->get();
    	return view('home.official',['goods',$goods],['tupian',$tupian]);
    }
}
