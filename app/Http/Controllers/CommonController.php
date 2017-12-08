<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CommonController extends Controller
{
    public function message(Request $request){
    	$tel = $request->input('tel');
    	$web = 'random';
    	$code = rand(100000,999999);

    	$_SESSION['phrase'] = $builder->getPhrase(); ~

    	//向3方平台发送请求
    	// $res = file_get_contents('http://www.xiaohigh.com/message/index.php?to='.$tel.'&class=123456&web='.$web.'&code='.$code);


    	session(['code'=>$code]);  ~

    	//$data = json_decode($res, true);


    	// 测试
    	$data['resp']['respCode'] = '000000';
    	
    	if ($data['resp']['respCode'] == '000000') {
    		return response()->json(['data'=>['code'=>$code],'status'=>'1','msg'=>'ok']);
    		// echo '0';
    	}else{
    		// echo '1'; 
    		return response()->json(['data'=>'','status'=>'0','msg'=>'err']);
    	}

    }


}
