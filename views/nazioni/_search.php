<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NazioniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nazioni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idNazione') ?>

    <?= $form->field($model, 'nomeNazione') ?>

    <?= $form->field($model, 'siglaNazione') ?>

    <?= $form->field($model, 'tipologiaNazione') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
