<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function store(Request $request){
    	dd($request->all());
    }
}
