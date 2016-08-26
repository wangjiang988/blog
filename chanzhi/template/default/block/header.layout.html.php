<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The header view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV12 (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
?>
<header id='header' class='<?php if($setting->bottom) echo 'without-navbar'; ?>'>
  <?php if($setting->top->left or $setting->top->right):?>
  <div id='headNav' class='<?php if($setting->top->left == 'slogan') echo 'with-slogan' ?><?php if($setting->top->right and strpos(',searchAndLogin,search,loginAndSearch,', ',' . $setting->top->right . ',') !== false) echo ' with-searchbar' ?>'>
    <div class='row'>
      <?php if($setting->top->left == 'slogan'):?>
      <div id='siteSlogan' class='nobr'><span><?php echo $this->config->site->slogan;?></span></div>
      <?php elseif($setting->topLeftContent):?>
      <div id='siteSlogan' class='nobr'><span><?php echo htmlspecialchars_decode($setting->topLeftContent);?></span></div>
      <?php endif;?>
      <?php if($setting->top->right == 'loginAndSearch'):?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'searchbar');?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'sitenav');?>
      <?php elseif($setting->top->right == 'searchAndLogin'):?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'sitenav');?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'searchbar');?>
      <?php elseif($setting->top->right == 'login'):?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'sitenav');?>
      <?php elseif($setting->top->right == 'search'):?>
      <?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'searchbar');?>
      <?php endif;?>
    </div>
  </div>
  <?php endif;?>
  <div id='headTitle' class='<?php if($setting->middle->center == 'nav') echo 'with-navbar' ?><?php if($setting->middle->center == 'slogan') echo ' with-slogan' ?>'>
    <div class='row'>
      <div id='siteTitle'>
        <?php if($logo):?>
        <div id='siteLogo' data-ve='logo'><?php echo html::a(helper::createLink('index'), html::image($logo->webPath, "class='logo' alt='{$this->config->company->name}' title='{$this->config->company->name}'"));?></div>
        <?php else: ?>
        <div id='siteName' data-ve='logo'><h2><?php echo html::a(helper::createLink('index'), $this->config->site->name);?></h2></div>
        <?php endif;?>
        <?php if($setting->middle->center == 'slogan'):?>
        <div id='siteSlogan' data-ve='slogan'><span><?php echo $this->config->site->slogan;?></span></div>
        <?php endif;?>
      </div>
      <?php if($setting->middle->center == 'nav'):?>
      <div id='navbarWrapper'><?php include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'nav'); ?></div>
      <?php endif; ?>
      <?php if($setting->middle->right == 'search' and $setting->middle->center != 'nav') include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'searchbar');?>
    </div>
  </div>
</header>

<?php if(strpos(strtolower($setting->bottom), 'nav') !== false) include $this->loadModel('ui')->getEffectViewFile('default', 'block', 'nav');?>
<style>
#header {padding: 0; margin-bottom: 14px;}
#headNav {min-height: 30px; line-height: 30px; padding: 0; margin-bottom: 8px;}
#headNav, #headTitle {position: static; display: block;}
#headNav > .row {margin: 0}
#headTitle > .row, #headNav > .row {display: table; width: 100%; margin: 0}
#headNav > .row > #siteNav,
#headNav > .row > #siteSlogan,
#headNav > .row > #searchbar,
#headTitle > .row > #siteTitle,
#headTitle > .row > #searchbar {display: table-cell; vertical-align: middle;}

#headTitle {padding: 0;}
#siteNav {text-align: right; float: right; display: inline-block !important;}
@media (max-width: 767px){#siteNav {padding-left: 8px; padding-right: 8px;}}

#searchbar {max-width: initial;}
#searchbar > form {max-width: 200px; float: right;}
#navbar .navbar-nav {width: 100%}
#navbarCollapse {padding: 0;}
#navbar .navbar-nav {margin: 0;}
#navbar li.nav-item-searchbar {float: right;}
#navbar li.nav-item-searchbar #searchbar > form {margin: 4px;}

<?php if($setting->top->right == 'loginAndSearch'):?>
#searchbar{padding-left: 10px;}
<?php endif;?>

<?php if($setting->top->right == 'searchAndLogin'):?>
#searchbar{padding-right: 10px;}
<?php endif;?>

<?php if(strpos(',search,searchAndLogin,loginAndSearch,', ',' . $setting->top->right . ',') !== false):?>
<?php if($this->config->template->desktop->theme != 'wide'):?>
#searchbar .form-control{height: 25px; line-height: 25px;}
#searchbar .btn{line-height: 10px;}
<?php endif;?>
#searchbar {float: right;}
#searchbar > form {float: none; margin: 4px 0}
@media (max-width: 767px){#headNav > .row > #searchbar {display: none}}
<?php endif;?>

<?php if($setting->bottom == 'navAndSearch' or ($setting->middle->center == 'nav' and $setting->middle->right == 'search')):?>
#searchbar {min-width: 80px}
<?php endif;?>

<?php if($setting->top->left == 'slogan' or $setting->topLeftContent):?>
#headNav #siteSlogan {padding: 0; font-size: 16px; line-height: 30px; text-align: left;}
@media (max-width: 767px){#headNav #siteSlogan {padding-left: 8px; padding-right: 8px;}}
<?php endif;?>

<?php if($setting->middle->center == 'nav'):?>
#headTitle > .row > #navbarWrapper {display: table-cell; vertical-align: middle; padding-left: 8px;}
#headTitle > .row > #navbarWrapper > #navbar {margin:0}
#siteTitle, #siteLogo img {min-width: 150px;}
@media (max-width: 767px)
{
  #headTitle {padding: 0;}
  #headTitle > .row {margin: 0; display: block;}
  #headTitle > .row > #siteTitle {display: block; position: absolute; z-index: 10015; left: 8px;}
  #headTitle > .row > #navbarWrapper {display: block; padding: 0}
  #headTitle > .row > #navbarWrapper > #navbar {margin-bottom: 14px; width: 100%}
  #headTitle #siteLogo img {margin-top: 2px;}
}
<?php endif;?>
</style>
