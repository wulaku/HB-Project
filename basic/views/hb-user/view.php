<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HbUser */

$this->title = $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->uid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->uid], [
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
            'uid',
            'email:email',
            'username',
            'password',
            'status',
            'emailstatus:email',
            'regdate',
            'credits',
            'profile:ntext',
        ],
    ]) ?>

</div>
