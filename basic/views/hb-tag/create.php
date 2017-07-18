<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbTagModel */

$this->title = 'Create Hb Tag Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Tag Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tag-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
