<?php

@session_start();
include_once('../func.php');

$request_token_url = 'http://api.t.sina.com.cn/oauth/request_token';
$authorize_url = 'http://api.t.sina.com.cn/oauth/authorize';
$access_token_url = 'http://api.t.sina.com.cn/oauth/access_token';
$callback_url = $_GET['siteurl'].'/wp-content/plugins/wp-sns-share/open/sina/login.php';

if(!isset($_SESSION['sina_key'])){
	if(isset($_GET['key'])){
		$_SESSION['sina_key'] = $_GET['key'];
		$_SESSION['sina_secret'] = $_GET['secret'];
	}
	else{
		print_r($_SESSION);
		exit('no sina key, please contact with http://blog.stariy.org/wp-sns-share.html');
	}
}
$consumer = new OAuthConsumer($_SESSION['sina_key'], $_SESSION['sina_secret']);

function WPSNS_get_sina_name($consumer, $token, $secret){
	$api_url = 'http://api.t.sina.com.cn/account/verify_credentials.json';
	$token = new OAuthConsumer($token, $secret);
	$params = array('oauth_version' => '1.0a');

	$request = OAuthRequest::from_consumer_and_token($consumer, $token, 'POST', $api_url, $params);
	$request->sign_request(WPSNS_get_signature_method(), $consumer, $token);

	$url_obj = parse_url($request->to_url());
	$response = WPSNS_post_content($api_url, 'POST', $url_obj['query']);
	$detail = json_decode($response, true);
	return $detail['name'];
}

if(!isset($_SESSION['sina_oauth_token'])){
	$ret = WPSNS_request_token($request_token_url, $consumer, $params);
	$_SESSION['sina_oauth_token'] = $ret['oauth_token'];
	$_SESSION['sina_oauth_token_secret'] = $ret['oauth_token_secret'];
	WPSNS_authorize($authorize_url, $ret['oauth_token'], $callback_url);
}
else{
	$oauth_verifier = $_GET['oauth_verifier'];
	$token = new OAuthConsumer($_SESSION['sina_oauth_token'], $_SESSION['sina_oauth_token_secret']);
	$ret = WPSNS_access_token($access_token_url, $oauth_verifier, $consumer, $token);
	
	unset($_SESSION['sina_oauth_token']);
	unset($_SESSION['sina_oauth_token_secret']);
	$token = $ret['oauth_token'];
	$secret = $ret['oauth_token_secret'];
	$sina_name = WPSNS_get_sina_name($consumer, $token, $secret);

	echo '<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
			<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head>
			<script type="text/javascript">
			  pd = window.opener.document;';

	if($token != '' && $secret != ''){
		echo "pd.getElementById('sina_submit').value = 1;
			  pd.getElementById('sina_token').value = '$token';
			  pd.getElementById('sina_secret').value = '$secret';
			  pd.getElementById('sina_name').value = '$sina_name';
			  pd.getElementById('setting_form').submit();";
		echo 'window.close();</script>';
	}
	else{
		echo "pd.getElementById('sina_text').innerHTML = '登录失败';";
		echo 'window.close();</script>';
	}
}
