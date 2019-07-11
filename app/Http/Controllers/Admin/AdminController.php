<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CheckFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
//	protected $redirect = "error";
    public  function login(){
	    return view("admin");
    }

	public function enter(CheckFormRequest $request){
		$a = Input::get();
		dd($a);
//		$request->validated();
//		dd($request->errors());
	}

//	public function enter(Request $request){
//		$request->validate([
//			'username' => 'required|max:16|min:6',
//			'password' => 'required|min:6'
//		]);
//
//		return "11111111111";
//	}
	public function error(){
		return "错误喽！！！";
	}
}
