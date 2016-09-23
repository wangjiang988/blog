<!DOCTYPE html>
<html lang='zh-cn'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>站点 - 蝉知企业门户</title>
<meta name="keywords" content="企业门户系统 企业建站系统 开源CMS">
<meta name="description" content="蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！">
<script>var config={"webRoot":"\/","cookieLife":30,"requestType":"GET","requestFix":"-","moduleVar":"m","methodVar":"f","viewVar":"t","defaultView":"html","themeRoot":"\/theme\/","currentModule":"site","currentMethod":"setbasic","clientLang":"zh-cn","requiredFields":"","save":"\u4fdd\u5b58","router":"\/admin.php","runMode":"admin","langCode":""}
</script>
<link rel='stylesheet' href='/theme/default/default/all.admin.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/all.admin.js?v=5.3.4' type='text/javascript'></script>
<style>.icpSN .col-sm-8, .policeSN .col-sm-8{padding-left: 0;}
.icpSN .col-sm-4 input, .policeSN .col-sm-8 input{border-radius: 3px 0 0 3px;}
.icpSN .input-group-addon, .policeSN .input-group-addon{border-radius: 0 3px 3px 0; border-left: none;}
.table td > a.hide{display: none;}
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
  <li class='' data-id='home'><a data-toggle='tooltip' href='/admin.php?m=admin&f=index'>首页</a></li><li class='' data-id='content'><a data-toggle='tooltip' href='/admin.php?m=article&f=admin&type=article'>内容</a></li><li class='' data-id='shop'><a data-toggle='tooltip' href='/admin.php?m=order&f=admin'>商城</a></li><li class='' data-id='user'><a data-toggle='tooltip' href='/admin.php?m=user&f=admin'>会员</a></li><li class='' data-id='promote'><a data-toggle='tooltip' href='/admin.php?m=tag&f=admin'>推广</a></li><li class='' data-id='design'><a data-toggle='tooltip' href='/admin.php?m=ui&f=settemplate'>设计</a></li><li class='' data-id='open'><a data-toggle='tooltip' href='/admin.php?m=package&f=browse'>平台</a></li><li class='active' data-id='setting'><a data-toggle='tooltip' href='/admin.php?m=site&f=setbasic'>设置</a></li>  </ul>
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
<li class='active'><a href='/admin.php?m=site&f=setbasic' >站点</a></li>
<li><a href='/admin.php?m=site&f=setsecurity' >安全</a></li>
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
<li class='active'><a href='/admin.php?m=site&f=setbasic' >站点设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=site&f=setdomain' >域名设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=site&f=setcdn' >CDN设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=site&f=setcache' >缓存设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=site&f=sethomemenu' >首页菜单<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=company&f=setbasic' >公司信息<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=company&f=setcontact' >联系方式<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=site&f=setoauth' >开放登录<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=mail&f=admin' >发信设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=wechat&f=admin' >微信设置<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=search&f=buildindex' >全文检索<i class="icon-chevron-right"></i></a>
</li>
<li><a href='/admin.php?m=backup&f=index' >备份还原<i class="icon-chevron-right"></i></a>
</li>
</ul>
              </div>
    </div>
    <div class='col-md-10'>
        <script>v.jsRoot = "\/js\/";</script>
<script>v.webRoot = "\/";</script>
<script>v.editors = {"id":["pauseTip"],"tools":"simple"};</script>
<script>v.errorUnwritable = "\u4e0a\u4f20\u76ee\u5f55\u4e0d\u53ef\u5199\uff0c\u65e0\u6cd5\u4e0a\u4f20\u9644\u4ef6\u3002";</script>
<script>v.editorLang = "zh_CN";</script>
<link rel='stylesheet' href='/js/kindeditor/themes/default/default.css?v=5.3.4' type='text/css' media='screen'/>
<script src='/js/kindeditor/kindeditor-min.js?v=5.3.4' type='text/javascript'></script>
<script src='/js/kindeditor/lang/zh_CN.js?v=5.3.4' type='text/javascript'></script>
<script>v.uid = "57e1e0233bab1";</script>

<script>
var simple =
[ 'formatblock', 'fontsize', '|', 'bold', 'italic','underline', '|',
'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', 'insertunorderedlist', '|',
'emoticons', 'image', 'link', '|', 'removeformat','undo', 'redo', 'source' ];

