<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/18
 * Time: 11:20
 */

namespace App\Test\Ioc;
class Order {
	protected $pay;
	public function __construct(IocInterface $iocInterface) {
		$this->pay = $iocInterface;
	}

	public function success(){
		echo "支付成功";
		$this->pay->pay();
	}
}