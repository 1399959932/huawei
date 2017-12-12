<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listcontroller extends Controller
{
    public function list()
    {
    	return view('list.list');
    }
}
