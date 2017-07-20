<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HbUserstatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hb-userstatus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'regip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profileprogress')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
