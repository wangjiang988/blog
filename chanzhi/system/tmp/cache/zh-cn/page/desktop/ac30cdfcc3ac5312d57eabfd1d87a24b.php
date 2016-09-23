<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>插件 - 蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"package","currentMethod":"browse","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>.alert-link:hover {text-decoration: underline;}
.alert {width: 100%; display: table;}
.modal .alert {word-break:break-all;}
.panel-heading.clearfix{padding-bottom: 4px;}
</style><link rel='icon' href='/favicon.ico' type='image/x-icon' />
<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon' />
<link href='/admin.php?m=rss&f=index&t=xml' title='蝉知企业门户' type='application/rss+xml' rel='alternate' /><!--[if lt IE 9]>
<script src='/js/all.ie8.js?v=5.3.4' type='text/javascript'></script>
<![endif]-->
<!--[if lt IE 10]>
<script src='/js/all.ie9.js?v=5.3.4' type='text/javascript'></script>
<![endif]-->
<script>if(typeof(v) != "object") v = {};v.lang = {"confirmDelete":"\u60a8\u786e\u5b9a\u8981\u6267\u884c\u5220\u9664\u64cd\u4f5c\u5417\uff1f","deleteing":"\u5220\u9664\u4e2d","doing":"\u5904\u7406\u4e2d","loading":"\u52a0\u8f7d\u4e2d","updating":"\u66f4\u65b0\u4e2d...","timeout":"\u7f51\u7edc\u8d85\u65f6,\u8bf7\u91cd\u8bd5","errorThrown":"<h4>\u6267\u884c\u51fa\u9519\uff1a<\/h4>","continueShopping":"\u7ee7\u7eed\u8d2d\u7269","required":"\u5fc5\u586b","back":"\u8fd4\u56de","continue":"\u7ee7\u7eed"};</script>
</head>
<body>
<nav id='primaryNavbar'>
  <ul class='nav nav-stacked'>
  <li class='' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='active' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
  <ul class="nav nav-stacked fixed-bottom"><li data-toggle="tooltip" title="admin" data-id="profile" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-2x"></i><span class="text-username"> admin <b class="caret"></b></span></a><ul class="dropdown-menu"><li class="heading"><i class="icon icon-user icon-large"></i><strong> admin</strong></li><li class="divider"></li><li><a href='/admin.php?m=user&f=setPassword' data-toggle='modal'>修改密码</a>
</li><li><a href='/admin.php?m=user&f=setEmail' data-toggle='modal'>邮箱设置</a>
</li><li><a href='/admin.php?m=user&f=setSecurity' data-toggle='modal'>密保问题</a>
</li><li><a href='/admin.php?m=misc&f=about' data-toggle='modal'>关于</a>
</li><li><a href='/admin.php?m=misc&f=thanks' data-toggle='modal'>致谢</a>
</li><li><a href='/admin.php?m=user&f=logout' >退出</a>
</li></ul></li></ul></nav>
<nav class='navbar navbar-fixed-top' role='navigation' id='mainNavbar'>
  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#mainNavbarCollapse'>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
    </button>
  </div>
  <div class='collapse navbar-collapse' id='mainNavbarCollapse'>
        <ul class='nav navbar-nav'>
<li class='active'><a href='/admin.php?m=package&f=browse' >插件</a></li>
<li><a href='/admin.php?m=ui&f=themestore' >主题</a></li>
</ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='/' target='_blank' class='navbar-link'><i class="icon-home icon-large"></i> 前台</a>
</li>
      <li class='dropdown'></li>
    </ul>
  </div>
</nav>
<div class="clearfix row-main">
                    <div class='panel'>
  <div class='panel-heading clearfix'>
    <ul id='typeNav' class='nav nav-tabs pull-left'>
      <li data-type='internal' class='active'>
        <a href='/admin.php?m=package&f=browse&status=installed' >已安装</a>
      </li>
      <li data-type='internal' >
        <a href='/admin.php?m=package&f=browse&status=deactivated' >被禁用</a>
      </li>
      <li data-type='internal' >
        <a href='/admin.php?m=package&f=browse&status=available' >已下载</a>
      </li>
    </ul> 
    <div class='panel-actions'>
      <a href='/admin.php?m=package&f=upload' class='btn btn-primary' data-toggle='modal'>本地安装</a>
      <a href='/admin.php?m=package&f=obtain' class='btn btn-primary'>获得插件</a>
    </div>
  </div>
  <div class='panel-body'>
  <div class='cards'>
            </div>
  </div>
</div>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs" role="navigation">
  <ul class='breadcrumb pull-left' id='positionBar'>
    <li><a href='/admin.php?m=admin&f=index' >蝉知</a>
</li>
  </ul>
  <div id='powerby'><a href='http://www.chanzhi.org/?v=5.3.4' target='_blank' title='蝉知企业建站系统，开源免费的php CMS系统'><span class='icon icon-chanzhi'><i class='ic1'></i><i class='ic2'></i><i class='ic3'></i><i class='ic4'></i><i class='ic5'></i><i class='ic6'></i><i class='ic7'></i></span> 5.3.4</a></div>
</nav>

</body>
</html>
