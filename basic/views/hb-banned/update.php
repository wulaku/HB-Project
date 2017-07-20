<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbBanned */

$this->title = 'Update Hb Banned: ' . $model->banid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Banneds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banid, 'url' => ['view', 'id' => $model->banid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-banned-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
