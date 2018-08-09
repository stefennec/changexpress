<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValuteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valute-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idValuta') ?>

    <?= $form->field($model, 'nomeValuta') ?>

    <?= $form->field($model, 'siglaValuta') ?>

    <?= $form->field($model, 'rateUfficialeVendita') ?>

    <?= $form->field($model, 'rateUfficialeAcquisto') ?>

    <?php // echo $form->field($model, 'differenzialeVendita') ?>

    <?php // echo $form->field($model, 'differenzialeAcquisto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
