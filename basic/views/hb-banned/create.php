<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbBanned */

$this->title = 'Create Hb Banned';
$this->params['breadcrumbs'][] = ['label' => 'Hb Banneds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-banned-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
