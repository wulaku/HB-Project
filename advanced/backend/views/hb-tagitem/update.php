<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HbTagitem */

$this->title = 'Update Hb Tagitem: ' . $model->tagid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Tagitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tagid, 'url' => ['view', 'id' => $model->tagid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-tagitem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
