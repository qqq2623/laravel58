<?php
/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/19
 * Time: 17:47
 */

//use App\Test\Middleware\SetCookies;
require __DIR__.'/../../../vendor/autoload.php';
require "Verify.php";

$pipe_arr = [
	App\Test\Middleware\VerifyCsrfToken::class,
	App\Test\Middleware\VerifyAuth::class,
	App\Test\Middleware\SetCookies::class,
];

$handle = function(){
	echo "这是最后执行的中间件操作";
};

$callback = array_reduce($pipe_arr , function($stack , $pipe){
		return function() use ($stack , $pipe) {
			return $pipe::handle($stack);
		};
} , $handle);

call_user_func($callback);