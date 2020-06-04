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

Route::post('login','Api\UserController@login');  //登录
Route::post('logout','Api\UserController@logout');  //退出
Route::get('test','Api\UserController@test');  //退出

Route::get('seckill','TestController@seckill');   //秒杀行动
Route::get('pull','TestController@pull');  //代码自动上线


Route::get('lucky','TestController@lucky');  //抽奖活动
Route::post('getlucky','TestController@getlucky');  //抽奖活动