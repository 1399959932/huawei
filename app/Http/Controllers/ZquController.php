<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZquController extends Controller
{
    public function prefe()
    {
    	$goods = DB::table('shouye')->get();
    	return view('home.prefe',);
    }
}
