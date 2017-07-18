<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbArticle */

$this->title = 'Update Hb Article: ' . $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aid, 'url' => ['view', 'id' => $model->aid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
