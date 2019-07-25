<?php
namespace App\libs;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/15
 * Time: 17:30
 */
class BrokerSender {
	const DELIVERY_MODE = 2;

	/**
	 * 发送消息
	 *
	 * @author 张宇<${userEmail}>
	 *
	 * @param array $info
	 * @param array $config
	 *
	 * @throws Exception
	 */
	public static function send(array $info, string $queueName) {
		//检查参数
		if (empty($queueName)) {
			throw new Exception("队列名称不能为空");
		}
		$conn    = AMQPBrokerUtil::getConnection();
		$channel = $conn->channel();

		$channel->queue_declare($queueName, false, true, false, false);
		$msg = new AMQPMessage(json_encode($info), [
			'delivery_mode' => self::DELIVERY_MODE,
		]);

		$channel->basic_publish($msg, '', $queueName);
		$channel->close();
	}
}