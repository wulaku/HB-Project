<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbRegip */

$this->title = 'Create Hb Regip';
$this->params['breadcrumbs'][] = ['label' => 'Hb Regips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-regip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
