<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Sites $model */
/** @var frontend\models\Domains $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?php
        $domains = \frontend\models\Domains::find()->select(['id', 'name'])->all();
        $items = ArrayHelper::map($domains,'id','displayName');
        $params = ['prompt' => 'Укажите домен сайта'];
        echo $form->field($model, 'domain_id')->dropDownList($items,$params)->label('Домен');
    ?>

    <?php
        $domains = \frontend\models\Servers::find()->select(['id', 'name'])->all();
        $items = ArrayHelper::map($domains,'id','displayName');
        $params = ['prompt' => 'Укажите cервер сайта'];
        echo $form->field($model, 'server_id')->dropDownList($items,$params)->label('Сервер');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
