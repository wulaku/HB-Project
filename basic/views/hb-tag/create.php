<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbTag */

$this->title = 'Create Hb Tag';
$this->params['breadcrumbs'][] = ['label' => 'Hb Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
