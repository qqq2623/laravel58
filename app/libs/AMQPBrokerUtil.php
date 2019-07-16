<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/15
 * Time: 16:32
 */
class AMQPBrokerUtil {
	//静态连接
	private static $conn = null;

	private static $conn_args = [
		'host'     => '127.0.0.1',
		'port'     => '5672',
		'login'    => 'guest',
		'password' => 'guest',
		'vhost'    => '/',
	];

	/**
	 * 获取消息队列的连接
	 *
	 * @author 张宇<${userEmail}>
	 * @return null|AMQPStreamConnection
	 */
	public static function getConnection() {
		if (is_null(self::$conn)) {
			$config     = self::$conn_args;
			self::$conn = new AMQPStreamConnection($config);

		}
		return self::$conn;
	}

	/**
	 * 关闭消息队列
	 *
	 * @author 张宇<${userEmail}>
	 */
	public static function getCloseConnection() {
		if (!empty(self::$conn)) {
			self::$conn->close();
		}
	}
}