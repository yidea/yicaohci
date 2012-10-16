<?php
/*
Plugin Name: untco
Plugin URI: http://www.ruanyifeng.com/webapp/untco.html
Description: This plugin is based on Twitter Tools. When a post is created automatically from a tweet, this plugin will unshorten all t.co short URLs in the tweet into their original URLs.
Version: 0.2.1
Author: Ruan YiFeng
Author URI: http://www.ruanyifeng.com
License: GPL2
*/

/*	Copyright 2012 Ruan YiFeng (email:yifeng.ruan@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function untco_unShort($matches){
	
	$link_url = 'http:'.'//'.$matches[1];

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $link_url);

	curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'untco_curlData');
	curl_setopt($ch, CURLOPT_WRITEFUNCTION, 'untco_curlData');
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);

	curl_exec($ch);

	$link_url = htmlspecialchars(untco_curlData(null));

	curl_close($ch);

	return $link_url;
}

function untco_curlData($ch, $data=null) {
	static $buffer = '';

	if ( is_null($ch) ) {
		$r = $buffer;
		$buffer = '';
		$rArr = explode("\r\n", $r);
		return substr($rArr[3],10);
	} else {
		$buffer .= $data;
		return strlen($data);
	}
}

function untco_findLinks($text) {
	$pattern = '/http:\/\/(t\.co\/[0-9a-zA-Z]*)/i';
	$text = preg_replace_callback($pattern,'untco_unShort',$text);

	return $text;
}

function untco_init($postID){
	global $wpdb;
	$postObj = $wpdb->get_results("SELECT post_content FROM $wpdb->posts WHERE ID = $postID");
	if(count($postObj) != 1){
		return;
	}
	$post = $postObj[0];
	$post_content = $post->post_content;

	$wpdb->update( 
		$wpdb->posts, 
		array( 
			'post_content' => untco_findLinks($post_content)
		), 
		array( 'ID' => $postID )
	);

}

function untco_tweet_post($data, $tweet){

	if($data['post_content']){
		$data['post_content'] = untco_findLinks($data['post_content']);
	}

	return $data;

}

// add_filter('the_content', 'untco_findLinks', 999);
// add_filter('the_excerpt', 'untco_findLinks', 999);

// add_action('publish_post', 'untco_init', 3);
// add_action('edit_post', 'untco_init', 3);

add_filter('aktt_do_tweet_post', 'untco_tweet_post', 10, 2)

?>
