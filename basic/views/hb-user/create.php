<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbUser */

$this->title = 'Create Hb User';
$this->params['breadcrumbs'][] = ['label' => 'Hb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
