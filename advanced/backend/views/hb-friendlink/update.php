<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HbFriendlink */

$this->title = 'Update Hb Friendlink: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hb Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->linkid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-friendlink-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
