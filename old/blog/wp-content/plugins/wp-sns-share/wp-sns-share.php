<?php
/*
 Plugin Name: wp-sns-share
 Version: 2.4
 Plugin URI: http://blog.stariy.org/2010-08/wp-sns-share.html
 Description: 将您的博客文章分享到SNS和微博，支持后台同步更新到新浪微博、腾讯微博；分享您的博客和信息给您的同学和朋友，为您的博客带来巨大流量，增加您网站的外链有益于SEO
 Author: –Flyぁ梦–
 Author URI: http://blog.stariy.org/
 */

define('SHARESNS_NAME', dirname(plugin_basename(__FILE__)));
define('SHARESNS_HOME', get_bloginfo('wpurl').'/wp-content/plugins/'.SHARESNS_NAME);
define('SHARESNS_IMAGE_HOME', SHARESNS_HOME.'/images');
define('SHARESNS_OPTION', 'ShareSNSOptions');
define('SHARESNS_VERSION', '2.4');

include('functions.php');

if(!function_exists("shareItemSort")){
	function shareItemSort($a, $b){
		if($a['seq'] <= $b['seq'])
			return -1;
		else
			return 1;
	}
}

if (!class_exists('ShareSNS')) {
	class ShareSNS {
		var $optionsName = SHARESNS_OPTION;
		var $options;
		var $p = array(
					'renren' => -312,
					'douban' => -52,
					'qqzone' => -260,
					'kaixin' => -208,
					'baidu' => 0,
					'sina' => -338,
					'tqq' => -390,
					't163' => -364,
					'tsohu' => -416,
					'fanfou' => -104,
					'gmark' => -156,
					'gbuzz' => -130,
					'twitter' => -442,
					'facebook' => -78,
					'linkedin' => -234,
					'delicious' => -26,
					'b' => -468,
					'sinaLogin' => -538,
					'qqLogin' => -504,
				);

		function ShareSNS() {}

		function init() {
			$options = get_option($this->optionsName);
			if(empty($options)){
				$options = $this->defaultOptions();
				update_option($this->optionsName, $options);
			}
			else if($options['version'] != SHARESNS_VERSION){
				$options = $this->updateOptions();
			}
			$this->options = $options;
		}
		
		function defaultOptions() {
			return array(
				'version' => SHARESNS_VERSION,
				'SNS' => array(
					'renren' => array('c'=>1,'name'=>'renren','site'=>'人人网','seq'=>0,'note'=>''),
					'douban' => array('c'=>1,'name'=>'douban','site'=>'豆瓣','seq'=>1,'note'=>''),
					'qqzone' => array('c'=>1,'name'=>'qqzone','site'=>'QQ空间','seq'=>2,'note'=>'可同时分享到腾讯微博'),
					'kaixin' => array('c'=>1,'name'=>'kaixin','site'=>'开心网','seq'=>3,'note'=>''),
					'baidu' => array('c'=>1,'name'=>'baidu','site'=>'百度空间','seq'=>4,'note'=>'百度博客默认转载内容为空'),
					'sina' => array('c'=>1,'name'=>'sina','site'=>'新浪微博','seq'=>5,'note'=>'自带URL缩短：t.cn'),
					'tqq' => array('c'=>1,'name'=>'tqq','site'=>'腾讯微博','seq'=>6,'note'=>'自带URL缩短：url.cn'),
					't163' => array('c'=>1,'name'=>'t163','site'=>'网易微博','seq'=>7,'note'=>'自带URL缩短：163.fm'),
					'tsohu' => array('c'=>1,'name'=>'tsohu','site'=>'搜狐微博','seq'=>8,'note'=>'自带URL缩短：t.itc.cn'),
					'fanfou' => array('c'=>1,'name'=>'fanfou','site'=>'饭否','seq'=>9,'note'=>'无URL缩短'),
					'gmark' => array('c'=>1,'name'=>'gmark','site'=>'Google书签','seq'=>10,'note'=>''),
					'gbuzz' => array('c'=>1,'name'=>'gbuzz','site'=>'Google Buzz','seq'=>11,'note'=>''),
					'twitter' => array('c'=>0,'name'=>'twitter','site'=>'twitter','seq'=>12,'note'=>'推特微博，适合使用tinyurl缩短功能'),
					'facebook' => array('c'=>0,'name'=>'facebook','site'=>'facebook','seq'=>13,'note'=>'脸谱网'),
					'linkedin' => array('c'=>0,'name'=>'linkedin','site'=>'linkedin','seq'=>14,'note'=>'商务社交网站'),
					'delicious' => array('c'=>0,'name'=>'delicious','site'=>'delicious','seq'=>15,'note'=>'美味书签'),
				),
				'output' => array(
					'auto' => 1,
					'share' => '分享到：',
					'ending' => '',
					'hr' => 1,
					'distance' => 40,
					'content_start' => 0,
					'content_end' => 1,
				),
				'tiny' => array(
					'open' => 0,
					'tinyurl' => 0,
				),
				'sync' => array(
					'open' => 0,
					'post_sync' => 1,
					'update_sync' => 1,
					'format' => '%blog的博客更新日志： 《%title》 %url %desc',
					'sina' => array(
						'key' => '1925972150',
						'secret' => '513cb05f0a200b691ebe4e28ebdd6391',
						'sina_name' => '',
						'oauth_token' => '',
						'oauth_token_secret' => '',
						'message' => ''
					),
					'tqq' => array(
						'key' => '9bbb11f66ed44ed48802cc82d167813f',
						'secret' => 'c5c117679290c2e0166b1ef2d597ae03',
						'name' => '',
						'oauth_token' => '',
						'oauth_token_secret' => '',
						'message' => ''
					)
				),
			);
		}
		
		function updateOptions() {
			$newOptions = $this->defaultOptions();
			$oldOptions = get_option($this->optionsName);
			
			//sns list
			if(isset($oldOptions['SNS'])){
				foreach($oldOptions['SNS'] as $sns => $array ){
					if(in_array($sns, array_keys($newOptions['SNS']))){
						$newOptions['SNS'][$sns]['c'] = $array['c'];
						if(isset($array['seq']))
							$newOptions['SNS'][$sns]['seq'] = $array['seq'];
					}
				}
			}
			
			//output format
			if(isset($oldOptions['output'])){
				foreach($oldOptions['output'] as $key => $value ){
					if(in_array($key, array_keys($newOptions['output']))){
						$newOptions['output'][$key] = $value;
					}
				}
			}
			
			//url short
			if(isset($oldOptions['tiny']) && is_array($oldOptions['tiny'])){
				$check = false;
				if($oldOptions['tiny']['open'] == 1){
					$sum = 0;
					foreach ($oldOptions['tiny'] as $key => $value){
						if($key != 'open') $sum += $value;
					}
					if($sum == 1) $check = true;
				}
				if($check){
					foreach($oldOptions['tiny'] as $key => $value ){
						if(in_array($key, array_keys($newOptions['tiny']))){
							$newOptions['tiny'][$key] = $value;
						}
					}
				}
			}
			
			//sync
			if(isset($oldOptions['sync']) && is_array($oldOptions['sync'])){
				if(isset($oldOptions['sync']['open'])){
					$newOptions['sync']['open'] = $oldOptions['sync']['open'];
					$newOptions['sync']['post_sync'] = $oldOptions['sync']['post_sync'];
					$newOptions['sync']['update_sync'] = $oldOptions['sync']['update_sync'];
//					$newOptions['sync']['format'] = $oldOptions['sync']['format'];
				}
				if(isset($oldOptions['sync']['sina'])){
					$oldsina = $oldOptions['sync']['sina'];
					$newOptions['sync']['sina']['sina_name'] = $oldsina['sina_name'];
					$newOptions['sync']['sina']['oauth_token'] = $oldsina['oauth_token'];
					$newOptions['sync']['sina']['oauth_token_secret'] = $oldsina['oauth_token_secret'];
					$newOptions['sync']['sina']['message'] = $oldsina['message'];
				}
				if(isset($oldOptions['sync']['tqq'])){
					$oldtqq = $oldOptions['sync']['tqq'];
					$newOptions['sync']['tqq']['name'] = $oldtqq['name'];
					$newOptions['sync']['tqq']['oauth_token'] = $oldtqq['oauth_token'];
					$newOptions['sync']['tqq']['oauth_token_secret'] = $oldtqq['oauth_token_secret'];
					$newOptions['sync']['tqq']['message'] = $oldtqq['message'];
				}
			}
				
			update_option($this->optionsName, $newOptions);
			return $newOptions;
		}

		function printAdminPage() {
			$this->init();
			if(isset($_POST['shareSNS_uninstall'])){
				delete_option($this->optionsName);
				include('page/delete.php');
				return;
			}
			if(isset($_POST['shareSNS_update'])){
				$options = $this->defaultOptions();
				$oldOptions = get_option($this->optionsName);
				
				//init sns list
				foreach ($options['SNS'] as $sns => $array){
					$options['SNS'][$sns]['c'] = 0;
					$options['SNS'][$sns]['seq'] = 1000;
				}
				
				//to do with sns checkbox list
				$snsList = $_POST['c'];
				if(count($snsList) > 0){
					$index = 0;
					foreach ( $snsList as $sns ){
						if(in_array($sns, array_keys($options['SNS']))){
							$options['SNS'][$sns]['c'] = 1;
							$options['SNS'][$sns]['seq'] = $index;
						}
						$index++;
					}
				}
				
				//output format
				$options['output']['auto'] = $_POST['output_auto'];
				$options['output']['share'] = $_POST['output_share'];
				$options['output']['ending'] = $_POST['output_ending'];
				if(isset($_POST['output_hr_no'])){
					$options['output']['hr'] = 0;
				}
				if(intval($_POST['output_distance'])){
					$distance = intval($_POST['output_distance']);
					if($distance >= 20){
						$options['output']['distance'] = $_POST['output_distance'];
					}
				}
				
				//output position
				if(isset($_POST['output_content_start'])){
					$options['output']['content_start'] = 1;
				}
				else{
					$options['output']['content_start'] = 0;
				}
				if(isset($_POST['output_content_end'])){
					$options['output']['content_end'] = 1;
				}
				else{
					$options['output']['content_end'] = 0;
				}
				
				//url shorter
				if(isset($_POST['tiny'])){
					$options['tiny']['open'] = 1;
					$options['tiny']['tinyurl'] = 1;
				}
				else $options['tiny']['open'] = 0;
				
				//sync general option
				if(isset($_POST['sync_open'])){
					$options['sync']['open'] = 1;
				}
				if(!isset($_POST['post_sync'])){
					$options['sync']['post_sync'] = 0;
				}
				if(!isset($_POST['update_sync'])){
					$options['sync']['update_sync'] = 0;
				}
				$options['sync']['format'] = $_POST['sina_format'];
				
				//sina sync
				if($_POST['sina_submit'] == 1){	//login auto submit
					$options['sync']['sina']['sina_name'] = $_POST['sina_name'];
					$options['sync']['sina']['oauth_token'] = $_POST['sina_token'];
					$options['sync']['sina']['oauth_token_secret'] = $_POST['sina_secret'];
				}
				else{
					if(isset($_POST['sina_logout'])){	//logout
						$options['sync']['sina']['sina_name'] = '';
						$options['sync']['sina']['oauth_token'] = '';
						$options['sync']['sina']['oauth_token_secret'] = '';
						$options['sync']['sina']['message'] = '';
					}
					else{	//user submit to modify some checkbox or text fields
						$oldsina = $oldOptions['sync']['sina'];
						$options['sync']['sina']['sina_name'] = $oldsina['sina_name'];
						$options['sync']['sina']['oauth_token'] = $oldsina['oauth_token'];
						$options['sync']['sina']['oauth_token_secret'] = $oldsina['oauth_token_secret'];
						$options['sync']['sina']['message'] = $oldsina['message'];
					}
				}
				
				//tqq sync
				if($_POST['tqq_submit'] == 1){	//login auto submit
					$options['sync']['tqq']['name'] = $_POST['tqq_name'];
					$options['sync']['tqq']['oauth_token'] = $_POST['tqq_token'];
					$options['sync']['tqq']['oauth_token_secret'] = $_POST['tqq_secret'];
				}
				else{
					if(isset($_POST['tqq_logout'])){	//logout
						$options['sync']['tqq']['name'] = '';
						$options['sync']['tqq']['oauth_token'] = '';
						$options['sync']['tqq']['oauth_token_secret'] = '';
						$options['sync']['tqq']['message'] = '';
					}
					else{	//user submit to modify some checkbox or text fields
						$oldtqq = $oldOptions['sync']['tqq'];
						$options['sync']['tqq']['name'] = $oldtqq['name'];
						$options['sync']['tqq']['oauth_token'] = $oldtqq['oauth_token'];
						$options['sync']['tqq']['oauth_token_secret'] = $oldtqq['oauth_token_secret'];
						$options['sync']['tqq']['message'] = $oldtqq['message'];
					}
				}
				
				update_option($this->optionsName, $options);
				$this->options = $options;
			}
			include('page/home.php');
		}
	}
}

