<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
    	return view('admin.login');
    }
    public function dologin(Request $request)
    {
    	$data = $request->except(['_token']);
    	$user = DB::table('users')->where('username',$data['username'])->first();
    	if(empty($user)){
    		return back()->with('msg','登录失败');
    	}

    	if(Hash::check($data['password'],$user->password)){
    		session(['id'=>$user->id]);
    		session(['username'=>$user->username]);
    		return redirect('/admin')->with('msg','登陆成功');
    	}
    	return back()->with('msg','登录失败1');
    }
    public function quit(){
      session()->forget('username');
      return redirect('/admin/login');
    }
}
