<?php die();?> 
20160826 09:48:18: /chanzhi/install.php

20160826 09:48:21: /chanzhi/install.php?m=install&f=step0

20160826 09:48:22: /chanzhi/install.php?m=install&f=step1

20160826 09:48:24: /chanzhi/install.php?m=install&f=step2

20160826 09:48:37: /chanzhi/install.php?m=install&f=step3

20160826 09:48:37: /chanzhi/install.php?m=install&f=step4

20160826 09:48:43: /chanzhi/install.php?m=install&f=step4
  INSERT INTO eps_user SET `account` = 'admin',`realname` = 'admin',`password` = '0896857e6a00af76b06b818b3bf33552',`admin` = 'super',`join` = '2016-08-26 09:48:43',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '5.3.4',`lang` = 'all'

20160826 09:48:43: /chanzhi/install.php?m=install&f=step5
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn',`lang` = 'all'

20160826 09:48:46: /chanzhi/admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-08-19 09:48:46' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160826 09:48:46: /chanzhi/admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 

20160826 09:48:46: /chanzhi/admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160826 09:48:46: /chanzhi/admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

20160826 09:52:43: /chanzhi/admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-08-19 09:52:43' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160826 09:52:43: /chanzhi/admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160826 09:52:43: /chanzhi/admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 

20160826 09:52:43: /chanzhi/admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

20160826 09:52:52: /chanzhi/admin.php?m=site&f=sethomemenu
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'menus',`key` = 'home',`value` = 'admin,order,message,comment,reply,thread,forumreply,blog,wechat',`lang` = 'zh-cn'

20160826 09:53:08: /chanzhi/admin.php?m=tree&f=children&t=html&type=blog&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order`

20160826 09:53:57: /chanzhi/admin.php?m=tree&f=children&type=blog&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND  type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE `alias`  = 'MyDocuments' AND  id  != '0' AND  type IN ('blog') AND  eps_category.lang in('zh-cn', 'all') 
  INSERT INTO eps_category SET `parent` = '0',`grade` = '1',`type` = 'blog',`postedDate` = '2016-08-26 09:53:56',`name` = '我的文档',`alias` = 'MyDocuments',`order` = '10',`lang` = 'zh-cn'
  UPDATE eps_category SET  `path`  = ',16,' WHERE id  = '16' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE `alias`  = 'MyFilm' AND  id  != '0' AND  type IN ('blog') AND  eps_category.lang in('zh-cn', 'all') 
  INSERT INTO eps_category SET `parent` = '0',`grade` = '1',`type` = 'blog',`postedDate` = '2016-08-26 09:53:56',`name` = '我的视频',`alias` = 'MyFilm',`order` = '20',`lang` = 'zh-cn'
  UPDATE eps_category SET  `path`  = ',17,' WHERE id  = '17' AND  eps_category.lang in('zh-cn', 'all') 

20160826 09:53:58: /chanzhi/admin.php?m=tree&f=children&t=html&type=blog&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order`

