<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AutoritaDocumenti */

$this->title = 'Update Autorita Documenti: ' . $model->idAutorita_Documenti;
$this->params['breadcrumbs'][] = ['label' => 'Autorita Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAutorita_Documenti, 'url' => ['view', 'id' => $model->idAutorita_Documenti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="autorita-documenti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
