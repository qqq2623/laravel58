<?php
/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/2
 * Time: 17:19
 */

$conn_args = [
	'host' => '127.0.0.1',
	'port' => '5672',
	'login' => 'guest',
	'password' => 'guest',
	'vhost' => '/',
];

$exchange = "tradeExchange";
$key = "routeKey";

$connection = new AMQPConnection($conn_args);
//var_dump($connection->connect());die;
if(!$connection->connect()){
	die("连接失败");
}


$channel = new AMQPChannel($connection); //声明信道

$ex = new AMQPExchange($channel); //声明交换机
$ex->setName($exchange);
$ex->setType(AMQP_EX_TYPE_DIRECT);//直连模式
//$ex->declareExchange();//创建信道

$ex->publish("发送一条信息" , $key);



//$connection->disconnect();
