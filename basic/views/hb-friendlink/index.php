<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbFriendlinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Friendlink Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-friendlink-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Friendlink Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'linkid',
            'displayorder',
            'name',
            'url:url',
            'description:ntext',
            // 'logo',
            // 'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
