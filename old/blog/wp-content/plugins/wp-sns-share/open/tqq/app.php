<?php

function WPSNS_send_tqq_weibo($text, $key, $key_secret, $token, $token_secret){
	$api_url = 'http://open.t.qq.com/api/t/add';
	$consumer = new OAuthConsumer($key, $key_secret);
	$token = new OAuthConsumer($token, $token_secret);
	$params = array('content' => $text, 'format' => 'json');

	$response = WPSNS_send_content($text, $api_url, $consumer, $token, $params);
	$msg = json_decode($response, true);
	
	if ($msg === false || $msg === null){
		$error = "发生错误";
	}
	if (isset($msg['errcode']) && $msg['errcode'] != 0){
		$error = '错误代码： '.$msg['errcode'].';  错误信息: '.$msg['msg'];
	}
	if(isset($error)){
		return $error;
	}
	else{
		return $text;
	}
}
