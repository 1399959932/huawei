<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenController extends Controller
{
    public function person()
    {
    	return view('home.person');
    }
}
