<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The control file of site module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     site
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class site extends control
{
    /**
     * set site basic info.
     *
     * @access public
     * @return void
     */
    public function setBasic()
    {
        $allowedTags = $this->app->user->admin == 'super' ? $this->config->allowedTags->admin : $this->config->allowedTags->front;

        if(!empty($_POST))
        {
            $setting = fixer::input('post')
                ->stripTags('meta', $allowedTags)
                ->join('modules', ',')
                ->remove('allowedFiles')
                ->setDefault('modules', '')
                ->stripTags('pauseTip', $allowedTags)
                ->remove('uid,lang,cn2tw,defaultLang,requestType')
                ->get();

            if(strpos($setting->modules, 'shop') !== false  && strpos($setting->modules, 'user') === false) $setting->modules = 'user,' . $setting->modules;
            if($setting->modules == 'initial') unset($setting->modules);

            $result = $this->loadModel('setting')->setItems('system.common.site', $setting);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            /* Set global settings. */
            $globalSetting = new stdclass();
            if($this->post->lang)
            {
                $globalSetting->lang        = join(',', $this->post->lang);
                $globalSetting->cn2tw       = join('', $this->post->cn2tw);
                $globalSetting->defaultLang = $this->post->defaultLang;
            }

            if($this->post->requestType) $globalSetting->requestType = $this->post->requestType;

            $result = $this->loadModel('setting')->setItems('system.common.site', $globalSetting, 'all');
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            /* Switch to desktop device if mobile template closed. */
            if($setting->mobileTemplate == 'close') $this->session->set('device', 'desktop');
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setbasic')));
        }

        $this->view->title = $this->lang->site->common;
        $this->display();
    }

    /**
     * Set domain.
     * 
     * @access public
     * @return void
     */
    public function setDomain()
    {
        if(!empty($_POST))
        {
            $setting = fixer::input('post')->get();
            $result = $this->loadModel('setting')->setItems('system.common.site', $setting);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setbasic')));
        }

        $this->view->title = $this->lang->site->setDomain;
        $this->display();
    }

    /**
     * set sensitive.
     *
     * @access public
     * @return void
     */
    public function setSensitive()
    {
        $this->lang->site->menu = $this->lang->security->menu;
        $this->lang->menuGroups->site = 'security';

        if(!empty($_POST))
        {
            $setting = fixer::input('post')->get();

            $result = $this->loadModel('setting')->setItems('system.common.site', $setting);

            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setsensitive')));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }

        $this->view->title = $this->lang->site->setsensitive;
        $this->display();
    }

    /**
     * Set robots.
     *
     * @access public
     * @return void
     */
    public function setRobots()
    {
        $robotsFile = $this->app->getWwwRoot() . 'robots.txt';
        $writeable  = ((file_exists($robotsFile) and is_writeable($robotsFile)) or is_writeable(dirname($robotsFile)));

        if(!empty($_POST))
        {
            if(!$writeable) $this->send(array('result' => 'fail', 'message' => sprintf($this->lang->site->robotsUnwriteable, $robotsFile)) );
            if(!$this->post->robots) $this->send(array('result' => 'fail', 'message' => array('robots' => sprintf($this->lang->error->notempty, $this->lang->site->robots) )) );

            $result = file_put_contents($robotsFile, $this->post->robots);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setrobots')));
        }

        $this->view->robots = '';
        if(file_exists($robotsFile)) $this->view->robots = file_get_contents($robotsFile);

        $this->view->robotsFile = $robotsFile;
        $this->view->writeable  = $writeable;
        $this->view->title      = $this->lang->site->setBasic;
        $this->display();
    }

    /**
     * set site security info.
     *
     * @access public
     * @return void
     */
    public function setSecurity()
    {
        $this->lang->site->menu = $this->lang->security->menu;
        $this->lang->menuGroups->site = 'security';

        $captcha        = (isset($this->config->site->captcha) and ($this->config->site->captcha == 'open' and ($this->post->captcha == 'close' or $this->post->captcha == 'auto')) or ((!isset($this->config->site->captcha) or $this->config->site->captcha == 'auto') and $this->post->captcha == 'close'));
        $checkEmail     = (isset($this->config->site->checkEmail) and $this->config->site->checkEmail == 'open' and $this->post->checkEmail == 'close');
        $front          = (isset($this->config->site->front) and $this->config->site->front == 'login' and $this->post->front == 'guest');
        $checkLocation  = (isset($this->config->site->checkLocation) and $this->config->site->checkLocation == 'open' and $this->post->checkLocation == 'close');
        $checkSessionIP = (isset($this->config->site->checkSessionIP) and $this->config->site->checkSessionIP == 1 and $this->post->checkSessionIP == 0);
        $allowedIP      = (isset($this->config->site->allowedIP) and ($this->config->site->allowedIP != $this->post->allowedIP));

        $newImportantValidate = $this->post->importantValidate ? $this->post->importantValidate : array();
        $oldImportantValidate = explode(',', $this->config->site->importantValidate);

        $importantChange = false;
        foreach($oldImportantValidate as $validate)
        {
            if(!in_array($validate, $newImportantValidate))
            {
                $importantChange = true;
                break;
            }
        }

        if($captcha or $checkEmail or $front or $checkLocation or $checkSessionIP or $allowedIP or $importantChange)
        {
            $okFile = $this->loadModel('common')->verifyAdmin();
            $pass   = $this->loadModel('guarder')->verify('okFile');
            $this->view->pass   = $pass;
            $this->view->okFile = $okFile;
            if(!empty($_POST) && !$pass) $this->send(array('result' => 'fail', 'reason' => 'captcha'));
        }

        if(!empty($_POST))
        {
            $setting = fixer::input('post')
                ->setDefault('captcha', 'auto')
                ->setDefault('filterSensitive', 'close')
                ->setDefault('checkIP', 'close')
                ->setDefault('checkSessionIP', '0')
                ->setDefault('checkLocation', 'close')
                ->setDefault('checkEmail', 'close')
                ->setDefault('allowedIP', '')
                ->setDefault('importantValidate', '')
                ->join('importantValidate', ',')
                ->setForce('sensitive', seo::unify($this->post->sensitive, ','))
                ->get();

            /* check IP. */
            $ips = !$this->post->allowedIP ? array() : explode(',', $this->post->allowedIP);
            foreach($ips as $ip)
            {
                if(!empty($ip) and !helper::checkIP($ip))
                {
                    dao::$errors['allowedIP'][] = $this->lang->site->wrongAllowedIP;
                    break;
                }
            }

            $result = $this->loadModel('setting')->setItems('system.common.site', $setting, 'all');

            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setsecurity')));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $location = $this->app->loadClass('IP')->find(helper::getRemoteIp());
        if(is_array($location))
        {
            $locations = $location;
            $location  = join(' ', $locations);
            if(count($location) > 3) $location = $locations[0] . ' ' . $locations[1] . ' ' . $locations[2];
        }

        $this->view->title    = $this->lang->site->setSecurity;
        $this->view->location = $location;
        $this->display();
    }

    /**
     * Set upload configures.
     *
     * @access public
     * @return void
     */
    public function setUpload()
    {
        $this->lang->site->menu = $this->lang->security->menu;
        $this->lang->menuGroups->site = 'security';

        $this->loadModel('file');

        if(!empty($_POST))
        {
            $setting = fixer::input('post')->remove('allowedFiles,thumbs')->setDefault('allowUpload', '0')->get();

            $dangers = explode(',', $this->config->file->dangers);
            $allowedFiles = trim(strtolower($this->post->allowedFiles), ',');
            $allowedFiles = str_replace($dangers, '', $allowedFiles);
            $allowedFiles = seo::unify($allowedFiles, ',');
            if(!preg_match('/^[a-z0-9,]+$/', $allowedFiles)) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            $allowedFiles = explode(',', $allowedFiles);

            foreach ($allowedFiles as $extension)
            {
                if(strlen($extension) > 5) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            }

            $allowedFiles = implode(',', $allowedFiles);

            foreach ($dangers as $danger)
            {
                if(strpos($allowedFiles, $danger) !== false) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            }

            $allowedFiles = ',' . $allowedFiles . ',';
            $result = $this->loadModel('setting')->setItem('system.common.file.allowed', $allowedFiles);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            $result  = $this->loadModel('setting')->setItems('system.common.site', $setting);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setupload')));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }

        $this->view->title = $this->lang->site->setUpload;
        $this->display();
    }

    /**
     * set oauth login configure.
     *
     * @access public
     * return void
     */
    public function setOauth()
    {
        if(!empty($_POST))
        {
            $provider = $this->post->provider;
            $oauth    = array($provider => helper::jsonEncode($_POST));
            $result   = $this->loadModel('setting')->setItems('system.common.oauth', $oauth);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }
        $this->view->setting = array();

        if(!empty($this->config->site->yangcong))
        {
            $this->view->setting = json_decode($this->config->site->yangcong);
        }

        $this->view->title = $this->lang->site->setOauth;
        $this->display();
    }

    /**
     * Set filter rule.
     * 
     * @access public
     * @return void
     */
    public function setFilter($type = 'ip')
    {
        $this->loadModel('guarder');
        if(!empty($_POST))
        {
            $setting = new stdclass;
            $setting->owner   = 'system';
            $setting->module  = 'common';
            $setting->section = 'guarder';
            $setting->key     = 'limits';
            $setting->lang    = 'all';

            $limits = $this->config->guarder->limits;
            $limits->$type  = $this->post->limits;
            $setting->value = helper::jsonEncode($limits);

            $this->dao->replace(TABLE_CONFIG)->data($setting)->exec();
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            $setting = new stdclass;
            $setting->owner   = 'system';
            $setting->module  = 'common';
            $setting->section = 'guarder';
            $setting->key     = 'punishment';
            $setting->lang    = 'all';

            $punishment = $this->config->guarder->punishment;
            $punishment->$type  = $this->post->punishment;
            $setting->value = helper::jsonEncode($punishment);

            $this->dao->replace(TABLE_CONFIG)->data($setting)->exec();
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            $interval = $this->post->interval;
            foreach($interval as $action => $value) $interval[$action] = (int)$value;
            $setting = new stdclass;
            $setting->owner   = 'system';
            $setting->module  = 'common';
            $setting->section = 'guarder';
            $setting->key     = 'interval';
            $setting->lang    = 'all';

            $config = $this->config->guarder->interval;
            $config->$type  = $interval;
            $setting->value = helper::jsonEncode($config);

            $this->dao->replace(TABLE_CONFIG)->data($setting)->exec();
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
        }

        $this->lang->site->menu = $this->lang->security->menu;
        $this->lang->menuGroups->site = 'security';

        $this->view->title = $this->lang->site->setFilter;
        $this->view->type  = $type;
        $this->display();
    }
   
    /**
     * set cdb configure.
     * 
     * @access public
     * return void
     */
    public function setCDN()
    {
        if(!empty($_POST))
        {
            if($this->post->site and $this->post->site != 'http://cdn.chanzhi.org/' . $this->config->version . '/')
            {
                foreach($this->config->cdn->fileList as $file)
                {
                    $ch = curl_init(rtrim($this->post->site, '/') . $file);
                    curl_setopt($ch, CURLOPT_NOBODY, true);
                    curl_exec($ch);
                    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);
                    if($retcode != 200) 
                    {
                        $lostFiles[] = $this->post->site . $file;
                    }
                }
                if(!empty($lostFiles)) $this->send(array('result' => 'fail', 'message' => $lostFiles));
            }
            $setting = fixer::input('post')->get();
            $result  = $this->loadModel('setting')->setItems('system.common.cdn', $setting);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }

        $this->view->title = $this->lang->site->setCDN;
        $this->display();
    }
  
    /**
     * set yangcong configure.
     * 
     * @access public
     * return void
     */
    public function setYangcong()
    {
        if(!empty($_POST))
        {
            $setting = fixer::input('post')->get();
            foreach($setting as $key => $value) $value = trim($value);
            $result  = $this->loadModel('setting')->setItem('system.common.site.yangcong', helper::jsonEncode($setting), "all");
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }
    }

    /**
     * Set api config.
     * 
     * @access public
     * @return void
     */
    public function setApi()
    {   
        if($_POST)
        {   
            $setting = array();
            $setting['key'] = $this->post->key;
            $setting['ip']  = $this->post->allip ? '' : $this->post->ip;

            $this->loadModel('setting')->setItems('system.site.api', $setting, $lang = 'all');
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
        }   

        $this->view->title = $this->lang->site->api->common;
        $this->display();
    }   

    /**
     * Set cache function.
     * 
     * @access public
     * @return void
     */
    public function setCache()
    {
        if(!empty($_POST))
        {
            $post    = fixer::input('post')->get();

            $setting = new stdclass();
            $setting->type      = $post->status;
            $setting->cachePage = $post->cachePage;
            $setting->expired   = $post->cacheExpired * 3600;

            $result = $this->loadModel('setting')->setItems('system.common.cache', $setting);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setcache')));
        }

        $this->view->title = $this->lang->site->setCache;
        $this->display();
    }

    /**
     * Set home menu.
     * 
     * @access public
     * @return void
     */

    public function setHomeMenu()
    {
        if($_POST)
        {
            $this->loadModel('setting')->setItem('system.common.menus.home', 'admin,' . implode(',', $this->post->homeMenus));
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
        }
        if($this->cookie->currentGroup == 'home') 
        {
            unset($this->lang->site->menu);
            $this->config->menuGroups->site = 'home';
        }

        $this->view->title = $this->lang->site->setHomeMenu;
        $this->display();
    }
}
