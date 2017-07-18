<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbRegip */

$this->title = 'Update Hb Regip: ' . $model->ip;
$this->params['breadcrumbs'][] = ['label' => 'Hb Regips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ip, 'url' => ['view', 'id' => $model->ip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-regip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
