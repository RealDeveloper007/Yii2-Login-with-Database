<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.panel-footer 
{
    min-height: 70px;
}
</style>

              
 				<!-- page content header -->
                    <div class="row add-padding">
                            <div class="pull-left">
                                <h1>Good Morning <?= ucfirst(Yii::$app->user->identity->username);?></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#" class="text-transparent">Dashboard</a></li>
                                    <li class="active"><a href="#" class="text-transparent">Daily</a></li>
                            	</ol>
                            </div>
                    </div>
                    <!-- / page content header -->
            