20160826 09:55:03: /chanzhi/admin.php?m=article&f=create&type=blog&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade desc, `order`
  INSERT INTO eps_article SET `author` = 'admin',`source` = 'original',`title` = '这是我的第一个博客文章',`link` = '',`alias` = 'first',`keywords` = '博客',`summary` = '小明',`content` = '我的儿子叫小名',`addedDate` = '2016-08-26 09:54',`status` = 'normal',`editedDate` = '2016-08-26 09:55:02',`type` = 'blog',`addedBy` = 'admin',`lang` = 'zh-cn'
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,博客,%' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,博客,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,博客,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,博客,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_tag WHERE tag  = '博客' AND  eps_tag.lang in('zh-cn', 'all') 
  INSERT INTO eps_tag SET `tag` = '博客',`rank` = '1',`lang` = 'zh-cn'
  DELETE FROM eps_relation WHERE type  = 'blog' AND  id  = '13' AND  eps_relation.lang in('zh-cn', 'all') 
  INSERT INTO eps_relation SET `type` = 'blog',`id` = '13',`category` = '16',`lang` = 'zh-cn'
  SELECT * FROM eps_article WHERE id  = '13' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'blog' AND  t1.id  = '13' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'blog' AND  objectID IN ('13') ORDER BY `primary`, editor desc
  REPLACE eps_search_dict SET `key` = '36825',`value` = '这',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25105',`value` = '我',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31532',`value` = '第',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '19968',`value` = '一',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20010',`value` = '个',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21338',`value` = '博',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23458',`value` = '客',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '31456',`value` = '章',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23567',`value` = '小',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '26126',`value` = '明',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20799',`value` = '儿',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '23376',`value` = '子',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21483',`value` = '叫',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '21517',`value` = '名',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '13',`objectType` = 'blog',`title` = ' 36825 26159 25105 30340 31532 19968 20010 21338 23458 25991 31456',`status` = 'normal',`addedDate` = '2016-08-26 09:54:00',`editedDate` = '2016-08-26 09:55:02',`params` = '{\"category\":\"\",\"alias\":\"first\"}',`content` = ' 23567 26126 25105 30340 20799 23376 21483 23567 21517 21338 23458',`lang` = 'zh-cn'

20160826 10:05:20: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2016-08-26 10:05:20',`ip` = '127.0.0.1',`location` = '本机地址 本机地址  ',`browser` = 'chrome 51',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/51.0.2704.103 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '0896857e6a00af76b06b818b3bf33552',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '1',`ip` = '127.0.0.1',`last` = '2016-08-26 10:05:20',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2016-08-26 09:48:43',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`os` = '',`browser` = '',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser`  = 'chrome 51', `os` = 'Linux' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 

20160826 10:05:21: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-08-19 10:05:21' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160826 10:05:22: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 

20160826 10:05:22: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

20160826 10:05:22: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160826 10:11:29: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:17:10: /admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'desktop_top',`value` = '[{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"title\":\"\\u9996\\u9875\",\"url\":\"\\/admin.php?m=index&f=index\",\"key\":\"0\",\"target\":\"_self\",\"class\":\"nav-system-home\",\"children\":[]},{\"type\":\"article\",\"article\":\"2\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"title\":\"\\u52a8\\u6001\",\"url\":\"\\/dynamic.html\",\"key\":\"1\",\"target\":\"_self\",\"class\":\"nav-article-2\",\"children\":[]},{\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"title\":\"\\u4ea7\\u54c1\\u5217\\u8868\",\"url\":\"\\/product\\/\",\"key\":\"2\",\"target\":\"_self\",\"class\":\"nav-product-0\",\"children\":[]},{\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"title\":\"\\u63a8\\u8350\\u7a7a\\u95f4\",\"url\":\"\\/page\\/host.html\",\"key\":\"3\",\"target\":\"_self\",\"class\":\"nav-page-2\",\"children\":[]},{\"type\":\"blog\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"forum\",\"title\":\"\\u6211\\u7684\\u535a\\u5ba2\",\"url\":\"\\/admin.php?m=forum&f=index\",\"key\":\"4\",\"target\":\"_self\",\"class\":\"nav-blog-0\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"book\",\"title\":\"\\u624b\\u518c\",\"url\":\"\\/admin.php?m=book&f=index\",\"key\":\"5\",\"target\":\"_self\",\"class\":\"nav-system-book\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"message\",\"title\":\"\\u7559\\u8a00\",\"url\":\"\\/admin.php?m=message&f=index\",\"key\":\"6\",\"target\":\"_self\",\"class\":\"nav-system-message\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"company\",\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"url\":\"\\/admin.php?m=company&f=index\",\"key\":\"7\",\"target\":\"_self\",\"class\":\"nav-system-company\",\"children\":[]}]',`lang` = 'zh-cn'

20160826 10:24:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:30:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:36:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:42:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:48:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 10:54:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 11:00:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 11:06:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 11:12:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 11:18:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 11:24:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 12:56:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:02:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:08:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:14:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:20:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:26:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:32:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:38:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:44:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:50:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 13:56:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:02:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:08:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:14:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:20:32: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:26:33: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:32:31: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:38:32: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160826 14:44:36: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

