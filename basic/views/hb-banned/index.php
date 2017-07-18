<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbBannedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Banned Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-banned-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Banned Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'banid',
            'ip',
            'admin',
            'dateline',
            'expiration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
