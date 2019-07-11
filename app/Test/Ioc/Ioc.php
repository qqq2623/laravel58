<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/18
 * Time: 11:22
 */

namespace App\Test\Ioc;

class Ioc {

	protected $bindings = [];

	/**
	 * @author 张宇<${userEmail}>
	 * 绑定对象到容器
	 * @param $abstract
	 * @param $concrete
	 */
	public function bind($abstract , $concrete){
		if(!$concrete instanceof Closure){
			//如果它是一个闭包，不是一个字符串，那么就通过容器的反射类，直接拿到闭包中对应的对象
			$concrete = function($ioc) use($concrete){
				//$ioc是容器的对象,build 反射类
				return $ioc->build($concrete); //build 反射实例化后的类，又返回给$concrete
			};
		}

		//"App\Test\IocInterface"
		$this->bindings[$abstract]['concrete'] = $concrete;
	}

	/**
	 * @author 张宇<${userEmail}>
	 * 取出对象实例
	 * @param $abstract
	 */
	public function make($abstract){
		$concrete = $this->bindings[$abstract]['concrete'];
		return $concrete($this);
	}

	public function build($concrete){
//		var_dump($concrete);die;
		$reflector = new \ReflectionClass($concrete);
		//获取类的构造函数
		$constructor = $reflector->getConstructor();
		if(is_null($constructor)){
			//创建类的实例
			return $reflector->newInstance();
		}else{
			//获取构造函数的参数
			$parameters = $constructor->getParameters();
			//获取依赖，包括必需的、冲突的、可选的
			$instances = $this->getDependencies($parameters);
//			var_dump($reflector->newInstanceArgs($instances));die;
			return $reflector->newInstanceArgs($instances);
		}
	}

	protected function getDependencies($parameters){
		$dependencies = [];
		foreach($parameters as $parameter){
			$dependencies[] = $this->make($parameter->getClass()->name);
		}

		return $dependencies;
	}
}