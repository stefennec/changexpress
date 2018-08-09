<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TipologiaNazioni;

/* @var $this yii\web\View */
/* @var $model app\models\Nazioni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nazioni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeNazione')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'siglaNazione')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'tipologiaNazione')
           ->label(false)
           ->dropdownList(TipologiaNazioni::find()
               ->select(['tipologiaNazione', 'idTipologiaNazione'])
               ->indexBy('idTipologiaNazione')
               ->column(),
               ['prompt'=>"Seleziona la tipologia di nazione"]);



?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
