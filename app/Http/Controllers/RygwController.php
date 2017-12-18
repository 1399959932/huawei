<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RygwController extends Controller
{
    public function ry()
    {

    	$goods = DB::table('goods_pic')->get();
    	// dd($goods);

    	$goods = DB::table('lbt')->get();

    	$tupian = DB::table('goods_pic')->get();
    	$xinxi = DB::table('goods')->get();
        // dd($goods);
    	return view('homes.ry',compact('goods','tupian','xinxi'));



    }
}
