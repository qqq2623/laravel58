<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index(Request $request){

//	   $a = DB::table("goods")->count();
	    $b = ['ddd' , 'sss' , 'dsad'];
//	    $b = Redis::set("ccc111" , "123");
//	    $b = Redis::many($b);
	    return response("返回cookies")->header('Content-Type' , 'text/html')->cookie("zhangyu" , "666321");
    }

	public function show(Request $request){
		//开启事务
//		DB::transaction(function(){
//
//		});
		DB::table("admin")->crossJoin();
	}

	public function del(){
		return "这是汪汪的删除页面";


		new \Redis();
	}
}
