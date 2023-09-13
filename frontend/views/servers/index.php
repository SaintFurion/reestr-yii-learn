<?php

use frontend\models\Servers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ServersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Сервера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить сервер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
                'urlCreator' => function ($action, Servers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
