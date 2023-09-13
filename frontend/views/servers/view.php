<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Servers $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сервера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверен что хотите удалить сервер?',
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
