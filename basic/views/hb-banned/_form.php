<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HbBannedModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hb-banned-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'banid')->textInput() ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin')->textInput() ?>

    <?= $form->field($model, 'dateline')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
