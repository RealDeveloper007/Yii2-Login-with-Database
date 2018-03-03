<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="login" class="container">
    <div class="row center-panel ">
        <div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
			<?php if (Yii::$app->session->getFlash('err')) {
        ?>
        <div class="alert alert-warning" role="alert">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?= Yii::$app->session->getFlash('err'); ?>
        </div>
    <?php } ?>
   
            <div class="col-lg-12 white-bg animated fadeInDown panel-body-only custom-check">
                <div class="avatar avatar-md"> YII LOGIN</div>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => "Username"])->label(FALSE) ?>

        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => "Password"])->label(FALSE) ?>

        <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
