<?php
/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/17
 * Time: 13:39
 */


$client = new Swoole\Client(SWOOLE_SOCK_TCP);

$client->connect('119.3.109.0', 9800);

$client->send("111112222");

echo $client->recv();

$client->close();