<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HbArticleModel */

$this->title = 'Create Hb Article Model';
$this->params['breadcrumbs'][] = ['label' => 'Hb Article Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-article-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
