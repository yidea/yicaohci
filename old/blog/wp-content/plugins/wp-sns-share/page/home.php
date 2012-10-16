<style>
<!--
.widefat td, .widefat th{border-bottom-style: none;}
td .center{text-align:center;}
-->
</style>
<script type="text/javascript">
<!--
function swapUP(dom){
	var $item = jQuery(dom).parents("tr.shareItem");
	var $preItem = $item.prev();
	if($preItem.size() == 0){
		alert("已经是第一了");
	}
	else{
		$preItem.insertAfter($item);
	}
}
function swapDown(dom){
	var $item = jQuery(dom).parents("tr.shareItem");
	var $nextItem = $item.next();
	if($nextItem.size() == 0){
		alert("已经是最后了");
	}
	else{
		$nextItem.insertBefore($item);
	}
}
function sina_at_me(){
	var at = ' @_Fly梦_';
	var box = document.getElementById('weiboText');
	box.value = box.value + at;
}
function sinaLogout(){
	if(confirm("确定要注销新浪微博？")){
		var $span = jQuery('#sina_logout');
		$span.html('<input type="hidden" name="sina_logout" value="1" >');
		document.getElementById('setting_form').submit();
	}
}
function tqqLogout(){
	if(confirm("确定要注销腾讯微博？")){
		var $span = jQuery('#tqq_logout');
		$span.html('<input type="hidden" name="tqq_logout" value="1" >');
		document.getElementById('setting_form').submit();
	}
}
function check_test_form_submit(form){
	if(form.weiboText.value == ''){
		alert('内容为空');
		return false;
	}
	var c = false;
	jQuery("#test_form :radio").each(function (i){
		if(this.checked){
			c = true;
		}
	});
	if(!c){
		alert('没有选择目标');
		return false;
	}
	return true;
}
function WPSNS_show_hide(obj){
	
}

