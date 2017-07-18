<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbTagitem */

$this->title = 'Create Hb Tagitem';
$this->params['breadcrumbs'][] = ['label' => 'Hb Tagitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tagitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
