<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbTagitemModel */

$this->title = 'Update Hb Tagitem Model: ' . $model->tagid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Tagitem Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tagid, 'url' => ['view', 'id' => $model->tagid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-tagitem-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
