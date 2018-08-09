<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\EntiDocumenti;
use app\models\TipologiaDocumenti;

/* @var $this yii\web\View */
/* @var $model app\models\AutoritaDocumenti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autorita-documenti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documento')
            ->label(false)
            ->dropdownList(TipologiaDocumenti::find()
                            ->select(['nomeDocumento', 'idTipologiaDocumenti'])
                            ->indexBy('idTipologiaDocumenti')
                            ->column(),
                          ['prompt'=>'Seleziona il documento']);
   ?>

   <?= $form->field($model, 'autorita')
          ->label(false)
          ->dropdownList(EntiDocumenti::find()
              ->select(['nomeEnte', 'idEnteDocumento'])
              ->indexBy('idEnteDocumento')
              ->column(),
              ['prompt'=>"Seleziona l'ente d'emissione"]);
?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
