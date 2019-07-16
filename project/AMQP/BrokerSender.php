<?php
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
	public function send(array $info, array $config) {
		//检查参数
		if (empty($config['queueName'])) {
			throw new Exception("队列名称不能为空");
		}
		$conn    = AMQPBrokerUtil::getConnection();
		$channel = $conn->channel();

		$channel->queue_declare($config['queueName'], false, true, false, false);
		$msg = new AMQPMessage(json_encode($info), [
			'delivery_mode' => self::DELIVERY_MODE,
		]);

		$channel->basic_publish($msg, '', $config['queueName']);
		$channel->close();
	}
}