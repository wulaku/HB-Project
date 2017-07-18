<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbOnlinetimeModel */

$this->title = 'Create Hb Onlinetime Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Onlinetime Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-onlinetime-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