if (class_exists('ShareSNS')) {
	$wp_shareSNS = new ShareSNS();
	$options = get_option(SHARESNS_OPTION);
}

if (!function_exists('WPSNSShare_init')) {
	function WPSNSShare_init(){
		global $wp_shareSNS;
		if(!isset($wp_shareSNS)){
			$wp_shareSNS = new ShareSNS();
		}
		$wp_shareSNS->updateOptions();
	}
}

if (!function_exists('WPSNSShare_adminPanel')) {
	function WPSNSShare_adminPanel() {
		global $wp_shareSNS;
		if (!isset($wp_shareSNS)) {
			return;
		}
		if (function_exists('add_options_page')) {
			add_options_page('分享到SNS', '分享到SNS', 9,
			basename(__FILE__), array(&$wp_shareSNS, 'printAdminPage'));
		}
	}
}

if (!function_exists('WPSNSShare_addJS')) {
	function WPSNSShare_addJS() {
		$js = SHARESNS_HOME.'/'.SHARESNS_NAME.'.js';
		$dept = Array();
		wp_enqueue_script(SHARESNS_NAME, $js, $dept, SHARESNS_VERSION);
	}
}

if (!function_exists('WPSNSShare_addSettingsLink')) {
	function WPSNSShare_addSettingsLink($links) { 
	  $settings_link = '<a href="options-general.php?page='.SHARESNS_NAME.'">设置</a>'; 
	  array_unshift($links, $settings_link); 
	  return $links; 
	}
}


