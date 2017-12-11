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


// 陈
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

    // 陈结束
    


//前台首页
Route::get('/homes','HomeController@index');

//前台分类
Route::get('/Fen','FenController@classify');

//个人中心
Route::get('/geren','GerenController@person');

//华为专区
Route::get('/zqu','ZquController@prefe');






Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@dologin');


//后台首页
Route::get('/admin','AdminController@index');

//用户管理
Route::resource('user','UserController');

//文章管理
Route::resource('article','ArticleController');

//分类管理
Route::resource('cate','CateController');

Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@dologin');


//后台首页
Route::get('/admin','AdminController@index');

//用户管理
Route::resource('user','UserController');

//文章管理
Route::resource('article','ArticleController');

//分类管理
Route::resource('cate','CateController');

// 后台路由组
	// 后台首页
Route::get('/admin','AdminController@index');
// 用户管理
Route::resource('user','UserController');
// 文章管理
Route::resource('article','ArticleController');
// 分类管理
Route::resource('cate','CateController');

// 前台页面
// 前页详情
Route::get('/homes','XqController@xqym');
// 前页分类
Route::get('/flym','FlController@fl');
// 购物车
Route::get('/gwc','GwcController@gwcs');
// 订单页面
Route::get('/dingdan','DidanController@ddym');
// 支付页面
Route::get('/zhifu','ZhifuController@zfym');





