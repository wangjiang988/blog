<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会员 - 蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"user","currentMethod":"admin","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>.user-control-nav{margin-bottom: 20px;}
@media (max-width: 480px) { .hidden-xxs {display: none} .page {font-size: 12px}}
@media (max-width: 400px) { .hidden-xxxs {display: none}}
#userList th, #userList td{overflow: hidden; white-space: nowrap;}
#userList td.operate, #userList tr:last-child td{overflow: visible; white-space: normal;}

.panel .table{margin-bottom: -1px;}
.panel-heading{padding-bottom: 4px;}
#typeNav {border-bottom: none;}
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
  <li class='' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='active' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
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
<li class='active'><a href='/admin.php?m=user&f=admin' >会员</a></li>
<li><a href='/admin.php?m=message&f=admin&type=message' >留言</a></li>
<li><a href='/admin.php?m=message&f=admin&type=comment' >评论</a></li>
<li><a href='/admin.php?m=message&f=admin&type=reply' >回复</a></li>
<li><a href='/admin.php?m=forum&f=admin' >论坛</a></li>
<li><a href='/admin.php?m=wechat&f=message&mode=replied&replied=0' >微信</a></li>
</ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='/' target='_blank' class='navbar-link'><i class="icon-home icon-large"></i> 前台</a>
</li>
      <li class='dropdown'></li>
    </ul>
  </div>
</nav>
<div class="clearfix row-main">
                    <script>v.provider = false;</script>
<script>v.admin = false;</script>
<div class="panel">
  <div class="panel-heading clearfix">
    <ul id='typeNav' class='nav nav-tabs pull-left'>
      <li data-type='internal' class='active'>
        <a href='/admin.php?m=user&f=admin' >全部会员</a>
      </li>
                        <li data-type='internal' >
        <a href='/admin.php?m=user&f=admin&provider=wechat' >微信会员</a>
      </li>
          </ul> 
    <div class="panel-actions">
      <form method='get' class='form-inline form-search'>
        <input type='hidden' name='m' id='m' value='user'  />
<input type='hidden' name='f' id='f' value='admin'  />
        <div class="input-group">
          <input type='text' name='user' id='user' value='' class='form-control search-query' placeholder='请输入用户名' />
          <span class="input-group-btn">
             <input type='submit' id='submit' class='btn' value='搜索'  data-loading='稍候...' />           </span>
        </div>
      </form>
      <a href='/admin.php?m=user&f=create' data-toggle='modal' class='btn btn-primary'><i class='icon icon-plus'></i> 添加用户</a>
    </div>
  </div>
  <form method='post' action='/admin.php?m=user&f=batchdelete'>
    <table class='table table-hover table-striped able-condensed' id='userList'>
      <thead>
        <tr class='text-center'>
          <th class='w-60px'>编号</th>
          <th class='w-100px'>真实姓名</th>
          <th class='w-100px'>用户名</th>
                              <th class='w-60px'>性别</th>
          <th class='text-left visible-lg'>公司/组织</th>
          <th class='w-80px'>注册日期</th>
                    <th class='w-70px'>访问次数</th>
          <th class='w-140px'>最后登录</th>
          <th class='w-100px'>最后IP</th>
          <th class='w-60px'>状态</th>
          <th class='w-160px'>操作</th>
        </tr>
      </thead>
      <tbody>
                  <tr class='text-center'>
        <td>
          <input type='checkbox' name='account[]'  value='admin'/> 
          1        </td>
        <td>admin</td>
        <td>admin</td>
                        <td></td>
        <td class='text-left visible-lg'></td>
        <td>2016-08-26</td>
                <td>3</td>
        <td>2016-09-21 09:19:22</td>
        <td>::1</td>
        <td>
                        <label class='label label-success'>正常</label>        </td>
        <td class='operate text-left'>
                    <a href='/admin.php?m=user&f=edit&account=admin' >编辑</a>
                    <a href='/admin.php?m=user&f=delete&account=admin' >删除</a>
                    <span class="dropdown">
            <a href='###' class="dropdown-toggle" data-toggle="dropdown">禁用 <span class="caret"></span></a>
            <ul class="dropdown-menu pull-right text-left" role="menu">
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=1' class='forbider'>一天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=2' class='forbider'>两天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=3' class='forbider'>三天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=7' class='forbider'>一周</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=30' class='forbider'>一个月</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=1&date=3000' class='forbider'>永久</a>
</li>
                        </ul>
          </span>
                            </td>
      </tr>
            <tr class='text-center'>
        <td>
          <input type='checkbox' name='account[]'  value='demo'/> 
          2        </td>
        <td>demo</td>
        <td>demo</td>
                        <td></td>
        <td class='text-left visible-lg'></td>
        <td>0000-00-00</td>
                <td>0</td>
        <td>0000-00-00 00:00:00</td>
        <td>14.159.71.121</td>
        <td>
                        <label class='label label-success'>正常</label>        </td>
        <td class='operate text-left'>
                    <a href='/admin.php?m=user&f=edit&account=demo' >编辑</a>
                    <a href='/admin.php?m=user&f=delete&account=demo' >删除</a>
                    <span class="dropdown">
            <a href='###' class="dropdown-toggle" data-toggle="dropdown">禁用 <span class="caret"></span></a>
            <ul class="dropdown-menu pull-right text-left" role="menu">
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=1' class='forbider'>一天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=2' class='forbider'>两天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=3' class='forbider'>三天</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=7' class='forbider'>一周</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=30' class='forbider'>一个月</a>
</li>
                          <li><a href='/admin.php?m=user&f=forbid&userID=2&date=3000' class='forbider'>永久</a>
