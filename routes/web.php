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


Route::get('/wangwang', "IndexController@index")->name("login");


//Route::namespace("Admin")->prefix("admin")->group(function(){
//	Route::get('/showWangWang' , 'IndexController@show')->name("admin.show");
//});

Route::group([
		'namespace' => 'Admin' ,
	    'prefix' => 'admin',
		'middleware' => ['auth']
		],function(){
	Route::get('/showWangWang1' , 'IndexController@show')->name("index.show");
});
//
//
//
//Route::prefix('admin')->group(function(){
//	Route::get('/showWangWang' , 'IndexController@show')->name("admin.show");
//});

Route::prefix('admin')->group(function(){
	Route::get('/showWangWang',function(App\Http\Controllers\Admin\IndexController $index ){
			return $index->index();
	});
});

// 隐形绑定
//Route::get("model/{goods}" , function(App\Models\Goods $goods){
//	dd($goods);
//});

Route::view("news" , "news");