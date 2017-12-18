<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZquController extends Controller
{
    public function prefe()
    {
<<<<<<< HEAD
    	return view('home.prefe');
=======
    	$goods = DB::table('goods')->get();
    	$tupian = DB::table('goods_pic')->get();
    	return view('home.prefe',['goods',$goods],['tupian',$tupian]);
>>>>>>> f97d506e2cddbfdfd3e3f6bc8b4e5ea297f60774
    }
}
