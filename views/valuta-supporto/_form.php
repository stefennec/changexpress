<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Valute;
use app\models\Supporti;

/* @var $this yii\web\View */
/* @var $model app\models\ValutaSupporto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valuta-supporto-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'Nome')
          ->label(false)
          ->dropdownList(Valute::find()
                          ->select(['siglaValuta', 'idValuta'])
                          ->indexBy('idValuta')
                          ->column(),
                        ['prompt'=>'Seleziona il documento']);
    ?>

    <?= $form->field($model, 'Supporto')
            ->label(false)
            ->dropdownList(Supporti::find()
                            ->select(['nomeSupporto', 'idSupporto'])
                            ->indexBy('idSupporto')
                            ->column(),
                          ['prompt'=>'Seleziona il documento']);
      ?>

      <?= $form->field($model, 'CommisioneDefault')
              ->label(false)
              ->dropdownList(Supporti::find()
                              ->select(['commissioneDefault', 'idSupporto'])
                              ->indexBy('idSupporto')
                              ->column(),
                            ['prompt'=>'Seleziona il documento']);
        ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
