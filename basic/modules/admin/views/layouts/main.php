<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string 字符串 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8"/>
  <?=Html::cssFile('@web/../modules/admin/css/admin.css')?>
  <?=Html::cssFile('//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css')?>
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <?= $content ?>
  <footer>&copy; ALL RIGHTS RESERVED</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>