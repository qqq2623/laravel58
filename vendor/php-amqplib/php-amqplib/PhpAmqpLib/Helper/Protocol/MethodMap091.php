<?php

/* This file was autogenerated by spec/parser.php - Do not modify */

namespace PhpAmqpLib\Helper\Protocol;

class MethodMap091 {
	/**
	 * @var array
	 */
	protected $method_map = array(
		'10,10'  => 'connection_start',
		'10,11'  => 'connection_start_ok',
		'10,20'  => 'connection_secure',
		'10,21'  => 'connection_secure_ok',
		'10,30'  => 'connection_tune',
		'10,31'  => 'connection_tune_ok',
		'10,40'  => 'connection_open',
		'10,41'  => 'connection_open_ok',
		'10,50'  => 'connection_close',
		'10,51'  => 'connection_close_ok',
		'10,60'  => 'connection_blocked',
		'10,61'  => 'connection_unblocked',
		'20,10'  => 'channel_open',
		'20,11'  => 'channel_open_ok',
		'20,20'  => 'channel_flow',
		'20,21'  => 'channel_flow_ok',
		'20,40'  => 'channel_close',
		'20,41'  => 'channel_close_ok',
		'30,10'  => 'access_request',
		'30,11'  => 'access_request_ok',
		'40,10'  => 'exchange_declare',
		'40,11'  => 'exchange_declare_ok',
		'40,20'  => 'exchange_delete',
		'40,21'  => 'exchange_delete_ok',
		'40,30'  => 'exchange_bind',
		'40,31'  => 'exchange_bind_ok',
		'40,40'  => 'exchange_unbind',
		'40,51'  => 'exchange_unbind_ok',
		'50,10'  => 'queue_declare',
		'50,11'  => 'queue_declare_ok',
		'50,20'  => 'queue_bind',
		'50,21'  => 'queue_bind_ok',
		'50,30'  => 'queue_purge',
		'50,31'  => 'queue_purge_ok',
		'50,40'  => 'queue_delete',
		'50,41'  => 'queue_delete_ok',
		'50,50'  => 'queue_unbind',
		'50,51'  => 'queue_unbind_ok',
		'60,10'  => 'basic_qos',
		'60,11'  => 'basic_qos_ok',
		'60,20'  => 'basic_consume',
		'60,21'  => 'basic_consume_ok',
		'60,30'  => 'basic_cancel_from_server',
		'60,31'  => 'basic_cancel_ok',
		'60,40'  => 'basic_publish',
		'60,50'  => 'basic_return',
		'60,60'  => 'basic_deliver',
		'60,70'  => 'basic_get',
		'60,71'  => 'basic_get_ok',
		'60,72'  => 'basic_get_empty',
		'60,80'  => 'basic_ack_from_server',
		'60,90'  => 'basic_reject',
		'60,100' => 'basic_recover_async',
		'60,110' => 'basic_recover',
		'60,111' => 'basic_recover_ok',
		'60,120' => 'basic_nack_from_server',
		'90,10'  => 'tx_select',
		'90,11'  => 'tx_select_ok',
		'90,20'  => 'tx_commit',
		'90,21'  => 'tx_commit_ok',
		'90,30'  => 'tx_rollback',
		'90,31'  => 'tx_rollback_ok',
		'85,10'  => 'confirm_select',
		'85,11'  => 'confirm_select_ok',
	);

	/**
	 * @var string $method_sig
	 * @return string
	 */
	public function get_method($method_sig) {
		return $this->method_map[$method_sig];
	}

	/**
	 * @var string $method_sig
	 * @return bool
	 */
	public function valid_method($method_sig) {
		return array_key_exists($method_sig, $this->method_map);
	}
}