<?php die();?> 
20160921 09:19:24: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = 'admin'
  SELECT * FROM eps_user WHERE account  = 'admin'
  INSERT INTO eps_log SET `account` = 'admin',`date` = '2016-09-21 09:19:24',`ip` = '::1',`location` = 'N/A',`browser` = 'chrome 52',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/52.0.2743.82 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '0896857e6a00af76b06b818b3bf33552',`realname` = 'admin',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '::1',`last` = '2016-09-21 09:19:22',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2016-08-26 09:48:43',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`os` = 'Linux',`browser` = 'chrome 51',`lang` = 'zh-cn' WHERE account  = 'admin'
  UPDATE eps_user SET  `browser`  = 'chrome 52', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin' AND  t1.lang in('zh-cn', 'all') 

20160921 09:19:24: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 

20160921 09:19:25: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-09-14 09:19:25' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160921 09:19:25: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160921 09:19:25: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('13') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '13' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'blog' AND  t1.id  = '13' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'blog' AND  objectID IN ('13') ORDER BY `primary`, editor desc

20160921 09:19:25: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

20160921 09:19:28: /admin.php?m=admin&f=ignore
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreAdminEntry',`value` = '1',`lang` = 'zh-cn'

20160921 09:19:30: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-09-14 09:19:30' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160921 09:19:30: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

20160921 09:19:30: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160921 09:19:30: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('13') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '13' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'blog' AND  t1.id  = '13' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'blog' AND  objectID IN ('13') ORDER BY `primary`, editor desc

20160921 09:19:36: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus`  = 'confirmed' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2016-09-14 09:19:36' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order wHeRe 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  type  != 'score'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 

20160921 09:19:36: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY id desc LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY id asc

20160921 09:19:36: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('admin','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY date desc LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('13') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '13' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'blog' AND  t1.id  = '13' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'blog' AND  objectID IN ('13') ORDER BY `primary`, editor desc

20160921 09:19:36: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT *, id as category FROM eps_category WHERE type IN ('article','product','blog','forum') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 

