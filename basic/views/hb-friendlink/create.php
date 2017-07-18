<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbFriendlinkModel */

$this->title = 'Create Hb Friendlink Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Friendlink Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-friendlink-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
