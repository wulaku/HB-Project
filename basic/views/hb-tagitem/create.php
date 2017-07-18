<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbTagitemModel */

$this->title = 'Create Hb Tagitem Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Tagitem Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tagitem-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
