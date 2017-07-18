<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbSessionModel */

$this->title = 'Update Hb Session Model: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Session Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'uid' => $model->uid, 'ip' => $model->ip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-session-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
