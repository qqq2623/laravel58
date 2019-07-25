<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\rabbitQueue;
use App\Model\AdminUser;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\QueueJob;
class IndexController extends Controller
{
	public function show(Request $request){
//		$cookies = $request->cookie("zhangyu");
//		$session = session()->all();
//		dd($session);
//		return view("show", ['cookies' => $cookies , 'session' => $session]);
//// Eloquent orm 模型
//		$data = AdminUser::all()->toArray();
//		取一块数据来操作
//		AdminUser::chunk(200 , function($users)
//		{
//			foreach($users as $user){
//				$user->real_name = $user->real_name + 1;
//				$user->save();
//			}
//		});
//		软删除和直接删除
//		$data = AdminUser::find(113);
//		$r = $data->delete();
//		一对一的关联
//		$r = AdminUser::find(121)->role->toArray();
//        $r = Role::find(1)->adminUser->toArray();
        $r = Role::get(1);

		dd($r);
	}

	public function index(){
		$msg = "111111";
		$this->dispatch(new rabbitQueue($msg));
		echo "OK";
	}

	public function queue(){
	    $user = "我是队列";
	    QueueJob::dispatch($user);
	    echo "我完成了";
    }

}
