<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimenti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Provenienza') ?>

    <?= $form->field($model, 'Destinazione') ?>

    <?= $form->field($model, 'Operatore') ?>

    <?= $form->field($model, 'Valuta') ?>

    <?php // echo $form->field($model, 'Quantita') ?>

    <?php // echo $form->field($model, 'Data') ?>

    <?php // echo $form->field($model, 'Cambio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
