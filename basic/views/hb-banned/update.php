<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbBannedModel */

$this->title = 'Update Hb Banned Model: ' . $model->banid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Banned Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banid, 'url' => ['view', 'id' => $model->banid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-banned-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
