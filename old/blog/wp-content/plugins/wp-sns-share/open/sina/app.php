<?php

function WPSNS_send_sina_weibo($text, $key, $key_secret, $token, $token_secret){
	$api_url = 'http://api.t.sina.com.cn/statuses/update.json';
	$consumer = new OAuthConsumer($key, $key_secret);
	$token = new OAuthConsumer($token, $token_secret);
	$params = array('oauth_version' => '1.0a', 'status' => $text);

	$response = WPSNS_send_content($text, $api_url, $consumer, $token, $params);
	$msg = json_decode($response, true);

	if ($msg === false || $msg === null){
		$error = "发生错误";
	}
	if (isset($msg['error_code']) && isset($msg['error'])){
		$error = '错误代码： '.$msg['error_code'].';  错误信息: '.$msg['error'];
	}
	if(isset($error)){
		return $error;
	}
	else{
		$message = $msg['text'];
		return $message;
	}
}