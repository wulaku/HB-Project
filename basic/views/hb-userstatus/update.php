<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbUserstatus */

$this->title = 'Update Hb Userstatus: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Userstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-userstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
