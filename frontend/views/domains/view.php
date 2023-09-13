<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Domains $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Домены', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="domains-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить домен?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
