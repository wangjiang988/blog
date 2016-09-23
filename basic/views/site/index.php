<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Html;
use app\widgets\panel\PanelWidget;

$this->title = Yii::t('blog','home');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class=" row">
   <div class="left col-sm-9">
       <ul class="postList">
           <?php foreach ($list as $post) : ?>
               <li  class="post">
                   <h2><?= html::encode("{$post->title}")?></h2>
                   <span class=""><?= Html::encode($post->author)?>|<?= Html::encode($post->addedDate)?></span>
                   <div class="post-summary">
                       <?= Html::encode($post->summary)?>
                   </div>
               </li>
           <?php endforeach;?>
       </ul>
       <?= LinkPager::widget(['pagination' => $pager]) ?>
   </div>

    <div class="right col-sm-3">
        <?= PanelWidget::widget([
            'title'    =>  '我的简介',
            'content'  =>  ['名字'=>'wj','年龄' =>'28'],
        ]) ?>

        <?= PanelWidget::widget([
            'title'    =>  '我的列表',
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
        ]) ?>
    </div>
</section>

