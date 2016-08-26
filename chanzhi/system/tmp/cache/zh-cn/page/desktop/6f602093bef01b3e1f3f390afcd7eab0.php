<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>导航设置 - 蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"nav","currentMethod":"admin","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>ul.navList{padding-left: 0;}
.navList li {list-style: none; border: 1px dotted #DDDDDD; padding: 8px; padding-left: 5px; border-right: none; border-top: none;}
.grade2{margin-left: 30px;}
.grade2 li:last-child{border-bottom: none;}
.grade3{margin-left: 60px;}
.grade3 li:last-child{border-bottom: none;}
i{cursor: pointer;}
label{font-weight:500;font-size:13px;}

.navList .form-control { width: auto; min-width: 100px; max-width: 200px; }
.panel-body > form { max-width: 10000px; }
.navList .icon-circle, .navList .icon-folder-open-alt, .navList .icon-folder-close, .navList .icon-arrow-up, .navList .icon-arrow-down { margin-right: 6px; opacity: 0.6; transition:all 0.3s; }
.navList li:hover .icon-folder-open-alt,.navList li:hover .icon-folder-close,.navList li:hover .icon-arrow-up,.navList li:hover .icon-arrow-down { opacity: 1; }
.navList .icon-arrow-up,.navList .icon-arrow-down { color: #384D7A; }
.navList .icon-folder-close {opacity: 0.8;}
.navList .icon-circle {font-size: 12px;}
.navList .urlInput{width:360px; max-width: 360px;}

#navList .sort-handle {cursor: move;}
#navList li.dragging {opacity: 0.35; background-color: #FFF4E5;}
#navList li.drag-shadow {border: 1px solid #ddd; box-shadow:0 1px 8px rgba(0,0,0,.15); background-color: #fff; z-index: 9999}
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
  <li class='' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='active' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
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
      <li class='device-nav'>
                        <a href='javascript:;' ><i class='icon icon-desktop'></i> 桌面</a>
              </li>
      <li class='divider'></li>
    </ul>
        <ul class='nav navbar-nav'>
<li><a href='/admin.php?m=ui&f=settemplate' >界面</a></li>
<li><a href='/admin.php?m=ui&f=setlogo' >标志</a></li>
<li><a href='/admin.php?m=slide&f=admin' >幻灯片</a></li>
<li class='active'><a href='/admin.php?m=nav&f=admin' >导航</a></li>
<li><a href='/admin.php?m=block&f=admin' >区块</a></li>
<li><a href='/admin.php?m=visual&f=index' target='_blank'>可视化</a></li>
<li><a href='/admin.php?m=ui&f=others' >设置</a></li>
<li><a href='/admin.php?m=ui&f=edittemplate' >编辑模板</a></li>
</ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='/' target='_blank' class='navbar-link'><i class="icon-home icon-large"></i> 前台</a>
</li>
      <li class='dropdown'></li>
    </ul>
  </div>
</nav>
<div class="clearfix row-main">
                    <script>v.type = "desktop_blog";</script>
<script>v.cannotRemoveAll = "\u4e0d\u80fd\u5220\u9664\u6240\u6709\u5bfc\u822a";</script>
<div class='panel'>
  <div class='panel-heading'>
    <ul id='typeNav' class='nav nav-tabs'>
            <li data-type='internal' >
        <a href='/admin.php?m=nav&f=admin&type=desktop_top' >桌面版顶部</a>
      </li>
      <li data-type='internal' >
        <a href='/admin.php?m=nav&f=admin&type=mobile_top' >移动版顶部</a>
      </li>
      <li data-type='internal' >
        <a href='/admin.php?m=nav&f=admin&type=mobile_bottom' >移动版底部</a>
      </li>
            <li data-type='internal' class='active'>
        <a href='/admin.php?m=nav&f=admin&type=desktop_blog' >博客</a>
      </li>
      <li data-type='internal' >
        <a href='/admin.php?m=nav&f=admin&type=mobile_blog' >移动版博客</a>
      </li>
    </ul> 
  </div>
  <div class='panel-body'>
    <form class='form-inline ve-form' id='navForm' method='post'>
      <ul class='navList ulGrade1' id='navList'>
        <li class='liGrade1'><i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[1][type][]' id='nav' class='navType form-control' grade='1'>
<option value='system' selected='selected'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[1][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[1][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[1][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[1][blog][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='16'>/我的文档</option>
<option value='17'>/我的视频</option>
</select>
<select name='nav[1][system][]' id='nav' class='navSelector form-control '>
<option value='home'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog' selected='selected'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[1][title][]' id='nav[1][title][]' value='博客' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[1][url][]' id='nav[1][url][]' value='/blog.html' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[1][key][]' id='nav[1][key][]' value='' class='input grade1key' />
<select name='nav[1][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus1' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;' title='添加子导航' class='plus2'><i class='icon icon-sitemap'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-1'></i></a><ul class='ulGrade2 hide'></ul></li><li class='liGrade1'><i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[1][type][]' id='nav' class='navType form-control' grade='1'>
<option value='system'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog' selected='selected'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[1][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[1][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[1][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[1][blog][]' id='nav' class='navSelector form-control '>
<option value='0'>/</option>
<option value='16' selected='selected'>/我的文档</option>
<option value='17'>/我的视频</option>
</select>
<select name='nav[1][system][]' id='nav' class='navSelector form-control hide'>
<option value='home'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog' selected='selected'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[1][title][]' id='nav[1][title][]' value='我的文档' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[1][url][]' id='nav[1][url][]' value='/blog/c16.html' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[1][key][]' id='nav[1][key][]' value='' class='input grade1key' />
<select name='nav[1][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus1' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;' title='添加子导航' class='plus2'><i class='icon icon-sitemap'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-1'></i></a><ul class='ulGrade2 hide'></ul></li><li class='liGrade1'><i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[1][type][]' id='nav' class='navType form-control' grade='1'>
<option value='system'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog' selected='selected'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[1][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[1][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[1][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[1][blog][]' id='nav' class='navSelector form-control '>
<option value='0'>/</option>
<option value='16'>/我的文档</option>
<option value='17' selected='selected'>/我的视频</option>
</select>
<select name='nav[1][system][]' id='nav' class='navSelector form-control hide'>
<option value='home'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog' selected='selected'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[1][title][]' id='nav[1][title][]' value='我的视频' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[1][url][]' id='nav[1][url][]' value='/blog/c17.html' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[1][key][]' id='nav[1][key][]' value='' class='input grade1key' />
<select name='nav[1][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus1' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;' title='添加子导航' class='plus2'><i class='icon icon-sitemap'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-1'></i></a><ul class='ulGrade2 hide'></ul></li>      </ul>
      <div><a href='javascript:;' class='btn btn-primary submit' onclick='return submitForm()'>保存</a>
</div>
    </form>
  </div>
</div>
<div id='grade1NavSource' class='hide'>
  <li class='liGrade1'>
    <i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[1][type][]' id='nav' class='navType form-control' grade='1'>
<option value='system' selected='selected'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[1][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[1][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[1][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[1][blog][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='16'>/我的文档</option>
<option value='17'>/我的视频</option>
</select>
<select name='nav[1][system][]' id='nav' class='navSelector form-control '>
<option value='home' selected='selected'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[1][title][]' id='nav[1][title][]' value='首页' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[1][url][]' id='nav[1][url][]' value='' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[1][key][]' id='nav[1][key][]' value='' class='input grade1key' />
<select name='nav[1][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus1' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;' title='添加子导航' class='plus2'><i class='icon icon-sitemap'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-1'></i></a>    <ul class='ulGrade2'></ul>
  </li>
</div>
<div id='grade2NavSource' class='hide'>
  <ul class='ulGrade2'>
    <li class='liGrade2'>
      <i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[2][type][]' id='nav' class='navType form-control' grade='2'>
<option value='system' selected='selected'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[2][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[2][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[2][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[2][blog][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='16'>/我的文档</option>
<option value='17'>/我的视频</option>
</select>
<select name='nav[2][system][]' id='nav' class='navSelector form-control '>
<option value='home' selected='selected'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[2][title][]' id='nav[2][title][]' value='首页' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[2][url][]' id='nav[2][url][]' value='' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[2][parent][]' id='nav[2][parent][]' value='' class='grade2parent' />
<input type='hidden' name='nav[2][key][]' id='nav[2][key][]' value='' class='input grade2key' />
<select name='nav[2][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus2' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;' title='添加子导航' class='plus3'><i class='icon icon-sitemap'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-2'></i></a>      <ul class='ulGrade3'></ul>
    </li>
  </ul>
</div>
<div id='grade3NavSource' class='hide'>
  <ul class='ulGrade3'>
    <li class='liGrade3'><i class="icon-folder-open-alt shut"></i><i class="icon icon-circle text-muted"></i><select name='nav[3][type][]' id='nav' class='navType form-control' grade='3'>
<option value='system' selected='selected'>系统模块</option>
<option value='article'>文章类目</option>
<option value='blog'>博客类目</option>
<option value='product'>产品类目</option>
<option value='page'>单页</option>
<option value='custom'>自定义</option>
</select>
<select name='nav[3][article][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='1'>/蝉知下载</option>
<option value='2'>/蝉知动态</option>
<option value='3'>/商业支持</option>
<option value='11'>/知识改进</option>
<option value='12'>/知识改进/一二三</option>
<option value='13'>/知识改进/四五六</option>
<option value='14'>/知识改进/七八九</option>
</select>
<select name='nav[3][product][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='7'>/蝉知</option>
</select>
<select name='nav[3][page][]' id='nav' class='navSelector form-control hide'>
<option value='11'>关于我们</option>
<option value='2'>推荐空间</option>
</select>
<select name='nav[3][blog][]' id='nav' class='navSelector form-control hide'>
<option value='0'>/</option>
<option value='16'>/我的文档</option>
<option value='17'>/我的视频</option>
</select>
<select name='nav[3][system][]' id='nav' class='navSelector form-control '>
<option value='home' selected='selected'>首页</option>
<option value='company'>关于我们</option>
<option value='contact'>联系我们</option>
<option value='forum'>论坛</option>
<option value='blog'>博客</option>
<option value='book'>手册</option>
<option value='message'>留言</option>
</select>
<input type='text' name='nav[3][title][]' id='nav[3][title][]' value='首页' placeholder='请输入标题' class='input-default form-control titleInput' />
<input type='text' name='nav[3][url][]' id='nav[3][url][]' value='' placeholder='请输入链接' class='urlInput form-control hide' />
<input type='hidden' name='nav[3][parent][]' id='nav[3][parent][]' value='' class='grade3parent' />
<input type='hidden' name='nav[3][key][]' id='nav[3][key][]' value='' class='input grade3key' />
<select name='nav[3][target][]' id='nav' class='form-control'>
<option value='_self' selected='selected'>当前窗口</option>
<option value='_blank'>新开窗口</option>
</select>
<a href='javascript:;' class='plus3' title='添加'><i class='icon icon-plus'> </i></a>
<a href='javascript:;' class='remove' title='删除'><i class='icon icon-remove'> </i></a>
<a href='javascript:;'><i class='icon-move sort-handle sort-handle-3'></i></a></li>
  </ul>
</div>

</div>

<nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs" role="navigation">
  <ul class='breadcrumb pull-left' id='positionBar'>
    <li><a href='/admin.php?m=admin&f=index' >蝉知</a>
</li>
  </ul>
  <div id='powerby'><a href='http://www.chanzhi.org/?v=5.3.4' target='_blank' title='蝉知建站系统，开源免费的CMS系统'><span class='icon icon-chanzhi'><i class='ic1'></i><i class='ic2'></i><i class='ic3'></i><i class='ic4'></i><i class='ic5'></i><i class='ic6'></i><i class='ic7'></i></span> 5.3.4</a></div>
</nav>

<script>$(document).ready(function()
{
    var fixForm = function()
    {
        $('#navList').sortable({trigger: '.sort-handle-1', selector: 'li', dragCssClass: ''});
        $('#navList .ulGrade2').sortable({trigger: '.sort-handle-2', selector: 'li', dragCssClass: ''});
        $('#navList .ulGrade3').sortable({trigger: '.sort-handle-3', selector: 'li', dragCssClass: ''});
        $('.shut').each(function()
        {
            if(!$(this).parent().find('ul li').size())
            {
                $(this).hide();
                $(this).next('.icon-circle').show();
            }
            else
            {
                $(this).show();
                $(this).next('.icon-circle').hide();
            }
        });
    }

    fixForm();

    /* add grade1 memu options */
    $(document).on('click', '.plus1', function()
    {
        $(this).parent().after($('#grade1NavSource').html());
        fixForm();
    });

    /* add grade2 memu options */
    $(document).on('click', '.plus2', function() 
    {
        var container = $(this).parents('.liGrade2');
        if(0 == container.size())
        { 
            $(this).parents('.liGrade1').find('.ulGrade2').show().prepend($('#grade2NavSource ul').html());
        }
        else
        {
            $(this).parent().after($('#grade2NavSource ul').html()); 
        }
        fixForm();
    });

    /* add grade3 memu options */
    $(document).on('click', '.plus3', function() 
    {
        var container = $(this).parents('.liGrade3');
        if(0 == container.size())
        { 
            $(this).parents('.liGrade2').find('.ulGrade3').show().prepend($('#grade3NavSource ul').html());
        }
        else
        {
            $(this).parent().after($('#grade3NavSource ul').html()); 
        }
        fixForm();
    });

    /* toggle children nav. */
    $(document).on('click', '.shut', function()
    {
        $(this).parent().find("ul").toggle();
        if($(this).parent().find('ul li').size() != 0)
        $(this).toggleClass('icon-folder-close').toggleClass('icon-folder-open-alt'); 
    });

    /* sort up. */
    $(document).on('click', '.icon-arrow-up', function()
    {
        $(this).parent().prev().before($(this).parent()); 
    });

    /* sort down. */
    $(document).on('click', '.icon-arrow-down', function()
    { 
        var hasNext = $(this).parent().next().find('input').size() > 0;
        if(hasNext) $(this).parent().next().after($(this).parent()); 
    });

    /* delete nav. */
    $(document).on('click', '.remove', function()
    {
        var navCount = $(this).parent().is('.liGrade1') && $('.navList .liGrade1').size();

        if(navCount == 1)
        {
            bootbox.alert(v.cannotRemoveAll);
        }
        else 
        {
            $(this).parent().remove();
        }
    });

    /* toggle articl common selector.*/
    $(document).on('change', '.navType', function() 
    {
        type  = $(this).val();
        grade = $(this).attr('grade');

        if(type != 'custom')
        {
            $(this).parent().children('.urlInput').hide();
            $(this).parent().children('.navSelector').hide();
            $(this).parent().children('.navSelector[name*='+type+']').removeClass('hide').show().change();
        }
        else
        {
            $(this).parent().children(':input[type=text]').val('');
            $(this).parent().children('.navSelector').hide();
            $(this).parent().children('.urlInput').removeClass('hide').show(); 
        }
    });

    /* set default nav title when selector changed. */
    $(document).on('change', '.navSelector', function()
    { 
        categories = $(this).find(':selected').text().split('/');
        if(!categories.length) return false;
        $(this).parent().children('.titleInput').val( categories[categories.length-1] );
    });
    
    $.setAjaxForm('#navForm');

    if(v.type == 'mobile_bottom') $('.plus2, .plus3').hide();
});

/**
 * Group navs and submit form
 *
 * @return void 
 */
function submitForm()
{
    $('.navList .grade1key').each(function(index,obj) { $(this).val(index); });
    $('.navList .grade2key').each(function(index){ $(this).val(1000+(parseInt(index))); })
    $('.navList .grade2parent').each(function(index){ $(this).val( $(this).parents('.liGrade1').children('.grade1key').val()); });
    $('.navList .grade3parent').each(function(i){ p = $(this).parents('.liGrade2').children('.grade2key').val(); $(this).val(p); });
    $('#navForm').submit();
}

</script>
</body>
</html>
