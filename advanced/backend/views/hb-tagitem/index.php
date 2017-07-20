<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HbTagitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Tagitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tagitem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Tagitem', ['create'], ['class' => 'btn btn-success']) ?>
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
