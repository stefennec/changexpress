<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UfficiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uffici-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'Indirizzo') ?>

    <?= $form->field($model, 'Cap') ?>

    <?= $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'PartitaIva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
