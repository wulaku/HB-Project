<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbUserModel */

$this->title = 'Create Hb User Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-user-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