if (!function_exists('wp_sns_share')) {
	function wp_sns_share() {
		$options = get_option(SHARESNS_OPTION);
		$text = WPSNSShare_create_bar($options);
		return $text;
	}
	
	function WPSNSShare_filter_insert($content){
		if(is_home() || is_archive() || is_category()){
			return $content;
		}
		if(!is_single()){
			return $content;
		}
		$options = get_option(SHARESNS_OPTION);
		$ret = $content;
		$text = WPSNSShare_create_bar($options);
		if($options['output']['content_start'] == 1){
			$ret = $text.$ret;
		}
		if($options['output']['content_end'] == 1){
			$ret = $ret.$text;
		}
		return $ret;
	}
	
	function WPSNSShare_create_bar($options){
		$text = "\n\n<!-- wp-sns-share part begin -->\n";
		$text .= '<div class="WPSNS_main" style="margin:20px 0;">'."\n";
		if($options['tiny']['open'] == 1){
			$postURL = 'http://'.$_SERVER['SERVER_NAME'];
			if($_SERVER['SERVER_PORT'] != '80')
				$postURL .= ':'.$_SERVER['SERVER_PORT'];
			$postURL .= $_SERVER['REQUEST_URI'];
			if($options['tiny']['tinyurl'] == 1)
				$tiny = file_get_contents('http://tinyurl.com/api-create.php?url='.$postURL);
			else
				$tiny = $postURL;
			$text .= '<input id="wp-sns-share-tiny" type="hidden" value="'.$tiny.'" />';
		}
		$line = '<div width="95%" style="border-top:1px dotted #D4D0C8;height:1px"></div>'."\n";
		if($options['output']['hr'] == 1){
			$text .= $line;
		}
		$text .= '<div style="margin:15px 0;height:27px;">'."\n";
		$text .= '<ul class="WPSNS_ul" style="list-style:none;margin:0;padding:0;">'."\n";
		$first = true;
		if(count($options['SNS']) > 0){
			$itemList = $options['SNS'];
			usort($itemList, 'shareItemSort');
			global $wp_shareSNS;
			$position = $wp_shareSNS->p;
			$b_pos = $position['b'];
			foreach ($itemList as $array){
				if($array['c'] == 1){
					if($first) {
						$text .= '<span style="margin:3px 10px 0 0;height:27px;display:block;float:left;font-size:16px;">'.$options['output']['share']."</span>\n";
						$first = false;
					}
					$title = '分享到'.$array['site'];
					$onclick = "shareToSNS('".$array['name']."',".$options['tiny']['open'].")";
					$text .= "<li class=\"WPSNS_item\" style=\"position:relative;float:left;display:inline;width:".$options['output']['distance']."px;margin:0;padding:0;\">\n".
								"<a href=\"javascript:void(0)\" title=\"$title\" onclick=\"$onclick\" style=\"z-index:2;width:16px;height:16px;margin:6px 0;padding:0;border:none;text-decoration:none;float:left;position:relative;background:url(".SHARESNS_IMAGE_HOME."/icons.png) no-repeat 0 ".$position[$array['name']]."px;\"></a>".
								"<em style=\"width:26px;height:26px;top:2px;left:-5px;display:none;position:absolute;background:transparent url(".SHARESNS_IMAGE_HOME."/icons.png) no-repeat 0 {$b_pos}px\"></em>\n".
							 "</li>\n";
				}
			}
			$text .= $options['output']['ending']."\n";
		}
		$text .= "</ul>\n";
		$text .= "</div>\n";
		if($options['output']['hr'] == 1){
			$text .= $line;
		}
		$text .= "</div>\n";
		$text .= "<!-- wp-sns-share part end -->\n\n";
		return $text;
	}
}

