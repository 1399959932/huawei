<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GwcController extends Controller
{
    public function gwcs()
    {
    	return view('homes.gwcs');
    }
}
