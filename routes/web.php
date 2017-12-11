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

