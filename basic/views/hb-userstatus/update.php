<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbUserstatusModel */

$this->title = 'Update Hb Userstatus Model: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Userstatus Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-userstatus-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
