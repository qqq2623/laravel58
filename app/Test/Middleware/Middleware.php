<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/19
 * Time: 17:34
 */

namespace App\Test\Middleware;

interface Middleware {
	public static function handle(\Closure $next);

}