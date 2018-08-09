<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipologiaDocumenti */

$this->title = 'Update Tipologia Documenti: ' . $model->idTipologiaDocumenti;
$this->params['breadcrumbs'][] = ['label' => 'Tipologia Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTipologiaDocumenti, 'url' => ['view', 'id' => $model->idTipologiaDocumenti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipologia-documenti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
