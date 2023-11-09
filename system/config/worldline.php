<?php 
$_['worldline_setting'] = [
	'version' => '1.0.0',
	'account' => [
		'environment' => 'live',
		'merchant_id' => [],
		'api_key' => [],
		'api_secret' => [],
		'api_endpoint' => [
			'live' => 'https://payment.direct.worldline-solutions.com',
			'test' => 'https://payment.preprod.direct.worldline-solutions.com'
		],
		'webhook_key' => [],
		'webhook_secret' => [],
		'webhook_token' => '',
		'cron_token' => ''
	],
	'advanced' => [
		'title' => [],
		'button_title' => [],
		'debug' => false,
		'authorization_mode' => 'sale',
		'group_cards' => true
	],
	'order_status' => [
		'created' => [
			'code' => 'created',
			'name' => 'text_created_status',
			'id' => 1
		],
		'cancelled' => [
			'code' => 'cancelled',
			'name' => 'text_cancelled_status',
			'id' => 7
		],
		'rejected' => [
			'code' => 'rejected',
			'name' => 'text_rejected_status',
			'id' => 8
		],
		'pending' =>  [
			'code' => 'pending',
			'name' => 'text_pending_status',
			'id' => 1
		],
		'captured' => [
			'code' => 'captured',
			'name' => 'text_captured_status',
			'id' => 5
		],
		'refunded' => [
			'code' => 'refunded',
			'name' => 'text_refunded_status',
			'id' => 11
		]
	],
	'suggest' => [
		'company_name' => '',
		'message' => ''
	],
	'environment' => [
		'live' => [
			'code' => 'live',
			'name' => 'text_live',
			'prefix' => '',
			'api_endpoint' => 'https://payment.direct.worldline-solutions.com'
		],
		'test' => [
			'code' => 'test',
			'name' => 'text_test',
			'prefix' => '_test',
			'api_endpoint' => 'https://payment.preprod.direct.worldline-solutions.com'
		]
	],
	'authorization_mode' => [
		'pre_authorization' => [
			'code' => 'pre_authorization',
			'name' => 'text_pre_authorization'
		],
		'final_authorization' => [
			'code' => 'final_authorization',
			'name' => 'text_final_authorization'
		],
		'sale' => [
			'code' => 'sale',
			'name' => 'text_sale'
		]
	],
	'transaction_status' => [
		'created' => [
			'code' => 'created',
			'name' => 'text_created'
		],
		'cancelled' => [
			'code' => 'cancelled',
			'name' => 'text_cancelled'
		],
		'rejected' => [
			'code' => 'rejected',
			'name' => 'text_rejected'
		],
		'rejected_capture' => [
			'code' => 'rejected_capture',
			'name' => 'text_rejected_capture'
		],
		'pending_capture' => [
			'code' => 'pending_capture',
			'name' => 'text_pending_capture'
		],
		'captured' => [
			'code' => 'captured',
			'name' => 'text_captured'
		],
		'refunded' => [
			'code' => 'refunded',
			'name' => 'text_refunded'
		],
		'authorization_requested' => [
			'code' => 'authorization_requested',
			'name' => 'text_authorization_requested'
		],
		'capture_requested' => [
			'code' => 'capture_requested',
			'name' => 'text_capture_requested'
		],
		'refund_requested' => [
			'code' => 'refund_requested',
			'name' => 'text_refund_requested'
		]
	]
];
?>