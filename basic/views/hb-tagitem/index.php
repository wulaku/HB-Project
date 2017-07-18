<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbTagitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Tagitem Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tagitem-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Tagitem Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tagid',
            'aid',
            'idtype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
