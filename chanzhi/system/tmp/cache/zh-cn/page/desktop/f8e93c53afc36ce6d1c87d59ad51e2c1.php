<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"admin","currentMethod":"index","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>.panel-body.shortcutGroup{padding-top: 35px;}
.shortcutGroup > a{margin: 10px 20px; font-size: 13px;}
@media(min-width:768px){#shortcutBox{margin-top: 20px;}}
@media(min-width:1200px){#shortcutBox{margin-top: 30px;}}
@media(min-width:1400px){#shortcutBox{margin-top: 20px;}}
body {background: #fafafa;}
#shortcutBox{max-width:94%}

.page-content {margin-top: -19px; border-top: 1px solid #3280fc;}
.dashboard {position: relative;}
.dashboard .row {margin: 0 auto;}
.dashboard .panel-actions {margin-top: 0; margin-right: 0;}
.dashboard .panel-heading {line-height: 17px; height: 30px; position: relative;}
.dashboard .panel-actions {position: absolute; top: 0; right: 0; height: 30px; font-weight: normal;}
.dashboard .panel-action {display: block; float: left; height: 30px; min-width: 26px; text-align: center; line-height: 30px; padding-left: 3px; padding-right: 3px;}
.dashboard .panel-actions > a {color: #666;}
.dashboard .panel-action-more {font-size: 12px; font-weight: 200}
.dashboard .panel-action:hover, .dashboard .panel-actions > .dropdown > a:hover {color: #333; background-color: #ddd; background-color: rgba(0,0,0,0.1); text-decoration: none}
.dashboard .panel-title {font-size: 13px; color: #333}
.dashboard a.panel-title > .icon-double-angle-right {position: relative; filter: alpha(opacity=0); opacity: 0; transition: opacity .2s, left .2s; left: -5px}
.dashboard .panel:hover a.panel-title > .icon-double-angle-right {filter: alpha(opacity=100); opacity: 1; left: 0}
.dashboard a.panel-title:hover {color: #1a53ff}
.dashboard .panel {box-shadow: 0 1px 3px rgba(0,0,0,.05); position: relative;}
.dashboard .panel-heading + .panel-body {position: absolute; left: 0; top: 30px; right: 0; bottom: 0}
.dashboard .panel-dragging-shadow {position: absolute;}
.dashboard-empty-message {text-align: center; margin-top: 100px;}
.dashboard-empty-message > h5 {margin-bottom: 20px;}
.dashboard .panel .panel-body{padding:5px;}
.dashboard .panel .panel-body .table tr td{overflow:hidden;}
.dashboard .resize-handle {display: none}
.dashboard .row > div:hover .resize-handle {display: block}
.ie-8 .dashboard .resize-handle > .icon {left: -4px}

.dashboard-actions {margin-bottom: 20px;}

.dashboard-control{position: absolute; right: -50px; top: 0;}
.table-header-fixed {position: absolute; left: 0; top: 0; right: 0;}

/* panel style */
.panel-widget .table th {background-color: #fafafa}
.panel-primary {border-color: transparent;!important;}
.panel-success > .panel-heading,
.panel-warning > .panel-heading,
.panel-primary > .panel-heading,
.panel-info > .panel-heading,
.panel-danger > .panel-heading {color: #333; border: none; border-bottom: 1px solid rgba(0,0,0,.04);}
.panel-success {background: #d1fecb!important; border-color: #b0e4ac!important}
.panel-success > .panel-heading {background: #c5f7c1!important; }
.panel-warning {background: #fdfdc7!important; border-color: #e1e09a!important}
.panel-warning > .panel-heading {background: #f8f7b6!important;}
.panel-primary {background: #d8f2fa!important; border-color: #badfeb!important}
.panel-primary > .panel-heading {background: #c9ecf8!important; color: #333!important; border:none!important;}
.panel-info {background: #dcd8fe!important; border-color: #d0c9ee!important}
.panel-info > .panel-heading {background: #d4cdf3!important;}
.panel-danger {background: #f5d0f5!important; border-color: #e9b9e9!important}
.panel-danger > .panel-heading {background: #f1c3f1!important;}
.panel-success .table td, .panel-success .table th,
.panel-warning .table td, .panel-warning .table th,
.panel-primary .table td, .panel-primary .table th,
.panel-info .table td, .panel-info .table th,
.panel-danger .table td, .panel-danger .table th {border: none; background-color: transparent}
.panel-success .table tr:nth-child(even) > td, .panel-success .table th,
.panel-warning .table tr:nth-child(even) > td, .panel-warning .table th,
.panel-primary .table tr:nth-child(even) > td, .panel-primary .table th,
.panel-info .table tr:nth-child(even) > td, .panel-info .table th,
.panel-danger .table tr:nth-child(even) > td, .panel-danger .table th {background: rgba(255,255,255,.25);}
.panel-success .table tr:nth-child(odd) > td,
.panel-warning .table tr:nth-child(odd) > td,
.panel-primary .table tr:nth-child(odd) > td,
.panel-info .table tr:nth-child(odd) > td,
.panel-danger .table tr:nth-child(odd) > td {background: rgba(0,0,0,.03);}
.panel-success .table tr:last-child > td,
.panel-warning .table tr:last-child > td,
.panel-primary .table tr:last-child > td,
.panel-info .table tr:last-child > td
.panel-danger .table tr:last-child > td {border-bottom: 1px solid rgba(0,0,0,0.05)}
.panel-success .table tr:hover > th,
.panel-warning .table tr:hover > th,
.panel-primary .table tr:hover > th,
.panel-info .table tr:hover > th,
.panel-danger .table tr:hover > th {background: none;}
.panel-success .table.table-hover tr:hover > td,
.panel-warning .table.table-hover tr:hover > td,
.panel-primary .table.table-hover tr:hover > td,
.panel-info .table.table-hover tr:hover > td,
.panel-danger .table.table-hover tr:hover > td {background: rgba(255,255,255,.4);}

.block.input-group-btn .btn-success {background: #d1fecb; color: #333; text-shadow: none; border-color: #ccc}
.block.input-group-btn .btn-warning {background: #fdfdc7; color: #333; text-shadow: none; border-color: #ccc}
.block.input-group-btn .btn-info    {background: #dcd8fe; color: #333; text-shadow: none; border-color: #ccc}
.block.input-group-btn .btn-danger  {background: #f5d0f5; color: #333; text-shadow: none; border-color: #ccc}
.block.input-group-btn .btn-primary, .block.input-group-btn .btn-primary:focus {background: #d8f2fa; color: #333; text-shadow: none; border-color: #ccc}
.block.input-group-btn .btn-success:hover {border-color: #aaa}
.block.input-group-btn .btn-warning:hover {border-color: #aaa}
.block.input-group-btn .btn-primary:hover {border-color: #aaa}
.block.input-group-btn .btn-info:hover    {border-color: #aaa}
.block.input-group-btn .btn-danger:hover  {border-color: #aaa}
.block.input-group-btn .btn-primary .caret, .block.input-group-btn .btn-success .caret, .block.input-group-btn .btn-warning .caret, .block.input-group-btn .btn-danger .caret, .block.input-group-btn .btn-info .caret {border-top-color: #333}

#noticeBox{ width:380px; position:fixed; bottom:25px; right:15px; z-index: 9999; }
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
  <li class='active' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
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
<li class='active'><a href='/admin.php?m=admin&f=index' >首页</a></li>
<li><a href='/admin.php?m=order&f=admin' >订单</a></li>
<li><a href='/admin.php?m=message&f=admin&type=message' >留言</a></li>
<li><a href='/admin.php?m=message&f=admin&type=comment' >评论</a></li>
<li><a href='/admin.php?m=message&f=admin&type=reply' >回复</a></li>
<li><a href='/admin.php?m=forum&f=admin' >主题</a></li>
<li><a href='/admin.php?m=reply&f=admin' >回帖</a></li>
<li><a href='/admin.php?m=article&f=admin&type=blog' >博客</a></li>
<li><a href='/admin.php?m=wechat&f=message&mode=replied&replied=0' >微信</a></li>
<li><a href='/admin.php?m=site&f=sethomemenu' ><i class='icon icon-plus'> </i>自定义</a>
</li></ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='/' target='_blank' class='navbar-link'><i class="icon-home icon-large"></i> 前台</a>
</li>
      <li class='dropdown'></li>
    </ul>
  </div>
</nav>
<div class="clearfix row-main">
                    <div class='container' id='shortcutBox'>

  <div id='dashboardWrapper'>
    <div class='panels-container dashboard' id='dashboard'>
      <div class='dashboard-control'>
        <div class='pull-right'>
          <a class='btn' data-toggle='modal' href='/admin.php?m=widget&f=create'><i  data-toggle='tooltip' class='icon-plus' title='创建区块'></i></a>
        </div>
      </div>
      <div class='row summary'>
                                <div class='col-xs-4 pull-left'>
                    <div class='panel panel-widget ' id='widget1' data-id='1' data-name='最新订单' data-url='/admin.php?m=widget&f=printWidget&widget=1'>
            <div class='panel-heading'>
              <span class='panel-title'>最新订单</span>
              <div class='panel-actions'>
                                          <a href='/admin.php?m=order&f=admin' class='panel-action btn-more' >更多</a>
                              <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin.php?m=widget&f=edit&index=1" data-toggle='modal' class='edit-widget' data-title='最新订单' data-icon='icon-pencil'><i class="icon-pencil"></i> 编辑</a></li>
                    <li><a href="/admin.php?m=widget&f=delete&id=1" class="deleter"><i class="icon-remove"></i> 删除</a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <div class='panel-body no-padding' data-url="/admin.php?m=widget&f=printWidget&widget=1"> </div>
                      </div>
        </div>
                        <div class='col-xs-4 pull-left'>
                    <div class='panel panel-widget ' id='widget2' data-id='2' data-name='最新帖子' data-url='/admin.php?m=widget&f=printWidget&widget=2'>
            <div class='panel-heading'>
              <span class='panel-title'>最新帖子</span>
              <div class='panel-actions'>
                                          <a href='/admin.php?m=forum&f=admin' class='panel-action btn-more' >更多</a>
                              <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin.php?m=widget&f=edit&index=2" data-toggle='modal' class='edit-widget' data-title='最新帖子' data-icon='icon-pencil'><i class="icon-pencil"></i> 编辑</a></li>
                    <li><a href="/admin.php?m=widget&f=delete&id=2" class="deleter"><i class="icon-remove"></i> 删除</a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <div class='panel-body no-padding' data-url="/admin.php?m=widget&f=printWidget&widget=2"> </div>
                      </div>
        </div>
                        <div class='col-xs-4 pull-left'>
                    <div class='panel panel-widget ' id='widget3' data-id='3' data-name='反馈' data-url='/admin.php?m=widget&f=printWidget&widget=3'>
            <div class='panel-heading'>
              <span class='panel-title'>反馈</span>
              <div class='panel-actions'>
                              <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin.php?m=widget&f=edit&index=3" data-toggle='modal' class='edit-widget' data-title='反馈' data-icon='icon-pencil'><i class="icon-pencil"></i> 编辑</a></li>
                    <li><a href="/admin.php?m=widget&f=delete&id=3" class="deleter"><i class="icon-remove"></i> 删除</a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <div class='panel-body no-padding' data-url="/admin.php?m=widget&f=printWidget&widget=3"> </div>
                      </div>
        </div>
                                <div class='col-xs-4 pull-left'>
                    <div class='panel panel-widget ' id='widget5' data-id='5' data-name='快捷入口' data-url='/admin.php?m=widget&f=printWidget&widget=5'>
            <div class='panel-heading'>
              <span class='panel-title'>快捷入口</span>
              <div class='panel-actions'>
                              <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin.php?m=widget&f=edit&index=5" data-toggle='modal' class='edit-widget' data-title='快捷入口' data-icon='icon-pencil'><i class="icon-pencil"></i> 编辑</a></li>
                    <li><a href="/admin.php?m=widget&f=delete&id=5" class="deleter"><i class="icon-remove"></i> 删除</a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <div class='panel-body no-padding' data-url="/admin.php?m=widget&f=printWidget&widget=5"> </div>
                      </div>
        </div>
                        <div class='col-xs-4 pull-left'>
                    <div class='panel panel-widget ' id='widget6' data-id='6' data-name='蝉知动态' data-url=''>
            <div class='panel-heading'>
              <span class='panel-title'>蝉知动态</span>
              <div class='panel-actions'>
                                          <a href='http://www.chanzhi.org/dynamic.html' class='panel-action btn-more' target='_blank'>更多</a>
                              <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin.php?m=widget&f=edit&index=6" data-toggle='modal' class='edit-widget' data-title='蝉知动态' data-icon='icon-pencil'><i class="icon-pencil"></i> 编辑</a></li>
                    <li><a href="/admin.php?m=widget&f=delete&id=6" class="deleter"><i class="icon-remove"></i> 删除</a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <script src='http://api.chanzhi.org/goto.php?item=dynamics' type='text/javascript'></script>
                      </div>
        </div>
              </div>
    </div>
  </div>
</div>
  <div id='noticeBox'>
    
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
    $.cookie('currentGroup', 'home', {expires:config.cookieLife, path:config.webRoot});

    $('#upgradeNotice').hide();
    if($('#upgradeNotice').size())
    {
        if(typeof(latest) != 'undefined' && latest.isNew)
        {
            $('#version').html(latest.version);
            $('#releaseDate').html(latest.releaseDate);
            $('#upgradeLink').attr('href', latest.url);
            $('#upgradeNotice').show();
            return true;
        }
        $('#upgradeNotice').remove();
    }
});

/**
 * Delete widget.
 * 
 * @param  int    $index 
 * @access public
 * @return void
 */
function deleteWidget(index)
{
    $.getJSON(createLink('widget', 'delete', 'index=' + index), function(data)
    {   
        if(data.result != 'success')
        {   
            alert(data.message);
            return false;
        }
        else {checkEmpty();}
    })  
}

/**
 * Sort widgets.
 * 
 * @param  object $orders  format is {'widget2' : 1, 'widget1' : 2, oldOrder : newOrder} 
 * @access public
 * @return void
 */
function sortWidgets(orders)
{

    var ordersMap = [];
    $.each(orders, function(widgetId, order) {ordersMap.push({id: widgetId, order: order});});
    ordersMap.sort(function(a, b) {return a.order - b.order;});
    var newOrders = $.map(ordersMap, function(order, idx) {return order.id});

    $.getJSON(createLink('widget', 'sort', 'orders=' + newOrders.join(',')), function(data)
    {
        // if(data.result == 'success') $.zui.messager.success(config.ordersSaved);
    });
}

/**
 * Check dashboard wether is empty
 * @access public
 * @return void
 */
function checkEmpty()
{
    var $dashboard = $('#dashboard');
    var hasWidgets = !!$dashboard.children('.row').children().length;
    $dashboard.find('.dashboard-empty-message').toggleClass('hide', hasWidgets);
}

/**
 * Resize widget
 * @param  object $event
 * @access public
 * @return void
 */
function resizeWidget(event)
{
    var widgetID = event.element.find('.panel').data('id');
    $.getJSON(createLink('widget', 'resize', 'id=' + widgetID + '&grid=' + event.grid), function(data)
    {
        if(data.result !== 'success') event.revert();
    });
}

/**
 * Init table header
 * @access public
 * @return void
 */
function initTableHeader()
{
    $('#dashboard .panel-widget').each(function()
    {
        var $panel = $(this);
        var $table = $panel.find('.table:first');

        if(!$table.length || !$table.children('thead').length) return;

        var $header = $panel.children('.table-header-fixed');
        if(!$header.length)
        {
            $header = $('<div class="table-header-fixed"><table class="table table-fixed"></table></div>').css('right', $panel.width() - $table.width());
            $header.find('.table').addClass($table.attr('class')).append($table.find('thead').css('visibility', 'hidden').clone().css('visibility', 'visible'));
            $panel.addClass('with-fixed-header').append($header);
            var $heading = $panel.children('.panel-heading');
            if($heading.length) $header.css('top', $heading.outerHeight());
        }
    });
}

/**
 * Check refresh progress
 * @param  object $dashboard
 * @access public
 * @return void
 */
function checkRefreshProgress($dashboard, doneCallback)
{
    if($dashboard.find('.panel-loading').length) setTimeout(function() {checkRefreshProgress($dashboard, doneCallback);}, 500);
    else doneCallback();
}

$(function()
{
    var $dashboard = $('#dashboard').dashboard(
    {
        height            : 240,
        draggable         : true,
        shadowType        : false,
        afterOrdered      : sortWidgets,
        afterPanelRemoved : deleteWidget,
        sensitive         : true,
        panelRemovingTip  : config.confirmRemoveWidget,
        resizable         : true,
        onResize          : resizeWidget,
        afterRefresh      : initTableHeader
    });

    $dashboard.find('ul.dashboard-actions').addClass('hide').children('li').addClass('right').appendTo($('#modulemenu > .nav'));
    checkEmpty();
    initTableHeader();
    $('[data-toggle=tooltip]').tooltip({container: 'body'});

    $(document).on('click', '.refresh-all-panel', function()
    {
        var $icon = $(this).find('.icon-repeat').addClass('icon-spin');
        $dashboard.find('.refresh-panel').click();
        checkRefreshProgress($dashboard, function() {$icon.removeClass('icon-spin');});
    });
});



</script>
</body>
</html>
