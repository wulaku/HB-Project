<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbUserstatus */

$this->title = 'Create Hb Userstatus';
$this->params['breadcrumbs'][] = ['label' => 'Hb Userstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-userstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