if (!function_exists('WPSNSShare_sync')) {
	function WPSNSShare_sync($postID){
		$options = get_option(SHARESNS_OPTION);
		$post_sync = $options['sync']['post_sync'];
		$update_sync = $options['sync']['update_sync'];
		global $wpdb;
		$postObj = $wpdb->get_results("SELECT post_title,post_date,post_modified FROM $wpdb->posts WHERE ID = $postID");
		if(count($postObj) != 1){
			return;
		}
		$post = $postObj[0];
		$post_title = $post->post_title;
		$post_date = $post->post_date;
		$post_modified = $post->post_modified;
		if($post_date == $post_modified && $post_sync == 0){	//post situation
			return;
		}
		if($post_date != $post_modified && $update_sync == 0){	//update situation
			return;
		}
		$url = get_permalink($postID);
		$options = get_option(SHARESNS_OPTION);
		$weibo = $options['sync']['format'];
		$sina_weibo = $weibo;
		$qq_weibo = $weibo;
		
		// create the weibo, replace the user setting
		$this_post = get_post($postID);
		if(strstr($weibo, '%blog')){
			$sina_weibo = str_replace('%blog', get_option('blogname'), $sina_weibo);
			$qq_weibo = str_replace('%blog', get_option('blogname'), $qq_weibo);
		}
		if(strstr($weibo, '%title')){
			$sina_weibo = str_replace('%title', $post_title, $sina_weibo);
			$qq_weibo = str_replace('%title', $post_title, $qq_weibo);
		}
		if(strstr($weibo, '%url')){
			$qq_weibo = str_replace('%url', $url, $qq_weibo);
			$url = urlencode($url);
			$sina_weibo = str_replace('%url', $url, $sina_weibo);
		}
		if(strstr($weibo, '%desc')){
			if(isset($options['sync']['sina'])){
				$sina_desc = WPSNSShare_weibo_get_short_desc($sina_weibo, $this_post->post_content, 140);
				$sina_weibo = str_replace('%desc', $sina_desc, $sina_weibo);
			}
			if(isset($options['sync']['tqq'])){
				$qq_desc = WPSNSShare_weibo_get_short_desc($qq_weibo, $this_post->post_content, 140);
				$qq_weibo = str_replace('%desc', $qq_desc, $qq_weibo);
			}
		}
		// end//
		
		if(isset($options['sync']['sina'])){
			$sinaOption = $options['sync']['sina'];
			$key = $sinaOption['key'];
			$key_secret = $sinaOption['secret'];
			$token = $sinaOption['oauth_token'];
			$token_secret = $sinaOption['oauth_token_secret'];
			if($token != '' && $token_secret != ''){
//				$img_url = WPSNSShare_getIMG($this_post->post_content);
				$message = WPSNS_send_sina_weibo($sina_weibo, $key, $key_secret, 
								$token, $token_secret);
				$options['sync']['sina']['message'] = $message;
				update_option(SHARESNS_OPTION, $options);
			}
		}
		if(isset($options['sync']['tqq'])){
			$tqqOption = $options['sync']['tqq'];
			$key = $tqqOption['key'];
			$key_secret = $tqqOption['secret'];
			$token = $tqqOption['oauth_token'];
			$token_secret = $tqqOption['oauth_token_secret'];
			if($token != '' && $token_secret != ''){
				$message = WPSNS_send_tqq_weibo($qq_weibo, $key, $key_secret, $token, $token_secret);
				$options['sync']['tqq']['message'] = $message;
				update_option(SHARESNS_OPTION, $options);
			}
		}
	}
	
	function WPSNSShare_weibo_get_short_desc($weibo, $content, $allow){
		$l = strlen($weibo);
		$length = 0;
		for($i = 0;$i < $l;$i++){
			$c = $weibo[$i];
			$n = ord($c);
			if(($n >> 7) == 0){			//0xxx xxxx, asci, single
				$length += 0.5;
			}
			else if(($n >> 4) == 15){ 	//1111 xxxx, first in four char
				if(isset($weibo[$i + 1])){
					$i++;
					if(isset($weibo[$i + 1])){
						$i++;
						if(isset($weibo[$i + 1])){
							$i++;
						}
					}
				}
				$length++;
			}
			else if(($n >> 5) == 7){ 	//111x xxxx, first in three char
				if(isset($weibo[$i + 1])){
					$i++;
					if(isset($weibo[$i + 1])){
						$i++;
					}
				}
				$length++;
			}
			else if(($n >> 6) == 3){ 	//11xx xxxx, first in two char
				if(isset($weibo[$i + 1])){
					$i++;
				}
				$length++;
			}
		}
		$length -= 2.5; // for $desc
		$append = $allow - $length - 10; // 10 is for safe
		$ret = '';
		$ll = strlen($content);
		for($i = 0;$i < $ll && $append > 0;$i++){
			$c = $content[$i];
			$n = ord($c);
			if(($n >> 7) == 0){			//0xxx xxxx, asci, single
				$ret .= $c;
				$append -= 0.5;
			}
			else if(($n >> 5) == 6){ 	//110x xxxx, first in two char
				$ret .= $c;
				if(isset($content[$i + 1])){
					$ret .= $content[$i + 1];
					$i++;
				}
				$append -= 1;
			}
			else if(($n >> 4) == 14){ 	//1110 xxxx, first in three char
				$ret .= $c;
				if(isset($content[$i + 1])){
					$ret .= $content[$i + 1];
					$i++;
					if(isset($content[$i + 1])){
						$ret .= $content[$i + 1];
						$i++;
					}
				}
				$append -= 1;
			}
			else if(($n >> 3) == 30){	//1111 0xxx, first in four char
				$ret .= $c;
				if(isset($content[$i + 1])){
					$ret .= $content[$i + 1];
					$i++;
					if(isset($content[$i + 1])){
						$ret .= $content[$i + 1];
						$i++;
						if(isset($content[$i + 1])){
							$ret .= $content[$i + 1];
							$i++;
						}
					}
				}
				$append -= 1;
			}
		}
		$ret .= '...';
		return $ret;
	}
	
	function WPSNSShare_getIMG($content){
		$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
		preg_match_all($pattern, $content, $m);
		if(count($m[0]) == 0) return '';
		return $m[1][0];
	}
}


