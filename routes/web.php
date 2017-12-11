<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vcode', 'UserController@captcha');
// 注册
Route::get('/zhuce','UserController@zhuce');
Route::post('/zhuce','UserController@zhucet');

Route::get('/message','CommonController@message');

	// 验证码
	Route::get('/zhuce/captcha/{tmp}', 'UserController@captcha');



Route::get('/login','UserControll.0er@login');

//分类
Route::resource('/cate','CateController');

// 商品管理
Route::resource('/goods','GoodsController');