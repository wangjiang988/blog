<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章 - 蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"article","currentMethod":"admin","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>.tree li a.active{font-weight: bold;}
.leftmenu > .nav{margin-bottom: 0;}
.nav-stacked.nav-primary > li:last-child > a{border-bottom-left-radius: 0; border-bottom-right-radius: 0;}
.category-nav{border-radius: 0; border-top:none;}
.order{padding-left: 0;}
.dropdown-menu{min-width: 90px;}
.pager .dropdown-menu{width:214px;}
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
  <li class='' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='active' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
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
<li class='active'><a href='/admin.php?m=article&f=admin&type=article' >文章</a></li>
<li><a href='/admin.php?m=article&f=admin&type=page' >单页</a></li>
<li><a href='/admin.php?m=article&f=admin&type=blog' >博客</a></li>
<li><a href='/admin.php?m=book&f=admin' >手册</a></li>
</ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='/' target='_blank' class='navbar-link'><i class="icon-home icon-large"></i> 前台</a>
</li>
      <li class='dropdown'></li>
    </ul>
  </div>
</nav>
<div class="clearfix row-main">
                    <div class='col-md-2'>
      <div class="leftmenu affix hiddden-xs hidden-sm">
        <ul class='nav nav-left nav-primary nav-stacked'>
<li class='active'><a href='/admin.php?m=article&f=admin' >文章列表<i class="icon-chevron-right"></i></a>
</li>
</ul>
                <div class='panel category-nav'>
          <div class='panel-body'>
            <ul class='tree' data-type='article'><li><a href='/admin.php?m=article&f=admin&type=article&categoryID=1' id='category1'>蝉知下载</a>

</li>
<li><a href='/admin.php?m=article&f=admin&type=article&categoryID=2' id='category2'>蝉知动态</a>

</li>
<li><a href='/admin.php?m=article&f=admin&type=article&categoryID=3' id='category3'>商业支持</a>

</li>
<li><a href='/admin.php?m=article&f=admin&type=article&categoryID=11' id='category11'>知识改进</a>
<ul><li><a href='/admin.php?m=article&f=admin&type=article&categoryID=12' id='category12'>一二三</a>

</li>
<li><a href='/admin.php?m=article&f=admin&type=article&categoryID=13' id='category13'>四五六</a>

</li>
<li><a href='/admin.php?m=article&f=admin&type=article&categoryID=14' id='category14'>七八九</a>

</li>
</ul>
</li>
</ul>
                        <div class='text-right'><a href='/admin.php?m=tree&f=browse&type=article' >维护类目</a>
</div>
                      </div>
        </div>
              </div>
    </div>
    <div class='col-md-10'>
        <script>v.categoryID = 0;</script>
<div class='panel'>
  <div class='panel-heading'>
  <strong><i class="icon-th-large"></i> 文章列表</strong>
    <div class='panel-actions'>
    <form method='get' class='form-inline form-search'>
      <input type='hidden' name='m' id='m' value='article'  />
      <input type='hidden' name='f' id='f' value='admin'  />
      <input type='hidden' name='type' id='type' value='article'  />
      <input type='hidden' name='categoryID' id='categoryID' value='0'  />
      <input type='hidden' name='orderBy' id='orderBy' value='`id` desc'  />
      <input type='hidden' name='recTotal' id='recTotal' value='0'  />
      <input type='hidden' name='recPerPage' id='recPerPage' value='10'  />
      <input type='hidden' name='pageID' id='pageID' value='1'  />
      <div class="input-group">
        <input type='text' name='searchWord' id='searchWord' value='' class='form-control search-query' />
        <span class="input-group-btn"> <input type='submit' id='submit' class='btn btn-primary' value='搜索'  data-loading='稍候...' /> </span>
      </div>
    </form>
          <a href='/admin.php?m=article&f=create&type=article&category=0' class="btn btn-primary"><i class="icon-plus"></i> 发布文章</a>
   </div>
    </div>
  <table class='table table-hover table-striped tablesorter'>
    <thead>
      <tr>
                <th class='text-center w-60px'><div class='header'><a href='/admin.php?m=article&f=admin&type=article&categoryID=0&orderBy=id_asc&recTotal=10&recPerPage=20' >编号</a>