jQuery("document").ready(function (){
	var h = "<span style=\"float:right\"><a href=\"javascript:void(0)\" onclick=\"\">收起</a></span>";
	jQuery("thead .WPSNS_title").append(h);
	jQuery("thead a").toggle(
		function (){
			jQuery(this).parents(".widefat").find("tbody").fadeOut(500);
			jQuery(this).text("显示");
		},
		function (){
			jQuery(this).parents(".widefat").find("tbody").fadeIn(500);
			jQuery(this).text("收起");
		}
	);
});
//-->
</script>
<div class='wrap'>
	<h2><?php _e('wp-sns-share', SHARESNS_NAME); ?></h2>
	
	<!-- 左边主要版块 -->
	<div style="float: left">
	
	<div id="show_example"><?php echo wp_sns_share();?></div>
	
	<table style="margin:0;padding:0" cellpadding="0" cellspacing="0">
	
	<!-- 配置信息form模块 -->
	<tr><td>
	<form action="" method="post" id="setting_form">
		<table style="width:100%">
		
		<!-- 子模块：sns列表 -->
		<tr><td>
			<table class="widefat">
				<thead><tr><th colspan="4" class="WPSNS_title">选择你要在前台显示的sns分享链接</th></tr></thead>
				<tbody>
					<?php
						$itemList = $this->options['SNS'];
						usort($itemList, 'shareItemSort');
						$position = $this->p;
						foreach ($itemList as $array){
							$name = $array['name'];
					?>
					<tr class="shareItem">
						<td class="center">
							<input name="c[]" type="checkbox" <?php if($array['c']) echo 'checked'?> value="<?php _e($name, SHARESNS_NAME)?>">
							<span style="margin-left:50px"><a href="javascript:void(0)" onclick="swapUP(this)">up</a></span>
							<span style="margin-left:50px"><a href="javascript:void(0)" onclick="swapDown(this)">down</a></span>
						</td>
						<td class="center" width="20px">
							<div style="margin:1px 0;width:16px;height:16px;background:url(<?php echo SHARESNS_IMAGE_HOME?>/icons.png) no-repeat 0 <?php echo $position[$name]?>px;"></div>
						</td>
						<td class="center" width="150px"><?php _e($array['site'], SHARESNS_NAME)?></td>
						<td><?php _e($array['note'], SHARESNS_NAME)?></td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</td></tr>
		<!-- 子模块：sns列表 end -->
		
		<tr><td align="left">
			<p class='submit'><input type='submit' value='更新选项' name='Submit'></p>
		</td></tr>
		
		<!-- 子模块：sns横栏输出控制 -->
		<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th colspan="2" class="WPSNS_title">SNS分享栏输出设置</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="150">分享列表之前</td>
						<td><input type="text" name="output_share" value="<?php _e($this->options['output']['share'], SHARESNS_NAME)?>"></td>
					</tr>
					<tr>
						<td>分享列表之后</td>
						<td><input type="text" name="output_ending" value="<?php _e($this->options['output']['ending'], SHARESNS_NAME)?>"></td>
					</tr>
					<tr>
						<td height="30">分享列表位置</td>
						<td>
							<input type="checkbox" name="output_content_start" <?php checked(1, $this->options['output']['content_start']); ?> > 文章开头 &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="output_content_end" <?php checked(1, $this->options['output']['content_end']); ?> > 文章结束
						</td>
					</tr>
					<tr>
						<td height="30">上下分隔直线</td>
						<td><input type="checkbox" name="output_hr_no" <?php checked(0, $this->options['output']['hr']); ?> > 关闭</td>
					</tr>
					<tr>
						<td height="30">2个SNS图标的间隔距离</td>
						<td><input type="text" name="output_distance" size="3" value="<?php _e($this->options['output']['distance'], SHARESNS_NAME)?>" > px 【距离不能小于20】</td>
					</tr>
					<tr>
						<td height="30">友情提醒</td>
						<td>不同主题文章的宽度不同，通过选择不同数量的SNS分享图标和设置图标之间的距离，来保持分享栏的美观性</td>
					</tr>
					<tr>
						<td height="30">自动输出</td>
						<td>
							<input type="radio" name="output_auto" value="1" checked="checked"> 自动 
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="output_auto" value="2" <?php checked(2, $this->options['output']['auto']); ?> > 
							手动调用函数，方法： &lt;?php echo wp_sns_share();?&gt; <strong>【首页中也有效】</strong>
						</td>
					</tr>
				</tbody>
			</table>
		</td></tr>
		<!-- 子模块：sns横栏输出控制 end -->
		
		<!-- 子模块：URL缩短服务 -->
		<tr><td>
			<table class="widefat" style="margin:30px 0 0 0">
				<thead>
					<tr>
						<th colspan="2" class="WPSNS_title">TinyUrl功能，利用tinyurl.com缩短URL服务可以使网页URL压缩</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>开启</td>
						<td><input type="checkbox" name="tiny" <?php checked(1, $this->options['tiny']['open']); ?> ></td>
					</tr>
					<tr>
						<td width="150">说明</td>
						<td>
							如将<a href="http://blog.stariy.org/2010-08/wp-sns-share.html" target="_blank">http://blog.stariy.org/2010-08/wp-sns-share.html</a>
							压缩为<a href="http://tinyurl.com/3acybka" target="_blank">http://tinyurl.com/3acybka</a>
						</td>
					</tr>
					<tr>
						<td height="30">建议</td>
						<td>比较适合微博类网站，国内微博自带URL压缩，但twitter却没有，twitter的粉丝可以考虑开启此功能</td>
					</tr>
				</tbody>
			</table>
		</td></tr>
		<!-- 子模块：URL缩短服务 end -->
		
		<!-- 子模块：同步功能 -->
		<tr><td>
			<table class="widefat" style="margin:30px 0 0 0">
				<thead>
					<tr>
						<th colspan="2" class="WPSNS_title">微博同步功能，利用OAuth认证和开放API，每次发布新日志时自动发送一条微博</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$syncOption = $this->options['sync'];
						$sinaOption = $this->options['sync']['sina'];
						$sinaLogin = 0;
						if($sinaOption['sina_name'] != '' && $sinaOption['oauth_token'] != '' 
							&& $sinaOption['oauth_token_secret'] != ''){
							$sinaLogin = 1;
						}
						$tqqOption = $this->options['sync']['tqq'];
						$tqqLogin = 0;
						if($tqqOption['name'] != '' && $tqqOption['oauth_token'] != '' 
							&& $tqqOption['oauth_token_secret'] != ''){
							$tqqLogin = 1;
						}
					?>
					<tr>
						<td width="150" height="20">开启</td>
						<td><input type="checkbox" name="sync_open" <?php checked(1, $syncOption['open']); ?> ></td>
					</tr>
					<tr>
						<td height="30">微博同步</td>
						<td>
							发布文章时&nbsp;&nbsp;<input type="checkbox" name="post_sync" <?php checked(1, $syncOption['post_sync']); ?> >
							<span style="margin-left:50px"></span>
							更新文章时&nbsp;&nbsp;<input type="checkbox" name="update_sync" <?php checked(1, $syncOption['update_sync']); ?> >
							</td>
					</tr>
					<tr>
						<td height="60">微博格式</td>
						<td>
							<input type="text" size="70" name="sina_format" value="<?php echo $syncOption['format']; ?>">
							<p>%blog代表博客名称，%title代表日志标题，%url代表日志URL，%desc代表博文摘要</p>
						</td>
					</tr>
					<?php 
						$sina_message = $sinaOption['message'];
						if($sina_message != ''){
							if(strlen($sina_message) > 102)
								$sina_message = substr($sina_message,0,102).' ...';
					?>
					<tr>
						<td height="30">上一条新浪微博</td>
						<td><strong><?php echo htmlspecialchars(WPSNSShare_subString($sina_message, 0, 80));?></strong></td>
					</tr>
					<?php }?>
					<tr>
						<td height="50">新浪微博认证</td>
						<td>
							<?php 
								if($sinaLogin == 0){
									$sina_open_url = SHARESNS_HOME.'/open/sina/login.php?siteurl='.get_bloginfo('wpurl').'&key='.$sinaOption['key'].'&secret='.$sinaOption['secret'];
							?>
							<a id="sina_login" href="javascript:void(0)" 
								onclick="window.open('<?php echo $sina_open_url?>', '新浪OAuth认证', 'toolbar=0,resizable=0,scrollbars=0,status=0,width=600,height=500')">
								<span style="float:left;width:126px;height:24px;background:url(<?php echo SHARESNS_IMAGE_HOME?>/icons.png) no-repeat 0 -538px;"></span>
							</a>
							<font id="sina_text" color="red" style="margin-left:30px">注意：登陆成功后，页面将自动提交，所有修改的参数将会被保存</font>
							<span>
								<input type="hidden" id="sina_submit" name="sina_submit" value="0">
								<input type="hidden" id="sina_name" name="sina_name" value="">
								<input type="hidden" id="sina_token" name="sina_token" value="">
								<input type="hidden" id="sina_secret" name="sina_secret" value="">
							</span>
							<?php }else{?>
							<span id="sina_logined">
								<strong><?php echo $sinaOption['sina_name'];?></strong> 
								<a href="javascript:void(0)" onclick="sinaLogout()" style="margin-left:50px">注销</a>
								<span id="sina_logout"></span>
							</span>
							<?php }?>
						</td>
					</tr>
					<?php 
						$tqq_message = $tqqOption['message'];
						if($tqq_message != ''){
							if(strlen($tqq_message) > 102)
								$tqq_message = substr($tqq_message,0,102).' ...';
					?>
					<tr>
						<td height="30">上一条腾讯微博</td>
						<td><strong><?php echo htmlspecialchars(WPSNSShare_subString($tqq_message, 0, 80));?></strong></td>
					</tr>
					<?php }?>
					<tr>
						<td height="50">腾讯微博认证</td>
						<td>
							<?php 
								if($tqqLogin == 0){
									$tqq_open_url = SHARESNS_HOME.'/open/tqq/login.php?siteurl='.get_bloginfo('wpurl').'&key='.$tqqOption['key'].'&secret='.$tqqOption['secret'];
							?>
							<a id="sina_login" href="javascript:void(0)" 
								onclick="window.open('<?php echo $tqq_open_url?>', '腾讯OAuth认证', 'toolbar=0,resizable=0,scrollbars=0,status=0,width=900,height=800')">
								<span style="cursor:hand;float:left;width:126px;height:24px;background:url(<?php echo SHARESNS_IMAGE_HOME?>/icons.png) no-repeat 0 -504px;"></span>
							</a>
							<font id="tqq_text" color="red" style="margin-left:30px">注意：登陆成功后，页面将自动提交，所有修改的参数将会被保存</font>
							<span>
								<input type="hidden" id="tqq_submit" name="tqq_submit" value="0">
								<input type="hidden" id="tqq_name" name="tqq_name" value="">
								<input type="hidden" id="tqq_token" name="tqq_token" value="">
								<input type="hidden" id="tqq_secret" name="tqq_secret" value="">
							</span>
							<?php }else{?>
							<span id="tqq_logined">
								<strong><?php echo $tqqOption['name'];?></strong> 
								<a href="javascript:void(0)" onclick="tqqLogout()" style="margin-left:50px">注销</a>
								<span id="tqq_logout"></span>
							</span>
							<?php }?>
						</td>
					</tr>
					<tr>
						<td height="20">备注</td>
						<td>
							<div>无论任何原因若第二次启动微博认证失败后，请重新开启浏览器后再尝试操作</div>
						</td>
					</tr>
				</tbody>
			</table>
		</td></tr>
		<!-- 子模块：同步功能 end -->
		
		<tr><td align="left">
			<input type="hidden" name="shareSNS_update" value="1">
			<p class='submit'><input type='submit' value='更新选项' name='Submit'></p>
		</td></tr>

		</table>
	</form>
	</td></tr>
	<!-- 配置信息form模块 end -->
	
	<?php if($sinaLogin == 1 || $tqqLogin == 1){?>
	<!-- 发送测试微博form模块 -->
	<tr><td>
		<form id="test_form" action="" method="post" onsubmit="return check_test_form_submit(this)">
			<table class="widefat" style="margin:0 0 30px 0">
				<thead>
					<tr>
						<th colspan="2" class="WPSNS_title">发送一条微博</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">
							<p>
								<input id="weiboText" type="text" name="weiboText" size="100" value="输入你的微博内容">
								<input type='submit' value='点击发送'>
							</p>
							<p>
							<?php if($sinaLogin == 1){?><input type="radio" name="test_source" value="sina"> 新浪微博 
							（<a href="javascript:void(0)" onclick="sina_at_me()">@作者</a>）  &nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
							<?php if($tqqLogin == 1){?><input type="radio" name="test_source"  value="tqq"> 腾讯微博  &nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
							</p>
							<input type="hidden" name="shareSNS_textWeibo" value="1">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</td></tr>
	<!-- 发送测试微博form模块 end -->
	<?php }?>
	
	<!-- 注意信息纯文本模块 -->
	<tr><td>
		<table class="widefat">
			<thead>
				<tr>
					<th colspan="2" class="WPSNS_title">注意信息</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="150">网易微博的来源问题</td>
					<td>网易微博只对个别网站开放分享权限，如百度百科、土豆网等，而个人博客网站是不允许的，所以来源使用网易微博</td>
				</tr>
			</tbody>
		</table>
	</td></tr>
	<!-- 注意信息纯文本模块 end -->
	
	<!-- 卸载插件form模块 -->
	<tr><td>
		<form action="" method="post" onsubmit="return confirm('Are you sure to uninstall?')">
			<table width="100%" style="margin-top:50px">
			<tr><td>
				<table class="widefat">
					<thead>
						<tr>
							<th colspan="2" class="WPSNS_title">卸载 wp-sns-share</th>
						</tr>
					</thead>
					<tbody>
						<tr><td colspan="2">
							<font style="color: red;font-weight: normal">
								<?php _e('警告：一旦卸载将无法取消，但您可以重新安装此插件，影响不大。', SHARESNS_NAME)?>
							</font>
							<font><?php _e('下列wordpress数据库表中的数据项会被删除：', SHARESNS_NAME)?></font>
						</td></tr>
						<tr>
							<th width="150">WordPress数据表</th>
							<th>WordPress数据表中的记录名</th>
						</tr>
						<tr>
							<td>wp_options</td>
							<td><?php echo $this->optionsName?></td>
						</tr>
					</tbody>
				</table>
			</td></tr>
			<tr><td colspan="2">
				<input type="hidden" name="shareSNS_uninstall" value="1">
				<p class='submit'><input type='submit' value='卸载wp-sns-share' name='Submit'></p>
			</td></tr>
			</table>
		</form>
	</td></tr>
	<!-- 卸载插件form模块 end -->
	
	</table>
	
	</div>
	<!-- 左边主要版块 end -->
	
	<!-- 右边次要版块 -->
	<div style="float:left;margin-left:30px">
		<table>
			<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th width="250" class="WPSNS_title">关于 <?php echo SHARESNS_NAME?></th>
					</tr>
				</thead>
				<tbody>
					<tr><td><a target="_blank" href="http://blog.stariy.org/">–Flyぁ梦– 博客</a></td></tr>
					<tr><td><a target="_blank" href="http://wordpress.org/extend/plugins/wp-sns-share/">插件官方主页</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/feed">博客RSS</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/tag/wp-sns-share/feed">插件更新RSS</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2010-08/wp-sns-share.html">报告BUG</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2010-08/wp-sns-share.html">建议新功能</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/footprint">给我留个言什么的</a></td></tr>
				</tbody>
			</table>
			</td></tr>
		</table>
		<table style="margin-top:20px;">
			<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th width="250" class="WPSNS_title"><?php echo SHARESNS_NAME?>历史版本</th>
					</tr>
				</thead>
				<tbody>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2011-04/wp-sns-share_2-4.html">2.4：增加同步文章摘要</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2011-04/wp-sns-share_2-3.html">2.3：增加腾讯微博同步</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2011-02/wp-sns-share-2-1_add_sina_sync.html">2.1：增加新浪微博同步</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2011-01/wp-sns-share_2-0.html">2.0：增加sns图标顺序控制</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2010-09/wp-sns-share_add_tinyurl.html">1.2：增加tinyurl</a></td></tr>
					<tr><td><a target="_blank" href="http://blog.stariy.org/2010-08/wp-sns-share.html">wp-sns-share 1.0</a></td></tr>
				</tbody>
			</table>
			</td></tr>
		</table>
		<table style="margin-top:20px">
			<tr><td>
			<table class="widefat">
				<thead>
					<tr>
						<th width="250" class="WPSNS_title">如果您支持 <?php echo SHARESNS_NAME?></th>
					</tr>
				</thead>
				<tbody>
					<tr><td><a target="_blank" href="http://blog.stariy.org/">踩踩我的博客，点点我的广告 ^_^</a></td></tr>
				</tbody>
			</table>
			</td></tr>
		</table>
	</div>
	
	<!-- 右边次要版块 end -->
	
</div>