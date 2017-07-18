<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbSessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Session Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-session-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Session Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'ip',
            'dateline',
            'errorcount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
