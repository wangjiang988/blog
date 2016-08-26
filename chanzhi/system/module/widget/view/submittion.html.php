<?php if(!defined("RUN_MODE")) die();?>
<?php
$this->loadModel('article');
$limit  = zget($widget->params, 'limit', 10);
$articles = $this->article->getSubmittions($limit);
?>
<table class='table table-data table-hover table-fixed'>
  <?php foreach($articles as $article):?>
  <tr>
    <td>
      <?php echo $article->title;?>
    </td>
    <td><?php echo $article->author;?></td>
    <td><?php echo formatTime($article->addedDate, 'm-d H:i');?></td>
    <td class='w-40px'>
      <?php if($article->submittion != 2) commonmodel::printlink('article', 'check', "articleid=$article->id", $lang->submittion->check); ?>
    </td>
  </tr>
  <?php endforeach;?>
</table>
