<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FenController extends Controller
{
    //
    public function classify()
    {
    	return view('home.classify');
    }
}
