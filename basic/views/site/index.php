<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title = Yii::t('blog','home');
?>

<ul>
<?php foreach ($list as $post) : ?>
    <li>
        <?= html::encode("{$post->title}")?>
    </li>
<?php endforeach;?>
</ul>


<?= LinkPager::widget(['pagination' => $pager]) ?>
