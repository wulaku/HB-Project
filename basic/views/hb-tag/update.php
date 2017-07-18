<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbTagModel */

$this->title = 'Update Hb Tag Model: ' . $model->tagid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Tag Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tagid, 'url' => ['view', 'id' => $model->tagid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-tag-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
