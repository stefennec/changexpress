<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntiDocumenti */

$this->title = $model->idEnteDocumento;
$this->params['breadcrumbs'][] = ['label' => 'Enti Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enti-documenti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEnteDocumento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEnteDocumento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idEnteDocumento',
            'nomeEnte:ntext',
        ],
    ]) ?>

</div>
