<?php
/**
 * Created by PhpStorm.
 * User: wj
 * Date: 16-8-28
 * Time: 上午10:32
 */
namespace app\widgets\panel;

use yii\base\Widget;
use yii\helpers\Html;

class PanelWidget extends Widget
{

    public $panelClass = "panel panel-default";

    public $title;  //panel title

    public $content; //panel content字段名

    public $fieldName = 'title'; //字段名称

    public $urlFieldName = 'url'; //链接字段名

    public $is_list = 0;  //是否是个列表，如果是列表 则要指定要显示的

    public $titleTemplate = '<div class="panel-heading">{title}</div>';

    public $bodyTemplate = '<div class="panel-body">{content}</div>';

    public $contentTemplate ='<ul>{content}</ul>';


    public function init()
    {
        parent::init();
        if ($this->title === null) {
            $this->title = 'default title';
        }

        if ($this->content === null) {
            $this->content =  [];
        }
    }

    /**
     * @return string
     *  'title'    =>  '我的列表',
    //        'content'  =>  ['名字'=>'wj','年龄' =>'28'],
    'content'  =>  [
    ['title'=>'title1','name'=>'name1','url'=>'#','active'=>1],
    ['title'=>'title1','name'=>'name1','url'=>'#'],
    ['title'=>'title3','name'=>'name2','url'=>'#'],
    ['title'=>'title2','name'=>'name3','url'=>'#'],
    ],
    'is_list'  =>  1,
    'fieldName'=>  'name',
    'urlFieldName'=> 'url',
     */

    public function run()
    {
        $content =  $this->content ;
        $html = $this->_panelBegin();
        if(!empty($content) && is_array($content))
        {
            $contentHtml = '';
            if(!$this->is_list){  //如果不是数组，则是一维数组。直接显示属性
                foreach ($content as $k => $v){
                    $contentHtml .= Html::tag('div',Html::encode($k),['class'=>'col-sm-6']).Html::tag('div',Html::encode($v),['class'=>'col-sm-6']);
                }
            }else{
                $contentHtml = Html::beginTag('ul',[]);
                foreach ($content as $v ){
                    if(isset($v['active']) && $v['active'])
                        $contentHtml .=  Html::tag('li',Html::a(Html::encode($v[$this->fieldName]),$v[$this->urlFieldName],['class'=>'active']));
                    else
                        $contentHtml .=  Html::tag('li',Html::a(Html::encode($v[$this->fieldName]),$v[$this->urlFieldName],['class'=>'']));

                }
                $contentHtml  .= Html::endTag('ul');
            }
        }

        $html   .=   str_replace ('{title}',$this->title,$this->titleTemplate);

        $html   .=   str_replace ('{content}',$contentHtml,$this->bodyTemplate);

        $html .= $this->_panelEnd();
        return $html;
    }

    private function _panelBegin()
    {
        return  Html::beginTag('div',['class'=>$this->panelClass]);

    }

    private function _panelEnd(){
        return  Html::endTag('div');
    }

}