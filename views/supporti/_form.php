<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supporti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supporti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeSupporto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'commissioneDefault')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
