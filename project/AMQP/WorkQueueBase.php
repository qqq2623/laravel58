<?php

/**
 * User: 张宇<${userEmail}>
 * Date: 2019/7/15
 * Time: 16:42
 */
abstract class WorkQueueBase {

	/** 队列名称
	 *
	 * @var
	 */
	protected $queueName;
	/** 消息队列的连接
	 *
	 * @var
	 */
	protected $connection;

	public function __construct() {
		$config = $this->getQueueConfig();
		if (empty($config['queueName'])) {
			throw new Exception("队列名称不能为空");
		}

		$this->queueName  = $config['queueName'];
		$this->connection = AMQPBrokerUtil::getConnection();
	}

	/**
	 * 队列配置
	 *
	 * @author 张宇<${userEmail}>
	 * @return mixed
	 */
	abstract protected function getQueueConfig();

	public function run() {
		//创建一个信道
		$channel = $this->connection->channel();
		//声明一个队列
		//队列名称，
		//队列持久化
		//是否排外，既是否一个队列只有一个消费者
		//是否自动删除
		//
//		$channel->queue_declare($this->queueName , false , true , );

	}

	/**
	 * 处理业务逻辑
	 *
	 * @author 张宇<${userEmail}>
	 *
	 * @param $msgBody
	 *
	 * @return mixed
	 */
	abstract protected function doBusiness($msgBody);
}