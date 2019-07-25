<?php

use App\libs\WorkQueueBase;
//use Illuminate\Foundation\Bootstrap\LoadConfiguration;
//require_once __DIR__ . '/bootstrap/app.php';
require_once __DIR__.'/vendor/autoload.php';


class Consumer extends WorkQueueBase{
	protected function getQueueConfig() {
		// TODO: Implement getQueueConfig() method.
//		(new LoadConfiguration())->bootstrap($app);
		return config("amqp.queue.queueName");
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