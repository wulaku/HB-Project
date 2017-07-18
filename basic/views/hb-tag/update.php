<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbTag */

$this->title = 'Update Hb Tag: ' . $model->tagid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tagid, 'url' => ['view', 'id' => $model->tagid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
