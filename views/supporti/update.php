<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supporti */

$this->title = 'Update Supporti: ' . $model->idSupporto;
$this->params['breadcrumbs'][] = ['label' => 'Supportis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSupporto, 'url' => ['view', 'id' => $model->idSupporto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supporti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
