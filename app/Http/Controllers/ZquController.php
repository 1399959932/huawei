<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ZquController extends Controller
{
    public function prefe()
    {
    	$goods = DB::table('goods')->get();
    	$tupian = DB::table('goods_pic')->get();
    	// dd($tupian);
    	$lbt = DB::table('lbt')->get();

    	return view('home.prefe',compact('goods','tupian','lbt'));
    }
}