</div></th>
        <th class='text-center'><div class='header'><a href='/admin.php?m=article&f=admin&type=article&categoryID=0&orderBy=title_asc&recTotal=10&recPerPage=20' >标题</a>
</div></th>
                <th class='text-center w-200px'>类目</th>
                <th class='text-center w-160px'><div class='header'><a href='/admin.php?m=article&f=admin&type=article&categoryID=0&orderBy=addedDate_asc&recTotal=10&recPerPage=20' >发布时间</a>
</div></th>
        <th class='text-center w-70px'><div class='header'><a href='/admin.php?m=article&f=admin&type=article&categoryID=0&orderBy=views_asc&recTotal=10&recPerPage=20' >阅读</a>
</div></th>
                        <th class="text-center w-260px">操作</th>
      </tr>
    </thead>
    <tbody>
            <tr>
        <td class='text-center'>12</td>
        <td>
          明天还是明天                            </td>
                <td class='text-center'>一二三 </td>
                <td class='text-center'>2014-10-08 17:44:00</td>
        <td class='text-center'>7</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=12&type=article' >编辑</a>
<a href='/article/12.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=12&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=12&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=12' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=12' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=12' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=12' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=12' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=12&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=12&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=12' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=12' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=12' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=12' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=12' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>10</td>
        <td>
          蝉知企业门户系统2.1正式版发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-03-03 09:50:00</td>
        <td class='text-center'>12</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=10&type=article' >编辑</a>
<a href='/download/chanzhieps2.1-10.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=10&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=10&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=10' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=10' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=10' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=10' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=10' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=10&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=10&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=10' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=10' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=10' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=10' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=10' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>9</td>
        <td>
          蝉知企业门户2.2版本发布，全面集成微信！                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-03-24 16:00:00</td>
        <td class='text-center'>12</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=9&type=article' >编辑</a>
<a href='/download/chanzhieps2.2-9.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=9&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=9&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=9' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=9' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=9' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=9' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=9' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=9&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=9&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=9' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=9' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=9' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=9' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=9' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>8</td>
        <td>
          蝉知企业门户2.2.1版本发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-04-01 10:40:00</td>
        <td class='text-center'>12</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=8&type=article' >编辑</a>
<a href='/download/chanzhieps2.2.1-8.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=8&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=8&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=8' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=8' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=8' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=8' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=8' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=8&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=8&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=8' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=8' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=8' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=8' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=8' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>7</td>
        <td>
          蝉知企业门户2.3正式版发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-05-16 10:10:00</td>
        <td class='text-center'>12</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=7&type=article' >编辑</a>
<a href='/download/chanzhi2.3-7.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=7&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=7&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=7' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=7' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=7' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=7' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=7' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=7&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=7&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=7' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=7' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=7' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=7' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=7' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>6</td>
        <td>
          蝉知企业门户2.4正式版发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-06-25 14:10:00</td>
        <td class='text-center'>11</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=6&type=article' >编辑</a>
<a href='/download/6.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=6&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=6&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=6' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=6' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=6' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=6' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=6' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=6&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=6&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=6' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=6' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=6' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=6' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=6' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>5</td>
        <td>
          蝉知企业门户2.5beta版本发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-08-06 11:10:00</td>
        <td class='text-center'>16</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=5&type=article' >编辑</a>
<a href='/download/5.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=5&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=5&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=5' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=5' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=5' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=5' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=5' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=5&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=5&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=5' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=5' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=5' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=5' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=5' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>4</td>
        <td>
          多处改进，蝉知2.5.1正式版发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-08-19 15:15:00</td>
        <td class='text-center'>15</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=4&type=article' >编辑</a>
<a href='/download/chanzhi2.5.1-4.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=4&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=4&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=4' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=4' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=4' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=4' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=4' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=4&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=4&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=4' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=4' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=4' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=4' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=4' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>3</td>
        <td>
          ZUI文档更新                            </td>
                <td class='text-center'>蝉知动态 </td>
                <td class='text-center'>2014-06-09 14:30:00</td>
        <td class='text-center'>6</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=3&type=article' >编辑</a>
<a href='/dynamic/3.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=3&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=3&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=3' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=3' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=3' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=3' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=3' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=3&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=3&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=3' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=3' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=3' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=3' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=3' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                  <tr>
        <td class='text-center'>1</td>
        <td>
          安全升级，蝉知2.5.2发布                            </td>
                <td class='text-center'>蝉知下载 蝉知动态 </td>
                <td class='text-center'>2014-08-21 13:55:00</td>
        <td class='text-center'>29</td>
                <td class='text-center'>
                    <a href='/admin.php?m=article&f=edit&articleID=1&type=article' >编辑</a>
