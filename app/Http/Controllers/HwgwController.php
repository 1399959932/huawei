<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HwgwController extends Controller
{
    public function official()
    {
    	return view('home.official');
    }
}
