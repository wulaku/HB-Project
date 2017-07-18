<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb User Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-user-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb User Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'email:email',
            'username',
            'password',
            'status',
            // 'emailstatus:email',
            // 'regdate',
            // 'credits',
            // 'profile:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
