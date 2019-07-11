<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/18
 * Time: 15:32
 */
use App\Test\Ioc\IocInterface;
use App\Test\Ioc\WxPay;
use App\Test\Ioc\Order;
use App\Test\Ioc\Ioc;

//加上自动加载
require __DIR__.'/../../../vendor/autoload.php';

//spl_autoload_register(function($class){
//	$file = $class . ".php";
//	if(is_file($file)){
////		var_dump($file);
//		require_once($file);
//	}
//});

$ioc = new Ioc();
$ioc->bind(IocInterface::class, WxPay::class);
$ioc->bind('order' , Order::class);
$order = $ioc->make("order");
$order->success();
