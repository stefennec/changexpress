<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movimenti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimenti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Provenienza')->textInput() ?>

    <?= $form->field($model, 'Destinazione')->textInput() ?>

    <?= $form->field($model, 'Operatore')->textInput() ?>

    <?= $form->field($model, 'Valuta')->textInput() ?>

    <?= $form->field($model, 'Quantita')->textInput() ?>

    <?= $form->field($model, 'Data')->textInput() ?>

    <?= $form->field($model, 'Cambio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
