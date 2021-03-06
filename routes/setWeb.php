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

use App\Model\AdminUser;
use App\libs\BrokerSender;
Route::any("admin" , "SingleShow");

Route::resource("resource" , "ResourceController");



Route::any("show" , "IndexController@show");
Route::any("enter" , "AdminController@enter");



Route::any("login" , "AdminController@login");



Route::any("queue" , function(){

//    $a = Redis::get("zhangyu");
//    dd($a);
	$userInfo  =  "消息队列";
	\App\Jobs\QueueJob::dispatch($userInfo)->onQueue("{zhangyu}");
	echo "我完成了";
});


Route::any("amqp", function () {
	$info = ['1111', '222222'];
	BrokerSender::send($info, config('amqp.queue.queueName'));
//	$a = Redis::get("zhangyu");
	var_dump($info);
	die;
});

Route::any("amqp" , "IndexController@index");

Route::any("redis", function () {
	$a = Redis::get("zhangyu");
	var_dump($a);
	die;
});
Route::any("/im" , function(){
	return view("im");
});

Route::any("/wechat", function () {
	$user = session('wechat.oauth_user.default');
	dd($user);
})->middleware('wechat.oauth');