<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aid',
            'content:ntext',
            'author',
            'pubdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
