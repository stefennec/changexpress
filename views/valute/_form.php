<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Valute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeValuta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'siglaValuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rateUfficialeVendita')->textInput() ?>

    <?= $form->field($model, 'rateUfficialeAcquisto')->textInput() ?>

    <?= $form->field($model, 'differenzialeVendita')->textInput() ?>

    <?= $form->field($model, 'differenzialeAcquisto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
