<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Servers $model */

$this->title = 'Добавить сервер';
$this->params['breadcrumbs'][] = ['label' => 'Сервера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
