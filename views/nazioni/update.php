<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nazioni */

$this->title = 'Modifica Nazione: ' . $model->nomeNazione;
$this->params['breadcrumbs'][] = ['label' => 'Nazioni', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNazione, 'url' => ['view', 'id' => $model->idNazione]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nazioni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
