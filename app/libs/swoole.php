<?php

$server = new Swoole\Server('0.0.0.0', 9800);

$server->set([
	'worker_num' => 2
]);

$server->on('connect', function ($fd) {
	echo "连接成功，id:" . $fd . PHP_EOL;
});

$server->on('receive', function ($server, $fd, $from_id, $data) {
	$msg = "消息发送过来了，from_id:" . $from_id . "信息:" . $data . PHP_EOL;
	echo $msg;
	$server->send($fd, $msg);
});

$server->on('close', function () {
	echo "消息关闭" . PHP_EOL;
});


$server->start();