<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Sites;

/** @var yii\web\View $this */
/** @var frontend\models\Sites $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сайты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (\Yii::$app->user->can('admin')) { ?>
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить сайт?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php } ?>

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
            [
                'label' => 'Домен',
                'value' => function ($model) {
                    return \frontend\models\Domains::findOne($model->domain_id)->name;
                },
            ],
        ],
    ]) ?>

</div>
