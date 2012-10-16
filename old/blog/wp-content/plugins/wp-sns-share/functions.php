<?php
function WPSNSShare_subString($str, $start, $length) {
	if(!isset($str{$start})) return '...';
	//判断起始位置
	if(ord($str{$start}) < 192) {
		if(!isset($str{$start + 1})) return '...';
		if(ord($str{$start + 1}) >= 192) {
			$start++;
		} else {
			if(!isset($str{$start + 2})) return '...';
			if(ord($str{$start + 2}) >= 192) {
				$start += 2;
			}
		}
	}
	//长度不足
	if(!isset($str{$start + $length - 1})) return substr($str, $start);
	//判断结束位置
	if(ord($str{$start + $length -1}) >= 224) {
		return substr($str, $start, $length + 2) . '...';
	} elseif(ord($str{$start + $length -1}) >= 192 || ord($str{$start + $length -2}) >= 224){
		return substr($str, $start, $length + 1) . '...';
	} else {
		return substr($str, $start, $length) . '...';
	}
}