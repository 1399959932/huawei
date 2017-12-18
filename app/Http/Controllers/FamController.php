<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamController extends Controller
{
    public function family()
    {
    	$goods = DB::table('shouye')->get();
    	return view('home.family',['goods',$goods]);
    }
}
