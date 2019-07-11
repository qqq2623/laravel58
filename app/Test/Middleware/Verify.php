<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/19
 * Time: 17:36
 */
namespace App\Test\Middleware;

class VerifyCsrfToken implements Middleware{

	public static function handle(\Closure $next) {
		// TODO: Implement handle() method.
		echo "这是验证Token" ."<br/>";
		$next();
	}
}

class VerifyAuth implements Middleware{

	public static function handle(\Closure $next) {
		// TODO: Implement handle() method.
		echo "这是验证用户权限"."<br/>";
		$next();
	}
}

class SetCookies implements Middleware{
	public static function handle(\Closure $next) {
		// TODO: Implement handle() method.
		echo "这是设置cookie". "<br/>";
	}
}