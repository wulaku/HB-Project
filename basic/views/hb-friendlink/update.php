<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbFriendlinkModel */

$this->title = 'Update Hb Friendlink Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hb Friendlink Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->linkid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-friendlink-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
