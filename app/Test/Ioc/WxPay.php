<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/18
 * Time: 11:16
 */

namespace App\Test\Ioc;
class WXPay implements IocInterface{
	public function pay() {
		// TODO: Implement pay() method.

		echo "我是微信的支付方法";
	}

}