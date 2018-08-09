<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntiDocumenti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enti-documenti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeEnte')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
