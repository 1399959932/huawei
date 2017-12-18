<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RygwController extends Controller
{
    public function ry()
    {
<<<<<<< HEAD
    	$goods = DB::table('goods_pic')->get();
    	// dd($goods);
=======
    	$goods = DB::table('lbt')->get();
<<<<<<< HEAD
    	$tupian = DB::table('goods_pic')->get();
    	$xinxi = DB::table('goods')->get();
    	return view('homes.ry',['goods'=>$goods],['tupian'=>$tupian],['xinxi'=>$xinxi]);
=======
>>>>>>> 053b2638ae39fa636a91311cee8189afa04d26ca
    	return view('homes.ry',['goods'=>$goods]);
>>>>>>> c92bf3277f22853643af844f68221f8346c6ced9
    }
}
