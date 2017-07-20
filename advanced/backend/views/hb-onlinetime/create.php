<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HbOnlinetime */

$this->title = 'Create Hb Onlinetime';
$this->params['breadcrumbs'][] = ['label' => 'Hb Onlinetimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-onlinetime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