</li>
                        </ul>
          </span>
                            </td>
      </tr>
            </tbody>
      <tfoot>
        <tr>
                    <td colspan='12'>
                    <div class='btn-group'>
            <script>
$(function()
{
    if($('body').data('bindSelectBtn')) return;
    $('body').data('bindSelectBtn', true);
    $(document).on('click', '.check-all, .check-inverse', function()
    {
        var e = $(this);
        if(e.closest('.datatable').length) return;
        scope = e.data('scope');
        scope = scope ? $('#' + scope) : e.closest('.table');
        if(!scope.length) scope = e.closest('form');
        scope.find('input:checkbox').each(e.hasClass('check-inverse') ? function() { $(this).prop("checked", !$(this).prop("checked"));} : function() { $(this).prop("checked", true);});
    });
});
</script><a class='btn btn-select-all check-all' data-scope='' href='javascript:;' >全选</a><a class='btn btn-select-reverse check-inverse' data-scope='' href='javascript:;'>反选</a>          </div>
           <input type='submit' id='submit' class='btn btn-primary' value='删除'  data-loading='稍候...' />                     <div style='float:right; clear:none;' class='pager'>共 <strong>2</strong> 条记录，<div class='dropdown dropup'><a href='javascript:;' data-toggle='dropdown' id='_recPerPage' data-value='10'>每页 <strong>10</strong> 条<span class='caret'></span></a><ul class='dropdown-menu'><li><a href='javascript:submitPage("changeRecPerPage", 5)'>5</a></li><li class='active'><a href='javascript:submitPage("changeRecPerPage", 10)'>10</a></li><li><a href='javascript:submitPage("changeRecPerPage", 15)'>15</a></li><li><a href='javascript:submitPage("changeRecPerPage", 20)'>20</a></li><li><a href='javascript:submitPage("changeRecPerPage", 25)'>25</a></li><li><a href='javascript:submitPage("changeRecPerPage", 30)'>30</a></li><li><a href='javascript:submitPage("changeRecPerPage", 35)'>35</a></li><li><a href='javascript:submitPage("changeRecPerPage", 40)'>40</a></li><li><a href='javascript:submitPage("changeRecPerPage", 45)'>45</a></li><li><a href='javascript:submitPage("changeRecPerPage", 50)'>50</a></li><li><a href='javascript:submitPage("changeRecPerPage", 100)'>100</a></li><li><a href='javascript:submitPage("changeRecPerPage", 200)'>200</a></li><li><a href='javascript:submitPage("changeRecPerPage", 500)'>500</a></li><li><a href='javascript:submitPage("changeRecPerPage", 1000)'>1000</a></li></ul></div> <strong>1/1</strong> &nbsp; <i class='icon-step-backward' title='首页'></i> <i class='icon-play icon-rotate-180' title='上一页'></i> <i class='icon-play' title='下一页'></i> <i class='icon-step-forward' title='末页'></i> <input type='hidden' id='_recTotal'  value='2' />
<input type='hidden' id='_pageTotal' value='1' />
<input type='text'   id='_pageID' value='1' style='text-align:center;width:30px;' class='form-control' /> 
<input type='button' id='goto' value='GO!' onclick='submitPage("changePageID");' class='btn'/>        <script>
        vars = '';
        pageCookie = 'pagerUserAdmin';
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
            location.href=createLink('user', 'admin', vars);
        }
        </script></div>          </td>
        </tr>
      </tfoot>
    </table>
  </form>
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
    /* Set forbid link options. */
    $('td.operate a.forbider').click(function()
    {
        $.getJSON($(this).attr('href'),function(data)
        {
            alert(data.message);
            return location.reload();
        });
        return false;
    });

    $('.form-search').submit(function()
    {
        var inputValue = $(".search-query").val();
        if(inputValue == '')
        {
            return false;
        }
    });

    /* Set active menu. */
    $('.leftmenu li.active').removeClass('active');
    $(".leftmenu a[href*='provider=" + v.provider  + "']").parent().addClass('active');
    $(".leftmenu a[href*='admin=" + v.admin  + "']").parent().addClass('active');
    if($('.leftmenu li.active').size() == 0) $('.leftmenu li:first').addClass('active');

    $('#pullBtn').click(function()
    {
        url = $(this).attr('href');
        $(this).text(v.lang.loading);
        $.getJSON(url, function(response)
        {
            if(response.result == 'success')
            {
                window.location.reload();
            }
            else
            {
                bootbox.alert(response.message);
            }
        });
        return false;
    });
});

</script>
</body>
</html>
