<?php

use App\libs\WorkQueueBase;
require_once __DIR__ . "/config/BrokerQueueConfig.php";
require_once __DIR__.'/vendor/autoload.php';

class Consumer extends WorkQueueBase{
	protected function getQueueConfig() {
		// TODO: Implement getQueueConfig() method.
		return BrokerQueueConfig::$test;
	}

	protected function doBusiness($msgBody) {
		// TODO: Implement doBusiness() method.
		$msgBody = json_decode($msgBody , 1);
		var_dump($msgBody);
		echo "消费完成";
	}
}


$worker = new Consumer();
$worker->run();