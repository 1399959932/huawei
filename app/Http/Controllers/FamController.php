<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamController extends Controller
{
    public function family()
    {
    	return view('home.family');
    }
}
