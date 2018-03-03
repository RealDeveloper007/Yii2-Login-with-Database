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
<div class='preloader-wrapper'>
            <div class="preloader">
                <img src="<?php echo Yii::$app->request->getBaseUrl(true);?>/themes/backend/img/preloader.png" alt='loading image'/>
            </div>
</div><!-- / preloader -->
<!-- Container that wraps all content that gets "pushed" when chat panel shows-->
<div id="container"> 
 <!-- Wrapper for content below nav bar -->
    <?php $this->beginContent('@app/views/layouts/topheader.php'); $this->endContent(); ?>
    <?php $this->beginContent('@app/views/layouts/leftsidebar.php'); $this->endContent(); ?>
<div id="wrapper">
      <!-- Keep all page content within the page-content-wrapper -->
                <div id="page-content-wrapper" class="stretch-full-height animated-med-delay fadeInRight">
      <?= $content ?>
      </div>
      </div>
      </div>
<span class="clearfix">
  </span>
  <?php $this->endBody() ?> 
  </body>
 </html>
 <?php $this->endPage() ?>

