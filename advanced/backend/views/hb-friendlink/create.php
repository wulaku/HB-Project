<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HbFriendlink */

$this->title = 'Create Hb Friendlink';
$this->params['breadcrumbs'][] = ['label' => 'Hb Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-friendlink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
