<?php

use frontend\models\Domains;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DomainsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Домены';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domains-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (\Yii::$app->user->can('admin')) { ?>
    <p>
        <?= Html::a('Добавить домен', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php } ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'Имя',
            ],
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
                'label' => 'Создано',
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
                'label' => 'Обновлено',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Domains $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'visible' => Yii::$app->user->can('admin'),
            ],
        ],
    ]); ?>


</div>
