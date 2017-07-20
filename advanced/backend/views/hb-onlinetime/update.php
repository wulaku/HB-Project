<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HbOnlinetime */

$this->title = 'Update Hb Onlinetime: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Onlinetimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-onlinetime-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
