<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbRegipModel */

$this->title = 'Update Hb Regip Model: ' . $model->ip;
$this->params['breadcrumbs'][] = ['label' => 'Hb Regip Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ip, 'url' => ['view', 'id' => $model->ip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-regip-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