//启用插件时，初始化插件参数
add_action('activate_wp-sns-share/wp-sns-share.php', 'WPSNSShare_init');

//打印插件页面
add_action('admin_menu', 'WPSNSShare_adminPanel');

//添加wp-sns-share.js到<head>
add_action('init', 'WPSNSShare_addJS');

//插件列表中为插件增加“设置”选项
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'WPSNSShare_addSettingsLink' );

//自动输出SNS图标横栏
if($options['output']['auto'] == 1){
	add_filter('the_content', 'WPSNSShare_filter_insert');
}

//微博同步
$open_lib_include = false;
if($options['sync']['open'] == 1){
	include_once('open/func.php');
	include_once('open/sina/app.php');
	include_once('open/tqq/app.php');
	$open_lib_include = true;
	add_action('publish_post', 'WPSNSShare_sync');
}

//发送测试微博
if(isset($_POST['shareSNS_textWeibo'])){
	$weibo = $_POST['weiboText'];
	if($weibo != ''){
		$test_source = $_POST['test_source'];
		!$open_lib_include && include_once('open/func.php');
		if($test_source == 'sina'){
			!$open_lib_include && include_once('open/sina/app.php');
			$sinaOption = $options['sync']['sina'];
			$key = $sinaOption['key'];
			$key_secret = $sinaOption['secret'];
			$token = $sinaOption['oauth_token'];
			$token_secret = $sinaOption['oauth_token_secret'];
			if($token != '' && $token_secret != ''){
				$message = WPSNS_send_sina_weibo($weibo, $key, $key_secret, $token, $token_secret);
				$options['sync']['sina']['message'] = $message;
				update_option(SHARESNS_OPTION, $options);
			}
		}
		else if($test_source == 'tqq'){
			!$open_lib_include && include_once('open/tqq/app.php');
			$tqqOption = $options['sync']['tqq'];
			$key = $tqqOption['key'];
			$key_secret = $tqqOption['secret'];
			$token = $tqqOption['oauth_token'];
			$token_secret = $tqqOption['oauth_token_secret'];
			if($token != '' && $token_secret != ''){
				$message = WPSNS_send_tqq_weibo($weibo, $key, $key_secret, $token, $token_secret);
				$options['sync']['tqq']['message'] = $message;
				update_option(SHARESNS_OPTION, $options);
			}
		}
	}
}
