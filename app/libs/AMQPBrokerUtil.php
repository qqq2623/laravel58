<?php
namespace App\libs;
use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/15
 * Time: 16:32
 */
class AMQPBrokerUtil {
	//静态连接
	private static $conn = null;

//	private static $conn_args = [
//		'host'     => '119.3.109.0',
//		'port'     => 5672,
//		'user'     => 'guest',
//		'password' => 'guest',
//		'vhost'    => '/',
//	];

	private static $conn_args;

	/**
	 * 获取消息队列的连接
	 *
	 * @author 张宇<${userEmail}>
	 * @return null|AMQPStreamConnection
	 */
	public static function getConnection() {
		if (is_null(self::$conn)) {
			self::$conn_args = config("amqp.config");
			self::$conn = new AMQPStreamConnection(self::$conn_args['host'], self::$conn_args['port'], self::$conn_args['user'], self::$conn_args['password'], self::$conn_args['vhost']);

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