var full =
[ 'formatblock', 'fontsize', 'lineheight', '|', 'forecolor', 'hilitecolor', '|', 'bold', 'italic','underline', 'strikethrough', '|',
'justifyleft', 'justifycenter', 'justifyright', '|',
'emoticons', 'image', '|', 'link', 'unlink', 'anchor', 'flash', 'media', 'baidumap', '/',
'undo', 'redo', '|', 'cut', 'copy', '|', 'plainpaste', 'wordpaste', '|', 'removeformat', 'clearhtml','quickformat', '|',
'indent', 'outdent', 'subscript', 'superscript', 'insertorderedlist', 'insertunorderedlist', '|',
'table', 'code', 'hr', '|',
'fullscreen', 'source', 'about'];

$(document).ready(initKindeditor);
function initKindeditor(afterInit)
{
    $(':input[type=submit]').after("<input type='hidden' id='uid' name='uid' value=" + v.uid + ">");
    var nextFormControl = 'input:not([type="hidden"]), textarea:not(.ke-edit-textarea), button[type="submit"], select';

    $.each(v.editors.id, function(key, editorID)
    {
        if(typeof(v.editors.filterMode) == 'undefined') v.editors.filterMode = true;
        editorTool = eval(v.editors.tools);
        var K = KindEditor, $editor = $('#' + editorID);
        keEditor = K.create('#' + editorID,
        {
            width:'100%',
            items:editorTool,
            cssPath:[v.webRoot + 'zui/css/min.css'],
            cssData: '.article-content table.table-kindeditor th, .article-content table.table-kindeditor td {border-bottom: initial;} .article-content table.ke-zeroborder.table-kindeditor td {border: 1px dotted #AAA;}',
            bodyClass:'article-content',
            urlType:'',
            uploadJson: createLink('file', 'ajaxUpload', 'uid=' + v.uid),
                        fileManagerJson : createLink('file', 'fileManager'),
                        imageTabIndex:1,
            filterMode:v.editors.filterMode,
            allowFileManager:true,
            langType:v.editorLang,
            htmlTags:{
            'pspanh1h2h3h4h5emustrongbrolulliimgabfonthrpreembeddddtdldivtabletdthtrtbodyiframestyleheadernavmeta':["class","id","style"],
            video: ["id", "class", "width", "height", "src", "controls"],
            font:["id","class","color","size","face",".background-color"],span:["id","class",".color",".background-color",".font-size",".font-family",".background",".font-weight",".font-style",".text-decoration",".vertical-align",".line-height"],div:["id","class","align",".border",".margin",".padding",".text-align",".color",".background-color",".font-size",".font-family",
            ".font-weight",".background",".font-style",".text-decoration",".vertical-align",".margin-left"],table:["id","class","border","cellspacing","cellpadding","width","height","align","bordercolor",".padding",".margin",".border","bgcolor",".text-align",".color",".background-color",".font-size",".font-family",".font-weight",".font-style",".text-decoration",".background",".width",".height",".border-collapse"],"td,th":["id","class","align","valign","width","height","colspan","rowspan","bgcolor",".text-align",
            ".color",".background-color",".font-size",".font-family",".font-weight",".font-style",".text-decoration",".vertical-align",".background",".border"],a:["id","class","href","target","name"],embed:["id","class","src","width","height","type","loop","autostart","quality",".width",".height","align","allowscriptaccess"],img:["id","class","src","width","height","border","alt","title","align",".width",".height",".border"],"p,ol,ul,li,blockquote,h1,h2,h3,h4,h5,h6":["id","class","align",".text-align",".color",
            ".background-color",".font-size",".font-family",".background",".font-weight",".font-style",".text-decoration",".vertical-align",".text-indent",".margin-left"],pre:["id","class"],hr:["id","class",".page-break-after"],"br,tbody,tr,strong,b,sub,sup,em,i,u,strike,s,del":["id","class"],iframe:["id","class","src","frameborder","width","height",".width",".height"],style:[]},
            afterBlur: function(){this.sync();$('#' + editorID).prev('.ke-container').removeClass('focus');},
            afterFocus: function(){$('#' + editorID).prev('.ke-container').addClass('focus');},
            afterChange: function(){$('#' + editorID ).change().hide();},
            afterCreate : function()
            {
                var doc = this.edit.doc;
                var cmd = this.edit.cmd;
                /* Paste in chrome.*/
                /* Code reference from http://www.foliotek.com/devblog/copy-images-from-clipboard-in-javascript/. */
                if(K.WEBKIT)
                {
                    $(doc.body).bind('paste', function(ev)
                    {
                        var $this = $(this);
                        var original =  ev.originalEvent;
                        var file =  original.clipboardData.items[0].getAsFile();
                        var reader = new FileReader();
                        reader.onload = function (evt)
                        {
                            var result = evt.target.result;
                            var result = evt.target.result;
                            var arr = result.split(",");
                            var data = arr[1]; // raw base64
                            var contentType = arr[0].split(";")[0].split(":")[1];

                            html = '<img src="' + result + '" alt="" />';
                            $.post(createLink('file', 'ajaxPasteImage', 'uid=' + v.uid), {editor: html}, function(data)
                            {
                                if(data) return cmd.inserthtml(data);

                                alert(v.errorUnwritable);
                                return cmd.inserthtml(html);
                            });
                        };

                        reader.readAsDataURL(file);
                    });
                }

                /* Paste in firefox.*/
                if(K.GECKO)
                {
                    K(doc.body).bind('paste', function(ev)
                    {
                        setTimeout(function()
                        {
                            var html = K(doc.body).html();
                            if(html.search(/<img src="data:.+;base64,/) > -1)
                            {
                                $.post(createLink('file', 'ajaxPasteImage', "uid=" + v.uid), {editor: html}, function(data)
                                {
                                    if(data) return K(doc.body).html(data);

                                    alert(v.errorUnwritable);
                                    return K(doc.body).html(data);
                                });
                            }
                        }, 80);
                    });
                }
                /* End */
            },
            afterTab: function(id)
            {
                var $next = $editor.next(nextFormControl);
                if(!$next.length) $next = $editor.parent().next().find(nextFormControl);
                if(!$next.length) $next = $editor.parent().parent().next().find(nextFormControl);
                $next = $next.first();
                var keditor = $next.data('keditor');
                if(keditor) keditor.focus(); else $next.focus();
            }
        });
        try
        {
            if(!window.editor) window.editor = {};
            window.editor['#'] = window.editor[editorID] = keEditor;
            $editor.data('keditor', keEditor);
        }
        catch(e){}
    });

    if($.isFunction(afterInit)) afterInit();
}
</script>
<script>v.closeScoreTip = "\u7981\u7528\u79ef\u5206\u529f\u80fd\u540e\u4e0d\u518d\u8bb0\u5f55\u79ef\u5206\uff0c\u4f1a\u5458\u4fdd\u6301\u539f\u6709\u79ef\u5206\u4e0d\u53d8\u3002";</script>
<script>v.requestTypeTip = "\u7ecf\u68c0\u6d4b\uff0c\u60a8\u53ef\u4f7f\u7528PATH_INFO\u6a21\u5f0f\uff0cSEO\u6548\u679c\u66f4\u4f73\u3002";</script>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-globe'></i> 基本信息设置</strong></div>
  <div class='panel-body'>
    <form method='post' id='ajaxForm' class='form-inline'>
      <table class='table table-form'>
        <tr>
          <th class='col-xs-2'>站点状态</th> 
          <td class='col-xs-6'><label class='radio-inline' for='status1'><input type='radio' id='status1' name='status' value='normal'  checked ='checked'class='checkbox' /> 正常</label>
<label class='radio-inline' for='status2'><input type='radio' id='status2' name='status' value='pause' class='checkbox' /> 暂停</label>
</td><td></td>
        </tr>
                <tr class="pauseTip hide">
          <th>暂停提示</th> 
          <td><textarea name='pauseTip' id='pauseTip' >站点维护中……</textarea>
</td>
        </tr>
        <tr>
          <th>站点类型</th> 
          <td><label class='radio-inline' for='type1'><input type='radio' id='type1' name='type' value='portal'  checked ='checked'class='checkbox' /> 企业门户</label>
<label class='radio-inline' for='type2'><input type='radio' id='type2' name='type' value='blog' class='checkbox' /> 个人博客</label>
</td><td></td>
        </tr>
        <tr>
          <th>站点语言</th>
          <td><label class='checkbox-inline'><input type='checkbox' id='lang1'  name='lang[]' value='zh-cn'  checked ='checked' /> 简体</label>
<label class='checkbox-inline'><input type='checkbox' id='lang2'  name='lang[]' value='zh-tw'  /> 繁体</label>
<label class='checkbox-inline'><input type='checkbox' id='lang3'  name='lang[]' value='en'  /> English</label>
</td><td></td>
        </tr>
        <tr id='twTR'>
          <th>繁体内容</th>
          <td><label class='checkbox-inline'><input type='checkbox' id='cn2tw1'  name='cn2tw[]' value='1'  /> 自动从简体版复制</label>
</td><td></td>
        </tr>
        <tr>
          <th>默认语言</th>
          <td>
            <select name='defaultLang' id='defaultLang' class='form-control'>
<option value='zh-cn' selected='selected'>简体</option>
<option value='zh-tw'>繁体</option>
<option value='en'>English</option>
</select>
          </td>
          <td></td>
        </tr>
        <tr>
          <th>移动模板</th> 
          <td><label class='radio-inline' for='mobileTemplate1'><input type='radio' id='mobileTemplate1' name='mobileTemplate' value='open' class='checkbox' /> 启用</label>
<label class='radio-inline' for='mobileTemplate2'><input type='radio' id='mobileTemplate2' name='mobileTemplate' value='close'  checked ='checked'class='checkbox' /> 禁用</label>
</td><td></td>
        </tr>
        <tr>
          <th>访问类型</th> 
          <td>
            <select name='requestType' id='requestType' class='form-control'>
<option value='GET'>GET</option>
<option value='PATH_INFO' selected='selected'>PATH_INFO</option>
<option value='PATH_INFO2'>PATH_INFO2</option>
</select>
          </td>
          <td><span id='requestTypeTip' class='hide text-important'>经检测，您可使用PATH_INFO模式，SEO效果更佳。</span></td>
        </tr>
        <tr>
          <th>网站名称</th> 
          <td><input type='text' name='name' id='name' value='蝉知企业门户' class='form-control' />
</td><td></td>
        </tr>
        <tr>
          <th>创建年份</th> 
          <td><input type='text' name='copyright' id='copyright' value='2013' class='form-control' />
</td><td></td>
        </tr>
        <tr>
          <th>功能模块</th>
          <td colspan='2'><label class='checkbox-inline'><input type='checkbox' id='modules1'  name='modules[]' value='user'  checked ='checked' /> 会员</label>
<label class='checkbox-inline'><input type='checkbox' id='modules2'  name='modules[]' value='article'  checked ='checked' /> 文章</label>
<label class='checkbox-inline'><input type='checkbox' id='modules3'  name='modules[]' value='blog'  checked ='checked' /> 博客</label>
<label class='checkbox-inline'><input type='checkbox' id='modules4'  name='modules[]' value='product'  checked ='checked' /> 产品</label>
<label class='checkbox-inline'><input type='checkbox' id='modules5'  name='modules[]' value='book'  checked ='checked' /> 手册</label>
<label class='checkbox-inline'><input type='checkbox' id='modules6'  name='modules[]' value='page'  checked ='checked' /> 单页</label>
<label class='checkbox-inline'><input type='checkbox' id='modules7'  name='modules[]' value='forum'  checked ='checked' /> 论坛</label>
<label class='checkbox-inline'><input type='checkbox' id='modules8'  name='modules[]' value='message'  checked ='checked' /> 评论留言</label>
<label class='checkbox-inline'><input type='checkbox' id='modules9'  name='modules[]' value='search'  checked ='checked' /> 搜索</label>
<label class='checkbox-inline'><input type='checkbox' id='modules10'  name='modules[]' value='shop'  checked ='checked' /> 商城</label>
<label class='checkbox-inline'><input type='checkbox' id='modules11'  name='modules[]' value='score'  /> 积分</label>
<label class='checkbox-inline'><input type='checkbox' id='modules12'  name='modules[]' value='stat'  /> 统计</label>
<label class='checkbox-inline'><input type='checkbox' id='modules13'  name='modules[]' value='submittion'  /> 投稿</label>
</td>
        </tr>
        <tr>
          <th>关键词</th> 
          <td colspan='2'><input type='text' name='keywords' id='keywords' value='企业门户系统 企业建站系统 开源CMS' class='form-control' />
</td>
        </tr>
        <tr>
          <th>首页关键词</th> 
          <td colspan='2'><input type='text' name='indexKeywords' id='indexKeywords' value='企业门户系统 企业建站系统 开源CMS' class='form-control' />
</td>
        </tr>
        <tr>
          <th>站点口号</th> 
          <td colspan='2'><input type='text' name='slogan' id='slogan' value='为天下企业提供专业的营销工具！' class='form-control' />
</td>
        </tr>
        <tr>
          <th>Meta 标签</th> 
          <td colspan='2'><textarea name='meta' id='meta' placeholder='可放置<meta><script><style>和<link>标签。' class='form-control' rows=3></textarea>
</td>
        </tr>
        <tr>
          <th>站点描述</th> 
          <td colspan='2'><textarea name='desc' id='desc' class='form-control' rows='3'>蝉知门户系统（chanzhiEPS）是一款开源免费的企业门户系统，企业建站系统，php开源CMS系统。它专为企业营销设计，功能专业全面，内置了文章发布、会员管理、论坛评论、产品展示、在线销售、客服跟踪等功能。以LGPL协议发布，真开源，真免费。注重SEO，注重营销，支持移动设备。界面简洁大方，使用简单方便，功能专业强大，是企业建站的首选！同时蝉知系统还内置了微信公众平台功能，一个网站，电脑、手机、微信体验俱佳！</textarea>
</td> 
        </tr>
       <tr class='icpSN'>
          <th>备案编号</th> 
          <td colspan='2'>
            <div class='row'>
                            <div class='col-sm-4'><input type='text' name='icpSN' id='icpSN' value='' class='form-control col-xs-2'  />
</div>
              <div class='col-sm-8'>
                <div class='input-group'>
                  <span class="input-group-addon">备案链接</span>
                  <input type='text' name='icpLink' id='icpLink' value='http://www.miitbeian.gov.cn' class='form-control' />
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class='policeSN'>
          <th>公安部备案编号</th> 
          <td colspan='2'>
            <div class='row'>
                            <div class='col-sm-4'><input type='text' name='policeSN' id='policeSN' value='' class='form-control col-xs-2'  />
</div>
              <div class='col-sm-8'>
                <div class='input-group'>
                  <span class="input-group-addon">备案链接</span>
                  <input type='text' name='policeLink' id='policeLink' value='http://www.miitbeian.gov.cn' class='form-control' />
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th></th>
          <td colspan='2'> <input type='submit' id='submit' class='btn btn-primary' value='保存'  data-loading='稍候...' /> </td>
        </tr>
      </table>
    </form>
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

<script>$(document).ready(function()
{
    $('input[name=status]').click(function()
    {
        if($('#status2').prop('checked'))
        {
            $('.pauseTip').show();
        }
        else
        {
            $('.pauseTip').hide();
        }
    });

    $('input[type=checkbox][value=score]').change(function()
    {
        if(!$('input[type=checkbox][value=score]').prop('checked'))
        {
            bootbox.alert(v.closeScoreTip);
        }
    });

    /* Change set lang imput. */
    $('input[type=checkbox]').change(function()
    {
        if($('input[type=checkbox][value=zh-cn]').prop('checked') && $('input[type=checkbox][value=zh-tw]').prop('checked'))
        {
            $('#twTR').show();
        }
        else
        {
            $('#twTR').hide();
        }

        $('input[type=checkbox]').each(function()
        {
            checked = $(this).prop('checked');
            lang = $(this).val();
            if(!checked)
            {
                $('#defaultLang').find('[value=' + lang  + ']').prop('disabled', true);
            }
            else
            {
                $('#defaultLang').find('[value=' + lang  + ']').prop('disabled', false);
            }
        })
    });

    $('#requestType').change(function()
    {
        if($(this).find('option:selected').val() != 'PATH_INFO')
        {
            $.ajax(
            {
                type: 'get',
                url: '/index',
                dataType: 'json',
                success: function(data){return false;},  
                error: function(data)
                {
                    if(data.status == '200') 
                    {
                        $('#requestTypeTip').fadeIn();
                    }
                }
            });
        }
        else
        {
            $('#requestTypeTip').hide();
        }

    })

    $('input[type=checkbox][id*=lang]').change();
    $('#requestType').change();
})

</script>
</body>
</html>
