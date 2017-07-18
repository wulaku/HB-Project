<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbBannedModel */

$this->title = 'Create Hb Banned Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Banned Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-banned-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
