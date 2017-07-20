<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HbTagitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hb-tagitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tagid')->textInput() ?>

    <?= $form->field($model, 'aid')->textInput() ?>

    <?= $form->field($model, 'idtype')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
