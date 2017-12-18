<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RygwController extends Controller
{
    public function ry()
    {
    	$goods = DB::table('lbt')->get();
    	return view('homes.ry',['goods'=>$goods]);
    }
}
