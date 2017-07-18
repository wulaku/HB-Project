<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbOnlinetimeModel */

$this->title = 'Update Hb Onlinetime Model: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Onlinetime Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-onlinetime-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
