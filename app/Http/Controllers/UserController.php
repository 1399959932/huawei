<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Mail;
use App\Http\Requests;


//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Gregwar\Captcha\PhraseBuilder;

class UserController extends Controller
{
    public function zhuce(){
    	return view('zhuce.zhuce');
    }


    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build();
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        // var_dump($phrase);
        
        //把内容存入session
        session(['milkcaptcha'=> $phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    //验证码验证
	// public function getCode(Request $request)
	// {
	// 	$userInput = $request->get('captcha');
	// 	if (Session::get('milkcaptcha') == $userInput) {
	// 	//用户输入验证码正确
	// 	return '您输入验证码正确';
	// 	} else {
	// 	//用户输入验证码错误
	// 	return '您输入验证码错误';
	// 	}

	// }

    public function zhucet(Request $request){

    	//验证吗
    	$code = $request->code;
    	if(session('milkcaptcha') != $code){
    		return back()->with('msg','验证码错误');
    	}


    	$data = $request->only(['username','tel','password']);
    	$data['password'] = Hash::make($data['password']);

    	//dd($data);

    	//插入数据库
    	if (DB::table('users')->insert($data)) {

    		Mail::send('email.send', [], function ($message) {
		    //标题
			$message->subject('ABC');
			//接收者
		    $message->to('1399959932@qq.com');
			});
			return redirect('/')->with('msg','ok');
    	}
    	
    	else{
    		return back()->with('msg','orr');
    	}
    }

    public function login(){
    	return view('login.login');
    }

    public function dologin(){
        $user = DB::table('users')->where('verify',$tel)->first();
    }
}
