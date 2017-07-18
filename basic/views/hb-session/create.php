<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbSessionModel */

$this->title = 'Create Hb Session Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Session Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-session-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
