=== wp-sns-share ===

Contributors: –Flyぁ梦–
Author info: 浙江大学 计算机07级
Author link: http://blog.stariy.org/
Tags: share, sns, wp-sns-share, wordpress, 分享, 微博, 同步, 新浪微博, 腾讯微博
Requires at least: 3.0
Tested up to: 3.3.1
Latest version: 2.4
Stable tag: 2.4

== Description ==

本插件利用各大SNS和微博网站的开放API，可将wordpress中文章分享到这些网站，并且支持新浪微博、腾讯微博与wordpress博客文章实时同步发布
在这些网站中可以吸引自己的同学、朋友和粉丝通过链接进入自己的博客文章，
从来带来巨大的流量。支持国内大多数的社交网站，如人人、豆瓣、开心网、QQ空间、百度空间、新浪微博、腾讯微博、
搜狐微博、网易微博、饭否、Google书签、Google Buzz和国外流行的linkedin、delicious、twitter和facebook。

相关链接:

* <a href="http://blog.stariy.org/">–Flyぁ梦–的博客</a>
* <a href="http://blog.stariy.org/myself">关于作者</a>
* <a href="http://blog.stariy.org/2010-08/wp-sns-share.html">发现BUG请告诉我</a>
* <a href="http://blog.stariy.org/2010-08/wp-sns-share.html">wp-sns-share 1.0</a>
* <a href="http://blog.stariy.org/2010-09/wp-sns-share_add_tinyurl.html">wp-sns-share 1.2</a>
* <a href="http://blog.stariy.org/2010-12/wp-sns-share_update_to_1-4.html">wp-sns-share 1.4</a>
* <a href="http://blog.stariy.org/2011-01/wp-sns-share_2-0.html">wp-sns-share 2.0</a>
* <a href="http://blog.stariy.org/2011-02/wp-sns-share-2-1_add_sina_sync.html">wp-sns-share 2.1</a>
* <a href="http://blog.stariy.org/2011-04/wp-sns-share_2-2.html">wp-sns-share 2.2</a>
* <a href="http://blog.stariy.org/2011-07/wp-sns-share_2-3.html">wp-sns-share 2.3</a>
* <a href="http://blog.stariy.org/2012-01/wp-sns-share_2-4.html">wp-sns-share 2.4</a>


== Installation ==
1. 下载
2. 使用wordpress后台上传已下载的安装包即可，或手动解压文件到plusins目录
3. 安装完毕后激活插件
4. 后台左侧插件栏点击“分享到SNS”即进入配置页面
5. 选择自己想要显示的SNS分享链接，然后配置相关选项


== Frequently Asked Questions ==

== Screenshots ==
1. 在新浪微博中博客同步发布的微博
2. 在腾讯微博中博客同步发布的微博
3. 博客文章中的分享条

== Changelog ==
= 2.4 =
1. 微博同步时，增加博客名和博文摘要的输出
2. 新浪微博同步时，url用url编码处理，可以支持中文url了

= 2.3 =
1. 增加腾讯微博实时可与博客同步更新
2. 后台可直接发送内容到新浪、腾讯微博，并可@作者
3. 后台增加分享栏预览
4. 后台增加控制SNS图标间隔的控制，方便保持分享栏的美观
5. 应热心网友要求，添加饭否网的分享链接，更改QQ空间图标
6. 应热心网友要求，添加分享栏在文章上或下的选择
7. 应热心网友要求，添加分享栏可以在首页等其他区域显示，调用<?php echo wp-sns-share();?>
1. （技术）放弃使用新浪微博sdk，采用开源OAuth库实现，减少代码量
2. （技术）所有图片合并为一张图，利用css sprite效果展示，减少http连接增进插件速度
3. （技术）将插件的php代码与后台的html、js代码分离，后者放入/page目录

= 2.2 =
1. 改善SNS图标列表前台显示效果，增加动态背景突出显示
2. 更改QQ空间图标
3. 新浪同步功能，增加选择发布文章和更新文章时候分开的同步选择
4. （技术）进一步规范代码，增加注释

= 2.1 =
1. 增加新浪微博同步功能，利用新浪OAuth认证后，发送博文的同时自动推送新浪微博
2. 增加插件列表页面中，直接进入插件控制面板的入口链接
3. 增加输出时对hr横线的控制，对调用函数wp-sns-share()统一化，无需任何参数，返回结果需要echo输出
4. （技术）更加规范化了代码，加入了更多的注释

= 2.0 =
1. 应热心网友要求，增加sns分享图标前后顺序控制
2. 增加网易微博、Google书签、Google Buzz、linkedin的分享，linkedin默认不开启
3. 增进后台界面美观度，并带有更详细的介绍说明
4. （技术）后台使用jQuery实现，前台取消jQuery的使用

= 1.4 =
1. 增加搜狐微博分享
2. 更新QQ空间的图标
3. 将插件中文化

= 1.3 =
1. 增加腾讯微博分享
2. tinyurl默认只针对twitter适用
3. （技术）解决IE下的显示BUG

= 1.2.0 =
1. 修改QQ空间的显示图标
2. 增加显示开关，开启则自动显示在文章底部，关闭的话可以自己使用wp_sns_share()函数在任意地方调用
3. 增加tinyurl功能，默认不开启
4. 增加删除插件的选择，显示插件所占数据表的项
5. （技术）修改js文件

= 1.1.0 =
1. 正式确定插件名为：wp-sns-share
2. 增加delicious分享

== Upgrade Notice ==
= 2.4 =
增加同步更新时的博客名和博文摘要的输出；解决新浪微博同步url不能为中文的问题

= 2.3 =
增加腾讯微博同步，合并所有图片优化插件效率，增加后台分享栏预览，分享栏可输出到首页等其他区域；更新此版本后，之前版本小部分数据恢复默认设置，需要重新设置一下；
强烈建议升级到此版本。详见：http://t.cn/a0lEHe

= 2.2 =
改善SNS图标列表前台显示效果；增加选择发布、更新文章时的新浪同步选择；详见：
http://blog.stariy.org/2011-04/wp-sns-share_2-2.html

= 2.1 =
增加新浪微博同步功能，利用新浪OAuth认证后，发送博文的同时自动推送新浪微博
