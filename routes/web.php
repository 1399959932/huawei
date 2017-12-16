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


Route::post('/login','UserController@dologin');




//分类
Route::resource('/cate','CateController');



// 商品管理
Route::get('/goods/list','GoodsController@gdlist');


//pay get
Route::get('/test','PayController@index');

//后台路由组
Route::group(['middleware'=> 'login'],function(){
	//zhifu
	Route::get('/dingdan/pay','DingdanController@pay');
	//购物且添加商品
	Route::resource('/goods','GoodsController');
	// 购物且
	Route::post('/cart','CartController@store');


	Route::get('/cart','CartController@index');
	Route::get('/cart/delete','CartController@delete');
	//个人中心
	Route::post('/cart/geren','CartController@store');

	 
	//地址
	Route::resource('/dizhi', 'AddressController');

	//
	Route::get('/getarea','AddressController@getArea');

	//订单
	Route::post('/dingdan/zhifu','DingdanController@zhifu');
	Route::resource('dingdan','DingdanController');
	//购物车结束

	//基础信息管理
	Route::resource('/admin/xinxi','InfoController');

});


Route::get('/fens','GoodsController@classify');

Route::get('/fenlei','GoodsController@glist');


 // 陈结束




//前台首页
Route::get('/homed','HomeController@index');

//前台分类
Route::get('/Fen','FenController@classify');

//个人中心
Route::get('/geren','GerenController@person');

//华为专区
Route::get('/zqu','ZquController@prefe');

//荣耀家族
Route::get('/fam','FamController@family');




Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@dologin');





//文章管理
Route::resource('article','ArticleController');


//用户管理
Route::resource('user','UserController');






// 后台路由组
	// 后台首页
Route::get('/admin','AdminController@index');



//后台用户
Route::resource('/users','usersController');

//轮播图
Route::resource('/roll','rollcontroller');


// 后台轮播图
Route::resource('/admin/lbotu','LbtController');
Route::get('/lunbotu','LbtController@rool');





// 前台页面
// 前页详情
Route::get('/homes','XqController@xqym');
// 前页分类
Route::get('/flym','FlController@fl');
// 购物车
Route::get('/gwc','GwcController@gwcs');
// 订单页面
Route::get('/dingdan','DingdanController@index');
//前台列表页
Route::get('/list','listcontroller@list');




//华为官网
Route::get('/hwgw','HwgwController@official');

//首页上传
Route::resource('sysc','SyscController');
Route::get('/syscs','SyscController@colle');





// 支付页面
Route::get('/zhifu','ZhifuController@zfym');

// 荣耀官网
Route::get('/rygw','RygwController@ry');

