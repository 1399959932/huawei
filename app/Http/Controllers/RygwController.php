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
>>>>>>> 053b2638ae39fa636a91311cee8189afa04d26ca
    	return view('homes.ry',['goods'=>$goods]);
    }
}