<a href='/download/chanzhi2.5.2-1.html' target='_blank'>预览</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=1&isImage=1' data-toggle='modal'>图片</a>
<a href='/admin.php?m=file&f=browse&objectType=article&objectID=1&isImage=0' data-toggle='modal'>附件</a>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>布局<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
                                          <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=topBanner&object=1' data-toggle='modal'>上部通栏</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=top&object=1' data-toggle='modal'>上部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottom&object=1' data-toggle='modal'>底部</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=side&object=1' data-toggle='modal'>侧边</a>
</li>
                            <li><a href='/admin.php?m=block&f=setregion&page=article_view&region=bottomBanner&object=1' data-toggle='modal'>底部通栏</a>
</li>
                          </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='###'>置顶<span class='caret'></span></a>
            <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
            <li class="active"><a href="###">不置顶</a></li><li><a href='/admin.php?m=article&f=stick&article=1&stick=1' class='jsoner'>类目置顶</a>
</li><li><a href='/admin.php?m=article&f=stick&article=1&stick=2' class='jsoner'>全局置顶</a>
</li>            </ul>
          </span>
                    <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'>更多<span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><a href='/admin.php?m=article&f=delete&articleID=1' class="deleter">删除</a>
</li>
              <li><a href='/admin.php?m=article&f=setcss&articleID=1' data-toggle='modal'>CSS</a>
</li>
              <li><a href='/admin.php?m=article&f=setjs&articleID=1' data-toggle='modal'>JS</a>
</li>
                            <li><a href='/admin.php?m=article&f=forward2blog&articleid=1' data-toggle='modal'>转至博客</a>
</li>
              <li><a href='/admin.php?m=article&f=forward2forum&articleid=1' data-toggle='modal'>转至论坛</a>
</li>
                          </ul>
          </span>
        </td>
      </tr>
                </tbody>
    <tfoot><tr><td colspan='7'><div style='float:right; clear:none;' class='pager'>共 <strong>10</strong> 条记录，<div class='dropdown dropup'><a href='javascript:;' data-toggle='dropdown' id='_recPerPage' data-value='20'>每页 <strong>20</strong> 条<span class='caret'></span></a><ul class='dropdown-menu'><li><a href='javascript:submitPage("changeRecPerPage", 5)'>5</a></li><li><a href='javascript:submitPage("changeRecPerPage", 10)'>10</a></li><li><a href='javascript:submitPage("changeRecPerPage", 15)'>15</a></li><li class='active'><a href='javascript:submitPage("changeRecPerPage", 20)'>20</a></li><li><a href='javascript:submitPage("changeRecPerPage", 25)'>25</a></li><li><a href='javascript:submitPage("changeRecPerPage", 30)'>30</a></li><li><a href='javascript:submitPage("changeRecPerPage", 35)'>35</a></li><li><a href='javascript:submitPage("changeRecPerPage", 40)'>40</a></li><li><a href='javascript:submitPage("changeRecPerPage", 45)'>45</a></li><li><a href='javascript:submitPage("changeRecPerPage", 50)'>50</a></li><li><a href='javascript:submitPage("changeRecPerPage", 100)'>100</a></li><li><a href='javascript:submitPage("changeRecPerPage", 200)'>200</a></li><li><a href='javascript:submitPage("changeRecPerPage", 500)'>500</a></li><li><a href='javascript:submitPage("changeRecPerPage", 1000)'>1000</a></li></ul></div> <strong>1/1</strong> &nbsp; <i class='icon-step-backward' title='首页'></i> <i class='icon-play icon-rotate-180' title='上一页'></i> <i class='icon-play' title='下一页'></i> <i class='icon-step-forward' title='末页'></i> <input type='hidden' id='_recTotal'  value='10' />
