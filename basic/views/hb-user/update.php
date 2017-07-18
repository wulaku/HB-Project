<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbUserModel */

$this->title = 'Update Hb User Model: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-user-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
