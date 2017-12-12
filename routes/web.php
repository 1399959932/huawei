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
    return view('home.index');
});


// 陈
Route::get('/vcode', 'UserController@captcha');
// 注册
Route::get('/zhuce','UserController@zhuce');
Route::post('/zhuce','UserController@zhucet');
Route::get('/message','CommonController@message');
// 验证码
Route::get('/zhuce/captcha/{tmp}', 'UserController@captcha');

Route::get('/login','UserController@login');

Route::get('/login','UserController@login');
Route::post('/login','UserController@dologin');


// 购物且
// 商品管理
Route::get('/goods/list','GoodsController@gdlist');
Route::resource('/goods','GoodsController');


    // 陈结束



//后台首页
Route::get('/admin','Admincontroller@index');
//后台登录
Route::get('/admin/login','loginController@login');
Route::post('/admin/login','LoginController@dologin');
//后台用户
Route::resource('/users','usersController');
//后台分类
Route::resource('/cate','catecontroller');
//文章管理
Route::resource('article','ArticleController');



// 前台页面
// 前页详情
Route::get('/homes','XqController@xqym');
// 前页分类
Route::get('/flym','FlController@fl');
// 购物车
Route::get('/gwc','GwcController@gwcs');
// 订单页面
Route::get('/dingdan','DidanController@ddym');
//前台列表页
Route::get('/list','listcontroller@list');
//前台首页
Route::get('/homed','HomeController@index');
//前台分类
Route::get('/Fen','FenController@classify');
//个人中心
Route::get('/geren','GerenController@person');
//华为专区
Route::get('/zqu','ZquController@prefe');
//荣耀家族
Route::get('/fam','Famcontroller@family');

// 支付页面
Route::get('/zhifu','ZhifuController@zfym');


