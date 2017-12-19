<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ZquController extends Controller
{
    public function prefe()
    {
<<<<<<< HEAD
    	return view('home.prefe');
=======
    	$goods = DB::table('goods')->get();
    	$tupian = DB::table('goods_pic')->get();
<<<<<<< HEAD
    	// dd($tupian);
    	$lbt = DB::table('lbt')->get();

    	return view('home.prefe',compact('goods','tupian','lbt'));
=======
    	return view('home.prefe',['goods',$goods],['tupian',$tupian]);
>>>>>>> f97d506e2cddbfdfd3e3f6bc8b4e5ea297f60774
>>>>>>> 05fa5a644d00ac9d8b85f89e6b7701b30e1c2fb7
    }
}
