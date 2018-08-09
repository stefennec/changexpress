<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipologiaNazioni */

$this->title = 'Update Tipologia Nazioni: ' . $model->idTipologiaNazione;
$this->params['breadcrumbs'][] = ['label' => 'Tipologia Nazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTipologiaNazione, 'url' => ['view', 'id' => $model->idTipologiaNazione]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipologia-nazioni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
