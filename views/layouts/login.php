<?php

use Yii;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAsset;

//use backend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

BackendAsset::register($this);
$this->title='Yii';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body class="bg-med">
<?php $this->beginBody() ?>
<!-- Container that wraps all content that gets "pushed" when chat panel shows-->
<div id="container"> 
      <?= $content ?>
      </div>
<span class="clearfix">
  </span>
  <?php $this->endBody() ?> 
  </body>
 </html>
 <?php $this->endPage() ?>

