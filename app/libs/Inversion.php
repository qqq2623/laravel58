<?php
/**
 * User: 张宇<xxxxxxxxxxxxx>
 * Date: 2019/5/31
 * Time: 9:17
 */

//控制反转

class Ioc {

	protected $bind = [];    //容器绑定
//	protected $instances;
//
//
//	public function __construct($abstract , $concrete) {
//			$this->bind($abstract , $concrete);
//			$this->make($abstract);
//	}
//
//
//	public function bind($abstract , $concrete){
////		var_dump($concrete instanceof Closure);die;
//		if($concrete instanceof Closure){
//			$this->bind[$abstract] = $concrete;
//		}
//	}
	public function __construct() {
			$this->bind["a"] = new A($this);
			$this->bind["b"] = new B($this);
	}

//	public function make($abstract , $parameters = []){
//		return call_user_func_array($this->bind[$abstract] , $parameters);
//	}
}

class A{

	public function __construct(Ioc $ioc) {
		$userModel = new \App\Model\AdminUser();
//		$userModel->

	}

	public function talk(){
		return  __CLASS__;
	}
}

class B{

	public function __construct(Ioc $ioc) {

	}

	public function talk(){
		return  __CLASS__;
	}
}

var_dump(new Ioc("b" , function(Closure $closure){
		return $closure->call((new B())->talk());
}));