<input type='hidden' id='_pageTotal' value='1' />
<input type='text'   id='_pageID' value='1' style='text-align:center;width:30px;' class='form-control' /> 
<input type='button' id='goto' value='GO!' onclick='submitPage("changePageID");' class='btn'/>        <script>
        vars = 'type=article&categoryID=0&orderBy=`id` desc&recTotal=_recTotal_&recPerPage=_recPerPage_&pageID=_pageID_';
        pageCookie = 'pagerArticleAdmin';
        function submitPage(mode, perPage)
        {
            pageTotal  = parseInt(document.getElementById('_pageTotal').value);
            pageID     = document.getElementById('_pageID').value;
            recPerPage = document.getElementById('_recPerPage').getAttribute('data-value');
            recTotal   = document.getElementById('_recTotal').value;
            if(mode == 'changePageID')
            {
                if(pageID > pageTotal) pageID = pageTotal;
                if(pageID < 1) pageID = 1;
            }
            else if(mode == 'changeRecPerPage')
            {
                recPerPage = perPage;
                pageID = 1;
            }
            $.cookie(pageCookie, recPerPage, {expires:config.cookieLife, path:config.webRoot});

            vars = vars.replace('_recTotal_', recTotal)
            vars = vars.replace('_recPerPage_', recPerPage)
            vars = vars.replace('_pageID_', pageID);
            location.href=createLink('article', 'admin', vars);
        }
        </script></div></td></tr></tfoot>
  </table>
</div>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs" role="navigation">
  <ul class='breadcrumb pull-left' id='positionBar'>
    <li><a href='/admin.php?m=admin&f=index' >蝉知</a>
</li>
  </ul>
  <div id='powerby'><a href='http://www.chanzhi.org/?v=5.3.4' target='_blank' title='蝉知企业建站系统，开源免费的php CMS系统'><span class='icon icon-chanzhi'><i class='ic1'></i><i class='ic2'></i><i class='ic3'></i><i class='ic4'></i><i class='ic5'></i><i class='ic6'></i><i class='ic7'></i></span> 5.3.4</a></div>
</nav>

<script>$(document).ready(function()
{
    /* Set the orginal and copySite, copyURL fields. */
    $('#source').change(function()
    {
        $('#copyBox').hide().find(':input').attr('disabled', true);
        if($(this).val() != 'original') $('#copyBox').show().find(':input').attr('disabled', false);
    });

    $('#isLink').change(function()
    {   
        if($(this).prop('checked'))
        {   
            $('.articleInfo').hide();
            $('.link').show();
        }   
        else
        {   
            $('.articleInfo').show();
            $('.link').hide();
        }   
    }); 
    
    /* Set current active topNav. */
    if(v.path && v.path.length)
    {
        var hasActive = false;
        $.each(v.path, function(index, category) 
        { 
            if(!hasActive)
            {
                if($('.nav-article-' + category).length >= 1) hasActive = true;
                $('.nav-article-' + category).addClass('active');
            }
        });
        if(!hasActive) $('.nav-article-0').addClass('active');
    }

    if(v.categoryID !== 0) $('.tree #category' + v.categoryID).addClass('active');
});
$(document).ready(function()
{
    $(document).on('click', 'a.plus', function()
    {
        v.key ++;
        $(this).parent().parent().after($('#entry').html().replace(/key/g, v.key));
        computeParent();
    });

    $(document).on('click', 'a.plus-child', function()
    {
        v.key ++;
        $('#child').find('[name*=parent]').val($(this).parents('.block-item').data('block'));
        var child = $('#child').html().replace(/key/g, v.key);
        $(this).parent().parent().after(child);
        computeParent();
    });

    $(document).on('click', 'a.btn-add-child', function()
    {
        v.key ++;
        $('#child').find('[name*=parent]').val($(this).parents('.block-item').data('block'));
        var entry = $('#child').html().replace(/key/g, v.key);
        $(this).parent().parent().find('.children').append(entry);
        if($(this).parent().parent().find('[name=isRegion]').val() != 1)
        {
            $(this).parent().siblings(0).children('.block').val(0).attr('readonly', true);
        }
        computeParent();
    });

    /* Delete options. */
    $(document).on('click', '.delete', function()
    {
        if($(this).parents('.children').size() == 0)
        {
            $(this).parents('.block-item').remove();
        }
        else
        {
            $(this).parent().parent('.block-item').remove();
        }
    });
})

function computeParent()
{
    $('[name*=parent]').each(function(){$(this).val($(this).parents('.children').parents('.block-item').data('block'));});
}

</script>
</body>
</html>
