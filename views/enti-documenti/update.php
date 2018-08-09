<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntiDocumenti */

$this->title = 'Update Enti Documenti: ' . $model->idEnteDocumento;
$this->params['breadcrumbs'][] = ['label' => 'Enti Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEnteDocumento, 'url' => ['view', 'id' => $model->idEnteDocumento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enti-documenti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
