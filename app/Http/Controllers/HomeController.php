<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$shouye = DB::table('shouye')->get();
    	return view('home.colle','shouye=>$shouye');
    }
}
