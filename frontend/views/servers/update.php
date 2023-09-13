<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Servers $model */

$this->title = 'Обновить сервер: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сервера', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="servers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
