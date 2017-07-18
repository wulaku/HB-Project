<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbRegipModel */

$this->title = 'Create Hb Regip Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Regip Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-regip-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
