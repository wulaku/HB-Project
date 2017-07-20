<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HbFriendlink */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hb Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-friendlink-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->linkid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->linkid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'linkid',
            'displayorder',
            'name',
            'url:url',
            'description:ntext',
            'logo',
            'type',
        ],
    ]) ?>

</div>
