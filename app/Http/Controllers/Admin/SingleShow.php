<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Debug\Debug;

class SingleShow extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
// 查询构造器
//		取字段，相当于select()
		$a = DB::table("admin_user")->get(["user_name","user_id"]);
//	    取字段，相当于select()  取一条
//      $a = DB::table("admin_user")->first("user_name");
//	    $a = DB::table("admin_user")->first(["user_name" , "role_id"]);
//	     相当于array_column() => 单独一个字段成一个数组
//	    $a = DB::table("admin_user")->pluck("user_name");
//      key ====> value
//	    $a = DB::table("admin_user")->pluck("role_id" , "user_name");
//      chunk 还必须得有group by  (laravel使用此函数时必须指定orderby子句)
//	    chunkBy 就不受group by 限制 ---> 更新
//	    $a = DB::table("admin_user")->chunkById(20 , function($value){
//		    foreach($value as $k =>$v){
//			    DB::table("admin_user")->where('user_id' , $v->user_id)->update(['real_name' => $k]);
//		    }
//		    $value->each(function($item , $key){
////			    dd($item);
//				DB::table("admin_user")->where("user_id" , $item->user_id)->update(['real_name' => str_random(10)]);
//		    });
//	    });
	    // get("字段") ===》 distinct 字段
//	    $a = DB::table("admin_user")->distinct()->get('role_id');
//	    注入原生的sql语句 ，但是注意sql注入的问题
//	    DB::raw();
//	    DB::table("admin_user")->selectRaw()->whereRaw()->orWhereRaw()->havingRaw()->orHavingRaw()->orderByRaw();
//	    join 、left join 、 right join and so on 定义关联的闭包函数
//	    $a = DB::table("admin_user as user")->leftJoin("role",function($join){
//				$join->on("user.role_id" , '=' , 'role.id');
//	    })->where("role.id" , 1)->get();
//	    dd($a);

//	    joinSub leftjoinSub .....
//	     where   => where ,
//       orwhere => or ,
//       whereBetween => between ,
//       whereNotBetween => not  between,
//       whereIn => in,
//       whereNotIn => not in,
//       whereDate => date(`add_time`)
//	    $userInfo = DB::table("admin_user")->whereDate('add_time' , 1558674884)->get();

//	    $userInfo = DB::table("admin_user")->where("user_id" , ">" ,130)->where(function($query){
//			$query->where("role_id" , 2)->orwhere("real_name" , ">" ,9);
//	    })->get();
//	    select * from `admin_user` where `user_id` > ? and (`role_id` = ? or `real_name` > ?)
//======================================mysql5.7特性，弄不懂====================================
//	    wherejoin 数据
//        $userInfo = DB::table("admin_user")->where("real_name->name" ,'qITXaS1cpw')->first();
//	    $userInfo = json_decode($userInfo->real_name);
//=============================================================================================
//	    根据条件$sortBy的不同，返回的where条件也不同, 第一个参数是判断条件$sortBy，第二个参数是条件存在时返回的结构，第三个参数是条件不存在时返回的结构
//		$sortBy = '';
//	    $userInfo = DB::table("admin_user")->when($sortBy , function($query , $sortBy){
//				return $query->where("add_time" , ">" , $sortBy);
//	    } , function($query){
//				return $query->where("add_time" , "=" , "1559010208");
//	    })->get();
// 如果该条记录存在，那么就修改这条记录，如果不存在则插入这条记录
//	   $userInfo =  DB::table("admin_user")->updateOrInsert(
//		    ['real_name' => "dciDzwmKCm1699999" , "id" => '001'],
//		    ["role_id"=>"22"]
//	    );

	    dd($a);

    }

}
